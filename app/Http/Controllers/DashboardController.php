<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Admin.index', [
            // USER/ANGGOTA
            'user'  => User::all(),
            'acc'   => User::where('Status_id', 2)->get(),
            'tolak'   => User::where('Status_id', 3)->get(),

            // DIVISI
            'divisi'    =>  Divisi::all(),

            // SURAT
            'surat'     =>  Surat::all(),
            'kabag'     =>  Surat::where('StatusKabag', 'Acc')->get(),
            'hrd'       =>  Surat::where('StatusHrd', 'Acc')->get(),
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
