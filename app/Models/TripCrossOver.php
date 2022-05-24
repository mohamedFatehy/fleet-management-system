<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripCrossOver extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'city_id',
        'order'
    ];


    public function trip()
    {
        return $this->belongsTo(Trips::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }
}
