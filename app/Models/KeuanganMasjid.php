<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganMasjid extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'uraian',
        'pemasukan',
        'pengeluaran',
    ];
}
