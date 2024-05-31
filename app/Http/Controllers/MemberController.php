<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Chama;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $session = Session::where('user_id', request()->user()->id)->first();
        $chama   = $session->chama;
        $members    = $chama->members()->get();
        $lists_card = 'components.lists.members';  
        return view('pages.index', compact('lists_card', 'members', 'chama'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form_template = 'components.form.member-create';
        return view('pages.create', compact('form_template'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
