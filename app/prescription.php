<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
   public $fillable = [
        'prescription_date',
        'patient_name',
        'patient_age',
        'diagonsis',
        'gender',
        'medicine',
        'next_visit_date',
        
    ];
}
