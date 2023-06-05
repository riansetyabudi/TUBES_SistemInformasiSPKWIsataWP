<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianPreferensi extends Model
{
    use HasFactory;
    protected $table = 'penilaian_preferensi';
    protected $primarykey ='id';
    protected $fillable = [
        'id_alternatif',
        'nilai_preferensi'
    ];
    public function RAlternatif()
    {
        return $this->belongsTo(AlternatifWisata::class, 'id_alternatif', 'id');
    }
    public function perangkingan()
    {
        return $this->hasMany(Perangkingan::class); 
    }
}
