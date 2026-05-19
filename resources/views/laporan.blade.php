@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-red-700 mb-8">

    Laporan Donor Darah

</h1>

<div class="bg-white rounded-2xl shadow-lg p-6">

<table class="w-full">

    <thead>

        <tr class="bg-gradient-to-r from-slate-500 to-slate-700 text-white text-center">

            <th class="p-4">No</th>
            <th class="p-4">Nama</th>
            <th class="p-4">Tanggal Donor</th>
            <th class="p-4">Jumlah</th>

        </tr>

    </thead>

    <tbody>

        @foreach($donor as $d)

        <tr class="border-b text-center">

            <td class="p-4">
                {{ $loop->iteration }}
            </td>

            <td class="p-4">
                {{ $d->pendonor->nama ?? '-' }}
            </td>

            <td class="p-4">
                {{ $d->tanggal_donor }}
            </td>

            <td class="p-4">
                {{ $d->jumlah }} ml
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection