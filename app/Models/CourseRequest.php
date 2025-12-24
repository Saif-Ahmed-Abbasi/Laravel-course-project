<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseRequest extends Model
{
     protected $fillable = [
        'name',
        'email',
        'course_id',
        'status',
    ];
}
