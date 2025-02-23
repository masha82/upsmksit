<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalujian extends Model
{
    protected $table = 'jadwal_ujian';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thn_ajaran', 'semester', 'nama_ujian', 'file'];
}
