<?php

namespace App\Http\Controllers;

use App\Pelanggann;
use App\Bahann;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggann::with('bahans')->get();
        return view ('pelanggan.index',compact('pelanggan','bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggann;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no;
        $pelanggan->save();
        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggann::findOrFail($id);
        return view ('pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggann::findOrFail($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no;
        $pelanggan->save();
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggann::findOrFail($id);
        $pelanggan->delete();
        return redirect('pelanggan');
    }
}
