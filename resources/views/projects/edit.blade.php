<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Proyek</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body { background:#f2f2f7;font-family:-apple-system;display:flex;justify-content:center; }
.app { max-width:390px;width:100%;background:#fff;min-height:100vh; }
input,button { width:100%;padding:14px;margin-bottom:14px;border-radius:14px;border:none; }
input { background:#ededed; }
button { background:#2d9cdb;color:#fff; }
</style>
</head>
<body>

<div class="app">
<a href="{{ route('dashboard.magang') }}">← Kembali</a>

<form method="POST" action="{{ route('projects.update', $project->id) }}">
@csrf
@method('PUT')

<input name="title" value="{{ $project->title }}">
<input name="company" value="{{ $project->company }}">
<input type="number" name="progress" value="{{ $project->progress }}">
<input type="date" name="deadline" value="{{ $project->deadline }}">
<button>Simpan Perubahan</button>
</form>
</div>

</body>
</html>
