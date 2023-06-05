<?php

namespace App\Http\Controllers;

use App\Models\BobotKriteria;
use App\Models\NilaiKriteria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NilaiKriteriaController extends Controller
{
    public function index()
    {
        $nilai_kriteria = NilaiKriteria::with('RBobotKriteria')->paginate(5);

        return view('nilai_kriteria.index', [
            'nilai_kriteria' => $nilai_kriteria,
        ]);
    }
    public function addView()
    {
        $bobotkriteria_ = BobotKriteria::all();
        return view('nilai_kriteria.create', compact('bobotkriteria_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria' => $request->input('id_kriteria'),
            'nilai' => $request->input('nilai'),
            'normalisasi' => $request->input('normalisasi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        NilaiKriteria::create($data);

        return redirect()->route('nilai_kriteria.index');
    }
    public function edit($id)
    {
        $bobotkriteria_ = BobotKriteria::all();
        $nilai_kriteria = NilaiKriteria::findOrFail($id);
        return view('nilai_kriteria.edit', compact('nilai_kriteria', 'bobotkriteria_'));
    }

    public function update(Request $request, $id)
    {
        $nilai_kriteria = NilaiKriteria::findOrFail($id);
        $nilai_kriteria->id_kriteria = $request->id_kriteria;
        $nilai_kriteria->nilai = $request->nilai;
        $nilai_kriteria->normalisasi = $request->normalisasi;
        $nilai_kriteria->save();

        return redirect('/nilai_kriteria');
    }

    public function destroy($id)
    {
        $nilai_kriteria = NilaiKriteria::findOrFail($id);
        $nilai_kriteria->delete();
        return redirect('/nilai_kriteria');
    }


}
