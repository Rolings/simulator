<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Club\{StoreRequest,UpdateRequest};

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Club $clubs
     * @return View
     */
    public function index(Club $clubs): View
    {
        return view('club.index', ['clubs' => $clubs->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('club.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @param Club $club
     * @return RedirectResponse
     */
    public function store(StoreRequest $request, Club $club): RedirectResponse
    {
        $club->create($request->validated());

        return redirect()->route('club.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Club $club
     * @return View
     */
    public function edit(Club $club): View
    {
        return view('club.edit', ['club' => $club]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Club $club
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Club $club): RedirectResponse
    {
        $club->update($request->validated());

        return redirect()->route('club.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Club $club
     * @return RedirectResponse
     */
    public function destroy(Club $club): RedirectResponse
    {
        $club->delete();

        return redirect()->route('club.index');
    }
}
