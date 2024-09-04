<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AstrologerBooking extends Model
{
    use HasFactory;
    protected $table = 'astro_booking';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'booking_id',
        'astro_date',
        'booking_status',
        'jajmaan_id',
        'horoscope',
        'astro_id',
        'plan_id',
        'plan_amt',
        'plan_price',
        'vendor_income',
        'talk_time',
        'astro_slot',
        'transaction_id',
        'astro_notes',
        'jajman_dob',
        'dob_time',
        'gender',
        'booking_date',
        'booking_otp',
        'status',
        'cancel_date',
        'refund_date',
        'can_acholder',
        'can_acnumber',
        'can_ifsc',
        'can_type',
        'can_reason',
        'can_amount',
        'can_transection_id',
        'can_scrnshot'
    ];



}
