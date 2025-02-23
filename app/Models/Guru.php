<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'guru';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_guru', 'nip', 'id_mapel', 'foto'];
    protected $with = ['mapel'];

    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
