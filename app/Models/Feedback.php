<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        
            'meal_id',
            'student_id',
            'starCount',
            'comment' ,
        
    ];
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
