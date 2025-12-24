<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     protected $fillable = [
        'title',
        'description',
    ];

    public function videos()
    {
        return $this->hasMany(CourseVideo::class);
    }
}
