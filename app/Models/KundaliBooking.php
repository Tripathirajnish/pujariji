<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KundaliBooking extends Model
{
    use HasFactory;
    protected $table = 'kundali_booking';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'booking_id',
        'booking_status',
        'kundali_id',
        'jajmaan_id',
        'name',
        'dob_date',
        'dob_time',
        'dob_place',
        'chart_type',
        'language',
        'gender',
        'email',
        'requested_date',
        'whatapp_number',
        'total',
        'transection_id',
        'payment_date'
    ];
}
