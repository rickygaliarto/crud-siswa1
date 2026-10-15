
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
</head>
<body>
    <h2>Detail Data Siswa</h2>

    <p>NIS: {{ $siswa->nis }}</p>
    <p>Nama: {{ $siswa->nama }}</p>
    <p>Rombel: {{ $siswa->rombel }}</p>
    <p>Rayon: {{ $siswa->rayon }}</p>
    <p>No. Telepon: {{ $siswa->no_telp }}</p>
    <p>Alamat: {{ $siswa->alamat }}</p>

    <a href="{{ route('siswa.index') }}">Kembali</a>
    <a href="{{ route('siswa.edit', $siswa) }}">Edit</a>
</body>
</html>
