<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahann extends Model
{
    protected $table="bahanns";
    protected $fillable = ['nama','id_pelanggann','merk','ukuran','harga','gambar'];
    protected $visible = ['nama','id_pelanggann','merk','ukuran','harga','gambar'];
    public $timestamps = true;

    public function pelanggans() 
    {
    	return $this->belongsTo('App\Pelanggann','id_pelanggann');
    }
    public function transaks()
	{
		return $this->belongsTo('App\transak','id_bahan','id_pelanggann');
	}
}
