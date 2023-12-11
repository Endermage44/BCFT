<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\pendingusers;
use Illuminate\Support\Facades\DB;

class registerControllerAPI extends Controller
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

        // Validate the request data
        $user = $request->validate([
            'role' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'emailID' => 'required|email',
            'phoneNumber' => 'required',
            'userPass' => 'required',
            'DOB' => 'required'
            ]);

            $existingUser = DB::table('users')->where('emailID', $user['emailID'])->first();

            if ($existingUser !== null && $user['emailID'] == $existingUser->emailID) {
                return view('/registration', ['error' => 'A User With This Email Already Exists']);
            }

            $dob = new \DateTime($user['DOB']);
            $currentDate = new \DateTime();

            $age = $dob->diff($currentDate)->y;

            $roleName = $user['role'];
            $role = DB::table('roles')->where('roleName', $roleName)->first();

            $roleID = $role->roleID;

            pendingusers::create([
                'roleID'=> $roleID,
                'firstName'=> $user['firstName'],
                'lastName'=> $user['lastName'],
                'emailID'=> $user['emailID'],
                'phoneNumber'=> $user['phoneNumber'],
                'userPass'=> $user['userPass'],
                'DOB' => $user['DOB'],
                'age'=> $age
            ]);
            return view('/registration', ['success' => 'You have Sucessfully registered, please wait until your account is approved!']);
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
