<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kiosks extends Model
{
    use HasFactory;
    protected $table = 'kiosks';
    protected $primaryKey = 'kioskID'; // Add this line
    public $incrementing = false;
    protected $fillable = [		
        'kioskID',
        'kApplicationID',
        'kpICNumber',
        'kioskLocation',
        'kioskStatus',
        'kioskCondition',
    ];
}
