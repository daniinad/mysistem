<?php

namespace App\Http\Controllers;

use App\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembeli = pembeli::all();
        return view ('pembeli.index',compact('pembeli'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pembeli = new pembeli;
        $pembeli->name = $request->nama;
        $pembeli->alamat = $request->alamat;
        $pembeli->no_hp = $request->no;
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $pembeli = pembeli::findOrFail($id);
        return view ('pembeli.edit',compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $pembeli = pembeli::findOrFail($id);
        $pembeli->name = $request->nama;
        $pembeli->alamat = $request->alamat;
        $pembeli->no_hp = $request->no;
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $pembeli = pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect('pembeli');
    }
}
