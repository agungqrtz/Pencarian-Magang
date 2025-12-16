<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = [
            (object)[ 
                'nama' => 'Ali Sofyan K., S.Kom, M.Kom.',
                'bidang' => 'Bidang Minat Game Cerdas',
                'slug' => Str::slug('Ali Sofyan K., S.Kom, M.Kom.')
            ],
            (object)[ 
                'nama' => 'Aminuddin, S.Kom, M.Cs.',
                'bidang' => 'Bidang Minat RPL',
                'slug' => Str::slug('Aminuddin, S.Kom, M.Cs.')
            ],
            (object)[ 
                'nama' => 'Bashor Fauzan S.Kom, M.Kom.',
                'bidang' => 'Bidang Minat Keamanan Jaringan',
                'slug' => Str::slug('Bashor Fauzan S.Kom, M.Kom.')
            ],
            (object)[ 
                'nama' => 'Setio Basuki, S.T., M.T., Ph.D.',
                'bidang' => 'Bidang Minat Data Science',
                'slug' => Str::slug('Setio Basuki, S.T., M.T., Ph.D.')
            ],
        ];

        return view('dosen', compact('dosen'));
    }

    public function show($slug)
    {
        $dosen = [
            (object)[ 
                'nama' => 'Ali Sofyan K., S.Kom, M.Kom.',
                'bidang' => 'Bidang Minat Game Cerdas',
                'slug' => Str::slug('Ali Sofyan K., S.Kom, M.Kom.')
            ],
            (object)[ 
                'nama' => 'Aminuddin, S.Kom, M.Cs.',
                'bidang' => 'Bidang Minat RPL',
                'slug' => Str::slug('Aminuddin, S.Kom, M.Cs.')
            ],
            (object)[ 
                'nama' => 'Bashor Fauzan S.Kom, M.Kom.',
                'bidang' => 'Bidang Minat Keamanan Jaringan',
                'slug' => Str::slug('Bashor Fauzan S.Kom, M.Kom.')
            ],
            (object)[ 
                'nama' => 'Setio Basuki, S.T., M.T., Ph.D.',
                'bidang' => 'Bidang Minat Data Science',
                'slug' => Str::slug('Setio Basuki, S.T., M.T., Ph.D.')
            ],
        ];

        $detail = collect($dosen)->firstWhere('slug', $slug);

        if (!$detail) {
            abort(404);
        }

        return view('booking', ['dosen' => $detail]);
    }
}
