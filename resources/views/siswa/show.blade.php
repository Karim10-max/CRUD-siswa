<!DOCTYPE html>
<html>
<head>
    <title>Detail Siswa</title>
</head>
<body>
    <h1>Detail Siswa</h1>

    <table cellpadding="5">
        <tr><td>NIS</td><td>:</td><td>{{ $siswa->nis }}</td></tr>
        <tr><td>Nama</td><td>:</td><td>{{ $siswa->nama }}</td></tr>
        <tr><td>Rombel</td><td>:</td><td>{{ $siswa->rombel }}</td></tr>
        <tr><td>Rayon</td><td>:</td><td>{{ $siswa->rayon }}</td></tr>
        <tr><td>No Telp</td><td>:</td><td>{{ $siswa->no_telp }}</td></tr>
        <tr><td>Alamat</td><td>:</td><td>{{ $siswa->alamat }}</td></tr>
    </table>

    <br>
    <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a> |
    <a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>