<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'mahasiswa'; 
    
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class);
    }

    public function users()
    {
        return $this->hasOne(Pengumuman::class);
    }
    public function prodi()
    {
        return $this->hasOne(Prodi::class);
    }
}
