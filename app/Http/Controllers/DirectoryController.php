<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDirectory;
use App\Models\Directory;
use App\Models\DirectorySubCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $category_id = null)
    {

        $query = Directory::query();

        if ($request->category_id) {
            $query->where('category_id', $category_id);
        }
        $directories = $query->sortable()->paginate(1000);

        return view('directories.index', compact('directories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $category = Category::with('subCategories')->find($request->category_id);

            $rules = [
                'phone' => 'required|unique:directories,phone',
                'whatsapp' => 'nullable|unique:directories,whatsapp',
                'name' => 'required|string|max:255',
                'category_id' => 'required|exists:categories,id',
            ];

            if ($category && $category->subCategories->isNotEmpty()) {
                $rules['sub_category_id'] = 'required|exists:sub_categories,id';
            } else {
                $rules['sub_category_id'] = 'nullable';
            }

            $validated = $request->validate($rules);

            DB::beginTransaction();

            $directory = Directory::create($validated); // safer to use $validated not $request->all()

            $selectedCategories = array_filter($request->input('category_id'));
            foreach ($selectedCategories as $category_id) {
                CategoryDirectory::create([
                    'category_id' => $category_id,
                    'directory_id' => $directory->id,
                ]);
            }

            $selectedSubCategories = array_filter($request->input('sub_category_id'));
            foreach ($selectedSubCategories as $sub_category_id) {
                DirectorySubCategory::create([
                    'sub_category_id' => $sub_category_id,
                    'directory_id' => $directory->id,
                ]);
            }

            DB::commit();

            return redirect('/')->with('success', 'تمت الاضافة بنجاح');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('directories.create', compact('categories', 'sub_categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $directory = Directory::find($id);

        return view('directories.show', compact('directory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $directories = Directory::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->orWhere('phone', 'LIKE', "%$query%")
            ->orWhere('whatsapp', 'LIKE', "%$query%")
            ->get();

        return view('directories.search', compact('directories', 'query'));
    }
}
