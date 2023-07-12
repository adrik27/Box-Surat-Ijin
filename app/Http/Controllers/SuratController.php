<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Models\KategoriSurat;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Surat.index', [
            'suratPegawai'  =>  Surat::where('email', Auth()->user()->email)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Surat.create', [
            'kategoriSurat' =>  KategoriSurat::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email'                 =>  'required|email:dns',
            'KategoriSurat_id'      =>  'required',
            'TanggalMulaiIjin'      =>  'required',
            'TanggalSelesaiIjin'    =>  'required',
            'catatan'               =>  'required',
            'gambar'                =>  'file'
        ]);

        if ($request->file('gambar')) {

            // ------------------Custom dengan nama file tetapi tidak bisa di download
            // $fileName =   $request->file('gambar')->getClientOriginalName();
            // $fileExtension = $request->file('gambar')->getClientOriginalExtension();
            // $validateData['gambar'] =  $fileName . '.' . $fileExtension;
            // $request->file('gambar')->storeAs('files_bukti_ijin', $validateData['gambar']);


            $validateData['gambar'] =  $request->file('gambar')->getClientOriginalName();
            $validateData['gambar'] =
                $request->file('gambar')->store('files_bukti_ijin');
        }

        $validateData['StatusKabag'] = 'Kirim';

        Surat::create($validateData);

        return redirect('/Dashboard/Surat')->with('success', 'Surat berhasil dikirim ke Kabag');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $Surat)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $Surat)
    {
        return view('Dashboard.Surat.edit', [
            'kategoriSurat' =>  KategoriSurat::all(),
            'surat'         =>  $Surat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $Surat)
    {
        $validateData = $request->validate([
            'email'                 =>  'required|email:dns',
            'KategoriSurat_id'      =>  'required',
            'TanggalMulaiIjin'      =>  'required',
            'TanggalSelesaiIjin'    =>  'required',
            'catatan'               =>  'required',
            'gambar'                =>  'file'
        ]);

        if ($request->file('gambar')) {

            if ($request->gambar_old) {
                Storage::delete($request->gambar_old);
            }

            $validateData['gambar'] =  $request->file('gambar')->getClientOriginalName();
            $validateData['gambar'] =
                $request->file('gambar')->store('files_bukti_ijin');
        }

        $validateData['StatusKabag'] = 'Kirim';

        Surat::where('id', $Surat->id)
            ->update($validateData);

        return redirect('/Dashboard/Surat')->with('success', 'Surat berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $Surat)
    {
        if ($Surat->gambar) {
            Storage::delete($Surat->id);
        }

        Surat::destroy($Surat->id);

        return redirect('/Dashboard/Surat')->with('success', 'Surat berhasil dihapus');
    }

    // -----------------Kabag--------------------

    public function tampilanKabagBox()
    {
        $userSurat = Surat::where('StatusKabag', 'Kirim')
            ->orWhere('StatusKabag', 'Tolak')->get();

        return view('Dashboard.SuratKabag.index', [
            'surat' =>  $userSurat
        ]);
    }

    public function prosesacc(Request $request)
    {
        Surat::where('id', $request->id)
            ->update(
                [
                    'StatusKabag'   => 'Acc',
                    'StatusHrd'     => 'Kirim'
                ]
            );

        return redirect("/Dashboard/Kabag")->with('success', 'Surat ijin berhasil di Acc, Surat akan diteruskan ke HRD !');
    }

    public function prosestolak(Request $request)
    {
        Surat::where('id', $request->id)
            ->update(['StatusKabag' => 'Tolak']);

        return redirect("/Dashboard/Kabag")->with('error', 'Surat ijin berhasil di tolak !');
    }

    // -----------------HRD--------------------

    public function tampilanHRD()
    {
        $userSurat = Surat::where('StatusHrd', 'Kirim')
            ->orWhere('StatusHrd', 'Acc')
            ->orWhere('StatusHrd', 'Tolak')
            ->get();

        return view('Dashboard.SuratHRD.index', [
            'surat' =>  $userSurat
        ]);
    }
    public function prosesaccHrd(Request $request)
    {
        Surat::where('id', $request->id)
            ->update(
                [
                    'StatusHrd'     => 'Acc'
                ]
            );

        return redirect("/Dashboard/HRD")->with('success', 'Surat ijin berhasil di Acc !');
    }
    public function prosestolakHrd(Request $request)
    {
        Surat::where('id', $request->id)
            ->update(['StatusHrd' => 'Tolak']);

        return redirect("/Dashboard/HRD")->with('error', 'Surat ijin berhasil di tolak !');
    }

    // -----------------AllBox--------------------

    public function tampilanAllBox()
    {
        return view('Dashboard.SemuaSurat.index', [
            'surat' =>  Surat::all()
        ]);
    }
}
