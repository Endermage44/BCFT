<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// In Patients model
class Patients extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'patientID',
        'emergencyContactID',
        'admissionDate',
        'emailID',
        'familyCode',
        'roleID'
    ];

    //This helps retrieve information about on which groups the patients are in(i am not sure if a groups model would be needed , but this just
    //finds out patients and the group they are at)
   // In Patients model
// In Patients model
public function groups()
{
    return $this->belongsToMany('patientgroups', 'patientgroups', 'patientID', 'groupID'); 
}


}


