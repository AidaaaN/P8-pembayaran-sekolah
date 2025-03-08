<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfirmasiModel extends Model
{
    use HasFactory;
    protected $table = 'Konfirmasi';
    protected $primaryKey = 'id_konfirmasi';
    protected $fillable=['nama_siswa','kelas_siswa','jurusan_siswa','tanggal','bukti_pembayaran','nomor_telepon',];
}
