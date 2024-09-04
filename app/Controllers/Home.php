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
}
