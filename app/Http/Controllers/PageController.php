<?php

namespace App\Http\Controllers;

use App\Services\VisitorCounter;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comingSoon(Request $request)
    {
        new VisitorCounter($request);
        return view('coming-soon');
    }
}
