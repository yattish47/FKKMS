<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'admin_ID', //primary key
        'admin_username',
        'adminPassword',
        'adminName',
        'adminEmail',
        'adminPhoneNumber',
        'adminGender',
        'adminOTP',
    ];
}
