<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employee = DB::table("employees")
            ->join("roles","employees.roleID","=","roles.roleID")
            ->get();


            $employeesID = $request->input('employeeID');
            $updatedSalary = $request->input('updatedSalary');
    
            $pleaseWork = DB::update("update employees set salary = ? where employeeID = ?", [$updatedSalary, $employeesID]);
    
            if ($pleaseWork) {
                return redirect()->back();
            }

        return view("employeeList", ["employee" => $employee], ["pleaseWork" => $pleaseWork]);
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
    public function show(string $id, Request $request)
    {
        // CODE DOES NOT WORK HERE
        // $employeeID = $request->input('employeeID');

        // if ($employeeID == '101') {
        //     echo "success";
        // }

        // return view("employeeList", ["employeeID" => $employeeID]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            // CODE DOES NOT WORK HERE
            // $employee = employees::find($id);

            // if(!$employee){
            //     return view("employeeList");
            // }

            // $employeeID = $request->input('employeeID');
            // $updatedSalary = $request->input('updatedSalary');
    
            // $pleaseWork = DB::update("update employees set salary = ? where employeeID = ?", [$updatedSalary, $employeeID]);
    
            // return view("employeeList", ["pleaseWork"=> $pleaseWork], ["employeeID" => $employeeID]); 

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
