<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['nama','merk','jumlah','harga','gambar'];
    protected $visible = ['nama','merk','jumlah','harga','gambar'];
    public $timestamps = true;

    
}
