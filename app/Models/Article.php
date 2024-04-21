<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
