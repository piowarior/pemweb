<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'tanggal_tagihan',
        'jumlah',
        'status',
    ];

    // Relasi ke User (Bendahara)
    public function bendahara()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Pembayaran (relasi 1 ke banyak)
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
