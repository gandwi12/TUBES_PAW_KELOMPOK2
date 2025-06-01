<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Examination;
use Illuminate\Support\Facades\Auth;

class BerikanObatController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'resep_obat' => 'required|string',
        ]);

        $pemeriksaan = Examination::findOrFail($id);

        // Optional: hanya izinkan jika user adalah pemilik data atau admin
        if (Auth::user()->id !== $pemeriksaan->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $pemeriksaan->resep_obat = $request->resep_obat;
        $pemeriksaan->save();

        return response()->json([
            'message' => 'Obat berhasil diberikan',
            'data' => $pemeriksaan
        ]);
    }
}
