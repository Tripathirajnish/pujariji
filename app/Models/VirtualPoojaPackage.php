<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualPoojaPackage extends Model
{
    protected $table = 'virtual_pooja_packages';
    use SoftDeletes;

    protected $fillable = [
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

