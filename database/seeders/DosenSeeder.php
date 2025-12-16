<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::insert([
            [
                'nama' => 'Ali Sofyan K., S.Kom, M.Kom.',
                'slug' => 'ali-sofyan',
                'bidang' => 'Game Cerdas',
                'avatar' => 'ali.png'
            ],
            [
                'nama' => 'Aminuddin, S.Kom, M.Cs.',
                'slug' => 'aminuddin',
                'bidang' => 'Rekayasa Perangkat Lunak',
                'avatar' => 'aminuddin.png'
            ],
            [
                'nama' => 'Bashor Fauzan S.Kom, M.Kom.',
                'slug' => 'bashor-fauzan',
                'bidang' => 'Keamanan Jaringan',
                'avatar' => 'bashor.png'
            ],
            [
                'nama' => 'Setio Basuki, S.T., M.T., Ph.D.',
                'slug' => 'setio-basuki',
                'bidang' => 'Data Science',
                'avatar' => 'setio.png'
            ],
        ]);
    }
}
