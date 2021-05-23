<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function dashboardanggota(){
    	return view('anggota.dashboardanggota');
    }

    public function profil(){
        $datas  = Anggota::where('id_anggota', session('id_anggota'))->get();
   return view('anggota.profil_anggota', compact('datas'));

}

public function update(Request $request, $id){

   $data = $request->only('jk');
   Anggota::whereIdAnggota($id)->update($data);
   return redirect()->back()->with('success', 'Data berhasil diubah');
}
}
