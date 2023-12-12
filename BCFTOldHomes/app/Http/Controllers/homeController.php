<?php

namespace App\Http\Controllers;

session_start();
$_SESSION["role"];

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

        //Admin Dash
        if (isset($_SESSION['role'])){
            if($_SESSION['role'] != 1){
                return redirect()->back();
            } else {
                return view('adminDash');
            }
        } else {
            return redirect()->back();
        }

        //Supervisor Dash
        if (isset($_SESSION['role'])){
            if($_SESSION['role'] != 2){
                return redirect()->back();
            } else {
                return view('supervisorDash');
            }
        } else {
            return redirect()->back();
        }

        //Doctor Dashboard
        if (isset($_SESSION['role'])){
            if($_SESSION['role'] != 3){
                return redirect()->back();
            } else {
                return view('doctorDash');
            }
        } else {
            return redirect()->back();
        }

        //Caregiver Dashboard
        if (isset($_SESSION['role'])){
            if($_SESSION['role'] != 4){
                return redirect()->back();
            } else {
                return view('caregiversDashboard');
            }
        } else {
            return redirect()->back();
        }

        //Patient Dashboard
        if (isset($_SESSION['role'])){
            if($_SESSION['role'] != 5){
                return redirect()->back();
            } else {
                return view('patientsDashboard');
            }
        } else {
            return redirect()->back();
        }
    }
}
