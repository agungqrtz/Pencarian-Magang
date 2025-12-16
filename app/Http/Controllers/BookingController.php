<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Slot;

class BookingController extends Controller
{
    // Menampilkan halaman booking
    public function index($slug)
    {
        $dosen = Dosen::where('slug', $slug)->firstOrFail();
        return view('booking', compact('dosen'));
    }

    // Ambil slot untuk tanggal tertentu (Ajax)
    public function getSlots(Request $request, $slug)
    {
        $dosen = Dosen::where('slug', $slug)->firstOrFail();
        $tanggal = $request->tanggal;

        // Ambil semua slot dari database untuk tanggal dan dosen ini
        $slots = Slot::where('dosen_id', $dosen->id)
                     ->where('tanggal', $tanggal)
                     ->orderBy('jam_mulai')
                     ->get();

        // Jika slot kosong, bisa otomatis buat default slot
        if ($slots->isEmpty()) {
            $defaultSlots = [
                ['07:00:00', '08:00:00'],
                ['08:00:00', '09:00:00'],
                ['13:00:00', '14:00:00'],
                ['16:00:00', '17:00:00'],
            ];

            foreach ($defaultSlots as $slot) {
                $slots[] = Slot::create([
                    'dosen_id' => $dosen->id,
                    'tanggal' => $tanggal,
                    'jam_mulai' => $slot[0],
                    'jam_selesai' => $slot[1],
                    'status' => 'available',
                ]);
            }
        }

        return response()->json($slots);
    }

    // Booking slot (Ajax)
    public function booking(Request $request, $slug)
    {
        $dosen = Dosen::where('slug', $slug)->firstOrFail();

        $slot = Slot::where([
            'dosen_id' => $dosen->id,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ])->first();

        if ($slot) {
            $slot->status = 'booked';
            $slot->save();
        }

        return response()->json(['success' => true]);
    }
}
