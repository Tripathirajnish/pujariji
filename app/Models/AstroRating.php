<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AstroRating extends Model
{
    use SoftDeletes;

    protected $table = 'astro_rating';

    protected $fillable = [
        'rating_id',
        'astro_id',
        'rated_by',
        'star_rating',
        'rating_description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

}
