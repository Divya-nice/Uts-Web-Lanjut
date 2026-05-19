<?php

namespace App\Http\Controllers;

use App\Models\StokDarah;
use Illuminate\Http\Request;

class StokDarahController extends Controller
{
    public function index()
    {
        $stokDarah = StokDarah::all();

        return view('stok.index', compact('stokDarah'));
    }

    public function create()
    {
        return view('stok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'golongan_darah' => 'required',
            'stok' => 'required|numeric'
        ]);

        StokDarah::create([
            'golongan_darah' => $request->golongan_darah,
            'stok' => $request->stok
        ]);

        return redirect('/stok');
    }

    public function edit(int $id)
    {
        $stok = StokDarah::findOrFail($id);

        return view('stok.edit', compact('stok'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'golongan_darah' => 'required',
            'stok' => 'required|numeric'
        ]);

        $stok = StokDarah::findOrFail($id);

        $stok->update([
            'golongan_darah' => $request->golongan_darah,
            'stok' => $request->stok
        ]);

        return redirect('/stok');
    }

    public function destroy(int $id)
    {
        $stok = StokDarah::findOrFail($id);

        $stok->delete();

        return redirect('/stok');
    }
}