<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
class DashboardController extends Controller
{
    public function index(){

        $datas = Galeri::all();
        // dd($datas);
        return view('landing_page.index', compact('datas'));
    }

    public function tentang(){

        return view('landing_page.tentang');
    }

    public function arti(){

        return view('landing_page.arti');
    }

    public function kepengurusan(){

        return view('landing_page.kepengurusan');
    }
    public function kontak(){

        return view('landing_page.kontak');
    }

    public function sejarah(){

        return view('landing_page.sejarah');
    }

    public function sumpah(){

        return view('landing_page.sumpah');
    }
}
