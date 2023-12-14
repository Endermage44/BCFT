<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rosters extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "rosterDate",
        "supervisor",
        "doctor",
        "caregiver1",
        "caregiver2",
        "caregiver3",
        "caregiver4"
    ];

}
