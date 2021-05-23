<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use DB;
class PengajuanController extends Controller
{
    public function index(){

    	$datas = DB::table('pengajuan')
    		->join('anggota', 'anggota.id_anggota', '=', 'pengajuan.id_anggota')
    		->select('anggota.*','pengajuan.*')
    		->where('pengajuan.id_anggota', session('id_anggota'))
    		->get();
    	// $datas = Pengajuan::all();
    	return view('anggota.pengajuan', compact('datas'));
    }
    
    public function pengajuan_admin(){

        $datas = DB::table('pengajuan')
            ->join('anggota', 'anggota.id_anggota', '=', 'pengajuan.id_anggota')
            ->where('pengajuan.status', 'Belum Diterima')
            ->select('anggota.*','pengajuan.*')
            ->get();
        // $datas = Pengajuan::all();
        return view('admin.pengajuan-admin', compact('datas'));
    }

    public function pengajuan_diterima(){

        $datas = DB::table('pengajuan')
            ->join('anggota', 'anggota.id_anggota', '=', 'pengajuan.id_anggota')
            ->select('anggota.*','pengajuan.*')
            ->where('pengajuan.status', 'Diterima')
            ->get();
        // $datas = Pengajuan::all();
        return view('admin.pengajuan-diterima', compact('datas'));
    }
    public function create(Request $request){

    
        $data = new Pengajuan();
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->no_ktp = $request->no_ktp;
        $data->email = $request->email;
        $data->agama = $request->agama;
        $data->alamat = $request->alamat;
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;
        $data->no_telp = $request->no_telp;
        $data->tugas = $request->tugas;
        $data->tempat_kerja = $request->tempat_kerja;
        $data->tanggal_mulai_kerja = $request->tanggal_mulai_kerja;
        $data->status_pns = $request->status_pns;
        $data->golongan = $request->golongan;
        $data->tingkat_sekolah = $request->tingkat_sekolah;
        $data->status_lembaga = $request->status_lembaga;
        $data->mengajar = $request->mengajar;
        $data->status = $request->status;
        $data->id_anggota = $request->id_anggota;


        $image          = $request->file('foto');
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->move(public_path('images/anggota/'), $imageName);
        $data->foto = $imageName;
        $data->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $request, $id){
         $data = $request->only('status');
        Pengajuan::whereIdPengajuan($id)->update($data);
        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

     public function delete($id)
    {
        $data = Pengajuan::findOrFail($id);
        try {
            $data->delete();
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
