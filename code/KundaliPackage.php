<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KundaliPackage extends Model
{
    protected $table = 'kundali_packages';
    public $timestamps = false;

    protected $fillable = [
        'package_id',
        'kundali_id',
        'status',
        'name',
        'name_hindi',
        'price'
    ];

}
