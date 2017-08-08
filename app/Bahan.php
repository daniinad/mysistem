<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $fillable = ['nama','merk','ukuran','harga'];

    public function pelanggans() 
    {
    	return $this->belongToMany('App\Pelanggans');
    }

     public function transakses() 
    {
    	return $this->belongToMany('App\Transaksis');
    }
}
