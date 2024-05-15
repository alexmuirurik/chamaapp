<?php

namespace App\Http\Controllers;

use App\Models\MerryGoRound;
use App\Http\Requests\StoreMerryGoRoundRequest;
use App\Http\Requests\UpdateMerryGoRoundRequest;

class MerryGoRoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerryGoRoundRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MerryGoRound $merryGoRound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerryGoRound $merryGoRound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerryGoRoundRequest $request, MerryGoRound $merryGoRound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerryGoRound $merryGoRound)
    {
        //
    }
}
