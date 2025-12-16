<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Berhasil</title>

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

        /* MOBILE FRAME (SAMA KAYAK BOOKING) */
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
            margin-bottom: 32px;
            color: #0b2545;
        }

        .btn {
            display: block;
            background: #3498db;
            color: #fff;
            padding: 14px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
        }

        .btn:hover {
            background: #2d86c9;
        }
    </style>
</head>
<body>

<div class="mobile-wrapper">
    <div class="card">
        <h2>Booking Bimbingan Berhasil!</h2>

        <div class="check"></div>

        <a href="/beranda" class="btn">
            Kembali ke Beranda
        </a>
    </div>
</div>

</body>
</html>
