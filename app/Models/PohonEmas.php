<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PohonEmas extends Model
{
    use HasFactory;
    protected $table = 'tbl_pohon_emas';
    protected $fillable = [
        'idemas',
        'tanggal',
        'MID',
        'kode_pohon',
        'idkebun',
        'gram',
        'gram_umroh',
        'harga_jual',
        'harga_beli',
        'roi',
        'hasil_roi',
        'kontrak_berjalan',
        'paket_umroh',
        'status',
    ];
}
