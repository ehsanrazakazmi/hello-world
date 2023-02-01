<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function public()
    {
        return view('public');
    }

    public function home()
    {
        return redirect('dashboard');
    }
}
