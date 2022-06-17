<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nama_sapi',
        'foto_sapi',
        'no_eartag',
        'jenis_sapi',
        'jenis_kelamin',
        'tanggal_lahir',
        'berat_badan',
        'tinggi_pundak',
        'lebar_dada',
        'panjang_badan',
        'status_kesehatan',
        'keterangan_perawatan_khusus'
    ];
}
