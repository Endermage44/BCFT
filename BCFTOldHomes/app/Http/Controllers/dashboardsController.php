<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Controllers\Controller;

class dashboardsController extends Controller
{
    public function roster(){
        if(isset($_SESSION['role'])){
            return view('roster');
        } else {
            return redirect()->back();
        }
    }
    public function addInfoPatient(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] === 1 or $_SESSION['role'] === 2){
                return view("additionalInfoPatient");
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function doctorsHome(){
        if(isset($_SESSION["role"])){
            if($_SESSION['role'] === 3){
                return view('doctorsHome');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function patientsHome(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] === 5){
                return view('patientHome');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function doctorAppointments(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] === 1 or $_SESSION['role'] === 2){
                // return 'access';
                return view('docAppointments');
            } else {
                // return 'no';
                return redirect()->back(); 
            }
        } else {
            return redirect()->back();
        }
    }
    public function caregiversHome(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] === 4){
                return view('caregiversHome');

            } else {
                return redirect()->back();

            }
        } else {
            return redirect()->back();
        }
    }
    public function patientOfDoctor(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 3){
                return redirect()->back();
            } else {
                return view('patientOfDoctor');
            }
        } else {
            return redirect()->back();
        }
    }
    public function supervisorDash(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 2){
                return redirect()->back();
            } else {
                return view('supervisorDash');
            }
        } else {
            return redirect()->back();
        }
    }
    public function careDash(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 4){
                return redirect()->back();
            } else {
                return view('caregiversDashboard');
            }
        } else {
            return redirect()->back();
        }
    }
    public function patientDash(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 5){
                return redirect()->back();
            } else {
                return view('patientsDashboard');
            }
        } else {
            return redirect()->back();
        }
    }
    public function adminDash(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 1){
                return redirect()->back();
            } else {
                return view('adminDash');
            }
        } else {
            return redirect()->back();
        }
    }
    public function docDash(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 3){
                return redirect()->back();
            } else{
                return view('doctorDash');
            }
        } else {
            return redirect()->back();
        }
    }

    public function newRoster(){
        return view("newRoster");
    }
}
