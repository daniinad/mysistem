<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table="kontaks";
    protected $fillable = ['name','email','phone','isi'];
}
