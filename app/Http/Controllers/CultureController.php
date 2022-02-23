<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function Designed()
    {
        return " Ini adalah halaman Design";
    }
    public function Style()
    {
        return " Ini adalah halaman Gaya";
    }
    public function TheCollection()
    {
        return " Ini adalah halaman Koleksi";
    }
}
