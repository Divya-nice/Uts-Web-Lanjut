@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-red-700 mb-8">

    Dashboard Donor Darah

</h1>

<div class="grid grid-cols-3 gap-6">

    <!-- Total Pendonor -->
    <div class="bg-gradient-to-r from-red-400 to-red-600 text-white p-8 rounded-2xl shadow-lg">

        <h5 class="text-lg">
            Total Pendonor
        </h5>

        <h1 class="text-5xl font-bold mt-4">
            {{ $totalPendonor }}
        </h1>

    </div>

    <!-- Total Donor -->
    <div class="bg-gradient-to-r from-blue-400 to-blue-600 text-white p-8 rounded-2xl shadow-lg">

        <h5 class="text-lg">
            Total Donor
        </h5>

        <h1 class="text-5xl font-bold mt-4">
            {{ $totalDonor }}
        </h1>

    </div>

    <!-- Stok Darah -->
    <div class="bg-gradient-to-r from-green-400 to-green-600 text-white p-8 rounded-2xl shadow-lg">

        <h5 class="text-lg">
            Stok Darah
        </h5>

        <h1 class="text-5xl font-bold mt-4">
            {{ $stok }}
        </h1>

    </div>

</div>

<!-- Donor Terbaru -->
<div class="bg-white rounded-2xl shadow-lg p-6 mt-10">

    <h2 class="text-2xl font-bold mb-6 text-gray-700">

        Donor Terbaru

    </h2>

    <table class="w-full">

        <thead>

            <tr class="bg-gradient-to-r from-red-500 to-red-700 text-white text-center">

                <th class="p-4">No</th>
                <th class="p-4">Nama</th>
                <th class="p-4">Tanggal</th>
                <th class="p-4">Jumlah</th>

            </tr>

        </thead>

        <tbody>

        @foreach($donorTerbaru as $item)

        <tr class="border-b text-center">

            <td class="p-4">
                {{ $loop->iteration }}
            </td>

            <td class="p-4">
                {{ $item->pendonor->nama }}
            </td>

            <td class="p-4">
                {{ $item->tanggal_donor }}
            </td>

            <td class="p-4">
                {{ $item->jumlah }} ml
            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection