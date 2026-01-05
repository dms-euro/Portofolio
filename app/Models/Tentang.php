<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentang';

    protected $fillable = [
        'nama',
        'isi',
        'foto',
        'judul_sertifikat',
        'deskripsi_sertifikat',
        'sertifikat',
        'tanggal_sertifikat',
    ];
}
