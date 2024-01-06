<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['judul', 'deskripsi', 'tanggal_publikasi', 'kategori'];
}