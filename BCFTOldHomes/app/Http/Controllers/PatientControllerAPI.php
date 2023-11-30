<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class PatientControllerAPI extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */

     //New changes added , this code right here will contain an array of the patient's associated groups. To find the group for the Additional Patients Info Page
     public function show(string $id)
     {
        //  $patient = Patients::find($patientId);
 
        //  if (!$patient) {
        //      return response()->json(['error' => 'Patient not found'], 404);
        //  }
 
        //  // Load the patient's groups using the defined relationship
        //  $patientGroups = $patient->groups;
 
        //  return response()->json([
        //      'patientId' => $patient->patientID,
        //      'emergencyContactID' => $patient->emergencyContactID,
        //      'admissionDate' => $patient->admissionDate,
        //      'emailID' => $patient->emailID,
        //      'familyCode' => $patient->familyCode,
        //      'roleID' => $patient->roleID,
        //      'patientGroups' => $patientGroups, // Include patient groups in the response
        //  ]);
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         // Handle the form submission and update patient information
         // Ensure you validate and sanitize the input data
 
        //  $patient = Patients::find($id);
 
        //  if (!$patient) {
        //      return response()->json(['error' => 'Patient not found'], 404);
        //  }
 
        //  $patient->update([
        //      'admissionDate' => $request->input('admissionDate'),
        //      'emailID' => $request->input('emailID'),
        //      // Update other fields as needed
        //  ]);
 
        //  return response()->json(['message' => 'Patient information updated successfully']);
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
