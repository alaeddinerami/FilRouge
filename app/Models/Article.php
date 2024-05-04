<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = ['student_id', 'title', 'description'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
