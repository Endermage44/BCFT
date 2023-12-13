<?php

namespace App\Http\Controllers;

session_start();
// $_SESSION["role"];

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

        if(isset($existingUser->roleID)){
            $_SESSION['role'] = $existingUser->roleID;
        }

        if (isset($_SESSION['role'])){
            if($_SESSION['role'] === 1){
                return view('adminDash');
            }
            elseif($_SESSION['role'] === 2){
                return view('supervisorDash');
            }
            elseif($_SESSION['role'] === 3){
                return view('doctorDash');
            }
            elseif($_SESSION['role'] === 4){
                return view('caregiversDashboard');
            }
            elseif($_SESSION['role'] === 5){
                return view('patientsDashboard');
            }
            else{
                return redirect()->back();
            }
    }
}
}