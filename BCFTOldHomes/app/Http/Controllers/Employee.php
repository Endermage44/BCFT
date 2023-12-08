<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\employees;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
    function index(Request $request){

        // $employees = DB::table("employees")
        //     ->join("roles","employees.roleID","=","roles.roleID")
        //     ->get();




        // $employeeID = $request->input('employeeID');
        // $updatedSalary = $request->input('updatedSalary');

        // $pleaseWork = DB::update("update employees set salary = ? where employeeID = ?", [$updatedSalary, $employeeID]);


        // if ($pleaseWork) {
        //     return redirect()->route('empList')->with('success', 'Salary updated successfully.');
        // } else {
        //     return redirect()->route('empList')->with('error', 'Failed to update salary.');
        // }

        // return view("employeeList", ["pleaseWork" => $pleaseWork], ["employee" => $employees]);
    }
}
