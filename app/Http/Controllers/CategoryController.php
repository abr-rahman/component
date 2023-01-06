<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $category = Category::insert([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect('categories');
    }
    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        // return 123;
        $category = Category::find($id);
        $category->name = $request->name;
        $category->code = $request->code;
        $category->update();
        return redirect('categories');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
