<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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

        .register-card {
            width: 360px;
            background: #fff;
            border-radius: 24px;
            padding: 28px 22px;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
        }

        .register-card h2 {
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

        .error {
            font-size: 12px;
            color: red;
            margin-top: 4px;
            margin-left: 8px;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2>Register</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <input type="text" name="phone" placeholder="Nomor Telepon" value="{{ old('phone') }}">
            @error('phone') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <input type="date" name="birth_date" value="{{ old('birth_date') }}">
            @error('birth_date') <div class="error">{{ $message }}</div> @enderror
        </div>

        <!-- FIELD BARU -->
        <div class="form-group">
            <input type="text" name="alamat_domisili" placeholder="Alamat Domisili" value="{{ old('alamat_domisili') }}">
            @error('alamat_domisili') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <input type="text" name="asal_kampus" placeholder="Asal Kampus" value="{{ old('asal_kampus') }}">
            @error('asal_kampus') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <input type="text" name="program_studi" placeholder="Program Studi" value="{{ old('program_studi') }}">
            @error('program_studi') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password">
            <span onclick="togglePassword()">👁</span>
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn-submit">Submit</button>

        <p style="text-align:center;font-size:13px;margin-top:10px">
            Sudah punya akun? <a href="/login">Login</a>
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
