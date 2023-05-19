<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class religi extends Model
{
    use HasFactory;
    protected $table = 'religi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alamat', 'tahun', 'no_telp'
    ];
}
