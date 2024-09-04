<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kundali extends Model
{
    use HasFactory;

    protected $table = 'kundalis';
    protected $fillable = [
        'kundali_id',
        'name',
        'name_hindi',
        'price',
        'status'
    ];

}
