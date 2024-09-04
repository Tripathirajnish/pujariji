<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaImage extends Model
{
    protected $table = 'pooja_images';
    use SoftDeletes;
    protected $fillable = [
        'pooja_id',
        'image',
    ];

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/pooja_image/'.$value);
        return $imageUrl;
    }

}

