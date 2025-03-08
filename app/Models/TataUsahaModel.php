<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TataUsahaModel extends Model
{
    use HasFactory;

    protected $table = 'tata_usaha'; // Nama tabel
    protected $primaryKey = 'id_tataUsaha';
    protected $fillable = [
        'email_password',
        'password',
    ];

    protected $hidden = [
        'password', // Sembunyikan password saat data dikembalikan
    ];
}
