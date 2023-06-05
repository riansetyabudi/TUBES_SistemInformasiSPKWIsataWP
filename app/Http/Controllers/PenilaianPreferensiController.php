<?php

namespace App\Http\Controllers;

use App\Models\AlternatifWisata;
use App\Models\PenilaianPreferensi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenilaianPreferensiController extends Controller
{
    public function index()
    {
        $penilaian_preferensi = PenilaianPreferensi::with('RAlternatif')->paginate(5);

        return view('penilaian_preferensi.index', [
            'penilaian_preferensi' => $penilaian_preferensi,
        ]);
    }
    public function addView()
    {
        
        $alternatif_ = AlternatifWisata::all();
        $penilaian_preferensi = PenilaianPreferensi::all();
        return view('penilaian_preferensi.create', compact('alternatif_'));
    }
    public function store(Request $request)
    {
        $data = [
            'id_alternatif' => $request->input('id_alternatif'),
            'nilai_preferensi' => $request->input('nilai_preferensi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        PenilaianPreferensi::create($data);

        return redirect()->route('penilaian_preferensi.index');
    }
    public function edit($id)
    {
        $alternatif_ = AlternatifWisata::all();
        $penilaian_preferensi = PenilaianPreferensi::findOrFail($id);
        return view('penilaian_preferensi.edit', compact('penilaian_preferensi', 'alternatif_'));
    }
    public function update(Request $request, $id)
    {
        $penilaian_preferensi = PenilaianPreferensi::findOrFail($id);
        $penilaian_preferensi->id_alternatif = $request->id_alternatif;
        $penilaian_preferensi->nilai_preferensi = $request->nilai_preferensi;
        $penilaian_preferensi->save();

        return redirect('/penilaian_preferensi');
    }
    public function destroy($id)
    {
        $penilaian_preferensi = PenilaianPreferensi::findOrFail($id);
        $penilaian_preferensi->delete();
        return redirect('/penilaian_preferensi');
    }

}
