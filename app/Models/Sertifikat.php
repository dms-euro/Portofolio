<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $fillable = [
        'judul_sertifikat',
        'deskripsi_sertifikat',
        'sertifikat',
        'tanggal_sertifikat'
    ];
}
