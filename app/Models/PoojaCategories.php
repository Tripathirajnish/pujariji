<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaCategories extends Model
{
    protected $table = 'pooja_categories';
    public $timestamps = false;

    protected $fillable = [
        'cat_id',
        'status',
        'date',
        'cat_name',
        'cat_name_hindi',
        'cat_image'
    ];

    // Accressor Profile Image
    public function getCatImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/category/'.$value);
        return $imageUrl;
    }

    public function getOrigionalCatImageAttribute()
    {
        return $this->attributes['cat_image'];
    }

}

// ✅
