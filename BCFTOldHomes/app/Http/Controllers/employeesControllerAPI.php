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





    // CODE THAT COULD WORK
    // // Get the employeeID from the request
    // $employeeID = $request->input('employeeSearch');

    // // Run a raw SQL query
    // $employee = DB::selectOne("SELECT * FROM employees WHERE employeeID = ?", [$employeeID]);

    // if ($employee) {
    //     // Return the employee details
    //     return response()->json($employee);
    // } else {
    //     // Handle the case where no employee is found
    //     return response()->json(['error' => 'Employee not found'], 404);
    // }

    // // CURRENT CODE WITH JQUERY (ROLE ID DOES NOT SHOW UP STILL)
    // $employeeID = $request->input('employeeSearch');

    // // Run a query to fetch employee information
    // // $employee = DB::table("employees")
    // //         ->join("roles","employees.roleID","=","roles.roleID")
    // //         ->get();
    // $employee = DB::selectOne("SELECT * FROM employees WHERE employeeID = ?", [$employeeID]);

    // if ($employee) {
    //     return response()->json([$employee]);
    // } else {
    //     return response()->json([]);
    // }





        // // creating input variable
        // $userInput = $request->input('employeeSearch');
        // // storing input in a variable
        // $employee = employees::findOrFail($userInput)->first();

        // return response()->json($employee);




        // if (request('employeeID')) {
        //     $employeeID = DB::where('employeeID', 'like', '%' . request('search') . '%')->first();
        //     return $employeeID;
        // } else {
        //     $employeeID = DB::none();
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
