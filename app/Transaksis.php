<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksis extends Model
{
    protected $fillable = ['id_bahan','id_pembeli'];

    public function pelanggans() 
    {
    	return $this->belongToMany('App\Pelanggans');
    }

    public function bahans() 
    {
    	return $this->belongToMany('App\Bahan');
    }

}
