<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examination;

class PemberianObatController extends Controller
{
    // Tampilkan daftar semua pemeriksaan (opsional untuk manajemen data)
    public function index()
    {
        $pemeriksaans = Examination::all();
        return view('Dokter.index_obat', compact('pemeriksaans'));
    }

    // Tampilkan form pemberian obat
    public function edit($id)
    {
        $pemeriksaan = Examination::findOrFail($id);
        return view('Dokter.edit_obat', compact('pemeriksaan'));
    }

    // Simpan resep obat
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'resep_obat' => 'required|string',
        ]);

        $pemeriksaan = Examination::findOrFail($id);
        $pemeriksaan->update([
            'resep_obat' => $validated['resep_obat']
        ]);

        return redirect()->route('pemberian-obat.index')->with('success', 'Obat berhasil diberikan');
    }
}
