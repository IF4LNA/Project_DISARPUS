<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    // Pastikan hanya pustakawan yang bisa mengakses halaman ini
    public function __construct()
    {
        $this->middleware('role:pustakawan');
        $this->middleware('noCache'); // Terapkan middleware untuk mencegah caching
    }

    // Halaman dashboard pustakawan
    public function index()
    {
        return view('pustakawan.dashboard');
    }
}

