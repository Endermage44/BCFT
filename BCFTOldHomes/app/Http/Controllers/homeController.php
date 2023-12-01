<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

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

        // THIS IS TEMPORARY UNTIL WE HAVE THE OTHER PAGES, This just lets me know that the validation is working
        // return view('/registration');
        if ($existingUser->roleID == 1){
            return view('/adminLanding');
        }

        if ($existingUser->roleID == 2){
            return view('/adminLanding');
        }

        if ($existingUser->roleID == 3){
            return view('/doctorLanding');
        }

        if ($existingUser->roleID == 4){
            return view('/caregiversDashboard');
        }

        if ($existingUser->roleID == 5){
            return view('/patientsDashboard');
        }

        


    }
}
