<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "MEDIFINDER";
        $slug = "home";
        $konten = "Ini konten";

        return view('home', compact('title', 'slug', 'konten'));
    }
}
