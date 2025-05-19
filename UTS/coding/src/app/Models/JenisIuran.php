<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisIuran extends Model
{
     use HasFactory;

    protected $table = 'jenis_iuran';

    protected $fillable = [
        'nama_iuran',
        'nominal',
        'periode',
    ];

     // Relasi ke pembayaran (one to many)
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_jenis_iuran');
    }
}
