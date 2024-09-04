<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplePooja extends Model
{
    protected $table = 'temple_poojas';
    public $timestamps = false;

    protected $fillable = [
        'pooja_id',
        'status',
        'upcoming_pooja',
        'date',
        'name',
        'name_hindi',
        'temple_id',
        'image',
        'min_price',
        'max_price',
        'description',
        'description_hindi'
    ];

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/temple/pooja_image/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}

// ✅
