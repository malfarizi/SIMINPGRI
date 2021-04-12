<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function calonanggota()
    {
    	return view('admin.calonanggota');
   
    }

    public function anggota()
    {
    	return view('anggota.anggota');
   
    }
}
