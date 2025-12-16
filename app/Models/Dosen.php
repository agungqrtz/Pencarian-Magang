<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'dosen';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'slug',
        'bidang',
        'avatar',
    ];

    // Relasi ke tabel slots
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
