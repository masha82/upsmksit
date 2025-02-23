<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $table = 'bidang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_bidang'];
}
