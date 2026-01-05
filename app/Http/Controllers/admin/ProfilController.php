<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cerita;
use App\Models\Portofolio;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = Profil::first();
        $cerita = Cerita::all();
        $portofolio = Portofolio::all();
        return view('admin.beranda', compact('profil', 'cerita', 'portofolio'));
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
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
            'banner' => 'nullable|image|max:4096',
            'url_instagram' => 'nullable|',
            'url_github' => 'nullable|',
        ]);

        $data = $request->only([
            'nama',
            'url_instagram',
            'url_github',
        ]);

        if ($request->hasFile('foto')) {
            if ($profil && $profil->foto) {
                Storage::disk('public')->delete($profil->foto);
            }
            $data['foto'] = $request->file('foto')->store('profil/foto', 'public');
        }

        if ($request->hasFile('banner')) {
            if ($profil && $profil->banner) {
                Storage::disk('public')->delete($profil->banner);
            }
            $data['banner'] = $request->file('banner')->store('profil/banner', 'public');
        }

        $profil->update($data);
        return redirect()->back()->with('success', 'Profil updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
