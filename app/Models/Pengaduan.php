<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = ['tanggal', 'tempat', 'jenis_kejahatan', 'nama', 'detail_kejadian', 'status_pengaduan'];
}