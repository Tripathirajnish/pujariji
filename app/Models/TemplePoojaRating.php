<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplePoojaRating extends Model
{
    use HasFactory;
    protected $table = 'temple_pooja_ratings';
    protected $fillable = [
        'rating_id',
        'pooja_id',
        'rated_by',
        'status',
        'pooja_rating',
        'title',
        'description',
        'date'
    ];

}
