<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'jns_pembayaran',
        'tanggal_pembayaran',
        'jumlah_pembayaran',
        'sisa_pembayaran',
        'bukti_pembayaran',
    ];
}