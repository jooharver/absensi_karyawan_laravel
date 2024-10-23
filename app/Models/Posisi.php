<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisis';
    protected $primaryKey = 'id_posisi';
    protected $fillable = ['posisi'];

    // Relasi dengan tabel karyawan (One to Many)
    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'id_posisi', 'id_posisi');
    }
}