<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Middleware untuk admin
    public function __construct()
    {
        $this->middleware('role:admin');
        $this->middleware('noCache'); // Mencegah caching
    }

    // Dashboard admin
    public function index()
    {
        return view('admin.dashboard');
    }

    // Halaman UPLM
    public function showUplm($id)
    {
        return view('admin.uplm', compact('id'));
    }

    public function createUser()
    {
        return view('admin.akun');
    }

    public function recap()
    {
        return view('admin.rekapitulasi');
    }

    public function notifications()
    {
        return view('admin.notifikasi');
    }

    public function settings()
    {
        return view('admin.pengaturan');
    }
}
