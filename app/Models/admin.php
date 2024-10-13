<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'password', 'created_at'];

    // Relasi dengan tabel admin_activity_logs (One to Many)
    public function activityLogs()
    {
        return $this->hasMany(AdminActivityLog::class, 'admin_id', 'id_admin');
    }
}
