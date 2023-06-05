<?php

namespace App\Http\Controllers;
use App\Models\AlternatifWisata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlternatifWisataController extends Controller
{
    public function index()
    {
        $alternatif = AlternatifWisata::paginate(5);

        return view('alternatif.index', [
            'alternatif' => $alternatif,
        ]);
    }
    public function addView()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_wisata' => $request->input('nama_wisata'),
            'alamat_wisata' => $request->input('alamat_wisata'),
            'kategori' => $request->input('kategori'),
            'harga_tiket_masuk' => $request->input('harga_tiket_masuk'),
            'rating' => $request->input('rating'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        AlternatifWisata::create($data);

        return redirect()->route('alternatif.index');
    }
    public function edit($id)
    {
        $alternatif = AlternatifWisata::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        $alternatif = AlternatifWisata::findOrFail($id);
        $alternatif->nama_wisata = $request->nama_wisata;
        $alternatif->alamat_wisata = $request->alamat_wisata;
        $alternatif->kategori = $request->kategori;
        $alternatif->harga_tiket_masuk = $request->harga_tiket_masuk;
        $alternatif->rating = $request->rating;
        $alternatif->save();

        return redirect('/alternatif');
    }

    public function destroy($id)
    {
        $alternatif = AlternatifWisata::findOrFail($id);
        $alternatif->delete();
        return redirect('/alternatif');
    }

}
