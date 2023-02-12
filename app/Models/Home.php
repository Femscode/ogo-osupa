<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'school_id','branch_id','level_id','class_id','student_name','purpose_of_payment'
    ];
}
