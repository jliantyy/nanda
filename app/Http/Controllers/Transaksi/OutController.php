<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutController extends Controller
{
    public function index()
    {
        return view('transaksi.out.index');
    }
}