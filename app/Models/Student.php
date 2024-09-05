<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function getNameAttribute()
    {
        return "Hello Melo";
    }

    public function courseData(): HasMany
    {
        return $this->hasMany(Course::class, "id", "course_id");
    }

    public function course() 
    {
        return $this->belongsTo(Course::class, "course_id");
    }
}
