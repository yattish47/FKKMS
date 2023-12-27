<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fk_technicalteam extends Model
{
    use HasFactory;
    protected $table = 'fk_technicalteam';
    protected $fillable = [
        'ttICNumber',
        'ttUsername',
        'ttPassword',
        'ttName',
        'ttEmail',
        'ttPhoneNumber',
        'ttGender',
        'ttNationality',
        'ttAge',
        'ttOTP',
    ];

}
