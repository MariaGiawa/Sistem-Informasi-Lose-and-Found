<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Pengumuman;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class FoundController extends Controller
{
    
    public function index()
    {
        $expire = Carbon::today()->subWeeks(2);
        $pengumuman_found = Pengumuman::Join('mahasiswa','mahasiswa.id_user', '=', 'pengumuman.user_id')                    
                            ->select('pengumuman.*','mahasiswa.*', 'pengumuman.created_at as created','mahasiswa.created_at as created_at', 'pengumuman.id as id_item', 'pengumuman.updated_at as updated', 'pengumuman.id as id_peng')
                            ->where('pengumuman.created_at', '>', $expire)
                            ->latest('created')
                            ->get();
        if(!$pengumuman_found){
            $pengumuman_found->status = 'Expired';
            $pengumuman_found->save();
        }
        $admin = Mahasiswa::where('id_user', '=', '1')->get();        
       
        $i = 1;
        return view('pengumuman_found', compact('pengumuman_found','i','admin'));
       
    }

    public function create()
    {
        return view('found', [
            'jenis' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
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
        
        $foundBarang = new Pengumuman;
        $foundBarang->nama_item = $request->nama_item;
        $foundBarang->user_id =  auth()->user()->id;
        $foundBarang->deskripsi = $request->deskripsi;
        $foundBarang->jenis_id = $request->jenis_id;
        $foundBarang->gambar = $namaFile;
        $foundBarang->merk = $request->merk;
        $foundBarang->status = 'Mahasiswa';
        $foundBarang->lokasi = $request->lokasi;
        $foundBarang->tanggal = $request->tanggal;
        $foundBarang->save();



        return redirect('pengumuman_found')->with('status', 'Pengumuman berhasil ditambahkan!');
    }

    public function show(BarangFound $barangFound)
    {
        //
    }

    public function edit($id)
    {
        
        $barang = Pengumuman::find($id);
        return view('edit_found', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        
        $barang = Pengumuman::find($id);
        $barang->nama_item = $request->input('nama_item');
        $barang->merk = $request->input('merk');
        $barang->lokasi = $request->input('lokasi');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->status = $request->input('status');
        
        if($request->tanggal){
            $barang->tanggal = $request->tanggal;
            
        }

        if($request->hasFile('gambar')){
            $tujuanFile = 'assets/image/'.$barang->gambar;
            if(Pengumuman::exists($tujuanFile)){
                Pengumuman::destroy($tujuanFile);
            }
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $fileName = time().'.'.$namaFile;
            $file->move('assets/image/', $fileName);
            $barang->gambar = $fileName;
        }

        $barang->update();

        return redirect("pengumuman_found")->with('status','Pengumuman berhasil di edit!');
    }

    public function destroy($id)
    {
        
        $barang = Pengumuman::find($id);
        $barang->delete();

        return redirect("pengumuman_found")->with('status','Pengumuman berhasil dihapus!');
    }
}
