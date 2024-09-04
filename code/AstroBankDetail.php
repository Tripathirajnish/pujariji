<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AstroBankDetail extends Model
{
    use SoftDeletes;

    protected $table = 'astro_bank_details';

    protected $fillable = [
        'astro_bank_id',
        'astro_id',
        'astro_type',
        'astro_ac_holder',
        'astro_ac_num',
        'astro_ifsc',
        'status',
    ];


}
