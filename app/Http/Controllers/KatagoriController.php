<?php

namespace App\Http\Controllers;

use App\Katagori;
use Illuminate\Http\Request;

class KatagoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katagoris = Katagori::paginate(5);
        return view('katagori.index', compact('katagoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $katagori = Katagori::create(
            $request->all()
        );

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $katagori = Katagori::create(
            $request->all()
        );

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function show(Katagori $katagori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $katagori = Katagori::findOrFail($id);

        return view('katagori.edit', compact('katagori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katagori $katagori)
    {
        $katagori->update($request->all());

        return redirect()->route('katagori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $katagori = Katagori::findOrFail($id);
        $katagori->delete($request->all());

        return redirect()->route('katagori');
    }
}
