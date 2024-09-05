<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landingpage/index');
    }

    public function about(): string
    {
        return view('landingpage/about');
    }

    public function potensi(): string
    {
        return view('landingpage/potensi');
    }

    public function umkm(): string
    {
        return view('landingpage/umkm');
    }

    public function pertambangan(): string
    {
        return view('landingpage/pertambangan');
    }

    public function kontak(): string
    {
        return view('landingpage/kontak');
    }
}
