<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendingusers;
use App\Models\users;
use Illuminate\Support\Facades\DB;

class regApproveControlAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $approval = DB::table('pendingusers')
            ->join('roles','pendingusers.roleID','=','roles.roleID')
            ->get();
        $users = DB::table('pendingusers')->get();
        

        $emailID = $request->input('emailID');
        $action = $request->input('action');
        $update = pendingusers::where('emailID', $emailID)->update(['approved' => $action]);

        if($action === 'Y'){
           $update;
           foreach ($users as $user) {
            $existingUser = users::where('emailID', $user->emailID)->first();

            if ($existingUser) {
                return redirect()->back()->with('error', 'EmailID already exists in the users table.');
            } else {
            $addUsers = users::create([
                'roleID' => $user->roleID,
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'emailID' => $user->emailID,
                'phoneNumber' => $user->phoneNumber,
                'userPass' => $user->userPass,
                'DOB' => $user->DOB,
                'age' => $user->age,
            ]);
        }
        }
        }
        else if($action === 'N'){
            pendingusers::where('emailID', $emailID)->update(['approved' => $action]);
        }

        if(isset($_SESSION['role'])){
            if($_SESSION['role'] === 1 or $_SESSION['role'] === 2){
                return view('registrationApproval', ['approval' => $approval]);
            } else {
                return redirect()->back();
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
    public function update(Request $request, string $id)
    {
        // Could never get this to work
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
