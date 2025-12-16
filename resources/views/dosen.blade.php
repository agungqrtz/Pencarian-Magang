<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 flex justify-center min-h-screen font-sans">

<div class="w-full max-w-[420px] bg-[#FDFDFC] min-h-screen shadow-2xl relative pb-32">

    <!-- ===== TITLE BAR ===== -->
    <div class="pt-10 px-6 pb-4 flex items-center justify-between">
        <a href="{{ route('beranda') }}" class="text-xl font-bold">←</a>

        <h1 class="text-lg font-semibold text-black">
            Daftar Dosen
        </h1>

        <button class="p-2 rounded-full hover:bg-gray-100">
            🔔
        </button>
    </div>

    <!-- ===== LIST DOSEN ===== -->
    <div class="px-6 space-y-4">

        @foreach ($dosen as $item)
            <div class="bg-white rounded-xl p-4 shadow flex items-center justify-between">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-purple-200 rounded-full flex items-center justify-center">
                        👤
                    </div>

                    <div>
                        <p class="font-bold text-sm">{{ $item->nama }}</p>
                        <p class="text-xs text-gray-500">{{ $item->bidang }}</p>
                        {{-- STATUS ONLINE DIHAPUS --}}
                    </div>
                </div>

                <a href="{{ route('dosen.show', $item->slug) }}"
                   class="text-blue-600 text-sm font-semibold">
                    Booking →
                </a>
            </div>
        @endforeach

    </div>

    <!-- ===== NAVBAR BAWAH ===== -->
    <div class="fixed bottom-0 w-full max-w-[420px] bg-[#EBEBEB] border-t border-gray-300
                rounded-t-[30px] py-4 px-10 flex justify-between items-center">

        <a href="{{ route('beranda') }}" class="flex flex-col items-center text-black">
            🏠
            <span class="text-xs">Home</span>
        </a>

        <a href="{{ route('dosen') }}" class="flex flex-col items-center text-black font-bold">
            📘
            <span class="text-xs">Dosen</span>
        </a>

        <a href="{{ route('pengaturan') }}" class="flex flex-col items-center text-black">
            ⚙️
            <span class="text-xs">Settings</span>
        </a>
    </div>

</div>

</body>
</html>
