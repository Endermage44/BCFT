<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "doctorID",
        "employeeID",
        "emailID" ,
        "roleID"
    ];

    protected $primaryKey = 'doctorID';

}
