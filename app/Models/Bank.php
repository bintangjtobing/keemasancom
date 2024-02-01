<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'tbl_bank';
    protected $primaryKey = 'bk_id';
    public $timestamps = false;
    protected $fillable = [
        'BI_Code', 'RTGS_Code', 'bk_bank', 'bk_norek', 'bk_nasabah', 'bk_logo', 'bk_status'
    ];
    protected $hidden = [];
    protected $casts = [
        'bk_status' => 'boolean',
    ];
}
