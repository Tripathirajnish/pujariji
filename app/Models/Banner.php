<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'screen',
        'image',
        'status'
    ];


    public function getAttribute($key){
        $value = parent::getAttribute($key);
        return $value ?? '';
    }

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/banner_image/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }
}
