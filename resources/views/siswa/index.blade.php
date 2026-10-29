<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

<form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit">Logout</button>
</form>

<a href="/siswa/create">+ Tambah</a>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        @forelse ($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->rombel }}</td>
                <td>{{ $s->rayon }}</td>
                <td>{{ $s->no_telp }}</td>
                <td>{{ $s->alamat }}</td>
                <td>
                    <a href="{{ route('siswa.show', $s->id) }}">Lihat</a> |
                    <a href="{{ route('siswa.edit', $s->id) }}">Edit</a> |
                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" align="center">Belum ada data</td>
            </tr>
        @endforelse
    </table>
</body>
</html>