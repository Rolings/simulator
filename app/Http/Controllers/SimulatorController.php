<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Contracts\View\View;

class SimulatorController extends Controller
{
    /**
     * @param Club $clubs
     * @return View
     */
    public function index(Club $clubs): View
    {
        return view('simulator', ['clubs' => $clubs->get()]);
    }
}
