<?php

namespace App\Http\Controllers;
use App\Models\AlternatifWisata;
use App\Models\Perangkingan;
use App\Models\PenilaianPreferensi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PerangkinganController extends Controller
{
    public function index()
    {
        $perangkingan = Perangkingan::with('RAlternatif', 'RPreferensi')->paginate(5);

        return view('perangkingan.index', [
            'perangkingan' => $perangkingan,
        ]);
    }
    public function addView()
    {
        $alternatif_ = AlternatifWisata::all();
        $penilaian_preferensi = PenilaianPreferensi::all();
        return view('perangkingan.create', compact('alternatif_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_alternatif' => $request->input('id_alternatif'),
            'nilai_preferensi' => $request->input('nilai_preferensi'),
            'peringkat' => $request->input('peringkat'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Perangkingan::create($data);

        return redirect()->route('perangkingan.index');
    }
    public function edit($id)
    {
        $perangkingan = Perangkingan::findOrFail($id);
        $penilaian_preferensi = PenilaianPreferensi::pluck('nilai_preferensi');
        $alternatif_ = AlternatifWisata::all();
        return view('perangkingan.edit', compact('perangkingan', 'alternatif_', 'penilaian_preferensi'));
    }

    public function update(Request $request, $id)
{
    $perangkingan = Perangkingan::findOrFail($id);
    $perangkingan->id_alternatif = $request->id_alternatif;
    $perangkingan->nilai_preferensi = $request->nilai_preferensi;
    $perangkingan->peringkat = $request->peringkat; // Pastikan nilai 'peringkat' ditetapkan
    $perangkingan->save();

    return redirect('/perangkingan');
}

    public function destroy($id)
    {
        $perangkingan = Perangkingan::findOrFail($id);
        $perangkingan->delete();
        return redirect('/perangkingan');
    }
}
