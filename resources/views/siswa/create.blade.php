
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <p>NIS</p>
        <input type="text" name="nis"
               value="{{ old('nis') }}" inputmode="numeric" required>

        <p>Nama</p>
        <input type="text" name="nama"
               value="{{ old('nama') }}" required>

        <p>Rombel</p>
        <input type="text" name="rombel"
               value="{{ old('rombel') }}" required>

        <p>Rayon</p>
        <input type="text" name="rayon"
               value="{{ old('rayon') }}" required>

        <p>No. Telepon</p>
        <input type="text" name="no_telp"
               value="{{ old('no_telp') }}" inputmode="numeric" required>

        <p>Alamat</p>
        <textarea name="alamat" required>{{ old('alamat') }}</textarea>

        <br><br>
        <button type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>
