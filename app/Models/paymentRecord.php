<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentRecord extends Model
{
    use HasFactory;
    protected $table = 'paymentRecord';
    protected $primaryKey = 'paymentID';
    protected $fillable = [
        'payDate',
        'payDetail',
        'payProof',
        'payQR',
        'payInovoice',
        'payStatus'
    ];
}
