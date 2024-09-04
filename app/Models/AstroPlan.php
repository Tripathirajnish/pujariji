<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AstroPlan extends Model
{
    use HasFactory;
    protected $table = 'astro_plans';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'plan_id',
        'plan_name',
        'sutitle',
        'description',
        'features',
        'mrp',
        'price',
        'talk_time',
        'disscount_per',
        'status'
    ];
}
