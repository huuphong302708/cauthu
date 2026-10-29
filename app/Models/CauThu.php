<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CauThu extends Model
{
    protected $table = 'cauthu';
    public $timestamps = true;
    protected $fillable = [
        'ten_cau_thu',
        'tuoi',
        'quoc_tich',
        'vi_tri',
        'luong',
    ];
}
