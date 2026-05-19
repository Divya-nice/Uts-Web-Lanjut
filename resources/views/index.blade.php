<h1>Data Pendonor</h1>

<a href="{{ route('pendonor.create') }}">Tambah Pendonor</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Golongan Darah</th>
        <th>Aksi</th>
    </tr>

    @foreach($pendonor as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->nik }}</td>
        <td>{{ $p->golongan_darah }}</td>
        <td>
            <a href="{{ route('pendonor.edit', $p->id) }}">Edit</a>

            <form action="{{ route('pendonor.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>