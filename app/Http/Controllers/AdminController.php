<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Pastikan hanya admin yang bisa mengakses halaman ini
    public function __construct()
    {
        $this->middleware('role:admin');
        $this->middleware('noCache'); // Terapkan middleware untuk mencegah caching
    }

    // Halaman dashboard admin
    public function index()
    {
        return view('admin.dashboard');
    }
}

