<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gotakegiatan extends Model
{
    protected $table = 'gota_kegiatan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_kegiatan', 'foto', 'isi'];
}
