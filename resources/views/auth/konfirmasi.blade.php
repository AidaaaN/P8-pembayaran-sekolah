<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- custom css file link  -->
       @vite(["resources/css/style1.css"])
       <link rel="stylesheet" href="css/style1.css">
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <div class="header">
        <div class="menu">&#9776; DATA PEMBAYARAN SEKOLAH</div>
        <div class="profile">SISWA/SISWI &#128100;</div>
    </div>
    <div class="container">
        <h2>KONFIRMASI PEMBAYARAN</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Mutiara Ayu Ramadhani">

            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" placeholder="12">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="PPLG A">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="tel" id="telepon" name="telepon">
            </div>
            <div class="form-group">
                <label for="bukti">Bukti Pembayaran</label>
                <div class="upload-container">
                    <input type="file" id="bukti" name="bukti">
                </div>
            </div>
            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>
</body>
</html>