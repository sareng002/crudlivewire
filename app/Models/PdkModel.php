<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdkModel extends Model
{


    use HasFactory;
    protected $fillable = ['nik', 'kk', 'nama', 'jenis_kelamn', 'tempat_lahir', 'alamat', 'pekerjaan', 'agama', 'SHDK'];
}
