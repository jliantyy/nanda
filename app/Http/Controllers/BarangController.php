<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Brand;
use App\Satuan;
use App\Katagori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupboards  = Katagori::paginate(5);
        return view('barang.index', compact('cupboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = [
            'katagoris' => Katagori::findOrFail($id),
            'brands' => Brand::get(),
            'satuans' => Satuan::get(),
        ];
        return view('barang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $katagori = Katagori::findOrFail($id);
        $barang = Barang::create([
            'katagori_id'   => $katagori->id,
            'nama'          => $request->nama,
            'brand_id'      => $request->brand_id,
            'satuan_id'     => $request->satuan_id,
            'harga'         => $request->harga,
            'quantity'      => $request->quantity,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'katagoris' => Katagori::findOrFail($id),
            'brands'    => Brand::get(),
            'satuans'   => Satuan::get(),
        ];

        return view('barang.create', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permintaan = Barang::FindOrFail($id);
        return view('barang.edit', compact('permintaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }

    public function tampilan()
    {
        return view('barang.tampilan');
    }
}
