<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicines extends Model
{
    use HasFactory;
    protected $fillable = [
        "medicineID",
        "medicineName"
    ];
}