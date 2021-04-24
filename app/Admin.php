<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    
    use Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    
    protected $fillable = [
        'id_admin', 
        'username', 
        'password', 
        'nama', 
        'jk', 
        'alamat', 

    ];

public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}