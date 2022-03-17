<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function clubs()
    {
        $clubs = collect([]);
        return view('clubs',compact('clubs'));
    }

    public function simulator()
    {
        $clubs = collect([]);
        return view('simulator',compact('clubs'));
    }
}
