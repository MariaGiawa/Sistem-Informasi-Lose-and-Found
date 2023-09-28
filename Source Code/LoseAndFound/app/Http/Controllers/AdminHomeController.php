<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Pengumuman;
use App\Models\PihakKetertiban;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class AdminHomeController extends Controller
{
    
    public function index()
    {   
        $pihak_ketertiban = PihakKetertiban::Join('prodi','prodi.id', '=', 'pihak_ketertiban.prodi_id')
                                            ->select('pihak_ketertiban.*','prodi.*')
                                            ->get();
        $mahasiswa = Mahasiswa::all();
        $countMahasiswa = Mahasiswa::count();
        $found = Pengumuman::withTrashed()->where('jenis_id', '=', 2)->count();
        $lose = Pengumuman::withTrashed()->where('jenis_id', '=', 1)->count();
       return view('home_admin',[
              'pihak_ketertiban' => $pihak_ketertiban,
                'mahasiswa' => $mahasiswa,
                'found' => $found,
                'lose' => $lose,
                'countMahasiswa' => $countMahasiswa                                                    
       ]);
        
       
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(BarangFound $barangFound)
    {
        //
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
