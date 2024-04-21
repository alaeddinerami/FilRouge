<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'meal_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
