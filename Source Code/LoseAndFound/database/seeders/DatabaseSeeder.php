<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;
use App\Models\PihakKetertiban;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //1
        Prodi::create([
            'prodi' => 'D3 Teknologi Informasi'
        ]);
        //2
        Prodi::create([
            'prodi' => 'D3 Teknologi Komputer'
        ]);
        //3
        Prodi::create([
            'prodi' => 'D4 Teknologi Rekayasa Perangkat Lunak'
        ]);
        //4
        Prodi::create([
            'prodi' => 'S1 Informatika'
        ]);
        //5
        Prodi::create([
            'prodi' => 'S1 Teknik Elektro'
        ]);
        //6
        Prodi::create([
            'prodi' => 'S1 Teknik Bioproses'
        ]);
        //7
        Prodi::create([
            'prodi' => 'S1 Manajemen Rekayasa'
        ]);
        //8
        Prodi::create([
            'prodi' => 'S1 Sistem Informasi'
        ]);

        Kategori::create([
            'id' => '1',
            'jenis' => 'Kehilangan'
        ]);

        Kategori::create([
            'id' => '2',
            'jenis' => 'Penemuan'
        ]);

        PihakKetertiban::create([
            'nama' => 'Sondang Kevin P. Sihaloho',
            'nohp' => '6281325951201',
            'prodi_id' => '4',
            'angkatan' => '2019',
            'nim' => '11S19044'
        ]);
        PihakKetertiban::create([
            'nama' => 'Lucy Patrecia Butarbutar',
            'nohp' => '6281325951201',
            'prodi_id' => '1',
            'angkatan' => '2019',
            'nim' => '11319056'
        ]);
        PihakKetertiban::create([
            'nama' => 'Meida Butarbutar',
            'nohp' => '6285260548747',
            'prodi_id' => '8',
            'angkatan' => '2020',
            'nim' => '12S20049'
        ]);
        PihakKetertiban::create([
            'nama' => 'Natalia Merlin Genongga',
            'nohp' => '6281260783403',
            'prodi_id' => '3',
            'angkatan' => '2020',
            'nim' => '11420025'
        ]);
        PihakKetertiban::create([
            'nama' => 'Ponalisa Yikwa',
            'nohp' => '6281240878692',
            'prodi_id' => '3',
            'angkatan' => '2020',
            'nim' => '11420007'
        ]);
        PihakKetertiban::create([
            'nama' => 'Rody Towolom',
            'nohp' => '6282273817832',
            'prodi_id' => '3',
            'angkatan' => '2020',
            'nim' => '11420017'
        ]);
        PihakKetertiban::create([
            'nama' => 'Sandro Sinaga',
            'nohp' => '6282164539157',
            'prodi_id' => '8',
            'angkatan' => '2020',
            'nim' => '12S20024'
        ]);
        PihakKetertiban::create([
            'nama' => 'Yehezkiel Felias',
            'nohp' => '62895601247596',
            'prodi_id' => '6',
            'angkatan' => '2019',
            'nim' => '31S19006'
        ]);
        PihakKetertiban::create([
            'nama' => 'Deasy Nataline Sitorus',
            'nohp' => '6281262118558',
            'prodi_id' => '7',
            'angkatan' => '2019',
            'nim' => '21S19031'
        ]);
        PihakKetertiban::create([
            'nama' => 'Fadly Riscky Sirait',
            'nohp' => '6282277158762',
            'prodi_id' => '7',
            'angkatan' => '2019',
            'nim' => '21S19008'
        ]);
        PihakKetertiban::create([
            'nama' => 'Elysa Noelia Pangaribuan',
            'nohp' => '6282294583345',
            'prodi_id' => '8',
            'angkatan' => '2019',
            'nim' => '12S19053'
        ]);
        PihakKetertiban::create([
            'nama' => 'Nazir Manahan Manurung',
            'nohp' => '6282365631690',
            'prodi_id' => '3',
            'angkatan' => '2019',
            'nim' => '11419020'
        ]);
        PihakKetertiban::create([
            'nama' => 'Puan Maharani Sirait',
            'nohp' => '6282370388328',
            'prodi_id' => '4',
            'angkatan' => '2019',
            'nim' => '11S19059'
        ]);
        PihakKetertiban::create([
            'nama' => 'Kevin Willys Nathaneil Samosir',
            'nohp' => '6285260331246',
            'prodi_id' => '4',
            'angkatan' => '2020',
            'nim' => '11S20034'
        ]);
        PihakKetertiban::create([
            'nama' => 'Andreas Hatigoran',
            'nohp' => '6287888745737',
            'prodi_id' => '4',
            'angkatan' => '2019',
            'nim' => '11S19047'
        ]);
        //1
        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'is_admin' => '1'
        ]);
        //2
        User::create([
            'username' => 'rianshp',
            'password' => Hash::make('rian123'),
            'is_admin' => '0'
        ]);
        //3
        User::create([
            'username' => 'saimarito',
            'password' => Hash::make('saimarito'),
            'is_admin' => '0'
        ]);
        //4
        User::create([
            'username' => 'maria',
            'password' => Hash::make('maria'),
            'is_admin' => '0'
        ]);
        //5
        User::create([
            'username' => 'dafne',
            'password' => Hash::make('dafne'),
            'is_admin' => '0'
        ]);

        Mahasiswa::create([
            'id_user' => '2',
            'nama' => 'Rian shaputra',
            'nim' => '11321048',
            'prodi_id' => '1',
            'nohp' => 85273833908,
            'alamat' => 'Dumai',
            'email' => 'rian@email.com'
        ]);

        Mahasiswa::create([
            'id_user' => '1',
            'nama' => 'Administrator',
            'nohp' => 81325951201,
        ]);

        Mahasiswa::create([
            'id_user' => '3',
            'nama' => 'Saimarito simanullang',
            'nim' => '11321059',
            'prodi_id' => '1',
            'nohp' => 82277051959,
            'alamat' => 'Balige',
            'email' => 'saimarito@email.com'
        ]);

        Mahasiswa::create([
            'id_user' => '4',
            'nama' => 'Maria giawa',
            'nim' => '11321069',
            'prodi_id' => '1',
            'nohp' => 82273282438,
            'alamat' => 'Medan',
            'email' => 'maria@email.com'
        ]);

        Mahasiswa::create([
            'id_user' => '5',
            'nama' => 'Dafne simanjuntak',
            'nim' => '11321006',
            'prodi_id' => '1',
            'nohp' => 82212344321,
            'alamat' => 'Dumai',
            'email' => 'dafne@email.com'
        ]);

        //1
        Pengumuman::create([
            'user_id' => '2',
            'jenis_id' => '1',
            'nama_item' => 'jaket',
            'merk' => 'adidas',
            'gambar' => 'jaket.jpg',
            'tanggal' => '2022-05-15 15:00:00',
            'lokasi' => 'sekitaran entrance hall',
            'deskripsi' => 'Jaket berwarna hitam bermerek adidas. Dibagian dalam jaket ada tertulis inisial RSH menggunakan ukiran benang berwarna putih'
        ]);

        //2
        Pengumuman::create([
            'user_id' => '2',
            'jenis_id' => '2',
            'nama_item' => 'Botol minum',
            'merk' => 'tupperware',
            'gambar' => 'botolminum.jpg',
            'tanggal' => '2022-05-12 14:00:00',
            'lokasi' => 'Entrance hall',
            'status' => 'Mahasiswa',
            'deskripsi' => 'botol minum bermerek Tupperware dan berwarna ungu. Bermuatan 2L dan terdapat inisial 006TI21'
        ]);
       
        //3
        Pengumuman::create([
            'user_id' => '3',
            'jenis_id' => '1',
            'nama_item' => 'Jam tangan',
            'merk' => 'Daniel Wellington',
            'gambar' => 'jam.jpg',
            'tanggal' => '2022-05-16 10:00:00',
            'lokasi' => 'Saung dekat GD721',
            'deskripsi' => 'Jam tangan merupakan merk Daniel Wellington. Tali bercorak warna biru dan merah'
        ]);

        //4
        Pengumuman::create([
            'user_id' => '3',
            'jenis_id' => '2',
            'nama_item' => 'Pin',
            'merk' => 'Del',
            'gambar' => 'pindel.png',
            'tanggal' => '2022-05-13 12:00:00',
            'lokasi' => 'GD 721',
            'status' => 'Mahasiswa',
            'deskripsi' => 'Pin ditemukan di GD 721 di meja paling depan di dekat pintu. Dibelakang pin terdapat inisial 069TI21'
        ]);

        //5
        Pengumuman::create([
            'user_id' => '4',
            'jenis_id' => '1',
            'nama_item' => 'Payung',
            'merk' => 'Dolphin',
            'gambar' => 'payung.jpg',
            'tanggal' => '2022-05-17 15:30:00',
            'lokasi' => 'Sekitaran auditorium',
            'deskripsi' => 'Payung bermerek Dolpin berwarna hitam. Paying tersebut adalah payung otomatis saat dibuka dan ditutup. Tertulis UV Protection di paying dan ada inisial MFG di dalam paying dan di gagang payung'
        ]);

        //6
        Pengumuman::create([
            'user_id' => '4',
            'jenis_id' => '2',
            'nama_item' => 'Topi',
            'merk' => 'Converse',
            'gambar' => 'topi.jpg',
            'tanggal' => '2022-05-15 13:40:00',
            'lokasi' => 'Kantin 2 lantai 1',
            'status' => 'Mahasiswa',
            'deskripsi' => 'topi berwarna hitam merk converse tanpa identitas ditemukan di kantin 2 lantai 1 di meja paling belakang'
        ]);

        //7
        Pengumuman::create([
            'user_id' => '5',
            'jenis_id' => '1',
            'nama_item' => 'Charger laptop',
            'merk' => 'Asus',
            'gambar' => 'charger.jpg',
            'tanggal' => '2022-05-18 16:30:00',
            'lokasi' => 'Saung dekat GD 713',
            'deskripsi' => 'charger merupakan merek asus terdapat nama Dafne.Y yang ditempelkan menggunakan selotip pada bagian kepala charger'
        ]);

        //8
        Pengumuman::create([
            'user_id' => '5',
            'jenis_id' => '2',
            'nama_item' => 'Mouse',
            'merk' => 'Robot',
            'gambar' => 'mouse.jpg',
            'tanggal' => '2022-05-14 12:00:00',
            'lokasi' => 'GD 722',
            'status' => 'Mahasiswa',
            'deskripsi' => 'mouse bermerek robot dan berwarna biru. Mouse ini adalah mouse wireless tanpa identitas ditemukan di GD722'
        ]);
        
    }
}
