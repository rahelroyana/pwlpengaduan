<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('penduduk.index', compact('penduduk'));
    }

    public function show($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduk.show', compact('penduduk'));
    }

    public function store(Request $request)
    {
        $penduduk = new Penduduk;
        $penduduk->nama = $request->nama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->alamat = $request->alamat;
        $penduduk->no_hp = $request->no_hp;
        $penduduk->email = $request->email;
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->nama = $request->nama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->alamat = $request->alamat;
        $penduduk->no_hp = $request->no_hp;
        $penduduk->email = $request->email;
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus.');
    }
}