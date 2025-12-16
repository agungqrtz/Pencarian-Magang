<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MonthlySlotSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua dosen
        $dosens = DB::table('dosen')->get();

        foreach ($dosens as $dosen) {
            $startDate = Carbon::today();
            $endDate = Carbon::today()->addMonth(); // 1 bulan ke depan

            while ($startDate->lte($endDate)) {
                // Jam slot per hari
                $slots = [
                    ['jam_mulai' => '08:00:00', 'jam_selesai' => '09:00:00'],
                    ['jam_mulai' => '09:00:00', 'jam_selesai' => '10:00:00'],
                    ['jam_mulai' => '10:00:00', 'jam_selesai' => '11:00:00'],
                    ['jam_mulai' => '13:00:00', 'jam_selesai' => '14:00:00'],
                    ['jam_mulai' => '14:00:00', 'jam_selesai' => '15:00:00'],
                ];

                foreach ($slots as $slot) {
                    DB::table('slots')->insert([
                        'dosen_id' => $dosen->id,
                        'tanggal' => $startDate->toDateString(),
                        'jam_mulai' => $slot['jam_mulai'],
                        'jam_selesai' => $slot['jam_selesai'],
                        'status' => 'available',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                $startDate->addDay();
            }
        }
    }
}
