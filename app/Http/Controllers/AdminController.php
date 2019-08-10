<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showWelcome()
    {
        return view('admin.welcome');
    }

    public function showStatistic()
    {
        return view('admin.statistik');
    }

    public function showBuatArtikel()
    {
        return view('admin.buatArtikel');
    }

    public function showKelolaArtikel()
    {
        return view('admin.kelolaArtikel');
    }

    public function showDraftArtikel()
    {
        return view('admin.draftArtikel');
    }

    public function showKelolaUser()
    {
        return view('admin.kelolaUser');
    }

    public function showBuatUser()
    {
        return view('admin.buatUser');
    }

    public function buatUser(Request $request)
    { }
}
