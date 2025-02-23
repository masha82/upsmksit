<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['link', 'keterangan'];
}
