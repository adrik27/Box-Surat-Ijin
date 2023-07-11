<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Divisi.index', [
            'divisis'   =>   Divisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Divisi.create');
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
            Divisi::create($createData);
            return redirect('Dashboard/Divisi')->with('success', 'Tambah divisi sukses !!');
        } else {
            return redirect('Dashboard/Divisi')->with('error', 'Tambah divisi gagal !!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $Divisi)
    {
        //    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $Divisi)
    {
        return view('Dashboard.Divisi.edit', [
            'div' =>    $Divisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $Divisi)
    {
        $rule = [
            'nama'  =>  'required'
        ];
        if ($rule) {
            $updateDate = $request->validate($rule);

            Divisi::where('id', $Divisi->id)
                ->update($updateDate);

            return redirect('Dashboard/Divisi')->with('success', 'Update divisi sukses !!');
        } else {
            return redirect('Dashboard/Divisi')->with('error', 'Update divisi gagal !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $Divisi)
    {
        Divisi::destroy($Divisi->id);

        return redirect('Dashboard/Divisi')->with('success', 'Delete divisi sukses !!');
    }
}
