<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adReportControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $report = DB::table("routines")
        ->get();

        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1 && $_SESSION['role'] != 2){
                return redirect()->back();
            } else {
                return view('adminReport', ["report" => $report]);
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
