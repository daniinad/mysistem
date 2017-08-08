<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
     protected $fillable = ['nama','alamat','alamat','no_hp','id_bahan'];

    public function bahans() 
    {
    	return $this->belongToMany('App\Bahan');
    }

     public function transakses() 
    {
    	return $this->belongToMany('App\Transaksis');
    }
}
