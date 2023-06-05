<?php

namespace App\Http\Controllers;

use App\Models\HasilKeputusan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\AlternatifWisata;

class HasilKeputusanController extends Controller
{
    public function index()
    {
        $hasil = HasilKeputusan::with('RAlternatif')->paginate(5);

        return view('hasil.index', [
            'hasil' => $hasil,
        ]);
    }
    public function addView()
    {
        $alternatif_ = AlternatifWisata::all();
        return view('hasil.create', compact('alternatif_',));
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

        HasilKeputusan::create($data);

        return redirect()->route('hasil.index');
    }
    public function edit($id)
    {
        $hasil = HasilKeputusan::findOrFail($id);
        $alternatif_ = AlternatifWisata::all();
        return view('hasil.edit', compact('hasil','alternatif_',));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nilai_preferensi' => 'required|min:3'
        ]);
        $hasil = HasilKeputusan::findOrFail($id);
        $hasil->id_alternatif = $request->id_alternatif;
        $hasil->fasilitas = $request->fasilitas;
        $hasil->nilai_preferensi = $request->nilai_preferensi;
        $hasil->save();

        return redirect()->route('hasil.index');
    }

    public function destroy($id)
    {
        $hasil = HasilKeputusan::findOrFail($id);
        $hasil->delete();
        return redirect('/hasil');
    }


}
