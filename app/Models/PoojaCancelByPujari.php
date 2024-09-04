<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaCancelByPujari extends Model
{
    protected $table = 'pooja_cancel_by_pujari';
    public $timestamps = false;

    protected $fillable = [
        'cancel_id',
        'status',
        'cancle_type',
        'pujari_id',
        'booking_id',
        'fine',
        'booking_date',
        'booking_time',
        'cancel_date',
        'cancel_time'
    ];

}

// ✅
