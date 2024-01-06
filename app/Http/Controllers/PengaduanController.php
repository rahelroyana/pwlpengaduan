<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $pengaduan = new Pengaduan;
        $pengaduan->tanggal = $request->tanggal;
        $pengaduan->tempat = $request->tempat;
        $pengaduan->jenis_kejahatan = $request->jenis_kejahatan;
        $pengaduan->nama = $request->nama;
        $pengaduan->detail_kejadian = $request->detail_kejadian;
        $pengaduan->status_pengaduan = $request->status_pengaduan;
        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->tanggal = $request->tanggal;
        $pengaduan->tempat = $request->tempat;
        $pengaduan->jenis_kejahatan = $request->jenis_kejahatan;
        $pengaduan->nama = $request->nama;
        $pengaduan->detail_kejadian = $request->detail_kejadian;
        $pengaduan->status_pengaduan = $request->status_pengaduan;
        $pengaduan->save();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
}