<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaPackage extends Model
{
    protected $table = 'pooja_packages';
    public $timestamps = false;

    protected $fillable = [
        'package_id',
        'pooja_id',
        'status',
        'name',
        'name_hindi',
        'price',
        'procudre',
        'procedure_hindi',
        'description',
        'description_hindi'
    ];

}

// ✅
