<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['no_buku', 'judul', 'penerbit'];
}
