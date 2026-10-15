
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <p>Email</p>
        <input type="email" name="email"
               value="{{ old('email') }}" required>

        <p>Password</p>
        <input type="password" name="password" required>

        <br><br>
        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun?
        <a href="{{ route('register') }}">Register</a>
    </p>
</body>
</html>
