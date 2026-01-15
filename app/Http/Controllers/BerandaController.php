<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // Data Dummy dipindahkan ke sini agar bisa dipakai bersama oleh index() dan show()
    private $jobs = [
        1 => [
            'id' => 1,
            'title' => 'Software Engineering',
            'company' => 'PT. Telkomsel jaya abadi',
            'color' => 'bg-purple-600',
            'description' => 'Posisi Software Engineering bertanggung jawab dalam mengembangkan, menguji, dan memelihara aplikasi internal perusahaan. Kamu akan bekerja sama dengan tim developer dan UI/UX untuk menghasilkan produk yang berkualitas dan mudah digunakan.',
            'qualification' => [
                'Mahasiswa aktif jurusan Informatika',
                'Memahami dasar-dasar pemrograman',
                'Familiar dengan Git dan tools kolaborasi',
                'Mampu bekerja dalam tim dan berkomunikasi dengan baik'
            ],
            'duration' => "3-6 bulan\nFull WFO / Hybrid (sesuai ketentuan perusahaan)"
        ],
        2 => [
            'id' => 2,
            'title' => 'UI/UX Desainer',
            'company' => 'PT. Telkomsel jaya abadi',
            'color' => 'bg-purple-600',
            'description' => 'Bertanggung jawab membuat desain antarmuka yang user-friendly dan menarik.',
            'qualification' => [
                'Menguasai Figma dan tools desain lainnya',
                'Memiliki portofolio desain',
                'Kreatif dan inovatif'
            ],
            'duration' => "3 bulan\nRemote / WFH"
        ],
        3 => [
            'id' => 3,
            'title' => 'Data Analys',
            'company' => 'PT. Telkomsel jaya abadi',
            'color' => 'bg-purple-600',
            'description' => 'Menganalisis data perusahaan untuk membantu pengambilan keputusan strategis.',
            'qualification' => [
                'Menguasai SQL dan Python',
                'Kemampuan analisis yang kuat',
                'Teliti terhadap detail'
            ],
            'duration' => "6 bulan\nHybrid"
        ],
        4 => [
            'id' => 4,
            'title' => 'Cyber Scurity',
            'company' => 'PT. Telkomsel jaya abadi',
            'color' => 'bg-purple-600',
            'description' => 'Menjaga keamanan sistem informasi perusahaan dari serangan siber.',
            'qualification' => [
                'Paham tentang jaringan komputer',
                'Mengetahui dasar-dasar penetrasi testing',
                'Memiliki sertifikasi keamanan nilai plus'
            ],
            'duration' => "6 bulan\nWFO"
        ],
    ];

    // Menampilkan Halaman Beranda
    public function index()
    {
         $rekomendasi = [
            ['id' => 1, 'title' => 'Magang Backend Laravel', 'company' => 'PT Maju Jaya'],
            ['id' => 2, 'title' => 'Magang UI/UX', 'company' => 'Startup Keren'],
        ];
        return view('beranda', ['rekomendasi' => $this->jobs]);

    }

    // Menampilkan Halaman Detail Lowongan berdasarkan ID
    public function show($id)
    {
        // Cari data berdasarkan ID, jika tidak ada tampilkan 404 atau default
        $job = $this->jobs[$id] ?? abort(404, 'Lowongan tidak ditemukan');

        return view('detail-lowongan', compact('job'));
    }

}
