<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaBookingMember extends Model
{
    protected $table = 'pooja_booking_members';
    use SoftDeletes;

    protected $fillable = [
        'booking_id',
        'name',
        'gotra',
        'gender'
    ];

    
}


