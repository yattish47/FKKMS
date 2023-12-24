<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class kiosk_participant extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    //protected $guard = "kioskparticipant";
    
    protected $table = 'kiosk_participants';

    protected $fillable = [
        'kpICNumber',
        'kpName',
        'kpUsername',
        'kpEmail',
        'kpType',
        'kpPhoneNumber',
        'kpMatricID',
        'kpNationality',
        'kpAge',
        'kpPassword',
        'kpOTP',
    ];
}
