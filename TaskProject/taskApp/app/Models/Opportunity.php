<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    // Add fillable property
    protected $fillable = [
        'event_name',
        'date',
        'time',
        'location',
        'latitude',
        'longitude',
    ];

    // Other model properties and methods...
}
