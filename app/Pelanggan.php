<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
	protected $table="Pelanggans";
	protected $fillable = ['nama','alamat','alamat','no_hp','id_bahan'];
	protected $visible = ['nama','alamat','alamat','no_hp','id_bahan'];
	public $timestamps = true;
     

    public function bahan() 
    {
    	return $this->belongToMany('App\Bahan','id_bahan');
    }

     public function transaksis() 
    {
    	return $this->belongToMany('App\Transaksis','id_bahan','id_pelanggan');
    }
}
