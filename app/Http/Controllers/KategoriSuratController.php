<?php

namespace App\Http\Controllers;

use App\Models\KategoriSurat;
use Illuminate\Http\Request;

class KategoriSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.KategoriSurat.index', [
            'kategoris' =>  KategoriSurat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.KategoriSurat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->nama) {
            $createData = $request->validate([
                'nama'  =>  'required'
            ]);
            KategoriSurat::create($createData);
            return redirect('Dashboard/KategoriSurat')->with('success', 'Tambah kategori box sukses !!');
        } else {
            return redirect('Dashboard/KategoriSurat')->with('error', 'Tambah kategori box gagal !!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSurat $KategoriSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSurat $KategoriSurat)
    {
        return view('Dashboard.KategoriSurat.edit', [
            'kb'    =>  $KategoriSurat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSurat $KategoriSurat)
    {
        if ($request->nama) {
            $createData = $request->validate([
                'nama'  =>  'required'
            ]);
            KategoriSurat::where('id', $KategoriSurat->id)
                ->update($createData);

            return redirect('Dashboard/KategoriSurat')->with('success', 'Update kategori box sukses !!');
        } else {
            return redirect('Dashboard/KategoriSurat')->with('error', 'Update kategori box gagal !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSurat $KategoriSurat)
    {
        KategoriSurat::destroy($KategoriSurat->id);

        return redirect('Dashboard/KategoriSurat')->with('success', 'Delete kategori box sukses !!');
    }
}
