<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pupuk_admin extends Model
{
    use HasFactory;
    protected $table = 'pupuk_admin';
    protected $fillable = [
        'pICNumber',
        'pUsername',
        'pAdminPassword',
        'pAdminName',
        'pEmail',
        'pPhoneNumber',
        'pGender',
        'pNationality',
        'pAge',
        'pOTP',
    ];
}
