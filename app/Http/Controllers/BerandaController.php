<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Data Dummy sesuai gambar untuk simulasi database
        $rekomendasi = [
            [
                'title' => 'Software Engineering',
                'company' => 'PT. Telkomsel jaya abadi',
                'color' => 'bg-purple-600' // Simulasi warna icon
            ],
            [
                'title' => 'UI/UX Desainer',
                'company' => 'PT. Telkomsel jaya abadi',
                'color' => 'bg-purple-600'
            ],
            [
                'title' => 'Data Analys',
                'company' => 'PT. Telkomsel jaya abadi',
                'color' => 'bg-purple-600'
            ],
            [
                'title' => 'Cyber Scurity',
                'company' => 'PT. Telkomsel jaya abadi',
                'color' => 'bg-purple-600'
            ],
        ];

        return view('beranda', compact('rekomendasi'));
    }
}