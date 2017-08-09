<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
	protected $table="bahans";
    protected $fillable = ['nama','merk','ukuran','harga','gambar'];
    protected $visible = ['nama','merk','ukuran','harga','gambar'];
    public $timestamps = true;

    public function pelanggan() 
    {
    	return $this->belongToMany('App\Pelanggan','id_bahan');
    }

     public function transaksis() 
    {
    	return $this->belongToMany('App\Transaksis','id_bahan','id_pelanggan');
    }
}
