<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    public function index()
    {
        $clubs = collect([]);
        return view('simulator', compact('clubs'));
    }
    //
}
