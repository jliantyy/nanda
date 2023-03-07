<?php

namespace App\Http\Controllers\Brand;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
        return view('brand.index', compact('brands'));
    }
    public function store(Request $request)
    {

        $category = Brand::create(
            $request->all()
        );

        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        return view('brand.edit', compact('brand'));

    }
    public function update(Request $request, Brand $brand)
    {
        // $category = Category::findOrFail($id);
        $brand->update($request->all());
        // $category->update(['nama' => $request->nama]);

        return redirect()->route('brand');
    }
    public function destroy(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete($request->all());

        return redirect()->route('brand');
    }


}