<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwalpelajaran extends Model
{
    protected $table = 'jadwal_pelajaran';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thn_ajaran', 'semester', 'keterangan', 'file'];

}
