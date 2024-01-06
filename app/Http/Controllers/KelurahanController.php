<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahan'));
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.show', compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $kelurahan = new Kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->kode_pos = $request->kode_pos;
        $kelurahan->kota = $request->kota;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->provinsi = $request->provinsi;
        $kelurahan->save();

        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->kode_pos = $request->kode_pos;
        $kelurahan->kota = $request->kota;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->provinsi = $request->provinsi;
        $kelurahan->save();

        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();

        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan berhasil dihapus.');
    }
}