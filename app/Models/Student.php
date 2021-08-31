<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'applicantID',
        'studLastName',
        'studFirstName',
        'studMiddleName',
        'studSuffix',
        'studLandline',
        'studMobileNumber',
        'studAddress',
        'studBirthDate',
        'studAge',
        'studSHS',
        'studYearGrad',
        'studCourse1',
        'studCourse2',
        'studCourse3',
    ];
}
