<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRecord extends Model
{
    use HasFactory;
    protected $table = 'SalesRecord';
    protected $primaryKey = 'ReportID';

    protected $fillable = ['year', 'month', 'week', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'totalPrice'];

    // Add any additional model logic or relationships here
}
