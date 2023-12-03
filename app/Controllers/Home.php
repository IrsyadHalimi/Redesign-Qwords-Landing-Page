<?php

namespace App\Controllers;

// controller home, landing page halaman utama
class Home extends BaseController
{
    public function index(): string
    {
        // set cache halaman dan menampilkan halaman
        $n = 86400;
        $this->cachePage($n);
        return view('pages/home');
    }
}
