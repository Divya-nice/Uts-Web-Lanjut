<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PendonorController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\StokDarahController;

use App\Models\Pendonor;
use App\Models\Donor;
use App\Models\StokDarah;

Route::get('/', function () {

    $totalPendonor = Pendonor::count();

    $totalDonor = Donor::count();

    $stok = StokDarah::sum('stok');

    $donorTerbaru = Donor::latest()->take(5)->get();

    return view('dashboard', compact(
        'totalPendonor',
        'totalDonor',
        'stok',
        'donorTerbaru'
    ));

});

Route::get('/laporan', function () {

    $donor = Donor::with('pendonor')->get();

    return view('laporan', compact('donor'));

});

Route::resource('pendonor', PendonorController::class);

Route::resource('donor', DonorController::class)
    ->except(['show']);

Route::resource('stok', StokDarahController::class);