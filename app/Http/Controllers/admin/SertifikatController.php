<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertifikat = Sertifikat::all();
        return view('admin.tentang_saya', compact('sertifikat'));
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
        $request->validate([
            'judul_sertifikat' => 'required|string|max:255',
            'deskripsi_sertifikat' => 'required|string',
            'sertifikat' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_sertifikat' => 'required|date',
        ]);

        $data = $request->only([
            'judul_sertifikat',
            'deskripsi_sertifikat',
            'tanggal_sertifikat'
        ]);

        if ($request->hasFile('sertifikat')){
            $data['sertifikat'] = $request->file('sertifikat')->store('sertifikast', 'public');
        }

        Sertifikat::create($data);
        return redirect()->back()->with('success', 'Sertifikat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
