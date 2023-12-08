<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regApproveControlAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approval = DB::table('pendingapproval')
            ->join('users','pendingapproval.emailID','=','users.emailID')
            ->join('roles','pendingapproval.roleID','=','roles.roleID')
            ->get();

        return view('registrationApproval', ['approval' => $approval]);
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
