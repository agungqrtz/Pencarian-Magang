<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f2f2f2;
        }

        .login-card {
            width: 360px;
            background: #fff;
            border-radius: 24px;
            padding: 28px 22px;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 18px;
        }

        .form-group {
            margin-bottom: 12px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 20px;
            border: none;
            background: #f1f1f1;
            outline: none;
            font-size: 14px;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper span {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
        }

        .btn-submit {
            width: 100%;
            margin-top: 10px;
            padding: 12px;
            border: none;
            border-radius: 20px;
            background: #2f9ad6;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #2386be;
        }

        .text-link {
            text-align: center;
            font-size: 13px;
            margin-top: 10px;
        }

        .text-link a {
            color: #2f9ad6;
            font-weight: 600;
            text-decoration: none;
        }

        .error {
            font-size: 12px;
            color: red;
            margin-top: 4px;
            margin-left: 8px;
        }

        .success {
            font-size: 13px;
            color: green;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Login</h2>

    {{-- pesan sukses dari register --}}
    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password">
            <span onclick="togglePassword()">👁</span>
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn-submit">Login</button>

        <p class="text-link">
            Belum punya akun?
            <a href="{{ url('/register') }}">Register</a>
        </p>
    </form>
</div>

<script>
function togglePassword() {
    const pwd = document.getElementById('password');
    pwd.type = pwd.type === 'password' ? 'text' : 'password';
}
</script>

</body>
</html>
