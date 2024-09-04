<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaMaterial extends Model
{
    protected $table = 'pooja_materials';
    public $timestamps = false;

    protected $fillable = [
        'material_id',
        'pooja_id',
        'status',
        'material_name',
        'material_name_hindi',
        'image'
    ];

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/material/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}

// ✅
