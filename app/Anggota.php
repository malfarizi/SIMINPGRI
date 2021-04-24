<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anggota extends Authenticatable
{
     use Notifiable;

    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    
    protected $fillable = [ 
        'username', 
        'password', 
        'nama_anggota', 
        'jk', 
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
