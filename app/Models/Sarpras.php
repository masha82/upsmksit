<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarpras extends Model
{
    protected $table = 'sarpras';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_sarpras', 'jenis_ruang', 'panjang', 'lebar', 'kondisi', 'kesesuaian', 'foto', 'sarana', 'prasarana'];
    protected $attributes = ['kesesuaian' => null];
}
