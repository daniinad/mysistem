<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transak extends Model
{
     protected $table="transaks";
	protected $fillable = ['id_bahann','id_pelanggann'];
	protected $visible = ['id_bahan','id_pelanggan'];
	public $timestamps = true;

	public function pelanggans()
	{
		return $this->hasMany('App\Pelanggann','id_pelanggann')
	}
	public function bahans()
	{
		return $this->hasMany('App\Bahann','id_pelanggann')
	}
}
