<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Booking Bimbingan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-200 min-h-screen flex justify-center">

<!-- ROOT WRAPPER -->
<div class="relative w-full max-w-[420px] min-h-screen bg-gray-100">

    <!-- TOP BAR -->
    <div class="bg-white h-14 flex items-center justify-between px-4 shadow">
        <a href="{{ route('dosen') }}" class="text-xl">←</a>
        <span class="font-semibold">Booking Bimbingan</span>
        <span>🔔</span>
    </div>

    <!-- CONTENT -->
    <div class="p-4 space-y-4 pb-36">

        <!-- PROFIL DOSEN -->
        <div class="bg-white rounded-xl p-4 flex items-center gap-3 shadow">
            <div class="w-12 h-12 rounded-full bg-purple-200 flex items-center justify-center">
                👤
            </div>
            <div class="font-semibold">
                {{ $dosen->nama }}
            </div>
        </div>

        <!-- KALENDER (TIDAK DIUBAH) -->
        <div class="bg-white rounded-xl p-4 shadow text-center">
            <h3 class="font-semibold mb-3">
                {{ now()->translatedFormat('F Y') }}
            </h3>

            <div class="grid grid-cols-7 text-xs text-gray-400 mb-2">
                <div>M</div><div>T</div><div>W</div><div>T</div><div>F</div>
                <div class="text-blue-500">S</div>
                <div class="text-blue-500">S</div>
            </div>

            <div class="grid grid-cols-7 gap-2 text-sm">
                @php
                    $today = now()->startOfDay();
                    $daysInMonth = now()->daysInMonth;
                @endphp

                @for ($i = 1; $i <= $daysInMonth; $i++)
                    @php
                        $date = now()->startOfMonth()->addDays($i - 1);
                        $disabled = $date->lt($today);
                    @endphp

                    <button
                        {{ $disabled ? 'disabled' : '' }}
                        class="tanggal py-1 rounded
                        {{ $disabled
                            ? 'text-gray-300 cursor-not-allowed'
                            : 'hover:bg-blue-100'
                        }}">
                        {{ $i }}
                    </button>
                @endfor
            </div>
        </div>

        <!-- SLOT TERSEDIA (MANUAL, SESUAI GAMBAR) -->
        <div class="bg-white rounded-xl p-4 shadow">
            <h3 class="font-semibold mb-2 text-center">Slot Tersedia</h3>

            <div class="space-y-3 text-sm">

                <div class="flex justify-between items-center border-b pb-2">
                    <span>08.00 - 09.00</span>
                    <a href="{{ route('booking.berhasil') }}"
                       class="text-blue-500 font-semibold">
                        Booking
                    </a>
                </div>

                <div class="flex justify-between items-center border-b pb-2">
                    <span>11.00 - 12.00</span>
                    <a href="{{ route('booking.berhasil') }}"
                       class="text-blue-500 font-semibold">
                        Booking
                    </a>
                </div>

                <div class="flex justify-between items-center">
                    <span>14.00 - 15.00</span>
                    <a href="{{ route('booking.berhasil') }}"
                       class="text-blue-500 font-semibold">
                        Booking
                    </a>
                </div>

            </div>
        </div>

    </div>


        <!--- Bottom Navbar --->
        <div class="fixed bottom-0 w-full max-w-[420px] bg-[#EBEBEB] border-t border-gray-300 rounded-t-[30px] pb-4 pt-4 px-10 flex justify-between items-center z-50">
            
            <a href="#" class="flex flex-col items-center justify-center text-black">
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

            <a href="{{ route('pengaturan') }}" class="flex flex-col items-center justify-center text-gray-500 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>

        </div>

    </div>

</body>
</html>
