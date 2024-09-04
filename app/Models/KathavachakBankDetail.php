<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KathavachakBankDetail extends Model
{
    use SoftDeletes;

    protected $table = 'kathavachak_bank_details';

    protected $fillable = [
        'kthv_bank_id',
        'kthv_kthv_id',
        'kthv_type',
        'kthv_ac_holder',
        'kthv_ac_num',
        'kthv_ifsc',
        'status',
    ];


}
