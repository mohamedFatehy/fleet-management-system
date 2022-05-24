<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable =[
        'reservation_id',
        'trip_id',
        'user_id',
        'seat_id',
        'price',
        'status',
        'from_city',
        'to_city'
    ];
}
