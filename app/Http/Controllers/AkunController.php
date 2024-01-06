<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class AkunController extends Controller
{
    public function index()
    {
        $akun = Akun::all();
        return view('akun.index', compact('akun'));
    }

    public function show($id)
    {
        $akun = Akun::find($id);
        return view('akun.show', compact('akun'));
    }

    public function store(Request $request)
    {
        $akun = new Akun;
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->email = $request->email;
        $akun->nama = $request->nama;
        $akun->save();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil ditambahkan.');
    }
    public function create()
    {
        $akun['title'] = 'Tambah Akun';
        return view('akun.create', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        $akun = Akun::find($id);
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->email = $request->email;
        $akun->nama = $request->nama;
        $akun->save();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $akun = Akun::find($id);
        $akun->delete();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus.');
    }
}