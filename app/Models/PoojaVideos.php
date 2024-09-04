<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaVideos extends Model
{
    protected $table = 'pooja_videos';
    public $timestamps = false;
    use SoftDeletes;

    protected $fillable = [
        'lang',
        'title',
        'url'
    ];

    

}

