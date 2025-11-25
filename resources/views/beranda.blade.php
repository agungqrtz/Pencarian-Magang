<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pencarian Magang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-sans antialiased flex justify-center min-h-screen">

    <div class="w-full max-w-[420px] bg-[#FDFDFC] h-full min-h-screen relative shadow-2xl flex flex-col">
        
        <div class="pt-12 px-6 pb-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-black tracking-tight">Beranda</h1>
            
            <button class="p-2 rounded-full hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>
        </div>

        <div class="px-6 mb-6">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" 
                    class="block w-full pl-10 pr-3 py-3 border border-black rounded-full leading-5 bg-[#EBEBEB] placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-0 transition duration-150 ease-in-out sm:text-sm" 
                    placeholder="Cari..." disabled> </div>
        </div>

        <div class="px-6 flex-1 pb-32"> <h2 class="text-lg font-medium text-black mb-4">Rekomendasi</h2>

            <div class="space-y-4">
                @foreach($rekomendasi as $job)
                <div class="bg-[#D9D9D9] rounded-xl p-4 flex items-center gap-4 shadow-sm">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 flex items-center justify-center relative">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L14.5 9H22L16 13.5L18.5 21L12 16.5L5.5 21L8 13.5L2 9H9.5L12 2Z" fill="#6B4FBB" stroke="#6B4FBB" stroke-width="2" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-base font-bold text-black">{{ $job['title'] }}</h3>
                        <p class="text-xs text-gray-700">{{ $job['company'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-6 flex gap-3">
                <button class="flex-1 bg-[#2D9CDB] text-white font-bold text-sm py-3 px-2 rounded-lg shadow hover:bg-blue-600 transition">
                    Dashboard Magang
                </button>
                <button class="flex-1 bg-[#2D9CDB] text-white font-bold text-sm py-3 px-2 rounded-lg shadow hover:bg-blue-600 transition">
                    Booking Bimbingan
                </button>
            </div>
        </div>

        <div class="fixed bottom-0 w-full max-w-[420px] bg-[#EBEBEB] border-t border-gray-300 rounded-t-[30px] pb-4 pt-4 px-10 flex justify-between items-center z-50">
            <a href="#" class="flex flex-col items-center justify-center text-black">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.632 8.632a.75.75 0 0 1-.53 1.28h-1.47v7.497a.75.75 0 0 1-.75.75H5.596a.75.75 0 0 1-.75-.75V13.753H3.37a.75.75 0 0 1-.53-1.28L11.47 3.84Z" />
                    <path fill-rule="evenodd" d="M9.5 13.753h5v7.497h-5V13.753Z" clip-rule="evenodd"/>
                </svg>
            </a>

            <a href="#" class="flex flex-col items-center justify-center text-gray-500 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </a>

            <a href="#" class="flex flex-col items-center justify-center text-gray-500 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>
        </div>

    </div>

</body>
</html>