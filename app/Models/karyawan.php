<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = [
        'nik', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'alamat',
        'agama', 'no_telepon', 'email', 'tanggal_masuk', 'id_posisi'
    ];

    // Relasi dengan tabel posisi (Many to One)
    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'id_posisi', 'id_posisi');
    }
}
