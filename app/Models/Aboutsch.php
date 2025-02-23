<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutsch extends Model
{
    protected $table = 'school';
    protected $fillable = ['tentang', 'foto'];
}
