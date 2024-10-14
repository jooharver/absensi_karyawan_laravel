<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'karyawans';

    // Primary key dari tabel
    protected $primaryKey = 'id_karyawan';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'no_telepon',
        'email',
        'tanggal_masuk',
        'foto_path',   // Menyimpan path gambar
        'id_posisi'
    ];

    /**
     * Relasi ke model Posisi
     * Karyawan belongsTo Posisi
     */
    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'id_posisi');
    }

    /**
     * Relasi ke model Absensi
     * Karyawan hasMany Absensi
     */
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'karyawan_id');
    }

    /**
     * Accessor untuk mengembalikan URL penuh dari foto
     * Jika path foto tidak ada, mengembalikan path default
     */
    public function getFotoUrlAttribute()
    {
        return $this->foto_path ? asset($this->foto_path) : asset('images/default-avatar.png');
    }
}
