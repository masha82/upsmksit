<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    protected $table = 'kepsek';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'nip', 'jabatan', 'riwayat', 'foto', 'ucapan'];
}
