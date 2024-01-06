<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    public function show($id)
    {
        $informasi = Informasi::find($id);
        return view('informasi.show', compact('informasi'));
    }

    public function store(Request $request)
    {
        $informasi = new Informasi;
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->tanggal_publikasi = $request->tanggal_publikasi;
        $informasi->kategori = $request->kategori;
        $informasi->save();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $informasi = Informasi::find($id);
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->tanggal_publikasi = $request->tanggal_publikasi;
        $informasi->kategori = $request->kategori;
        $informasi->save();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus.');
    }
}