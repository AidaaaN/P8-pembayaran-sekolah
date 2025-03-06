<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: #ccc;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background: #007bff;
            color: white;
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar button {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
        }

        .navbar span {
            color:black;
            font-weight: bold;
            margin-left: 10px;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: -250px; /* Awalnya tersembunyi */
            top: 56px; /* Diletakkan di bawah navbar */
            background: #ffffff;
            color: black;
            transition: left 0.3s ease-in-out;
            box-shadow: 2px 0 5px rgba(0,0,0,0.2);
            z-index: 999;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 12px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #f1f1f1;
        }

        /* Overlay (Layar Gelap saat Sidebar Dibuka) */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        .overlay.show {
            display: block;
        }

        /* Konten */
        .content {
            margin-top: 70px; /* Beri jarak agar tidak tertutup navbar */
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        /* Saat sidebar terbuka, geser konten */
        .content.shift {
            margin-left: 250px;
        }

    </style>
</head>
<body>


<nav class="navbar">
    <div class="left">
        <button id="toggleSidebar">
            <i class="fas fa-bars" style="color: black"></i>
        </button>
        <span>DATA PEMBAYARAN SEKOLAH</span>
    </div>
    <div class="right">
        <span>ADMINISTRATOR</span>
        <i class="fas fa-user" style="color: black"></i>
    </div>
</nav>



<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h4 class="text-center mt-3">ADMINISTRATOR</h4>
    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('pembayaran') }}"><i class="fas fa-wallet"></i> Pembayaran Siswa</a>
    <a href="{{ route('keuangan') }}"><i class="fas fa-money-bill"></i> Keuangan</a>
    <a href="{{ route('manajemen-data') }}"><i class="fas fa-users"></i> Manajemen Data</a>
    <a href="{{ route('laporan') }}"><i class="fas fa-file-alt"></i> Laporan</a>
    <a href="{{ route('pengaturan') }}"><i class="fas fa-cog"></i> Pengaturan</a>
</div>


<!-- Overlay -->
<div class="overlay" id="overlay"></div>

<!-- Konten -->
<div class="content" id="content">
    @yield('content')
</div>

<!-- JavaScript untuk Toggle Sidebar & Overlay -->
<script>
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
        document.getElementById('overlay').classList.toggle('show');
        document.getElementById('content').classList.toggle('shift');
    });

    document.getElementById('overlay').addEventListener('click', function() {
        document.getElementById('sidebar').classList.remove('show');
        document.getElementById('overlay').classList.remove('show');
        document.getElementById('content').classList.remove('shift');
    });
</script>

</body>
</html>
