<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'bendahara_id',
        'periode',
        'catatan',
        'status',
    ];

    public function bendahara()
    {
        return $this->belongsTo(User::class, 'bendahara_id');
    }
}
