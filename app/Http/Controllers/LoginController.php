<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view("login.create");
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
            'emailId' => ['required','email'],
            'password' => ['required'],
        ]);

        $data = [
            "email" => $request->emailId,
            "password" => $request->password
        ];


        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
         } else {
            return Redirect::back()->withErrors(['msg' => 'Please Enter Valid UserName and Password']);
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
