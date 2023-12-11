<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roster;

class RosterApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function getRosterData(Request $request)
     {
         $rosterDate = $request->input('rosterDate');
 
         $rosterData = Roster::where('rosterDate', $rosterDate)->first();
 
         return response()->json(['rosterData' => $rosterData]);
     }

    public function index()
    {
      
        
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
