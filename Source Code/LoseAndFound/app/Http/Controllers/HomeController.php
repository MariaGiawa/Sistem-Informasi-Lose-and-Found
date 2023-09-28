<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prodi;
use App\Models\PihakKetertiban;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {      
        $pihak_ketertiban = PihakKetertiban::Join('prodi','prodi.id', '=', 'pihak_ketertiban.prodi_id')
                                            ->select('pihak_ketertiban.*','prodi.*')
                                            ->get();
        $countMahasiswa = Mahasiswa::count();
        $mahasiswa = Mahasiswa::all();
        $found = Pengumuman::withTrashed()->where('jenis_id', '=', 2)->count();
        $lose = Pengumuman::withTrashed()->where('jenis_id', '=', 1)->count();
        // dd(auth()->user()->is_admin);
        if(auth()->check() && auth()->user()->is_admin==0){
            return view('welcome',[
                'pihak_ketertiban' => $pihak_ketertiban,
                'mahasiswa' => $mahasiswa,
            ]);
        }else {
            return view('welcome',[
                'pihak_ketertiban' => $pihak_ketertiban,
                'mahasiswa' => $mahasiswa,
                'countMahasiswa' => $countMahasiswa,
                'found' => $found,
                'lose' => $lose 
            ]);
        }
       
    }
    
    public function history()
    {   
        // $expire = Carbon::today()->subWeeks(2);
        $history = Pengumuman::join('mahasiswa', 'mahasiswa.id_user', '=', 'pengumuman.user_id')
                            ->select('mahasiswa.*', 'pengumuman.*', 'pengumuman.created_at as created_pengumuman', 'pengumuman.id as id_peng')                                                                                  
                            ->onlyTrashed()
                            ->latest('created_pengumuman')                            
                            ->get();

        $expired = Pengumuman::join('mahasiswa', 'mahasiswa.id_user', '=', 'pengumuman.user_id')
                            ->select('mahasiswa.*', 'pengumuman.*', 'pengumuman.created_at as created_pengumuman', 'pengumuman.id as id_peng')                             
                            ->where('pengumuman.created_at', '<', today()->subWeeks(2))                                                        
                            ->latest('created_pengumuman')                            
                            ->get();
        $admin = Mahasiswa::where('id_user', '=', '1')->get(); 
        return view ('history', [
            'history' => $history,
            'expired' => $expired,
            'admin' => $admin
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
