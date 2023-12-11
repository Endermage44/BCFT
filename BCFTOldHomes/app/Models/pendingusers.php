<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingusers extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "emailID",
        "userPass",
        "firstName",
        "lastName",
        "phoneNumber",
        "DOB",
        "age",
        "roleID",
        "approved"
    ];
}
