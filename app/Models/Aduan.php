<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_aduan','nama','tanggal','kategori',
        'lokasi','deskripsi','foto','status'
    ];
}
