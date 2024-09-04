<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppReview extends Model
{
    use HasFactory;
    protected $table = 'app_reviews';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'review_id',
        'review_by',
        'date',
        'title',
        'description',
        'status'
    ];
}
