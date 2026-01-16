<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Proyek</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

body {
    margin: 0;
    background: #f2f2f7;
    display: flex;
    justify-content: center;
}

/* WRAPPER */
.app {
    width: 100%;
    max-width: 390px;
    min-height: 100vh;
    background: #f2f2f7;
}

/* HEADER */
.header {
    position: sticky;
    top: 0;
    z-index: 50;
    display: flex;
    align-items: center;
    padding: 14px 16px;
    background: #ffffff;
    border-bottom: 1px solid #e5e5ea;
}

.header a {
    text-decoration: none;
    font-size: 22px;
    color: #000;
    width: 32px;
}

.header h2 {
    flex: 1;
    text-align: center;
    font-size: 17px;
    font-weight: 600;
    margin: 0;
}

.header span {
    width: 32px;
}

/* CONTENT */
.content {
    padding: 16px;
}

/* CARD FORM */
.card {
    background: #e6e6eb;
    border-radius: 14px;
    padding: 16px;
}

/* INPUT */
input {
    width: 100%;
    padding: 14px;
    margin-bottom: 14px;
    border-radius: 14px;
    border: none;
    background: #ffffff;
    font-size: 14px;
}

/* BUTTON */
button {
    width: 100%;
    padding: 14px;
    border-radius: 14px;
    border: none;
    background: #3a3a3c;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="app">

    <!-- HEADER -->
    <div class="header">
        <a href="{{ route('dashboard.magang') }}">←</a>
        <h2>Tambah Proyek</h2>
        <span></span>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="card">
            <form method="POST" action="{{ route('projects.store') }}">
                @csrf

                <input name="title" placeholder="Nama Proyek" required>
                <input name="company" placeholder="Tempat Magang" required>
                <input type="number" name="progress" min="0" max="100" value="0" required>
                <input type="date" name="deadline" required>

                <button type="submit">Tambah Proyek</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
