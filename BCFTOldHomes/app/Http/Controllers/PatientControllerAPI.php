<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientControllerAPI extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = DB::table('patients')
            ->join('users','patients.emailID','=','users.emailID')
            ->get();

        return view("patientInfo", ["patients" => $patients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     */

     //New changes added , this code right here will contain an array of the patient's associated groups. To find the group for the Additional Patients Info Page
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
