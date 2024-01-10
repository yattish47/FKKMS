<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentRecord extends Model
{
    use HasFactory;
    protected $table = 'paymentrecords';
    protected $primaryKey = 'paymentID';
    public $incrementing = true;

    protected $fillable = [
        'kioskID',
        'payDate',
        'payDetail',
        'payProof',
        'payInvoice',
        'payStatus'
    ];

    public function kiosks()
    {
        return $this->belongsTo(kiosks::class, 'kioskID');
    }

}
