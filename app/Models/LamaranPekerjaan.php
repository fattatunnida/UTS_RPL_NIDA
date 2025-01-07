<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LamaranPekerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lowongan',
        'id_pelamar',
        'tanggal_lamaran',
    ];

    public function lowongan()
    {
        return $this->belongsTo(LowonganPekerjaan::class, 'id_lowongan');
    }

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }
}
