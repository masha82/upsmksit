<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thn_ajaran', 'kelas', 'jurusan', 'jumlah', 'link'];
}
