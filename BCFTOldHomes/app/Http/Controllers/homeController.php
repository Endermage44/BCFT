<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function login(Request $request){
        $user = $request->validate([
            'emailID' => 'required|email',
            'userPass' => 'required'
            ]);

        $existingUser = Users::where('emailID', $user['emailID'])->first();

        // Checks for the email and if it is not found returns this statement
        if (!$existingUser) {
            echo 'Error: User not found';
            return;
        }

        // Checks if the passwords match, if not the error is returned
        if ($existingUser->userPass != $user['userPass']) {
            echo 'Error: Invalid Password';
            return;
        }

        if ($existingUser->roleID == 1){
            return view('/adminDash');
        }

        if ($existingUser->roleID == 2){
            return view('/supervisorDash');
        }

        if ($existingUser->roleID == 3){
            return view('/doctorDash');
        }

        if ($existingUser->roleID == 4){
            return view('/caregiversDashboard');
        }

        if ($existingUser->roleID == 5){
            return view('/patientsDashboard');
        } 
    }
}
