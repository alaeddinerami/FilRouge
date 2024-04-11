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

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
