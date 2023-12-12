<?php

namespace App\Http\Controllers;

use App\Models\employees;
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

            $updateEmpSalary = DB::update("update employees set salary = ? where employeeID = ?", [$updatedSalary, $employeesID]);

            if ($updateEmpSalary) {
                return redirect()->back();
            }

        return view("employeeList", ["employee" => $employee]);
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
    public function show(Request $request)
    {

        $employeeID = $request->input('employeeSearch');

    // Adjust the table and column names based on your actual database schema
    $query = "
        SELECT employees.employeeID, employees.roleID, employees.salary, roles.roleName
        FROM employees
        JOIN roles ON employees.roleID = roles.roleID
        WHERE employees.employeeID = ?
    ";

    // Run the query
    $employee = DB::selectOne($query, [$employeeID]);
 
    if ($employee) {
        return response()->json([$employee]);
    } else {
        return response()->json([]);
    }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            //

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
