<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_pengajuan';
    
    protected $fillable = [
        'foto','tempat_lahir','tgl_lahir','no_ktp','email',
        'agama','alamat','kelurahan','kecamatan','no_telp',
        'tugas','tempat_kerja','tanggal_mulai_kerja','status_pns',
        'golongan','tingkat_sekolah','status_lembaga',
        'mengajar','status','id_anggota'
    ];
}
