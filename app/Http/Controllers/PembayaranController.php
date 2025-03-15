<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:50',
            'kelas_siswa' => 'required|string|max:10',
            'jurusan_siswa' => 'required|string|max:50',
            'tanggal_pembayaran' => 'required|date',
            'nomor_telepon' => 'required|string|max:20',
            'bukti_pembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan bukti pembayaran
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }

        PembayaranModel::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'jurusan_siswa' => $request->jurusan_siswa,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
            'nomor_telepon' => $request->nomor_telepon,
            'bukti_pembayaran' => $buktiPath ?? null,
        ]);

        return redirect()->route('konfirmasi.form')->with('success', 'Konfirmasi pembayaran berhasil dikirim.');
    }
}
