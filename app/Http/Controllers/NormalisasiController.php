<?php

namespace App\Http\Controllers;
use App\Models\AlternatifWisata;
use App\Models\BobotKriteria;
use App\Models\Normalisasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function index()
    {
        $normalisasi = Normalisasi::with('RBobotKriteria','RAlternatif')->paginate(5);

        return view('normalisasi.index', [
            'normalisasi' => $normalisasi,
        ]);
    }
    public function addView()
    {
        $alternatif_ = AlternatifWisata::all();
        $bobotkriteria_ = BobotKriteria::all();
        return view('normalisasi.create', compact('bobotkriteria_', 'alternatif_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_alternatif' => $request->input('id_alternatif'),
            'id_kriteria' => $request->input('id_kriteria'),
            'nilai_normalisasi' => $request->input('nilai_normalisasi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Normalisasi::create($data);

        return redirect('/normalisasi');
    }
    public function edit($id)
    {
        $bobotkriteria_ = BobotKriteria::all();
        $alternatif_ = AlternatifWisata::all();
        $normalisasi = Normalisasi::findOrFail($id);
        return view('normalisasi.edit', compact('normalisasi', 'bobotkriteria_','alternatif_'));
    }

    public function update(Request $request, $id)
    {
        $normalisasi = Normalisasi::findOrFail($id);
        $normalisasi->id_alternatif = $request->id_alternatif;
        $normalisasi->id_kriteria = $request->id_kriteria;
        $normalisasi->nilai_normalisasi = $request->nilai_normalisasi;
        $normalisasi->save();

        return redirect('/normalisasi');
    }

    public function destroy($id)
    {
        $normalisasi = Normalisasi::findOrFail($id);
        $normalisasi->delete();
        return redirect('/normalisasi');
    }
}
