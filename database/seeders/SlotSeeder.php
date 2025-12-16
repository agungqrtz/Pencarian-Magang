<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SlotSeeder extends Seeder
{
    public function run()
    {
        $dosen_id = 1; // ganti sesuai id dosen
        $tanggal = Carbon::today();

        $slots = [
            ['jam_mulai' => '08:00:00', 'jam_selesai' => '09:00:00', 'status' => 'available'],
            ['jam_mulai' => '09:00:00', 'jam_selesai' => '10:00:00', 'status' => 'available'],
            ['jam_mulai' => '13:00:00', 'jam_selesai' => '14:00:00', 'status' => 'available'],
        ];

        foreach ($slots as $slot) {
            DB::table('slots')->insert([
                'dosen_id' => $dosen_id,
                'tanggal' => $tanggal->toDateString(),
                'jam_mulai' => $slot['jam_mulai'],
                'jam_selesai' => $slot['jam_selesai'],
                'status' => $slot['status'],
                'created_at' => now(),
            ]);
        }
    }
}
