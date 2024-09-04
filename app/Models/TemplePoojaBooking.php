<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplePoojaBooking extends Model
{
    protected $table = 'tample_pooja_bookings';
    public $timestamps = false;

    protected $fillable = [
        'booking_id',
        'booking_type',
        'booking_status',
        'status',
        'booking_date',
        'booking_time',
        'pooja_date',
        'pooja_time',
        'pujari_id',
        'jajmaan_id',
        'pooja_id',
        'package_id',
        'inclusions',
        'request_status',
        'accept_date',
        'online_admin_info',
        'language',
        'location',
        'state',
        'city',
        'horoscope',
        'booking_otp',
        'payment_type',
        'pooja_price',
        'total_price',
        'advance',
        'balance',
        'payment_done_date',
        'notes',
        'transaction_id',
        'cancel_date_time',
        'refund_date',
        'can_acholder',
        'can_ifsc',
        'can_type',
        'can_reason',
        'can_amount',
        'cancel_by',
        'can_transection_id',
        'can_scrnshot'
    ];

}

// ✅
