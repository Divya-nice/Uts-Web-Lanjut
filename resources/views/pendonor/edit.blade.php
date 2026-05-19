@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow">

<h1 class="text-3xl font-bold text-red-700 mb-6">

    Edit Pendonor

</h1>

<form action="{{ route('pendonor.update', $pendonor->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            Nama
        </label>

        <input type="text"
               name="nama"
               value="{{ $pendonor->nama }}"
               class="w-full border rounded-xl p-3">

    </div>

    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            NIK
        </label>

        <input type="text"
               name="nik"
               value="{{ $pendonor->nik }}"
               class="w-full border rounded-xl p-3">

    </div>

    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            Golongan Darah
        </label>

        <select name="golongan_darah"
                class="w-full border rounded-xl p-3">

            <option {{ $pendonor->golongan_darah == 'A' ? 'selected' : '' }}>
                A
            </option>

            <option {{ $pendonor->golongan_darah == 'B' ? 'selected' : '' }}>
                B
            </option>

            <option {{ $pendonor->golongan_darah == 'AB' ? 'selected' : '' }}>
                AB
            </option>

            <option {{ $pendonor->golongan_darah == 'O' ? 'selected' : '' }}>
                O
            </option>

        </select>

    </div>

    <div class="mb-4">
        <label class="block mb-2 font-semibold">
            Jenis Kelamin
        </label>

        <select name="jenis_kelamin"
                class="w-full border rounded-lg p-3">

            <option value="Laki-laki"
                {{ $pendonor->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                Laki-laki
            </option>

            <option value="Perempuan"
                {{ $pendonor->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                Perempuan
            </option>

        </select>
    </div>

    <div class="mb-4">

        <label class="block mb-2 font-semibold">
            Alamat
        </label>

        <textarea name="alamat"
                  class="w-full border rounded-xl p-3">{{ $pendonor->alamat }}</textarea>

    </div>

    <div class="mb-6">

        <label class="block mb-2 font-semibold">
            Telepon
        </label>

        <input type="text"
               name="telepon"
               value="{{ $pendonor->telepon }}"
               class="w-full border rounded-xl p-3">

    </div>

    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow">

        Update

    </button>

</form>

</div>

@endsection