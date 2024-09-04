<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermCondition extends Model
{
    use HasFactory;
    protected $table = 'term_conditions';
    protected $fillable = [
        'tc_id',
        'tc_content',
        'date',
        'status'
    ];

}
