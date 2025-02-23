<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktululus extends Model
{
    protected $table = 'waktululus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thn_ajaran', 'tanggal', 'pukul'];
}
