<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KathavachkRating extends Model
{
    use SoftDeletes;

    protected $table = 'kathavachak_rating';

    protected $fillable = [
        'rating_id',
        'kthvchk_id',
        'rated_by',
        'star_rating',
        'rating_description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

}
