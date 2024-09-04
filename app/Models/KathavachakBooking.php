<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KathavachakBooking extends Model
{
    use HasFactory;

    protected $table = 'kathavachak_bookings';

    protected $fillable = [
        'booking_id',
        'jajmaan_id',
        'kathavachak_id',
        'booking_date_from',
        'booking_date_to',
        'booking_status',
        'katha_type',
        'location',
        'state',
        'city',
        'booking_otp',
        'time',
        'total_price',
        'advance',
        'balance',
        'advance_date',
        'transaction_id',
        'balance_done_date',
        'status',
        'cancel_date',
        'refund_date',
        'can_acholder',
        'can_acnumber',
        'can_ifsc',
        'can_type',
        'can_reason',
        'can_amount'
    ];
}
