<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function Football()
    {
        return " Ini adalah halaman Football";
    }
    public function Cricket()
    {
        return " Ini adalah halaman Cricket";
    }
    public function Tennis()
    {
        return " Ini adalah halaman Tennis";
    }
    public function Cycling()
    {
        return " Ini adalah halaman Cycling";
    }
}
