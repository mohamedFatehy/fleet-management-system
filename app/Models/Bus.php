<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $primaryKey = 'bus_id';

    protected $fillable = [
        'bus_id',
        'seats_count',
    ];
}
