<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $fillable = ['nama_kelurahan', 'kode_pos', 'kota', 'kecamatan', 'provinsi'];
}