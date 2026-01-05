<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
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
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|max:4096',
            'url_github' => 'nullable|url|max:255',
            'url_demo' => 'nullable|url|max:255',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'url_github', 'url_demo']);
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('portofolio', 'public');
        }
        Portofolio::create($data);
        return redirect()->back()->with('success', 'Portofolio berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        Storage::disk('public')->delete($portofolio->gambar);
        return redirect()->back()->with('success', 'Portofolio berhasil dihapus.');
    }
}
