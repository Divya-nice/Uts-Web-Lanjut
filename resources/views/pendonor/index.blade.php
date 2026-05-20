@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-3xl font-bold text-red-700">
        Data Pendonor
    </h1>

    <a href="/pendonor/create"
       class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-xl shadow">
        + Tambah Pendonor
    </a>

</div>

<div class="bg-white p-6 rounded-2xl shadow">

    <table class="w-full border border-gray-300 overflow-hidden rounded-xl">

        <thead class="bg-gradient-to-r from-rose-400 to-red-500 text-white text-center">

            <tr>

                <th class="p-3 border">No</th>
                <th class="p-3 border">Nama</th>
                <th class="p-3 border">NIK</th>
                <th class="p-3 border">Golongan Darah</th>
                <th class="p-3 border">Jenis Kelamin</th>
                <th class="p-3 border">Alamat</th>
                <th class="p-3 border">Telepon</th>
                <th class="p-3 border">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach($pendonors as $item)

            <tr class="text-center hover:bg-gray-100">

                <td class="p-3 border">
                    {{ $loop->iteration }}
                </td>

                <td class="p-3 border">
                    {{ $item->nama }}
                </td>

                <td class="p-3 border">
                    {{ $item->nik }}
                </td>

                <td class="p-3 border">
                    {{ $item->golongan_darah }}
                </td>

                <td class="p-3 border">
                    {{ $item->jenis_kelamin }}
                </td>

                <td class="p-3 border">
                    {{ $item->alamat }}
                </td>

                <td class="p-3 border">
                    {{ $item->telepon }}
                </td>

                <td class="p-3 flex gap-2">

                    <a href="{{ route('pendonor.edit', $item->id) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg transition duration-300">
                        Edit
                    </a>

                    <form action="{{ route('pendonor.destroy', $item->id) }}"
                        method="POST">

                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">
                            Hapus
                        </button>

                    </form>

                </td> 

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection