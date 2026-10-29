<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <label>NIS</label><br>
        <input type="text" name="nis" value="{{ old('nis') }}">
        @error('nis')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}">
        @error('nama')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Rombel</label><br>
        <input type="text" name="rombel" value="{{ old('rombel') }}">
        @error('rombel')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Rayon</label><br>
        <input type="text" name="rayon" value="{{ old('rayon') }}">
        @error('rayon')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>No Telp</label><br>
        <input type="text" name="no_telp" value="{{ old('no_telp') }}">
        @error('no_telp')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="3">{{ old('alamat') }}</textarea>
        @error('alamat')
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>