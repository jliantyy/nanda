<?php

namespace App\Http\Controllers\Masterbarang;

use App\Category;
use App\Brand;
use App\Satuan;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterbarangController extends Controller
{
    public function index()
    {
        $cupboards  = Category::paginate(5);
        return view('masterbarang.index', compact('cupboards'));
    }
    public function create()
    {
        $data = [
            'categorys' =>  Category::findOrFaill($id),
            'brands'    =>  Brand::get(),
            'satuans'   =>  Satuan::get(),
        ];
        return view('masterbarang.create', $data);
    }
    public function store(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $barang = Barang::create([
                'category_id'   => $category->id,
                'nama'          => $request->nama,
                'brand_id'      => $request->brand_id,
                'satuan_id'     => $request->satuan_id,
                'harga'         => $request->harga,
                'quantity'      => $request->quantity,
            ]);

        return redirect()->back();

    }
    public function edit($id)
    {
        $permintaan = Barang::findOrFaill($id);

        return view('masterbarang.edit', compact('permintaan'));
    }
    public function show($id)
    {
        $data = [
            'categorys' => Category::findOrFail($id),
            'brands'    => Brand::get(),
            'satuans'   => Satuan::get(),
        ];

        return view('masterbarang.create',$data);
    }
}