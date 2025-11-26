<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Data Dummy User sesuai desain
        $user = (object) [
            'name' => 'Anwar Zaed',
            'email' => 'Anwar666@gmail.com',
            'phone' => '+6286438346',
            'dob' => '13 Desember 2004',
            'address' => 'Dau, Sengkaling',
            'campus' => 'UMM',
            'major' => 'Sastra Informatika'
        ];

        return view('profile', compact('user'));
    }
}