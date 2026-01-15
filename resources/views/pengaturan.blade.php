<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
</head>

<body class="bg-gray-100 font-sans antialiased flex justify-center min-h-screen">

<div class="w-full max-w-[420px] bg-white min-h-screen relative shadow-2xl flex flex-col">

    <!-- HEADER -->
    <div class="bg-[#D9D9D9] pt-12 px-6 pb-6 rounded-b-[30px] flex items-center relative z-10">
        <a href="{{ route('beranda') }}" class="p-2 -ml-2 rounded-full hover:bg-gray-300 transition">
            ←
        </a>
        <h1 class="text-lg font-medium text-black absolute left-1/2 -translate-x-1/2">
            Pengaturan
        </h1>
    </div>

    <!-- CONTENT -->
    <div class="flex-1 px-6 pt-8 pb-40">

        <!-- AKUN -->
        <div class="mb-6">
            <h2 class="text-base font-bold text-black mb-3 ml-1">Akun</h2>
            <div class="space-y-3">

                <a href="{{ route('pengaturan.edit-profil') }}"
                   class="block w-full bg-[#D9D9D9] hover:bg-gray-300 transition
                          text-black font-bold text-sm py-3 px-4 rounded-md shadow-sm text-center">
                    Edit Profil
                </a>

                <a href="{{ route('pengaturan.ubah-kontak') }}"
                   class="block w-full bg-[#D9D9D9] hover:bg-gray-300 transition
                          text-black font-bold text-sm py-3 px-4 rounded-md shadow-sm text-center">
                    Ubah Gmail / No Telephone
                </a>

                <a href="{{ route('pengaturan.ubah-password') }}"
                   class="block w-full bg-[#D9D9D9] hover:bg-gray-300 transition
                          text-black font-bold text-sm py-3 px-4 rounded-md shadow-sm text-center">
                    Ubah Kata Sandi
                </a>

            </div>
        </div>

        <!-- TENTANG -->
        <div class="mb-6">
            <h2 class="text-base font-bold text-black mb-3 ml-1">Tentang Aplikasi</h2>
            <div class="space-y-3">

                <a href="{{ route('pengaturan.versi') }}"
                   class="block w-full bg-[#D9D9D9] hover:bg-gray-300 transition
                          text-black font-bold text-sm py-10 px-10 rounded-md shadow-sm text-center">
                    Versi Aplikasi
                </a>

                <a href="{{ route('pengaturan.ketentuan') }}"
                   class="block w-full bg-[#D9D9D9] hover:bg-gray-300 transition
                          text-black font-bold text-sm py-3 px-4 rounded-md shadow-sm text-center">
                    Ketentuan Layanan
                </a>

            </div>
        </div>

    </div>

    <!-- BOTTOM NAV (FIXED, TIDAK NUTUP KONTEN) -->
<div class="fixed bottom-0 w-full max-w-[420px] bg-[#EBEBEB] border-t border-gray-300 rounded-t-[30px] pb-4 pt-4 px-10 flex justify-between items-center z-50">

            <a href="#" class="flex flex-col items-center justify-center text-gray-500 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.632 8.632a.75.75 0 0 1-.53 1.28h-1.47v7.497a.75.75 0 0 1-.75.75H5.596a.75.75 0 0 1-.75-.75V13.753H3.37a.75.75 0 0 1-.53-1.28L11.47 3.84Z" />
                    <path fill-rule="evenodd" d="M9.5 13.753h5v7.497h-5V13.753Z" clip-rule="evenodd"/>
                </svg>
            </a>

            <a href="{{ route('profile') }}" class="flex flex-col items-center justify-center text-gray-500 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </a>

            <a href="{{ route('pengaturan') }}" class="flex flex-col items-center justify-center text-black hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>

        </div>

</div>
</body>
</html>
