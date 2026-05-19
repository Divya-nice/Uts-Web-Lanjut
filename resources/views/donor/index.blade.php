@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-4xl font-bold text-red-700">
        Data Donor
    </h1>

    <a href="/donor/create"
       class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">

        + Tambah Donor

    </a>

</div>

<div class="bg-white p-6 rounded-2xl shadow">

    <table class="w-full">

        <thead class="bg-gradient-to-r from-red-500 to-red-700 text-white text-center">

            <tr>
                <th class="p-4">No</th>
                <th class="p-4">Nama Pendonor</th>
                <th class="p-4">Tanggal Donor</th>
                <th class="p-4">Jumlah</th>
                <th class="p-4">Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach($donors as $donor)

            <tr class="border-b">

                <td class="p-4 text-center">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4 text-center">
                    {{ $donor->pendonor->nama }}
                </td>

                <td class="p-4 text-center">
                    {{ $donor->tanggal_donor }}
                </td>

                <td class="p-4 text-center">
                    {{ $donor->jumlah }} ml
                </td>

                <td class="p-4 text-center">

                    <div class="flex justify-center gap-3">

                        <a href="/donor/{{ $donor->id }}/edit"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg transition duration-300">

                            Edit

                        </a>

                        <form action="/donor/{{ $donor->id }}"
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