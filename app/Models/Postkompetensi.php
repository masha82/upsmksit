<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Postkompetensi extends Model
{
    protected $table = 'posting';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_keahlian', 'isi', 'foto'];
    protected $with= ['photos'];

    public function photos(){
        return $this->hasMany(Foto::class, 'id_keahlian');
    }

}
