<?php

namespace App\Controllers;
 
class Pages extends BaseController
{
    function index(): string
    {
        return view('pages/home');
    }
    
    function coba()
    {
        echo "Halloo.. coba,,,";
    }
}