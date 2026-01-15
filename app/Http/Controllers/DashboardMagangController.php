<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMagangController extends Controller
{
    public function index()
    {
        // sementara data dummy (nanti bisa dari database)
        $projects = [
            [
                'title' => 'Software Engineering',
                'company' => 'PT. Telkomsel jaya abadi',
                'progress' => 70,
                'deadline' => '25 Oktober 2025',
                'members' => 3,
            ],
            [
                'title' => 'UI/UX Designer',
                'company' => 'PT. Telkomsel jaya abadi',
                'progress' => 45,
                'deadline' => '3 Oktober 2025',
                'members' => 2,
            ],
        ];

        return view('dashboard-magang', compact('projects'));
    }
}
