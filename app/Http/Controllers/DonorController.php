<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::with('pendonor')->latest()->get();

        return view('donor.index', compact('donors'));
    }

    public function create()
    {
        $pendonors = Pendonor::all();

        return view('donor.create', compact('pendonors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_donor' => 'required',
            'jumlah' => 'required|numeric'
        ]);

        // Cari pendonor berdasarkan nama
        $pendonor = Pendonor::where('nama', $request->nama)->first();

        // Kalau belum ada -> buat baru
        if (!$pendonor) {

            $pendonor = Pendonor::create([
                'nama' => $request->nama
            ]);
        }

        Donor::create([
            'pendonor_id' => $pendonor->id,
            'tanggal_donor' => $request->tanggal_donor,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/donor');
    }

    public function edit(int $id)
    {
        $donor = Donor::findOrFail($id);

        $pendonors = Pendonor::all();

        return view('donor.edit', compact('donor', 'pendonors'));
    }

    public function update(Request $request, Donor $donor)
    {
        $request->validate([
            'tanggal_donor' => 'required',
            'jumlah' => 'required|numeric'
        ]);

        $donor->update([
            'tanggal_donor' => $request->tanggal_donor,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/donor');
    }

    public function destroy(int $id)
    {
        $donor = Donor::findOrFail($id);

        $donor->delete();

        return redirect('/donor');
    }
}