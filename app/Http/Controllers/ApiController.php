<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class ApiController extends Controller
{
    public function Barang()
    {
    	$barang = barang::all();
    	return $barang;
    }

    public function listdata()
    {
    	return barang::all();
    }
}
