<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkingan extends Model
{
    use HasFactory;
    protected $table = 'perangkingan';
    protected $primarykey ='id';
    protected $fillable = [
        'id_alternatif',
        'nilai_preferensi',
        'peringkat',
        'id_preferensi'
    ];
    public function RAlternatif()
    {
        return $this->belongsTo(AlternatifWisata::class, 'id_alternatif');
    }
    public function RPreferensi()
    {
        return $this->belongsTo(PenilaianPreferensi::class, 'id_preferensi');
    }
    
}
