
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register Akun</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <p>Nama</p>
        <input type="text" name="name"
               value="{{ old('name') }}" required>

        <p>Email</p>
        <input type="email" name="email"
               value="{{ old('email') }}" required>

        <p>Password</p>
        <input type="password" name="password" required>

        <p>Konfirmasi Password</p>
        <input type="password"
               name="password_confirmation" required>

        <br><br>
        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun?
        <a href="{{ route('login') }}">Login</a>
    </p>
</body>
</html>
