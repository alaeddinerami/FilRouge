<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomNumber',
        'description',
        'price',
        'department'
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
