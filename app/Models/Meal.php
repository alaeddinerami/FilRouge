<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        
    ];

    
    //pivote
    public function feedbackbystudent()
    {
        return $this->belongsToMany(Student::class, 'meal_student_feedback')->withPivot('meal_id','student_id','comment','starCount');
    }
    public function commandebystudent()
    {
        return $this->belongsToMany(Student::class, 'meal_student_commande')->withPivot('meal_id','student_id');
    }
      
    public function student()
    {
        return $this->belongsToMany(Student::class, 'meal_student')->withPivot('meal_id','student_id');
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
