<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;

class dashboardsController extends Controller
{
    // public function paymentEdit(){
    //     return view("paymentEdit");
    // }
    public function roster(){
        if(isset($_SESSION['role'])){
            return view('roster');
        } else {
            return redirect()->back();
        }
    }
    public function addInfoPatient(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1 || $_SESSION['role'] != 2){
                return redirect()->back();
            } else {
                return view("additionalInfoPatient");
            }
        } else {
            return redirect()->back();
        }
    }
    public function doctorsHome(){
        if(isset($_SESSION["role"])){
            if($_SESSION['role'] != 3){
                return redirect()->back();
            } else {
                return view('doctorsHome');
            }
        } else {
            return redirect()->back();
        }
    }
    public function patientsHome(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 5){
                return redirect()->back();
            } else {
                return view('patientHome');
            }
        } else {
            return redirect()->back();
        }
    }
    public function patientInfo(){
        return view("patientInfo");
    }
    public function roles(){
        return view("roles");
    }
    public function doctorAppointments(){
        return view("docAppointments");
    }
    public function employeeList(){
        return view("employeeList");
    }
    public function adminReport(){
        return view("adminReport");
    }
    public function regApproval(){
        return view("registrationApproval");
    }
    public function caregiversHome(){
        return view("caregiversHome");
    }
    public function patientOfDoctor(){
        return view("patientOfDoctor");
    }
}
