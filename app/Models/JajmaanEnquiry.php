<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JajmaanEnquiry extends Model
{
    protected $table = 'jajmaan_enquiries';
    use SoftDeletes;

    protected $fillable = [
        'pooja_id',
        'name',
        'phone',
        'jajmaan_id',
        'pooja_id',
        'package_id',
        'equiry_id',
        'note'
    ];

    
}


