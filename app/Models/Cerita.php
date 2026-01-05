<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    protected $table = 'cerita';

    protected $fillable = [
        'judul',
        'gambar',
    ];
}
