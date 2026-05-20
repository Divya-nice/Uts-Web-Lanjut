@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-4xl font-bold text-red-700">
        Stok Darah
    </h1>

    <a href="/stok/create"
       class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">

        + Tambah Stok

    </a>

</div>

<div class="bg-white p-6 rounded-2xl shadow">

    <table class="w-full overflow-hidden rounded-xl">

        <thead class="bg-gradient-to-r from-emerald-400 to-green-600 text-white text-center">

            <tr>
                <th class="p-4">No</th>
                <th class="p-4">Golongan Darah</th>
                <th class="p-4">Stok</th>
                <th class="p-4">Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach($stokDarah as $item)

            <tr class="border-b">

                <td class="p-4 text-center">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4 text-center">
                    {{ $item->golongan_darah }}
                </td>

                <td class="p-4 text-center">
                    {{ $item->stok ?? 0 }} Kantong
                </td>

                <td class="p-4 text-center">

                    <div class="flex justify-center gap-3">

                        <a href="/stok/{{ $item->id }}/edit"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg transition duration-300">

                            Edit

                        </a>

                        <form action="/stok/{{ $item->id }}"
                            method="POST"
                            class="inline">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection