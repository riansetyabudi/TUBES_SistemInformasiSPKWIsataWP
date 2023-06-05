model <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $primarykey = "id";
    protected $fillable = [
        'id_rute',
        'id_outlet',
        'id_truk',
        'id_supir',
        'tanggal_pengiriman',
        'status_pengiriman',
    ];

    public function RTruk()
    {
        return $this->belongsTo(Truk::class, 'id_truk');
    }

    public function RSupir()
    {
        return $this->belongsTo(Supir::class, 'id_supir');
    }

    public function RRute()
    {
        return $this->belongsTo(Rute::class, 'id_rute');
    }

    public function ROutlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }

    public function Jadwalpengiriman()
    {
        return $this->hasMany(JadwalPengiriman::class);
    }
}