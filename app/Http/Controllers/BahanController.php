<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan = Bahan::all();
        return view ('bahan.index',compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahan= Bahan::all();
        $pelanggan= Pelanggan::all();
        return view('bahan.create',compact('bahan','pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bahan = new Bahan;
        $bahan->nama = $request->nama;
        $bahan->merk = $request->merk;
        $bahan->ukuran = $request->ukuran;
        $bahan->harga = $request->harga;

      
        if ($request->hasFile('gambar')){
            $bahans = $request->file('gambar');
            $extension = $bahans->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $bahans->move($destinationPath, $filename);
                $bahan->gambar = $filename;
        }

        $bahan->save();
        return redirect('bahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $bahan = Bahan::findOrFail($id);
         $pelanggan = Pelanggan::all();
        return view('bahan.edit',compact('bahan','pelanggan'));
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
        $bahan = Bahan::findOrFail($id);
        $bahan->nama = $request->nama;
        $bahan->merk = $request->merk;
        $bahan->ukuran = $request->ukuran;
        $bahan->harga = $request->harga;

        if ($request->hasFile('gambar')){
            $bahans = $request->file('gambar');
            $extension = $bahans->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $bahans->move($destinationPath, $filename);
                $bahan->gambar = $filename;
        }

        $bahan->save();
        return redirect('bahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $bahan = Bahan::findOrFail($id);
        $bahan->delete();
        return redirect('bahan');
    }
}
