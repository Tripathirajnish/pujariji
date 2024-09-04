<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplePoojaInclusion extends Model
{
    protected $table = 'temple_pooja_inclusion';
    public $timestamps = false;

    protected $fillable = [
        'inclusion_id',
        'package_id',
        'status',
        'name',
        'name_hindi',
        'price'
    ];

}

// ✅
