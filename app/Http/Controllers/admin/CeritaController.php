<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CeritaController extends Controller
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
            'gambar' => 'nullable|image|max:4096',
        ]);
        $data = $request->only(['judul']);
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('cerita', 'public');
        }

        Cerita::create($data);
        return redirect()->back()->with('success', 'Cerita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cerita $cerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cerita $cerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cerita $cerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cerita $cerita)
    {
        $cerita->delete();
        Storage::disk('public')->delete($cerita->gambar);
        return redirect()->back()->with('success', 'Cerita berhasil dihapus.');
    }
}
