<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggann extends Model
{
    protected $table="Pelangganns";
	protected $fillable = ['nama','alamat','no_hp'];
	protected $visible = ['nama','alamat','no_hp'];
	public $timestamps = true;
     

    public function bahans() 
    {
        return $this->hasMany('App\Bahann','id_pelanggann');
    }
}
