@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold text-red-700 mb-6">
        Edit Stok Darah
    </h1>

    <form action="/stok/{{ $stok->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Golongan Darah
            </label>

            <select name="golongan_darah"
                    class="w-full border rounded-xl p-3">

                <option value="A" {{ $stok->golongan_darah == 'A' ? 'selected' : '' }}>A</option>

                <option value="B" {{ $stok->golongan_darah == 'B' ? 'selected' : '' }}>B</option>

                <option value="AB" {{ $stok->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>

                <option value="O" {{ $stok->golongan_darah == 'O' ? 'selected' : '' }}>O</option>

            </select>

        </div>

        <div class="mb-6">

            <label class="block mb-2 font-semibold">
                Stok
            </label>

            <input type="number"
                   name="stok"
                   value="{{ $stok->stok }}"
                   class="w-full border rounded-xl p-3">

        </div>

        <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">

            Update

        </button>

    </form>

</div>

@endsection