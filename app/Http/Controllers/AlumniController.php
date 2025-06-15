<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni607;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    public function alumni()
    {
        $alumni = Alumni607::orderBy('id', 'desc')->get();
        return view('alumni', [
            'al' => $alumni,
            'key' => 'alumni'
        ]);
    }
    public function detail($id)
    {
        $a = Alumni607::find($id);
        return view('detail', [
            'a' => $a,
            'key' => 'alumni'
        ]);
    }
    public function formCreate()
    {
        return view('formcreate', [
            'key' => 'alumni'
        ]);
    }
    public function savealumni(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file_name = time() . '-' . rand() . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
        } else {
            $path = '';
        }

        Alumni607::create([
            'nim' => $request->nim,
            'namalengkap' => $request->namalengkap,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'linkedin' => $request->linkedin,
            'foto' => $path,
            'company' => $request->company,
            'job_title' => $request->job_title,
        ]);

        return redirect('alumni')->with('alert', 'Data Alumni Berhasil Disimpan');
    }
    public function formUbah($id)
    {
        $a = Alumni607::find($id);
        return view('form-ubah', [
            'a' => $a,
            'key' => 'alumni'
        ]);
    }
    public function ubahalumni(Request $request, $id)
    {
        $alumni = Alumni607::find($id);
        $alumni->nim = $request->nim;
        $alumni->namalengkap = $request->namalengkap;
        $alumni->angkatan = $request->angkatan;
        $alumni->email = $request->email;
        $alumni->no_telp = $request->no_telp;
        $alumni->alamat = $request->alamat;
        $alumni->linkedin = $request->linkedin;
        $alumni->company = $request->company;
        $alumni->job_title = $request->job_title;

        if ($request->hasFile('foto')) {
            if ($alumni->foto) {
                Storage::disk('public')->delete($alumni->foto);
            }
            $file_name = time() . '-' . rand() . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
            $alumni->foto = $path;
        }

        $alumni->save();
        return redirect('alumni')->with('alert', 'Data Alumni Berhasil Diubah');
    }
    public function deleteAlumni($id)
    {
        //mengambil id movie yang akan dihapus
        $alumni = Alumni607::find($id);
        //mengecek apakah ada poster dari data yang akan dihapus.
        if ($alumni->foto) {
            //menghapus file poster yang lama
            Storage::disk('public')->delete($alumni->foto);
        }
        //menghapus data movie dari database
        $alumni->delete();
        //mengalihkan ke halaman movie
        return redirect('alumni')->with('alert','Data Alumni Berhasil Dihapus');
    }
    public function login()
    {
        return view('login', [
            'key' => 'login'
        ]);
    }
    public function ceklogin(Request $request)
    {
        //proses otentikasi hanya pakai auth
        // jika gagal, akan mengembalikan ke halaman login dengan pesan error
        if (!Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))
        {
            return redirect('/');
        }
        else
        {
            //jika berhasil, akan mengalihkan ke halaman home
            return redirect('/alumni');
        }
    }
    public function ubahpass()
    {
        return view('formpass',['key'=>'']);
    }
    public function updatepass(Request $request)
    {
        if ($request->password == $request->konfirmasi_password) {
            $user = Auth::user();
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect('/ubahpass')->with('info', 'Password berhasil diubah!');
        }
        else
        {
            return redirect('/ubahpass')->with('info', 'Password Gagal diubah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function searchAlumni(Request $request)
    {
        return view('searchalumni');
    }
    public function actsearchalumni(Request $request)
    {
        $keyword = $request->input('q');
        $alumni = Alumni607::where('namalengkap', 'LIKE', '%' . $keyword . '%')->get();
        return view('actsearchalumni', ['data' => $alumni]);
    }

    // public function hapusalumni($id)
    // {
    //     $a = Alumni607::find($id);
    //     if ($a->foto) {
    //          Storage::disk('public')->delete($a->foto);
    //     }
    //     $a->delete();
    //     return redirect('alumni')->with('alert', 'Data Alumni Berhasil Dihapus');
    // }

    // public function alumni()
    // {
    //     $alumni= Alumni607::all();
    //     return view('alumni607', [
    //         'a'=>$alumni
    //     ]);
    // }
}
