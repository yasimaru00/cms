<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialsController extends Controller
{
    public function index()
    {
        return view('specials');
    }
}
