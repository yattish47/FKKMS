<?php

namespace App\Models;

class SalesRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'year', 'month', 'week', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'
    ];

    // Add any additional model logic or relationships here
}