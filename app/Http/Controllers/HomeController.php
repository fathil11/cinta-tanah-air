<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showHome()
    {
        return view('home.home');
    }

    public function showBerita()
    {
        return view('home.berita', ['category' => 'Terkini']);
    }

    public function showBeritaCategory($category)
    {
        return view('home.berita', ['category' => $category]);
    }

    public function openArticle($slug)
    {
        return view('home.openArtikel');
    }

    public function showBertutur()
    {
        return view('home.bertutur');
    }

    public function showProfil()
    {
        return view('home.profil');
    }

    /// Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
