<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transak extends Model
{
     protected $table="transaks";
	protected $fillable = ['id_bahan','id_pelanggan','merk','ukuran','harga'];
	protected $visible = ['id_bahan','id_pelanggan','merk','ukuran','harga'];
	public $timestamps = true;
}
