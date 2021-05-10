<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acara;
use DB;

class AcaraController extends Controller
{
    public function acara()
    {
    	$datas = Acara::all();
    	return view('admin.acara', compact('datas'));
   
    }

    public function acara_anggota()
    {
        $datas = Acara::all();
        return view('anggota.acara-anggota', compact('datas'));
   
    }
     public function create(Request $request)
    {
        $request->validate([
            'nama_acara' => 'required|string|min:3',
            'deskripsi_acara' => 'required',
            'tanggal' => 'required',

        ],
        [
            'nama_acara.required'    => 'Nama Acara harus diisi',
            'deskripsi_acara.min'         => 'Deskripsi Acara minimal 3',
            'max'                       => 'panjang karakter maksimal 100',
        ]);
        $data = $request->only('nama_acara','deskripsi_acara','tanggal');
        Acara::create($data);
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_acara' 		=> 'required|min:3|string',
            'deskripsi_acara' 	=> 'required',
            'tanggal' 			=> 'required',

        ],
        [
            'nama_acara.required'    		=> 'Nama Acara harus diisi',
            'nama_acara.min'         		=> 'Nama Acara minimal 3',
            'deskripsi_acara.required'   	=> 'Deskripsi Acara harus diisi',
            'max'                       	=> 'panjang karakter maksimal 100',
        ]);

        $data = $request->only('nama_acara','deskripsi_acara','tanggal');
        Acara::whereIdAcara($id)->update($data);
        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $data = Acara::findOrFail($id);
        try {
            $data->delete();
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
