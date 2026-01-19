<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Berhasil</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eaeaea;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* MOBILE FRAME */
        .mobile-wrapper {
            width: 100%;
            max-width: 390px;
            height: 100vh;
            background: #f5f7fa;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .check {
            width: 90px;
            height: 90px;
            border: 3px solid #111;
            border-radius: 50%;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .check::after {
            content: "✓";
            font-size: 42px;
            font-weight: bold;
        }

        h2 {
            margin-bottom: 10px;
            color: #0b2545;
        }
        
        p {
            color: #666;
            margin-bottom: 32px;
            font-size: 14px;
            line-height: 1.5;
        }

        .btn {
            display: block;
            background: #2D9CDB; /* Warna Biru Utama */
            color: #fff;
            padding: 14px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
        }

        .btn:hover {
            background: #2488bf;
        }
    </style>
</head>
<body>

<div class="mobile-wrapper">
    <div class="card">
        <h2>Apply Magang Berhasil!</h2>
        <p>Lamaran Anda telah berhasil dikirim. Silakan cek status secara berkala.</p>

        <div class="check"></div>

        <a href="{{ route('beranda') }}" class="btn">
            Kembali ke Beranda
        </a>
    </div>
</div>

</body>
</html>