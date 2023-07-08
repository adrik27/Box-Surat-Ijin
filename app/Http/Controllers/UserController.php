<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    // REGISTRASI
    public function registrasi()
    {
        return view('Auth.registrasi', [
            'divisi'    => Divisi::all(),
            'role'      => Role::all(),
        ]);
    }
    public function ProsesRegistrasi(Request $request)
    {
        $createRegis = $request->validate([
            'gambar'    => 'image',
            'nama'      => 'required',
            'alamat'    => 'required',
            'telp'      => 'required',
            'email'     => 'required|email:dns',
            'password'  => 'required',
            'Role_id'   => 'required',
            'Divisi_id' => 'required',
        ]);

        if ($request->file('gambar')) {
            $createRegis['gambar'] = $request->file('gambar')->store('Profil-images');
        }
        $createRegis['password'] = bcrypt($createRegis['password']);

        if (substr($createRegis['telp'], 0, 1) === "0") {
            $createRegis['telp'] = "+62" . substr($createRegis['telp'], 1);
        }

        $createRegis['Status_id'] = 1;

        if ($request->Role_id == 2 && $request->Divisi_id == 1) {
            User::create($createRegis);

            return redirect('/')->with('warning', 'Registrasi berhasil !! Silahkan hubungi admin di email admin@gmail.com untuk konfirmasi agar akun aktif !!');
        } elseif ($request->Role_id == 3 && $request->Divisi_id == 2) {
            User::create($createRegis);

            return redirect('/')->with('warning', 'Registrasi berhasil !! Silahkan hubungi admin di email admin@gmail.com untuk konfirmasi agar akun aktif !!');
        } elseif ($request->Role_id == 4 && $request->Divisi_id == 3) {
            User::create($createRegis);

            return redirect('/')->with('warning', 'Registrasi berhasil !! Silahkan hubungi admin di email admin@gmail.com untuk konfirmasi agar akun aktif !!');
        } else {
            return redirect('/registrasi')->with('gagal', 'Registrasi GAGAL !! Pilihkan Divisi dan Role yang sama !!');
        }

        // if ($createRegis['Role_id' == 2] && $createRegis['Divisi_id' == 1]) {
        // } elseif ($createRegis['Role_id' == 3] && $createRegis['Divisi_id' == 2]) {
        //     User::create($createRegis);
        // } elseif ($createRegis['Role_id' == 3] && $createRegis['Divisi_id' == 2]) {
        //     User::create($createRegis);
        // }

    }

    // LOGIN
    public function login()
    {
        return view('Auth.Login');
    }

    public function ProsesLogin(Request $request)
    {
        $createData = $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required|min:8'
        ]);

        if (Auth::attempt($createData)) {
            $request->session()->regenerate();

            $user = User::where('email', $request->email)->first();

            if ($user->Role_id == 1 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Admin');
            } elseif ($user->Role_id == 2 && $user->Divisi_id == 1 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Kabag');
            } elseif ($user->Role_id == 3 && $user->Divisi_id == 2 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Hrd');
            } elseif ($user->Role_id == 4 && $user->Divisi_id == 3 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Pegawai');
            } elseif ($user->Status_id == 3) {
                return Redirect()->back()->with('gagal', 'Maaf akun anda di TOLAK silahkan hubungi admin di email admin@gmail.com');
            }
        }
        return Redirect()->back()->with('gagal', 'Maaf Email / Password Tidak Sesuai atau silahkan hubungi admin di email admin@gmail.com');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
