<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'isbanned',
    ];
    

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
    public function meal()
    {
        return $this->belongsToMany(Meal::class, 'meal_student')->withPivot('meal_id','student_id');
    }
    public function feedbackMeal()
    {
        return $this->belongsToMany(Meal::class, 'meal_student_feedback');
    }
    public function commandemeal()
    {
        return $this->belongsToMany(Meal::class, 'meal_student_commande')->withPivot('meal_id','student_id','created_at')->with('image');
    }
    public function room()
    {
        return $this->belongsToMany(Room::class, 'room_student');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
   
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
