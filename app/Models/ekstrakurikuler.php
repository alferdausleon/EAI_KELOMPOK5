<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakurikuler extends Model
{
    use HasFactory;

    protected $connection="mysql_second";
    
    protected $fillable=[
        'nama',
        'jumlah_anggota',
        'description'
    ];
}
