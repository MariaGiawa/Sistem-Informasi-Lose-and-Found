<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\Mahasiswa;
use App\Models\BarangLose;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoseController extends Controller
{
    
    public function index()
    {
        $expire = Carbon::today()->subWeeks(2);
        $pengumuman_lose = Pengumuman::Join('mahasiswa','mahasiswa.id_user', '=', 'pengumuman.user_id')                    
                                        ->select('pengumuman.*','mahasiswa.*', 'pengumuman.created_at as created','mahasiswa.created_at as created_at', 'pengumuman.id as id_item', 'pengumuman.updated_at as updated', 'pengumuman.id as id_peng')
                                        ->where('pengumuman.created_at', '>', $expire)
                                        ->latest('created')
                                        ->get();
        $i = 1;
        $admin = Mahasiswa::where('id_user', '=', '1')->get(); 
        return view('pengumuman_lose',compact('pengumuman_lose','i','admin'));
       
    }

    public function create()
    {
        return view('lose');
    }

    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'nama_item' => 'required',
            'merk' => 'required',
            'jenis_id' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required'
        ]);

        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'assets/image';
    
        $file->move($tujuanFile,$namaFile);
        
        $loseBarang = new Pengumuman;
        $loseBarang->nama_item = $request->nama_item;
        $loseBarang->user_id =  auth()->user()->id;
        $loseBarang->deskripsi = $request->deskripsi;
        $loseBarang->gambar = $namaFile;
        $loseBarang->merk = $request->merk;
        $loseBarang->jenis_id = $request->jenis_id;
        $loseBarang->lokasi = $request->lokasi;
        $loseBarang->tanggal = $request->tanggal;

        $loseBarang->save();

        return redirect('pengumuman_lose')->with('status', 'Pengumuman berhasil ditambahkan!');
    }

    public function show(BarangLose $barangLose)
    {
        //
    }

    public function edit($id)
    {
        
        $barang = Pengumuman::find($id);
        return view('edit_lose', compact('barang'));
        
    }

    public function update(Request $request, $id)
    {
        
        $barang = Pengumuman::find($id);
        $barang->nama_item = $request->input('nama_item');
        $barang->merk = $request->input('merk');
        $barang->lokasi = $request->input('lokasi');
        $barang->deskripsi = $request->input('deskripsi');
        
        if($request->tanggal){
            $barang->tanggal = $request->tanggal;
            
        }

        if($request->hasFile('gambar')){
            $tujuanFile = 'assets/image/'.$barang->gambar;
            if(Pengumuman::exists($tujuanFile)){
                Pengumuman::destroy($tujuanFile );
            }
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $fileName = time().'.'.$namaFile;
            $file->move('assets/image/', $fileName);
            $barang->gambar = $fileName;
        }

        $barang->update();

        return redirect("pengumuman_lose")->with('status','Pengumuman berhasil di edit!');
    }

    public function destroy($id)
    {
        
        $barang = Pengumuman::find($id);
        $barang->delete();
        
        return redirect("pengumuman_lose")->with('status','Pengumuman berhasil dihapus!');
    }
}
