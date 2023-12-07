<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use Illuminate\Support\Facades\DB;

class employeesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employees = employees::all();
    
        foreach ($employees as $employee) {
            $roleID = $employee->roleID;
            $roleName = DB::table('roles')->where('roleID', $roleID)->value('roleName');
            $employee->roleName = $roleName;
        }

        return view("employeeList", ["employee" => $employees]);
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
        {
            // $employee = employees::find($id);

            // if(!$employee){
            //     return view("employeeList");
            // }

            // return view("employeeList");

    }
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
