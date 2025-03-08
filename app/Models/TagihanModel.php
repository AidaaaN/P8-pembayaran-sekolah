<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanModel extends Model
{
    use HasFactory;

    protected $table = 'tagihan'; // Nama tabel
    protected $primaryKey = 'id_tagihan';
    protected $fillable = [
        'jumlah',
        'status',
        'bulan',
        'tahun',
    ];

    // Relasi ke model lain (jika ada)
}