<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class routines extends Model
{
    use HasFactory;
    protected $fillable = [
        "routineID",
        "morning",
        "afternoon",
        "evening",
        "breakfast",
        "lunch",
        "dinner"
    ];
}
