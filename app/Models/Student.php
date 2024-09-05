<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function getNameAttribute()
    {
        return "Hello Melo";
    }

    public function courseData(): HasOne
    {
        return $this->hasOne(Course::class, "id", "course_id");
    }
}
