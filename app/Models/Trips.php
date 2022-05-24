<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $primaryKey = 'trip_id';

    protected $fillable = [
        'trip_id',
        'bus_id',
        'price',
        'start_date',
        'title'
    ];

    public function crossovers()
    {
        return $this->hasMany(TripCrossOver::class, 'trip_id', 'trip_id')
            ->join('cities', 'cities.city_id', 'trip_cross_overs.city_id')
            ->orderBy('trip_cross_overs.order')
            ->select(['trip_cross_overs.city_id','trip_cross_overs.trip_id', 'cities.city_name', 'trip_cross_overs.order']);
    }

    public function seats()
    {
        return $this->hasMany(BusSeat::class, 'bus_id', 'bus_id');
    }
}
