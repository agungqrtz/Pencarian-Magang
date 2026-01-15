<?php

namespace App\Http\Controllers;

use App\Models\User; // ✅ WAJIB
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function index()
    {
        return view('pengaturan');
    }

    // =====================
    // EDIT PROFIL
    // =====================
    public function editProfil()
    {
        return view('pengaturan.edit-profil');
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // ✅ PASTI ELOQUENT
        $user = User::findOrFail(Auth::id());

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save(); // ✅ TIDAK ERROR

        return redirect()
            ->route('pengaturan')
            ->with('success', 'Profil berhasil diperbarui');
    }
    
}
