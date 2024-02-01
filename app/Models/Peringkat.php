<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringkat extends Model
{
    use HasFactory;
    protected $table = 'tbl_peringkat';

    protected $primaryKey = 'idperingkat';
    public $timestamps = false;
    protected $fillable = [
        'peringkat', 'syarat_nilai', 'syarat_qualified', 'leg_qualified',
        'nilai_komisi', 'logo', 'status'
    ];
    protected $hidden = [];
    protected $casts = [
        'status' => 'boolean',
    ];
}
