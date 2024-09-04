<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaRating extends Model
{
    use HasFactory;
    protected $table = 'pooja_ratings';
    protected $fillable = [
        'rating_id',
        'pooja_id',
        'rated_by',
        'pujari_id',
        'status',
        'pooja_rating',
        'title',
        'description',
        'pujari_rating',
        'date'
    ];

}
