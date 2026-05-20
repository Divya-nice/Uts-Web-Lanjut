@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-4xl font-bold text-red-700">
        Data Donor
    </h1>

    <a href="/donor/create"
       class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl transition duration-300">

        + Tambah Donor

    </a>

</div>

<div class="bg-white p-6 rounded-2xl shadow-lg overflow-hidden">

    <table class="w-full overflow-hidden rounded-xl">

        <thead>

            <tr class="bg-gradient-to-r from-red-500 to-red-700 text-white text-center">

                <th class="p-4">No</th>
                <th class="p-4">NIK</th>
                <th class="p-4">Nama Pendonor</th>
                <th class="p-4">Golongan Darah</th>
                <th class="p-4">Tanggal Donor</th>
                <th class="p-4">Jumlah</th>
                <th class="p-4">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($donors as $donor)

            <tr class="border-b text-center hover:bg-red-50 transition duration-200">

                <td class="p-4">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4">
                    {{ $donor->pendonor->nik ?? '-' }}
                </td>

                <td class="p-4 font-semibold">
                    {{ $donor->pendonor->nama ?? '-' }}
                </td>

                <td class="p-4">
                    {{ $donor->pendonor->golongan_darah ?? '-' }}
                </td>

                <td class="p-4">
                    {{ $donor->tanggal_donor }}
                </td>

                <td class="p-4">
                    {{ $donor->jumlah }} ml
                </td>

                <td class="p-4">

                    <div class="flex justify-center gap-3">

                        <a href="/donor/{{ $donor->id }}/edit"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg transition duration-300 shadow">

                            Edit

                        </a>

                        <form action="/donor/{{ $donor->id }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300 shadow">

                                Hapus

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="7" class="p-6 text-center text-gray-500">

                    Belum ada data donor

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection