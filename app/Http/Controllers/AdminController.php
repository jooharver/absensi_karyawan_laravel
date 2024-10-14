<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all(); // Ambil semua data admin
        return view('admin.index', compact('admins')); // Kirim data ke view
    }
}
