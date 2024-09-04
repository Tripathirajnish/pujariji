<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JajmaanAddress extends Model
{

    protected $table = 'jajmaan_addresses';

    protected $fillable = [
        'adrs_id',
        'adrs_jajman_id',
        'full_name',
        'mobile',
        'state',
        'city',
        'address',
        'status',
    ];

}
