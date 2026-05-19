@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold text-red-700 mb-6">
        Tambah Stok Darah
    </h1>

    <form action="/stok" method="POST">

        @csrf

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Golongan Darah
            </label>

            <select name="golongan_darah"
                    class="w-full border rounded-xl p-3">

                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>

            </select>

        </div>

        <div class="mb-6">

            <label class="block mb-2 font-semibold">
                Stok
            </label>

            <input type="number"
                   name="stok"
                   class="w-full border rounded-xl p-3">

        </div>

        <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">

            Simpan

        </button>

    </form>

</div>

@endsection