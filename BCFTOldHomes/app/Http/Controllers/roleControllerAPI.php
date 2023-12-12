<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roles;

class roleControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = roles::all();

        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1){
                return redirect()->back();
            } else {
                return view('roles', ["roles" => $roles]);
            }
        } else {
            return redirect()->back();
        }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'roleName' => 'required|string|max:255',
            'accessLevel' => 'required|integer',
        ]);

        $roleName = $request->input('roleName');
        $accessLevel = $request->input('accessLevel');

        // Find the role by name, if not found, create a new one
        $role = Roles::firstOrCreate([
            'roleName' => $roleName,
            'accessLevel' => $accessLevel,
        ]);

        if ($role) {
            return redirect()->back();
        }

        return response()->json(['message' => 'Role created successfully', 'data' => $role]);

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
