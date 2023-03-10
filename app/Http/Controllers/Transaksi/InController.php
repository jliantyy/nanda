<?php

namespace App\Http\Controllers\Transaksi;

use App\Permintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::with('barang')->paginate(5);
        return view('transaksi.in.index', compact('permintaans'));
    }
    public function destroy(Request $request, $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        $permintaans->delete($request->all());

        return redirect()->route('transaksi.in');
    }
}