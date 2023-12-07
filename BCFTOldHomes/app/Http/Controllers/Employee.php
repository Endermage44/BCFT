<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\employees;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
//     function updateSalary(Request $request){
//         $employeeID = $request->input('employeeID');
//         $updatedSalary = $request->input('updatedSalary');

//         $pleaseWork = DB::update("update employees set salary = ? where employeeID = ?", [$updatedSalary, $employeeID]);

//         return view('/api/empList');
//     }
}
