<?php

namespace App\Http\Controllers;

use App\RequestBarang;
use Illuminate\Http\Request;
use App\Barang;
use App\Permintaan;
use App\Http\Controllers\Controller;

class RequestBarangController extends Controller
{
    public function edit($id)
    {
        $permintaan = Barang::findOrFail($id);
        return view('barang.request.edit', compact('permintaan'));
    }

    public function store(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        // buat permintaan
        $totalHarga = $request->jumlah * $request->total;
        Permintaan::create([
            'barang_id' => $barang->id,
            'jumlah'    => $request->jumlah,
            'total'     => $totalHarga,
            'status'    => 0
        ]);

        // pengurangan stock
        $totalStock = $barang->quantity - $request->jumlah;

        $barang->update([
            'quantity' => $totalStock,
        ]);

        return redirect()->route('barang');
    }
}
