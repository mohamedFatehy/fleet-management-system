<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSeat extends Model
{
    use HasFactory;

    protected $primaryKey = 'seat_id';

    protected $fillable = [
        'bus_id',
        'seat_id',
        'seat_index'
    ];
}
