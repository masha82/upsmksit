<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opini extends Model
{
    protected $table = 'opini';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['judul', 'tgl_opini', 'isi', 'editor', 'nama_editor'];
}
