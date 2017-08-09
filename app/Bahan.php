<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
	protected $table="bahans";
    protected $fillable = ['nama','merk','ukuran','harga','gambar'];
    protected $visible = ['nama','merk','ukuran','harga','gambar'];
    public $timestamps = true;

    public function pelanggans() 
    {
    	return $this->belongTo('App\Pelanggan','id_bahan');
    }

    
}
