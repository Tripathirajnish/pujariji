<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualPoojaPaymentTable extends Model
{
    protected $table = 'virtual_pooja_payment_tables';
    public $timestamps = false;

    protected $fillable = [
        'payment_id',
        'payment_for_id',
        'payment_for_what',
        'transection_id',
        'amount',
        'entity',
        'status',
        'type',
        'mobile',
        'fee',
        'seen_status'
    ];

}

// ✅
