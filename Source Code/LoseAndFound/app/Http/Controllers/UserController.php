<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Session;


class UserController extends Controller
{
    public function register()
    {
        return view('register', [
            'prodi' => Prodi::all()
        ]);
    }

    public function register_action(Request $request)
    {   

        $request->validate([
            'nama' => 'required',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:mahasiswa',
            'password' => 'required|min:5',
            'prodi' => 'required',
            'nim' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|min:11|unique:mahasiswa'
        ]);

        $user = new User;
        $user->username = $request['username'];
        $user->password = Hash::make($request['password']);
        $user->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->id_user = $user->id;
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->nim = $request['nim'];
        $mahasiswa->prodi_id = $request['prodi'];
        $mahasiswa->email = $request['email'];
        $mahasiswa->alamat = $request['alamat'];
        $mahasiswa->nohp = $request['nohp'];
        $mahasiswa->save();

        return redirect('login')->with('status', 'Proses Registrasi Berhasil!');

    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function login_action(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
        ]);
       

        if (Auth::attempt(['is_admin' => 1,'username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home_admin')->with('successLogin','Anda berhasil login!');
        }
        if (Auth::attempt(['is_admin' => 0,'username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('successLogin','Anda berhasil login!');
        }
        $user = User::where('username', '=',$request->username)->first();
        $pass = User::all();
        $status = 0;//definisi status jika status 0 maka akan bernilai salah/false
        foreach($pass as $p){
            if (Hash::check($request->password, $p->password, [])){
                $status = 1;
                break;
            }
        }//melakukan perulangan untuk mengecek seluruh data password pada database
        //jika password ditemukan maka akan mengembalikan nilai status menjadi 1 atau benar/true
        //dan perulangan berhenti.
        if(!$user && !$status){
            return back()->with('loginError', 'Username dan Password anda salah!');
        }//jika $user salah dan $status nya salah maka akan mengembalikan error Username dan Password anda salah!
        else if(!$user && $status){
                return back()->with('loginError', 'Username anda salah!');
        }//jika $user salah dan $status nya benar maka akan mengembalikan error Username anda salah!
        else {
                return back()->with('loginError', 'Password anda salah!');            
        }//jika bukan kondisi keduanya(username dan password salah || username salah) maka mengembalikan error password anda salah!.
       
        }
        
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function profile()
    {
        return view('profile',[
            'mahasiswa' => Mahasiswa::Join('users','users.id', '=', 'mahasiswa.id_user')
                                                ->join('prodi', 'prodi.id', '=', 'mahasiswa.prodi_id')
                                                ->select('pihak_ketertiban.*','prodi.*','prodi.*')
                                                ->get()
        ]);
    }
}
