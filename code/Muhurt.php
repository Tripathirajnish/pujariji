<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muhurt extends Model
{
    use HasFactory;

    protected $table = 'muhurts';
    protected $fillable = [
        'muhurt_id',
        'name',
        'name_hindi',
        'price',
        'status'
    ];

}
