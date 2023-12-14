<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\caregivers;
use App\Models\doctors;
use Illuminate\Http\Request;
use App\Models\rosters;
use App\Models\supervisors;

class RosterApiController extends Controller
{
    // public function create()
    // {
    //     $supervisors = supervisors::pluck('emailID', 'supervisorID');
    //     $doctors = doctors::pluck('emailID', 'doctorID');
    //     $caregivers = caregivers::pluck('emailID', 'caregiverID');

    //      

    //     // // return $supervisors;
    //     return view('newRoster', compact('supervisors', 'doctors', 'caregivers'));
    // }

    public function create()
{
    $supervisors = supervisors::get('emailID', 'supervisorID');
    $doctors = doctors::get('emailID', 'doctorID');
    $caregivers = caregivers::get('emailID', 'caregiverID');

        return view('newRoster', ['supervisors' => $supervisors], ['doctors' => $doctors,'caregivers'=> $caregivers]);
    // return view('newRoster', compact('supervisors', 'doctors', 'caregivers'));
}


    // public function createNewRoster(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'rosterDate' => 'required|date',
    //         'supervisor' => 'required|integer',
    //         'doctor' => 'required|integer',
    //         'caregiver1' => 'required|integer',
    //         'caregiver2' => 'required|integer',
    //         'caregiver3' => 'required|integer',
    //         'caregiver4' => 'required|integer',
    //     ]);

    //     // Create a new instance of the Roster model and populate it with the request data
    //     $roster = new rosters([
    //         'rosterDate' => $request->input('rosterDate'),
    //         'supervisor' => $request->input('supervisor'),
    //         'doctor' => $request->input('doctor'),
    //         'caregiver1' => $request->input('caregiver1'),
    //         'caregiver2' => $request->input('caregiver2'),
    //         'caregiver3' => $request->input('caregiver3'),
    //         'caregiver4' => $request->input('caregiver4'),
    //     ]);

    //     // Save the new roster data to the database
    //     $roster->save();

    //     return response()->json(['message' => 'Roster data added successfully']);
    // }



     public function getRosterData(Request $request)
     {
         $rosterDate = $request->input('rosterDate');
 
         $rosterData = rosters::where('rosterDate', $rosterDate)->first();
 
         return response()->json(['rosterData' => $rosterData]);
     }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     // Handle the form submission
     public function store(Request $request)
     {
         // Validate the incoming request data
         $request->validate([
             'rosterDate' => 'required|date',
             'supervisor' => 'required|exists:supervisors,supervisorID',
             'doctor' => 'required|exists:doctors,doctorID',
             'caregiver1' => 'required|exists:caregivers,caregiverID',
             'caregiver2' => 'required|exists:caregivers,caregiverID',
             'caregiver3' => 'required|exists:caregivers,caregiverID',
             'caregiver4' => 'required|exists:caregivers,caregiverID',
         ]);
 
         // Create a new instance of the Roster model and populate it with the request data
         $roster = new rosters([
             'rosterDate' => $request->input('rosterDate'),
             'supervisor' => $request->input('supervisor'),
             'doctor' => $request->input('doctor'),
             'caregiver1' => $request->input('caregiver1'),
             'caregiver2' => $request->input('caregiver2'),
             'caregiver3' => $request->input('caregiver3'),
             'caregiver4' => $request->input('caregiver4'),
         ]);
 
         // Save the new roster data to the database
         $roster->save();
 
         
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
