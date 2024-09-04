<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceCity extends Model
{
    use HasFactory;
    protected $table = 'ecom_shipping_cities';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'city_id',
        'city_hindi',
        'city_english',
        'status'
    ];
}
