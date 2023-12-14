<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caregivers extends Model
{
    use HasFactory;
    protected $fillable = [
        "caregiverID",
        "employeeID",
        "emailID",
        "roleID"
    ];
    protected $primaryKey = 'caregiverID';
}
