<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Halaman Utama (Landing Page)
     */
    public function index()
    {
        return view('home.index', [
            'title' => 'Beranda'
        ]);
    }

    /**
     * Halaman Profil
     */
    public function profil()
    {
        return view('home.profil', [
            'title' => 'Profil'
        ]);
    }
}