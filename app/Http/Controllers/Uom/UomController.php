<?php

namespace App\Http\Controllers\Uom;

use App\Satuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UomController extends Controller
{
    public function index()
    {
        $satuans = Satuan::paginate(5);
        return view('uom.index', compact('satuans'));
    }
    public function edit(Request $request, $id)
    {
        $satuan = Satuan::findOrFail($id);

        return view('uom.edit', compact('satuan'));
    }
    public function store(Request $request)
    {

        $category = Satuan::create(
            $request->all()
        );

        return redirect()->back();
    }
    public function update(Request $request, Satuan $satuan)
    {
 
        $satuan->update($request->all());

        return redirect()->route('satuan');
    }
    public function destroy(Request $request, $id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->delete($request->all());

        return redirect()->route('satuan');
    }
}