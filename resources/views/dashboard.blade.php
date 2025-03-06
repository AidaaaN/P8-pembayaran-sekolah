<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Pembayaran Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white text-center py-12">
    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-center gap-1 mb-4">
            <img src="/img/logo2.png" alt="Logo" class="w-24">
            <h1 class="text-3xl font-bold"> SELAMAT DATANG</h1>
        </div>
        <p class="text-lg">Sistem Pencatatan Pembayaran Sekolah</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="border-2 border-white p-6 cursor-pointer hover:bg-white/20" onclick="window.location.href='/loginAdmin'">
                <div class="text-5xl">🖥️</div>
                <h5 class="text-xl font-semibold mt-2">Login Admin</h5>
            </div>
            <div class="border-2 border-white p-6 cursor-pointer hover:bg-white/20" onclick="window.location.href='/cekPembayaran'">
                <div class="text-5xl">💳</div>
                <h5 class="text-xl font-semibold mt-2">Cek Pembayaran</h5>
            </div>
            <div class="border-2 border-white p-6 cursor-pointer hover:bg-white/20" onclick="window.location.href='/loginSiswa'">
                <div class="text-5xl">👥</div>
                <h5 class="text-xl font-semibold mt-2">Login Siswa</h5>
            </div>
        </div>
    </div>
</body>
</html>
