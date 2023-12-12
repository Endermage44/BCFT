<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paymentControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       return $request->patientId;
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

        $payment = DB::select('select * from payments where patientID = ?', [$id]);
        DB::table('payments')
        ->where('patientID', $id)
        ->update(['amountDue' => $request->amountDue]);
        return view('paymentEdit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function paymentViewPage(Request $request){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1){
                return redirect()->back();
            } else {
                if($request->patientId !== null){
                    $patient_id = $request->patientId;
                    $patient = DB::select('select * from payments where patientID = ?', [$patient_id]);
                    if($patient === []){
                        $patient[0] = [];
                    }
                   
                    return view('paymentEdit', ['data'=>$patient[0]]);
                }
                return view('paymentEdit');
            }
        } else {
            return redirect()->back();
        }

    }
}
