<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Pengiriman;
use App\Models\Rute;
use App\Models\Supir;
use App\Models\Truk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::with(['RTruk', 'RSupir', 'RRute', 'ROutlet'])->paginate(100);

        return view('pengiriman.index', [
            'pengiriman' => $pengiriman,
        ]);
    }

    public function addView()
    {
        $rute_ = Rute::all();
        $outlet_ = Outlet::all();
        $truk_ = Truk::all();
        $supir_ = Supir::all();
        return view('pengiriman.create', compact('rute_', 'outlet_', 'truk_', 'supir_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_rute' => $request->input('id_rute'),
            'id_outlet' => $request->input('id_outlet'),
            'id_truk' => $request->input('id_truk'),
            'id_supir' => $request->input('id_supir'),
            'tanggal_pengiriman' => $request->input('tanggal_pengiriman'),
            'status_pengiriman' => $request->input('status_pengiriman'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Pengiriman::create($data);

        return redirect('/pengiriman');
    }

    public function edit($id)
    {
        $rute_ = Rute::all();
        $outlet_ = Outlet::all();
        $truk_ = Truk::all();
        $supir_ = Supir::all();
        $pengiriman = Pengiriman::findOrFail($id);
        return view('pengiriman.edit', compact('pengiriman', 'rute_', 'outlet_', 'truk_', 'supir_'));
    }

    public function update(Request $request, $id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->id_rute = $request->id_rute;
        $pengiriman->id_outlet = $request->id_outlet;
        $pengiriman->id_truk = $request->id_truk;
        $pengiriman->id_supir = $request->id_supir;
        $pengiriman->tanggal_pengiriman = $request->tanggal_pengiriman;
        $pengiriman->status_pengiriman = $request->status_pengiriman;
        $pengiriman->save();

        return redirect('/pengiriman');
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->delete();
        return redirect('/pengiriman');
    }

}