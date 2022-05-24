<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* check the request values from the input */
        $request->validate(
            [
                'name' => "required|min:5|unique:App\Model\Category,name",
            ],

            [
                "required" => "Not valid :attribute.",
                "unique" => "This category already exists",
            ]
        );

            /* get the request if valid */
        $data = $request->all();

        $newCategory = new Category();
        $newCategory->name = $data['name'];
        $newCategory->name = $data['color'];
        $newCategory->save();

        return redirect()->route('categories.show', $newCategory);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         /* check the request values from the input */
        $request->validate(
            [
                'name' => "required|min:5|unique:App\Model\Category,name",
            ],

            [
                "required" => "Not valid :attribute.",
                "unique" => "This category already exists",
            ]
        );

            /* get the request if valid */
        $data = $request->all();

        $category->name = $data['name'];
        $category->name = $data['color'];
        $category->save();

        return redirect()->route('categories.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
