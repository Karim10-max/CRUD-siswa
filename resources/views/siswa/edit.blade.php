<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIS</label><br>
        <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}">
        @error('nis')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ old('nama', $siswa->nama) }}">
        @error('nama')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Rombel</label><br>
        <input type="text" name="rombel" value="{{ old('rombel', $siswa->rombel) }}">
        @error('rombel')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Rayon</label><br>
        <input type="text" name="rayon" value="{{ old('rayon', $siswa->rayon) }}">
        @error('rayon')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>No Telp</label><br>
        <input type="text" name="no_telp" value="{{ old('no_telp', $siswa->no_telp) }}">
        @error('no_telp')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="3">{{ old('alamat', $siswa->alamat) }}</textarea>
        @error('alamat')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <button type="submit">Update</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>