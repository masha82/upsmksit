<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['judul', 'isi', 'thumbnail', 'file'];
}
