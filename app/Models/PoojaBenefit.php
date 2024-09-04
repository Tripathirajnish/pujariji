<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaBenefit extends Model
{
    protected $table = 'pooja_benefits';
    use SoftDeletes;
    protected $fillable = [
        'pooja_id',
        'title',
        'description',
        'lang'
    ];

}
