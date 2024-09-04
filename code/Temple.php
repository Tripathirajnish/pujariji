<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temple extends Model
{
    protected $table = 'temples';
    public $timestamps = false;

    protected $fillable = [
        'temple_id',
        'temple_name',
        'temple_name_hindi',
        'temple_image',
        'status'
    ];

    // Accressor Profile Image
    public function getTempleImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/temple/temple_image/'.$value);
        return $imageUrl;
    }

    public function getOrigionalTempleImageAttribute()
    {
        return $this->attributes['temple_image'];
    }

}

// ✅
