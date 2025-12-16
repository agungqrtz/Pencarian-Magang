<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika tabel = slots)
    protected $table = 'slots';

    // Kolom yang boleh diisi
    protected $fillable = [
        'dosen_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'status'
    ];

    // Relasi ke dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
