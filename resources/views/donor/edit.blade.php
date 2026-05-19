@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-red-700 mb-6">
    Edit Data Donor
</h1>

<div class="bg-white p-6 rounded-2xl shadow-lg">

<form action="{{ route('donor.update', $donor->id) }}" 
      method="POST">

    @csrf
    @method('PUT')

    <!-- Nama Pendonor -->
    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            Nama Pendonor
        </label>

        <input type="text"
            value="{{ $donor->pendonor->nama }}"
            class="w-full border rounded-xl p-3 bg-gray-100"
            readonly>

    </div>

    <!-- Tanggal -->
    <div class="mb-4">
        <label class="block mb-2 font-semibold">
            Tanggal Donor
        </label>

        <input type="date"
               name="tanggal_donor"
               value="{{ old('tanggal_donor', $donor->tanggal_donor) }}"
               class="w-full border p-3 rounded-xl">
    </div>

    <!-- Jumlah -->
    <div class="mb-4">
        <label class="block mb-2 font-semibold">
            Jumlah Donor
        </label>

        <input type="number"
               name="jumlah"
               value="{{ old('jumlah', $donor->jumlah) }}"
               class="w-full border p-3 rounded-xl">
    </div>

    <!-- Tombol -->
    <button type="submit"
            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">
        Update
    </button>

</form>

</div>

@endsection