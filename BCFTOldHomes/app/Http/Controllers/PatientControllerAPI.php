<?php

namespace App\Http\Controllers;

session_start();

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
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1 && $_SESSION['role'] != 2 && $_SESSION['role'] != 3 && $_SESSION['role'] != 4){
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
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
     public function show(Request $request)
    {
    // Getting info from both tables
    $patients = DB::table('patients')
        ->join('users', 'patients.roleID', '=', 'users.roleID')
        ->get();

    // Setting input variables
    $patientID = $request->input('searchPatientID');
    $patientName = $request->input('searchPatientName');
    $patientAge = $request->input('searchPatientAge');
    $emergencyContact = $request->input('searchEmergencyContact');
    $emergencyContactName = $request->input('searchEmergencyContactName');
    $admissionDate = $request->input('searchAdmissionDate');

    // Base query
    $query = DB::table('patients')
        ->join('users', 'patients.roleID', '=', 'users.roleID')
        ->select('patients.patientID', 'patients.emergencyContactID', 'patients.emergencyContact', 'patients.admissionDate', 'users.age', 'users.roleID', 'users.firstName', 'users.lastName');

    // Applying search conditions
    if ($patientID) {
        $query->where('patients.patientID', $patientID);
    }

    if ($patientName) {
        $query->where('users.firstName', 'LIKE', "%$patientName%");
    }

    if ($patientAge) {
        $query->where('users.age', $patientAge);
    }

    if ($emergencyContact) {
        $query->where('patients.emergencyContact', 'LIKE', "%$emergencyContact%");
    }

    if ($emergencyContactName) {
        $query->where('patients.emergencyContactName', 'LIKE', "%$emergencyContactName%");
    }

    if ($admissionDate) {
        $query->where('patients.admissionDate', $admissionDate);
    }

    // Execute the query
    $results = $query->get();

    
    // return response()->json($results);
    return view('patientInfo', ['patients' => $results]);
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
