<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Examination;
use Illuminate\Support\Facades\Auth;

class ExaminationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Examination::where('user_id', $user->id)->orderBy('tanggal_kunjungan', 'desc')->get();
        return response()->json(['message' => 'Riwayat ditemukan', 'data' => $data]);
    }

    public function show($id)
    {
        $data = Examination::findOrFail($id);
        if (Auth::user()->id !== $data->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'diagnosa' => 'required|string',
            'resep_obat' => 'nullable|string',
        ]);

        $pemeriksaan = Examination::findOrFail($id);
        $pemeriksaan->update([
            'diagnosa' => $request->diagnosa,
            'resep_obat' => $request->resep_obat,
        ]);

        return response()->json([
            'message' => 'Diagnosa berhasil disimpan',
            'data' => $pemeriksaan
        ]);
    }
}

