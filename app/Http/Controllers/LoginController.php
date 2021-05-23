<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Admin;
use App\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
     public function loginadmin()
    {
         return view('loginadmin');    
    }

    public function loginAdminPost(Request $request){
        $auth = auth()->guard('admins');

        $credentials = ['username' => $request->username, 'password' => $request->password];
    
        $validator = Validator::make($request->all(),
            [
                'username'  => 'required|string|exists:admin',
                'password'  => 'required|string',
            ], 
            [
                'username.exists'    => 'Akun tidak terdaftar',   
                'username.required'  => 'Username tidak boleh kosong',
                'password.required'  => 'Password tidak boleh kosong'
            ],
        );

        //if($validator->fails()) {
        //    return redirect()->back()->withErrors($validator);
        //}else{
            if($auth->attempt($credentials)){
                $admin = Admin::where('username', $request->username)->first();
                session()->put('admin', $admin->username);
                session()->put('id_admin', $admin->id_admin);
                session()->put('nama_admin', $admin->nama);
                return redirect('dashboard')->with('success', 'Selamat Datang');
            }else{
                return redirect()
                    ->back()
                    ->withErrors(
                        ['username atau password anda salah']
                    );
            }
        //}
    }

    public function loginanggota()
    {
         return view('loginanggota');    
    }

    public function loginAnggotaPost(Request $request){
        $auth = auth()->guard('anggota');

        $credentials = ['username' => $request->username, 'password' => $request->password];
    
        $validator = Validator::make($request->all(),
            [
                'username'  => 'required|string|exists:anggota',
                'password'  => 'required|string',
            ], 
            [
                'username.exists'    => 'Akun tidak terdaftar',   
                'username.required'  => 'Username tidak boleh kosong',
                'password.required'  => 'Password tidak boleh kosong'
            ],
        );

        //if($validator->fails()) {
        //    return redirect()->back()->withErrors($validator);
        //}else{
            if($auth->attempt($credentials)){
                $anggota = Anggota::where('username', $request->username)->first();
                session()->put('pegawai', $anggota->username);
                session()->put('id_anggota', $anggota->id_anggota);
                session()->put('nama_anggota', $anggota->nama_anggota);
                return redirect('dashboardanggota')->with('success', 'Selamat Datang');
            }else{
                return redirect()
                    ->back()
                    ->withErrors(
                        ['username atau password anda salah']
                    );
            }
        //}
    }

    public function register()
    {
         return view('register');    
    }

    public function registerAnggotaPost(Request $request)
    {
        $request->validate([
            'username'      => 'required|unique:pegawai|min:3|string|max:100', 
            'password'      => 'required|string|min:5',
            'nama_anggota'  => 'required|string',
            'jk'            => 'required'
        ],
        [
            'username.unique'           => 'Username sudah ada yang pakai',
            'username.min'              => 'Username minimal 3',
            'username.required'         => 'Username harus diisi',
            'nama_anggota.required'     => 'Nama harus diisi',
            'password.required'         => 'Password harus diisi', 
            'jk.required'               => 'Jenis Kelamin harus diisi',
            'max'                       => 'panjang karakter maksima 100',
        ]);
        $data = [
            'username'      =>$request->username,  
            'password'      =>$request->password, 
            'nama_anggota'  =>$request->nama_anggota, 
            'jk'            =>$request->jk,


        ];
        $create = Anggota::create($data);
        return view('loginanggota')->with('success','Data Berhasil Ditambah');
    }
     public function logoutAnggota(){
        session()->forget('anggota');
        Session::flush();
        return redirect('/loginanggota');
    }
    public function logoutAdmin(){
        session()->forget('admin');
        Session::flush();
        return redirect('/loginadmin');
    }
}
