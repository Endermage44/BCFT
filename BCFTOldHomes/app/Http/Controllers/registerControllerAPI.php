<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

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
        // $request->validate([
        //     'role' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required',
        //     'password' => 'required',
        //     'dob' => 'required'
        //     ]);
            
            $user = $request->all();
            users::create($user);
            return $user;
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
