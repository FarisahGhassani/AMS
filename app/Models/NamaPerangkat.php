<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPerangkat extends Model
{
    use HasFactory;

    protected $table = 'jenisperangkat';
    
    protected $fillable = [
        'perangkat',
        'kode_perangkat'
    ];
} 