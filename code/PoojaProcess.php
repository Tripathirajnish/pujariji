<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaProcess extends Model
{
    protected $table = 'pooja_processes';
    public $timestamps = false;

    protected $fillable = [
        'pooja_id',
        'title',
        'lang',
        'description'
    ];

}

