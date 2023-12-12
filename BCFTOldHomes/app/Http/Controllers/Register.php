<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Register extends Controller
{
    public function showRegistrationForm()
    {
        // You can implement this method to show the registration form view
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'role' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'dob' => 'required',
            // Add validation rules for other fields as needed
        ]);

        // Additional validation for Patient role
        if ($validatedData['role'] === 'Patient') {
            $request->validate([
                'family_code' => 'required',
                'emergency_contact' => 'required',
                'relation_to_emergency_contact' => 'required',
                // Add validation rules for other patient fields
            ]);
        }

        // Create a new User instance and save to the database
        $user = User::create($validatedData);

        return redirect()->route('success'); // Adjust the route accordingly
    }
}
