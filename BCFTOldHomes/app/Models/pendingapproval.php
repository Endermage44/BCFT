<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingapproval extends Model
{
    use HasFactory;
    protected $fillable = [
        "emailID",
        "roleID",
        "approved"
    ];
}
