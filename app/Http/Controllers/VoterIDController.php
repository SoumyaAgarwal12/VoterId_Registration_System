<?php

namespace App\Http\Controllers;

use App\Models\VoterID;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\VoterIDMail;
use Illuminate\Support\Facades\Mail;

class VoterIDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allusers = VoterID::get();
        return view("VoterIDUsers.allUsers",compact("allusers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("VoterIDUsers.create");
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
            'mobile' => ['required','numeric'],
            'dob' => ['required'],
            'address' => ['required'],
            'taluk' => ['required'],
            'district' => ['required'],
            'state' => ['required'],
        ]);

        $dbData = new VoterID;
        $dbData->register_id = uniqid();
        $dbData->firstName = $_REQUEST['first_name'];
        $dbData->lastName = $_REQUEST['last_name'];
        $dbData->email = $_REQUEST['emailId'];
        $dbData->mobile = $_REQUEST['mobile'];
        $dbData->dob = $_REQUEST['dob'];
        $dbData->address = $_REQUEST['address'];
        $dbData->taluk = $_REQUEST['taluk'];
        $dbData->district = $_REQUEST['district'];
        $dbData->state = $_REQUEST['state'];
        $dbData->save();

        Mail::to($dbData->email)->send(new VoterIDMail($dbData));

        return redirect()->back()->with('success','Your VoterID Registration has done. Please check you registered Email Id.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VoterID $voterID)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VoterID $voterID)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VoterID $voterID)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VoterID $voterID)
    {
        //
    }
}
