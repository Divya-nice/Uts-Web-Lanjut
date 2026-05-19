<h1>Tambah Pendonor</h1>

<form action="{{ route('pendonor.store') }}" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <br><br>

    <input type="text" name="nik" placeholder="NIK">
    <br><br>

        <select name="jenis_kelamin">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select>
    <br><br>

    <select name="golongan_darah">
        <option>A</option>
        <option>B</option>
        <option>AB</option>
        <option>O</option>
    </select>
    <br><br>

    <textarea name="alamat" placeholder="Alamat"></textarea>
    <br><br>

    <input type="text" name="telepon" placeholder="Telepon">
    <br><br>

    <button type="submit">Simpan</button>
</form>