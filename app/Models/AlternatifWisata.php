<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternatifWisata extends Model
{
    use HasFactory;
    protected $table = 'alternatif_wisata';
    protected $primarykey ='id';
    protected $fillable = [
        'nama_wisata',
        'alamat_wisata',
        'kategori',
        'harga_tiket_masuk',
        'fasilitas',
        'rating',
    ];
    public function hasil_keputusan()
    {
        return $this->hasMany(HasilKeputusan::class); 
    }
    public function normalisasi()
    {
        return $this->hasMany(Normalisasi::class); 
    }
    public function penilaian_preferensi()
    {
        return $this->hasMany(PenilaianPreferensi::class); 
    }
    public function perangkingan()
    {
        return $this->hasMany(Perangkingan::class); 
    }
}
