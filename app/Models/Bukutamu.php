<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukutamu extends Model
{
    protected $table = 'bukutamu';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['peran', 'nama_tamu', 'tanggal', 'kepentingan'];
}
