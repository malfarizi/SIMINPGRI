<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'id_acara';
    
    protected $fillable = [
        'tanggal', 
        'nama_acara', 
        'deskripsi_acara', 
    ];
}
