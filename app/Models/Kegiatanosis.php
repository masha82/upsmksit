<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatanosis extends Model
{
    protected $table = 'kegiatan_osis';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['judul', 'tgl_keg', 'isi', 'foto'];
}
