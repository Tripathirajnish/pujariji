<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KathavachkLeave extends Model
{
    use SoftDeletes;

    protected $table = 'kathavachak_leaves';

    protected $fillable = [
        'leave_id',
        'kthavchk_id',
        'leave_date',
        'leave_status',
    ];

}
