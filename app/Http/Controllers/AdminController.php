<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showWelcome()
    {
        return view('admin.welcome');
    }
}
