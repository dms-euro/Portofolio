<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakContreoller extends Controller
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
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'email' => 'required|email',
            'whatsapp' => 'required|string',
            'instagram' => 'required|string',
        ]);

        $kontak->update([
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
        ]);

        return redirect()->back()->with('success', 'Kontak berhasil diperbarui.');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        //
    }
}
