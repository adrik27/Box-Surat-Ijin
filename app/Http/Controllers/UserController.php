<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Status;
use App\Rules\RecaptchaRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Anggota.index', [
            'users'     => User::where('Divisi_id', 2)
                ->orWhere('Divisi_id', 3)
                ->orWhere('Divisi_id', 4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Anggota.create', [
            'divisi'    =>  Divisi::all(),
            'role'      =>  Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateCreate = $request->validate([
            'gambar'    =>  'image',
            'nama'      =>  'required',
            'alamat'    =>  'required',
            'telp'      =>  'required',
            'email'     =>  'required|email:dns',
            'password'  =>  'required',
            'Divisi_id' =>  'required',
            'Role_id'   =>  'required'
        ]);

        if ($request->file('gambar')) {
            $validateCreate['gambar'] = $request->file('gambar')->store('Profil-images');
        }

        if (substr($validateCreate['telp'], 0, 1) === "0") {
            $validateCreate['telp'] = "+62" . substr($validateCreate['telp'], 1);
        }

        // $validateCreate['password'] = Hash::make($validateCreate['password']);

        $validateCreate['Status_id'] = 1;


        User::create($validateCreate);

        return redirect('/Dashboard/Anggota')->with('success', 'Berhasil Menambah Anggota !!');
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
    }

    // LOGIN
    public function login()
    {
        return view('Auth.Login');
    }

    public function ProsesLogin(Request $request)
    {
        $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required|min:8',
            'g-recaptcha-response'  => ['required', new RecaptchaRule],
        ]);

        $createData = $request->only('email', 'password');

        if (Auth::attempt($createData)) {
            $request->session()->regenerate();

            $user = User::where('email', $request->email)->first();

            if ($user->Role_id == 1 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Admin');
            } elseif ($user->Role_id == 2 && $user->Divisi_id == 2 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Kabag');
            } elseif ($user->Role_id == 3 && $user->Divisi_id == 3 && $user->Status_id == 2) {
                return redirect()->intended('/Dashboard/Hrd');
            } elseif ($user->Role_id == 4 && $user->Divisi_id == 4 && $user->Status_id == 2) {
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

    public function detail(User $User)
    {
        return view('Dashboard.Anggota.detail', [
            'us'    => $User
        ]);
    }

    public function hapus(User $User)
    {
        if ($User->gambar) {
            Storage::delete($User->gambar);
        }

        User::destroy($User->id);

        return redirect('/Dashboard/Anggota')->with('success', 'Data berhasil di hapus !');
    }

    public function edit(User $User)
    {
        return view('Dashboard.Anggota.edit', [
            'us'      =>  $User,
            'divisi'    =>  Divisi::all(),
            'role'      =>  Role::all(),
            'status'    =>  Status::all()
        ]);
    }

    public function prosesedit(Request $request, User $User)
    {
        $validateUpdate = $request->validate([
            'gambar'    =>  'image',
            'nama'      =>  'required',
            'alamat'    =>  'required',
            'telp'      =>  'required',
            'email'     =>  'required|email:dns',
            // 'password'  =>  'nullable|min:8',
            'Divisi_id' =>  'required',
            'Role_id'   =>  'required',
            'Status_id'   =>  'required',
        ]);

        if ($request->file('gambar')) {
            if ($request->gambar_old) {
                Storage::delete($request->gambar_old);
            }

            $validateUpdate['gambar']  =   $request->file('gambar')->store('Profil-images');
        }


        if (substr($validateUpdate['telp'], 0, 1) === "0") {
            $validateUpdate['telp'] = "+62" . substr($validateUpdate['telp'], 1);
        }



        // dd($validateUpdate);
        User::where('id', $User->id)
            ->update($validateUpdate);

        return redirect('/Dashboard/Anggota')->with('success', 'Berhasil Mengupdate Anggota !!');
    }
}
