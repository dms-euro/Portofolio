<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'url_github',
        'url_demo',
    ];
}
