<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function dashboardanggota(){
    	return view('anggota.dashboardanggota');
    }
}