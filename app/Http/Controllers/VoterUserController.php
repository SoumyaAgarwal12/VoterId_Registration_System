<?php

namespace App\Http\Controllers;

use App\Models\VoterUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("RegisteredUsers.index");
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
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'emailId' => ['required','email'],
            'password' => ['required'],
            'comfirmPassword' => ['required']
        ]);

        $registerUsers = new VoterUser;
        $registerUsers->firstName = $_REQUEST['first_name'];
        $registerUsers->lastName = $_REQUEST['last_name'];
        $registerUsers->email = $_REQUEST['emailId'];
        $registerUsers->password = $_REQUEST['password'];
        $registerUsers->save();

        return redirect()->back()->with('success','Your Registration has done');
    }

    /**
     * Display the specified resource.
     */
    public function show(VoterUser $voterUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VoterUser $voterUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VoterUser $voterUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VoterUser $voterUser)
    {
        //
    }
}
