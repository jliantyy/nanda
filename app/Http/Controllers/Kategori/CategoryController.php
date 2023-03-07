<?php

namespace App\Http\Controllers\Kategori;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::paginate(5);
        return view('kategori.index', compact('categorys'));
    }
    public function store(Request $request)
    {

        $category = Category::create(
            $request->all()
        );

        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('kategori.edit', compact('category'));
        // return view('kategori.edit');
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('kategori');
    }
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete($request->all());

        return redirect()->route('kategori');
    }
}