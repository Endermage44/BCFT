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
<<<<<<< Updated upstream
=======
        

        


>>>>>>> Stashed changes
    }
}
