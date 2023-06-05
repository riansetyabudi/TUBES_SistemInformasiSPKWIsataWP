<?php

namespace App\Http\Controllers;

use App\Models\BobotKriteria;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BobotKriteriaController extends Controller
{
    public function index()
    {
        $bobot = BobotKriteria::paginate(5);

        return view('bobot.index', [
            'bobot' => $bobot,
        ]);
    }
    public function addView()
    {
        return view('bobot.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_kriteria' => $request->input('nama_kriteria'),
            'bobot' => $request->input('bobot'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        BobotKriteria::create($data);

        return redirect()->route('bobot.index');
    }
    public function edit($id)
    {
        $bobot = BobotKriteria::findOrFail($id);
        return view('bobot.edit', compact('bobot'));
    }

    public function update(Request $request, $id)
    {
        $bobot = BobotKriteria::findOrFail($id);
        $bobot->nama_kriteria = $request->nama_kriteria;
        $bobot->bobot = $request->bobot;
        $bobot->save();

        return redirect('/bobot');
    }

    public function destroy($id)
    {
        $bobot = BobotKriteria::findOrFail($id);
        $bobot->delete();
        return redirect('/bobot');
    }
}
