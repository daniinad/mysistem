<?php

namespace App\Http\Controllers;

use App\Barang;
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
        $barang = barang::all();
        return view ('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang= barang::all();
        return view('barang.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new barang;
        $barang->nama = $request->nama;
        $barang->merk = $request->merk;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;

      
        if ($request->hasFile('gambar')){
            $barangs = $request->file('gambar');
            $extension = $barangs->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $barangs->move($destinationPath, $filename);
                $barang->gambar = $filename;
        }

        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $barang = barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $barang = barang::findOrFail($id);
        $barang->nama = $request->nama;
        $barang->merk = $request->merk;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;

        if ($request->hasFile('gambar')){
            $barangs = $request->file('gambar');
            $extension = $barangs->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $barangs->move($destinationPath, $filename);
                $barang->gambar = $filename;
        }

        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect('barang');
    }
    public function aa( )
    {
        //
        $barang = barang::all();
       
        $barang = barang::all();
        return view ('keren.master',compact('barang'));
    }
}
