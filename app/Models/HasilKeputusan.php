<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKeputusan extends Model
{
    use HasFactory;
    protected $table = 'hasil_keputusan';
    protected $primarykey ='id';
    protected $fillable = [
        'id_alternatif',
        'fasilitas',
        'nilai_preferensi',
        'peringkat',
    ];
    public function RAlternatif()
    {
        return $this->belongsTo(AlternatifWisata::class, 'id_alternatif');
    }

}
