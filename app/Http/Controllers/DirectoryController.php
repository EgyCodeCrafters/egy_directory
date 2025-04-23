<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDirectory;
use App\Models\Directory;
use Illuminate\Http\Request;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_ids' => 'required',
        ]);
        $directory = Directory::create($request->all());

        $selectedCategories = array_filter($request->input('category_ids'));
        foreach ($selectedCategories as $category_id) {
            CategoryDirectory::create([
                'category_id' => $category_id,
                'directory_id' => $directory->id,
            ]);
        }

        return redirect('/')->with('success', 'تمت الاضافة بنجاح');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('directories.create', compact('categories'));

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
            ->get();

        return view('directories.search', compact('directories', 'query'));

    }
}
