<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comingSoon(Request $request)
    {
        return view('coming-soon');
    }
}
