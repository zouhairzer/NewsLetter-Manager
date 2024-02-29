<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        // dump(Category::latest());
        // dump(Category::all());
        // dump(Category::get());
        // $categories = Category::all();
        $categories = Category::latest()->simplePaginate(4);
        // dd($categories);
        return view('tables.Categorie', compact('categories'));
    }


    public function create()
    {
        //
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return back()->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, $id)
    {
        $categorie = Category::where('id', $id)->first();
        // dd($categorie);
        return view('tables.updateCategorie', compact('categorie'));
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->findOrfail($category->id);
        $category->name = $request->name;
        $category->update();
        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        Category::findOrFail($category->id)->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
