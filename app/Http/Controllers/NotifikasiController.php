<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        // Data Dummy Notifikasi
        $notifikasi = [
            [
                'title' => 'Lamaran Diterima',
                'message' => 'Selamat! Lamaran magang Anda di PT. Telkomsel Jaya Abadi telah diterima.',
                'date' => 'Baru saja',
                'is_read' => false,
            ],
            [
                'title' => 'Pengingat Logbook',
                'message' => 'Jangan lupa mengisi logbook kegiatan magang hari ini sebelum pukul 23:59.',
                'date' => '2 Jam yang lalu',
                'is_read' => true,
            ],
            [
                'title' => 'Rekomendasi Baru',
                'message' => 'Ada lowongan baru "System Analyst" yang sesuai dengan minat Anda.',
                'date' => '1 Hari yang lalu',
                'is_read' => true,
            ],
        ];

        return view('notifikasi', compact('notifikasi'));
    }
}