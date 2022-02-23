<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo " Hi! Selamat 
        Datang di Website Laravel";
    }


    public function about()
    {
        echo " NIM : 2141723001 <br><br>";
        echo " GALILEY SINGGANG M.Y <br><br>";
        echo " TI 2G";
    }

    public function articles($id)
    {
        echo " Ini adalah halaman Artikel dengan ID : {$id}";
    }
}
