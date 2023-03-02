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
    public function edit()
    {
        return view('uom.edit');
    }
    public function store(Request $request)
    {

        $category = Satuan::create(
            $request->all()
        );

        return redirect()->back();
    }
}