<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'iuran_id',
        'user_id',
        'tanggal_bayar',
        'jumlah_bayar',
        'status',
        'bukti_transfer',
    ];

    public function iuran()
    {
        return $this->belongsTo(Iuran::class);
    }

    public function warga()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
