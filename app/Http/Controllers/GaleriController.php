<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
class GaleriController extends Controller
{
    public function galeri_admin()
    {
     $datas = Galeri::all();
     
     return view('admin.galeri', compact('datas'));
    }

    public function create(Request $request){
    	$data = new Galeri();
    	$data->nama_gambar = $request->nama_gambar;
    	$data->deskripsi_gambar = $request->deskripsi_gambar;

    	$image          = $request->file('gambar');
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->move(public_path('images/galeri/'), $imageName);
        $data->gambar = $imageName;
        $data->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    public function update(Request $request, $id){
    	$data = Galeri::findOrFail($id);
       
        $data->nama_gambar = $request->input('nama_gambar');
        $data->deskripsi_gambar = $request->input('deskripsi_gambar');
        
        if (empty($request->file('gambar')))
        {
            $data->gambar = $data->gambar;
        }
        else{
            unlink('images/galeri/'.$data->gambar); //menghapus file lama
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $gambar->move('images/galeri',$newName);
            $data->gambar = $newName;
        }
        $data->save();
        return redirect()->back()->with('success', 'Data berhasil didubah');
    }
    public function delete($id)
    {
        $data = Galeri::findOrFail($id);
        try {
            $data->delete();
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
