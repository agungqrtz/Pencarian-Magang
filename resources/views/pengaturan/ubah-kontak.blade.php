<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kontak</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex justify-center min-h-screen font-sans">

<div class="w-full max-w-[420px] bg-white min-h-screen shadow-xl flex flex-col">

    {{-- HEADER --}}
    <div class="bg-[#D9D9D9] pt-12 px-6 pb-6 rounded-b-[30px] relative">
        <a href="{{ route('pengaturan') }}"
           class="absolute left-4 top-12 p-2 rounded-full hover:bg-gray-300">
            ←
        </a>

        <h1 class="text-lg font-semibold text-center">
            Ubah Gmail / No Telepon
        </h1>
    </div>

    {{-- CONTENT --}}
    <div class="flex-1 px-6 pt-8">
        <form action="{{ route('pengaturan.update-kontak') }}" method="POST" class="space-y-5">
            @csrf

            {{-- EMAIL --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email"
                       value="{{ auth()->user()->email }}"
                       class="w-full border rounded-md px-4 py-3 focus:ring-2 focus:ring-gray-400"
                       required>
            </div>

            {{-- NO TELEPON --}}
            <div>
                <label class="block text-sm font-semibold mb-1">Nomor Telepon</label>
                <input type="text" name="no_telepon"
                       value="{{ auth()->user()->no_telepon ?? '' }}"
                       placeholder="08xxxxxxxxxx"
                       class="w-full border rounded-md px-4 py-3 focus:ring-2 focus:ring-gray-400"
                       required>
            </div>

            {{-- BUTTON --}}
            <div class="pt-6 space-y-3">
                <button type="submit"
                        class="w-full bg-black text-white font-semibold py-3 rounded-md">
                    Simpan
                </button>

                <a href="{{ route('pengaturan') }}"
                   class="block w-full text-center bg-gray-300 font-semibold py-3 rounded-md">
                    Batal
                </a>
            </div>
        </form>
    </div>

</div>

</body>
</html>
