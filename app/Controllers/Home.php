<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $n = 86400;
        $this->cachePage($n);
        return view('pages/home');
    }
}
