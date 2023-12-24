<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kiosk_applications extends Model
{



    use HasFactory;

    protected $table = 'kiosk_applications';

    protected $fillable = [
        'kApplicationID',
        'kpICNumber',
        'kInventoryType',
        'kBusinessName',
        'kBusinessType',
        'kStartDate',
        'kDurationOfRenting',
        'kBankAccNumber',
        'kBankName',
        'kDescOfProduct',
        'kICCopy',
        'kSSMCert',
        'kApplicationStatus',
        'kApprovalRemark',
    ];

    public function participant()
{
    return $this->belongsTo(kiosk_participant::class, 'kpICNumber', 'ic_number');
}
}
