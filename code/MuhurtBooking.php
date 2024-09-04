<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuhurtBooking extends Model
{
    use HasFactory;
    protected $table = 'muhurt_booking';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'booking_id',
        'booking_status',
        'muhurt_id',
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
        'notes',
        'total',
        'transection_id',
        'payment_date'
    ];
}
