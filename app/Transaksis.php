<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksis extends Model
{
    protected $table="transakses";
	protected $fillable = ['id_bahan','id_pelanggan'];
	protected $visible = ['id_bahan','id_pelanggan'];
	public $timestamps = true;

   

}
