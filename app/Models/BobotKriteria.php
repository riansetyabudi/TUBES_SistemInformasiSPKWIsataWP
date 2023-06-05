<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BobotKriteria extends Model
{
    use HasFactory;
    protected $table = 'bobot_kriteria';
    protected $primarykey ='id';
    protected $fillable = [
        'nama_kriteria',
        'bobot'
    ];

    public function NilaiKriteria() {
        return $this->hasMany(NilaiKriteria::class);
    }
    public function Normalisasi() {
        return $this->hasMany(Normalisasi::class);
    }
}
