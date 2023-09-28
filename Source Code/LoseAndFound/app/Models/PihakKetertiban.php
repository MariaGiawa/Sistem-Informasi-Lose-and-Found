<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PihakKetertiban extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'pihak_ketertiban'; 

    protected $guarded = [];

    public function prodi()
    {
        return $this->hasOne(Prodi::class);
    }
}
