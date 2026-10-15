
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>

    <p>Selamat datang, {{ auth()->user()->name }}</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <hr>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <p><a href="{{ route('siswa.create') }}">+ Tambah Siswa</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->rombel }}</td>
                    <td>{{ $item->rayon }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $item) }}">Lihat</a> |
                        <a href="{{ route('siswa.edit', $item) }}">Edit</a>

                        <form action="{{ route('siswa.destroy', $item) }}"
                              method="POST"
                              style="display:inline"
                              onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
