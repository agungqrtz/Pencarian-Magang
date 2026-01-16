<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
</head>

<body class="bg-gray-100 font-sans antialiased flex justify-center min-h-screen">

<div class="w-full max-w-[420px] bg-white min-h-screen shadow-2xl flex flex-col">

    {{-- HEADER --}}
    <div class="bg-[#D9D9D9] pt-12 px-6 pb-6 rounded-b-[30px] relative">
        <a href="{{ route('pengaturan') }}"
           class="absolute left-4 top-12 p-2 rounded-full hover:bg-gray-300 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>

        <h1 class="text-lg font-semibold text-center text-black">
            Edit Profil
        </h1>
    </div>

    {{-- CONTENT --}}
    <div class="flex-1 px-6 pt-8 pb-10">

        <form action="{{ route('pengaturan.update-profil') }}" method="POST" class="space-y-5">
            @csrf

            {{-- NAMA --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                <input type="text" name="name"
                       value="{{ auth()->user()->name }}"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400"
                       required>
            </div>

            {{-- EMAIL --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email"
                       value="{{ auth()->user()->email }}"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400"
                       required>
            </div>

            {{-- TANGGAL LAHIR --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir"
                       value="{{ auth()->user()->tanggal_lahir ?? '' }}"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
            </div>

            {{-- NO TELEPON --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Nomor Telepon</label>
                <input type="text" name="no_telepon"
                       value="{{ auth()->user()->no_telepon ?? '' }}"
                       placeholder="08xxxxxxxxxx"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
            </div>

            {{-- ALAMAT --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Alamat Domisili</label>
                <textarea name="alamat" rows="3"
                          class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">{{ auth()->user()->alamat ?? '' }}</textarea>
            </div>

            {{-- ASAL KAMPUS --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Asal Kampus</label>
                <input type="text" name="kampus"
                       value="{{ auth()->user()->kampus ?? '' }}"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
            </div>

            {{-- PROGRAM STUDI --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Program Studi</label>
                <input type="text" name="prodi"
                       value="{{ auth()->user()->prodi ?? '' }}"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
            </div>

            {{-- PASSWORD BARU --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Password Baru</label>
                <input type="password" name="password"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
                <p class="text-xs text-gray-500 mt-1">
                    Kosongkan jika tidak ingin mengganti password
                </p>
            </div>

            {{-- KONFIRMASI PASSWORD --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                       class="w-full rounded-md border px-4 py-3 focus:ring-2 focus:ring-gray-400">
            </div>

            {{-- BUTTON --}}
            <div class="pt-6 space-y-3">
                <button type="submit"
                        class="w-full bg-black text-white font-semibold py-3 rounded-md hover:bg-gray-800">
                    Simpan Perubahan
                </button>

                <a href="{{ route('pengaturan') }}"
                   class="block w-full text-center bg-gray-300 font-semibold py-3 rounded-md hover:bg-gray-400">
                    Batal
                </a>
            </div>

        </form>
    </div>

</div>

</body>
</html>
