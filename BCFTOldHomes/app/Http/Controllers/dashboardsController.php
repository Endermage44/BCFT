<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardsController extends Controller
{
    public function paymentEdit(){
        return view("paymentEdit");
    }
    public function roster(){
        return view("roster");
    }
    public function addInfoPatient(){
        return view("additionalInfoPatient");
    }
    public function doctorsHome(){
        return view("doctorsHome");
    }
    public function patientsHome(){
        return view("patientHome");
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
