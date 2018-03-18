<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $fillable = ['name','alamat','no_hp'];
    protected $visible = ['name','alamat','no_hp'];
    public $timestamps = true;

    
}
