<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutosis extends Model
{
    protected $table = 'osis';
    protected $fillable = ['tentang', 'foto'];
}
