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
    public function edit()
    {
        return view('brand.edit');
    }
}