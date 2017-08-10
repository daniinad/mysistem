<?php

namespace App\Http\Controllers;

use App\Pelanggann;
use App\Bahann;
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
        $bahan = Bahann::all();
        return view ('bahan.index',compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahan= Bahann::all();
        $pelanggan= Pelanggann::all();
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
        $bahan = new Bahann;
        $bahan->id_pelanggann = $request->nap;
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
         $bahan = Bahann::findOrFail($id);
         $pelanggan = Pelanggann::all();
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
        $bahan = Bahann::findOrFail($id);
        $bahan->id_pelanggann = $request->nap;
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
       $bahan = Bahann::findOrFail($id);
        $bahan->delete();
        return redirect('bahan');
    }
}
