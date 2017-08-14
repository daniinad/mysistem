<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggann extends Model
{
    protected $table="pelangganns";
	protected $fillable = ['name','alamat','no_hp'];
	protected $visible = ['nama','alamat','no_hp'];
	public $timestamps = true;
     

    public function bahans() 
    {
        return $this->hasMany('App\Bahann','id_pelanggann');
    }
    public function transaks()
	{
		return $this->belongsTo('App\transak','id_bahan','id_pelanggann');
	}
}
