
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('siswa.update', $siswa) }}" method="POST">
        @csrf
        @method('PUT')

        <p>NIS</p>
        <input type="text" name="nis"
               value="{{ old('nis', $siswa->nis) }}"
               inputmode="numeric" required>

        <p>Nama</p>
        <input type="text" name="nama"
               value="{{ old('nama', $siswa->nama) }}" required>

        <p>Rombel</p>
        <input type="text" name="rombel"
               value="{{ old('rombel', $siswa->rombel) }}" required>

        <p>Rayon</p>
        <input type="text" name="rayon"
               value="{{ old('rayon', $siswa->rayon) }}" required>

        <p>No. Telepon</p>
        <input type="text" name="no_telp"
               value="{{ old('no_telp', $siswa->no_telp) }}"
               inputmode="numeric" required>

        <p>Alamat</p>
        <textarea name="alamat" required>{{ old('alamat', $siswa->alamat) }}</textarea>

        <br><br>
        <button type="submit">Update</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>
</body>
</html>
