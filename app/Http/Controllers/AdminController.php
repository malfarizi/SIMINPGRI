<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;

class AdminController extends Controller
{
	public function dashboard()
    {
    	return view('admin.dashboard');
   
    }
        public function admin(){
        	 $datas  = Admin::All();
    	return view('admin.admin', compact('datas'));
    
    }

     public function update(Request $request, $id){

        $data = $request->only('nama','jk','alamat');
        Admin::whereIdAdmin($id)->update($data);
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}
