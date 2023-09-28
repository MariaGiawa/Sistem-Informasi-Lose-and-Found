<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Prodi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'prodi'; 

    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function pihak_ketertiban()
    {
        return $this->belongsTo(PihakKetertiban::class);
    }
}
