<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;

    protected $table = 'event_booking';
    protected $fillable = [
        'booking_id',
        'booking_date',
        'event_date',
        'booking_status',
        'event_id',
        'jajmaan_id',
        'user_name',
        'user_horoscope',
        'event_price',
        'dakshina_price',
        'guru_seva_price',
        'rudraks_price',
        'prasad_delivery',
        'delivery_address',
        'delivery_price',
        'whats_app_number',
        'transection_id',
        'payment_date',
        'total_payment',
    ];



}
