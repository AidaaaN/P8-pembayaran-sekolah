@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-300 flex items-center justify-center">
    <div class="w-11/12 max-w-4xl bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">KONFIRMASI PEMBAYARAN</h2>

        <form action="{{ route('konfirmasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Kolom Kiri -->
                <div>
                    <label class="block font-semibold">Nama</label>
                    <input type="text" name="nama_siswa" class="w-full border rounded p-2" required>

                    <label class="block font-semibold mt-3">Kelas</label>
                    <input type="text" name="kelas_siswa" class="w-full border rounded p-2" required>

                    <label class="block font-semibold mt-3">Jurusan</label>
                    <input type="text" name="jurusan_siswa" class="w-full border rounded p-2" required>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <label class="block font-semibold">Tanggal</label>
                    <input type="date" name="tanggal_pembayaran" class="w-full border rounded p-2" required>

                    <label class="block font-semibold mt-3">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" class="w-full border rounded p-2" required>

                    <label class="block font-semibold mt-3">Bukti Pembayaran</label>
                    <div class="flex items-center gap-2 border p-2 rounded bg-gray-100">
                        <input type="file" name="bukti_pembayaran" accept="image/*" class="w-full">
                    </div>
                </div>
            </div>

            <button type="submit" class="mt-6 w-full bg-green-600 text-white p-2 rounded shadow hover:bg-green-700">
                Kirim
            </button>
        </form>
    </div>
</div>
@endsection
