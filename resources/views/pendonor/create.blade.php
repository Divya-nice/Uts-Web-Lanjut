@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-red-700 mb-8">

    Tambah Pendonor

</h1>

<div class="bg-white p-8 rounded-2xl shadow-lg">

<form action="{{ route('pendonor.store') }}"
      method="POST">

    @csrf

    <!-- Nama -->
    <div class="mb-6">

        <label class="block mb-2 font-semibold">

            Nama Pendonor

        </label>

        <input type="text"
               name="nama"
               class="w-full border rounded-xl p-4"
               placeholder="Masukkan nama pendonor">

    </div>

    <!-- NIK -->
    <div class="mb-6">

        <label class="block mb-2 font-semibold">

            NIK

        </label>

        <input type="text"
               name="nik"
               class="w-full border rounded-xl p-4"
               placeholder="Masukkan NIK">

    </div>

    <!-- Golongan Darah -->
    <div class="mb-6">

        <label class="block mb-2 font-semibold">

            Golongan Darah

        </label>

        <select name="golongan_darah"
                class="w-full border rounded-xl p-4">

            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>

        </select>

    </div>

    <!-- Jenis Kelamin -->
    <div class="mb-6">

    <label class="block mb-2 font-semibold">

        Jenis Kelamin

    </label>

    <select name="jenis_kelamin"
            class="w-full border rounded-xl p-4">

        <option value="Laki-laki">
            Laki-laki
        </option>

        <option value="Perempuan">
            Perempuan
        </option>

    </select>

    </div>

    <!-- Alamat -->
    <div class="mb-6">

        <label class="block mb-2 font-semibold">

            Alamat

        </label>

        <textarea name="alamat"
                  class="w-full border rounded-xl p-4"
                  placeholder="Masukkan alamat"></textarea>

    </div>

    <!-- Telepon -->
    <div class="mb-6">

        <label class="block mb-2 font-semibold">

            Nomor Telepon

        </label>

        <input type="text"
               name="telepon"
               class="w-full border rounded-xl p-4"
               placeholder="Masukkan nomor telepon">

    </div>

    <button type="submit"
            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl shadow">

        Simpan

    </button>

</form>

</div>

@endsection