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
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
