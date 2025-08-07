<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $sub_category_id = null)
    {
        if ($sub_category_id) {
            return $this->showSubCategory($sub_category_id);
        }
        $category = Category::with('subCategories')->find($id);

        return view('categories.show', compact('category'));
    }

    public function showSubCategory(string $id)
    {
        $sub_category = SubCategory::find($id);

        return view('categories.show-sub-category', compact('sub_category'));
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

    public function getSubcategories($id)
    {
        $subCategories = SubCategory::where('category_id', $id)->get();

        return response()->json($subCategories);
    }
}
