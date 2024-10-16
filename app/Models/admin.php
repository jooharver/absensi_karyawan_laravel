<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'admins'; // Nama tabel di database

    protected $fillable = [
        'username',
        'password',
    ];
}
