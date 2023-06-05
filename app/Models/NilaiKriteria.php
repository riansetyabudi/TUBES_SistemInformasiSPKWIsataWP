<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKriteria extends Model
{
    use HasFactory;
    protected $table = 'nilai_kriteria';
    protected $primarykey ='id';
    protected $fillable = [
        'id_kriteria',
        'nilai',
        'normalisasi'
    ];
    
    public function RBobotKriteria()
    {
        return $this->belongsTo(BobotKriteria::class, 'id_kriteria'); 
    }
}
