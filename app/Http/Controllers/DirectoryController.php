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
                'name' => 'required|string|max:255',
                'category_id' => 'required|exists:categories,id',
                'sub_category_id' => 'nullable|exists:sub_categories,id',
                'description' => 'nullable|string|max:200',
                'phone' => 'required|unique:directories,phone|regex:/^(\+)?[0-9]*$/',
                'whatsapp' => 'nullable|unique:directories,whatsapp|regex:/^(\+)?[0-9]*$/',
                'sub_category' => 'nullable|string|max:255', // This looks like an address field
                'google_map' => 'nullable|string|max:500',
                'notes' => 'nullable|string|max:1000',
                'email' => 'nullable|email|max:255',
                'facebook' => 'nullable|url|max:255',
                'twitter' => 'nullable|url|max:255',
                'instagram' => 'nullable|url|max:255',
                'website' => 'nullable|url|max:255',
            ];

            if ($category && $category->subCategories->isNotEmpty()) {
                $rules['sub_category_id'] = 'required|exists:sub_categories,id';
            }

            $validated = $request->validate($rules);

            DB::beginTransaction();

            $directory = Directory::create($validated);


            CategoryDirectory::create([
                'category_id' => $request->input('category_id'),
                'directory_id' => $directory->id,
            ]);

            if ($request->input('sub_category_id')) {
                DirectorySubCategory::create([
                    'sub_category_id' => $request->input('sub_category_id'),
                    'directory_id' => $directory->id,
                ]);
            }
            DB::commit();

            return redirect()->to("/directory/{$directory->id}")
                ->with('success', 'تمت الاضافة بنجاح');

        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
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
