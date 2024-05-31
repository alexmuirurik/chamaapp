<?php

namespace App\Http\Controllers;

use App\Models\Chama;
use App\Http\Requests\StoreChamaRequest;
use App\Http\Requests\UpdateChamaRequest;
use App\Models\User;

class ChamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chamas  =   Chama::all();
        $lists_card = 'components.lists.chamas';       
        return view('pages.index', compact('lists_card', 'chamas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form_template = 'components.form.chama-create';
        return view('pages.create', compact('form_template'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChamaRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Chama $chama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chama $chama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChamaRequest $request, Chama $chama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chama $chama)
    {
        //
    }
}
