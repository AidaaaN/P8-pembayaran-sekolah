<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel sesuai dengan migrasi
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nama_siswa',
        'nomor_telepon',
        'jurusan_siswa',
        'kelas_siswa',
    ];
}
