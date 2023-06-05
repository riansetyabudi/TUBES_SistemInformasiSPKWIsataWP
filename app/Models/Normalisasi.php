<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'normalisasi';
    protected $primarykey ='id';
    protected $fillable = [
        'id_alternatif',
        'id_kriteria',
        'nilai_normalisasi',
    ];
    
    public function RAlternatif()
    {
        return $this->belongsTo(AlternatifWisata::class, 'id_alternatif', 'id');
    }
    public function RBobotKriteria()
    {
        return $this->belongsTo(BobotKriteria::class, 'id_kriteria', 'id'); 
    }
}
