<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prodi;
use App\Models\PihakKetertiban;

class ProfileController extends Controller
{
   
   
    public function profile_user()
    {
        return view('profile',[
            'mahasiswa' => Mahasiswa::Join('users','users.id', '=', 'mahasiswa.id_user')
                                                ->join('prodi', 'prodi.id', '=', 'mahasiswa.prodi_id')
                                                ->select('prodi.*','users.*','mahasiswa.*','mahasiswa.created_at as created')
                                                ->where('id_user', auth()->user()->id)
                                                ->get()
        ]);
    }
    

}
