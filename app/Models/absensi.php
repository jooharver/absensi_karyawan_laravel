<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dari default (plural dari nama model)
    protected $table = 'absensis';

    // Menentukan primary key yang digunakan (default adalah 'id')
    protected $primaryKey = 'id_absensi';

    // Menentukan field yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'karyawan_id',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'status',
        'keterangan'
    ];

    // Menentukan relasi dengan model Karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id_karyawan');
    }
}
