<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('dashboard.home');
    }

    public function showBerita()
    {
        $category = "terkini";
        return view('dashboard.news', ['category' => $category]);
    }

    public function showBeritaCategory($category)
    {
        return view('dashboard.news', ['category' => $category]);
    }

    public function openBerita($category, $slug)
    {

    }

    public function showBertutur()
    {

    }

    public function openBertutur($slug)
    {

    }

    public function showProfil()
    {

    }
}
