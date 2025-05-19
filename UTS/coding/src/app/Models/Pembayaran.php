<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\JenisIuran;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'nama_warga',
        'id_jenis_iuran',
        'jumlah',
        'tanggal_bayar',
        'bukti_pembayaran',
        'status',
    ];

    // Relasi ke jenis iuran (many to one)
    public function jenisIuran()
    {
        return $this->belongsTo(JenisIuran::class, 'id_jenis_iuran');
    }
}
