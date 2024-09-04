<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PujariBankDetails extends Model
{
    use SoftDeletes;

    protected $table = 'pooja_pujari_bank_details';

    protected $fillable = [
        'pujari_bank_id',
        'pujari_id',
        'pujari_type',
        'pujari_ac_holder',
        'pujari_ac_num',
        'pujari_ifsc',
        'status',
    ];

}
