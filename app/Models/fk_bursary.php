<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fk_bursary extends Model
{
    use HasFactory;
    protected $table = 'fk_bursary';
    protected $fillable = [
        'bursaryICNumber',
        'bursaryUsername',
        'bursaryPassword',
        'bursaryName',
        'bursaryEmail',
        'bursaryPhoneNumber',
        'bursaryGender',
        'bursaryNationality',
        'bursaryAge',
        'bursaryOTP',
    ];
}
