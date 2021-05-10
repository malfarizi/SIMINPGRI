<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    
    protected $fillable = [
        'nama_gambar', 
        'gambar', 
        'deskripsi_gambar', 
    ];
}
