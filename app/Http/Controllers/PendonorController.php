<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;

class PendonorController extends Controller
{
    public function index()
    {
        $pendonors = Pendonor::all();

        return view('pendonor.index', compact('pendonors'));
    }

    public function create()
    {
        return view('pendonor.create');
    }

    public function store(Request $request)
    {
        Pendonor::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'golongan_darah' => $request->golongan_darah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect('/pendonor');
    }

    public function edit(int $id)
    {
        $pendonor = Pendonor::findOrFail($id);

        return view('pendonor.edit', compact('pendonor'));
    }

    public function update(Request $request, int $id)
    {
        $pendonor = Pendonor::findOrFail($id);

        $pendonor->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'golongan_darah' => $request->golongan_darah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect('/pendonor');
    }

    public function destroy(int $id)
    {
        $pendonor = Pendonor::findOrFail($id);

        $pendonor->delete();

        return redirect('/pendonor');
    }
}