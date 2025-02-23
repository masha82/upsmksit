<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelulusan extends Model
{
    protected $table = 'kelulusan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['thn_ajaran', 'nisn', 'no_peserta', 'namasiswa', 'ttl', 'kelas', 'jurusan', 'status'];

    public function getStatusAttribute($value){
        $result = "";
    
        if($value == 'Lulus' || $value = 'lulus' || $value == 'LULUS'){
            $result = 'LULUS';
        }elseif($value == 'Tidak Lulus' || $value = 'tidak lulus' || $value == 'TIDAK LULUS'){
            $result = 'TIDAK LULUS';
        }
        return $result;
    }
}