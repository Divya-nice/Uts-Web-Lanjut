@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold text-red-700 mb-6">
        Tambah Donor
    </h1>

    <form action="/donor" method="POST">

        @csrf

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Nama Pendonor
            </label>

            <input type="text"
                   name="nama"
                   class="w-full border rounded-xl p-3"
                   placeholder="Masukkan nama pendonor">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Tanggal Donor
            </label>

            <input type="date"
                   name="tanggal_donor"
                   class="w-full border rounded-xl p-3">

        </div>

        <div class="mb-6">

            <label class="block mb-2 font-semibold">
                Jumlah Darah (ml)
            </label>

            <input type="number"
                   name="jumlah"
                   class="w-full border rounded-xl p-3"
                   placeholder="Contoh: 350">

        </div>

        <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">

            Simpan

        </button>

    </form>

</div>

@endsection