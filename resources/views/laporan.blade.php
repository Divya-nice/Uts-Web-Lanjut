@extends('layouts.app')

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold bg-gradient-to-r from-red-600 to-pink-500 bg-clip-text text-transparent">

        Laporan Donor Darah

    </h1>

    <p class="text-gray-500 mt-2">

        Data donor darah dan pendonor yang belum donor

    </p>

</div>

{{-- ================= DATA DONOR ================= --}}

<div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">

    <div class="bg-gradient-to-r from-red-500 to-red-700 px-6 py-4">

        <h2 class="text-2xl font-bold text-white">

            Data Donor

        </h2>

    </div>

    <table class="w-full">

        <thead>

            <tr class="bg-red-50 text-red-700 text-center">

                <th class="p-4">No</th>
                <th class="p-4">NIK</th>
                <th class="p-4">Nama</th>
                <th class="p-4">Golongan Darah</th>
                <th class="p-4">Tanggal Donor</th>
                <th class="p-4">Jumlah</th>
                <th class="p-4">Status</th>

            </tr>

        </thead>

        <tbody>

            @forelse($donors as $d)

            <tr class="border-b text-center hover:bg-red-50 transition">

                <td class="p-4">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4">
                    {{ $d->pendonor->nik ?? '-' }}
                </td>

                <td class="p-4 font-semibold">
                    {{ $d->pendonor->nama ?? '-' }}
                </td>

                <td class="p-4">
                    {{ $d->pendonor->golongan_darah ?? '-' }}
                </td>

                <td class="p-4">
                    {{ $d->tanggal_donor }}
                </td>

                <td class="p-4">
                    {{ $d->jumlah }} ml
                </td>

                <td class="p-4">

                    <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm font-semibold">

                        Sudah Donor

                    </span>

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

{{-- ================= BELUM DONOR ================= --}}

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">

    <div class="bg-gradient-to-r from-slate-600 to-slate-800 px-6 py-4">

        <h2 class="text-2xl font-bold text-white">

            Pendonor Belum Donor

        </h2>

    </div>

    <table class="w-full">

        <thead>

            <tr class="bg-slate-100 text-slate-700 text-center">

                <th class="p-4">No</th>
                <th class="p-4">NIK</th>
                <th class="p-4">Nama</th>
                <th class="p-4">Golongan Darah</th>
                <th class="p-4">Status</th>

            </tr>

        </thead>

        <tbody>

            @forelse($belumDonor as $item)

            <tr class="border-b text-center hover:bg-slate-50 transition">

                <td class="p-4">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4">
                    {{ $item->nik }}
                </td>

                <td class="p-4 font-semibold">
                    {{ $item->nama }}
                </td>

                <td class="p-4">
                    {{ $item->golongan_darah }}
                </td>

                <td class="p-4">

                    <span class="bg-red-100 text-red-700 px-4 py-1 rounded-full text-sm font-semibold">

                        Belum Donor

                    </span>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5" class="p-6 text-center text-gray-500">

                    Semua pendonor sudah donor 🎉

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection