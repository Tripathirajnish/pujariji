<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLanguage extends Model
{
    use HasFactory;
    protected $table = 'service_languages';
    protected $fillable = [
        'language_id',
        'language',
        'language_hindi',
        'date',
        'status',
    ];

}
