<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPooja extends Model
{
    use HasFactory;

    protected $table = 'event_pooja';
    protected $fillable = [
        'event_id',
        'event_date',
        'status',
        'title_hin',
        'title_eng',
        'desc_hin',
        'desc_eng',
        'event_img',
        'price',
        'dakshina_price',
        'guruseva_price',
        'rudrakshseva_price',
        'prasaddelivery_price',
        'fb_link',
    ];

    // Accressor Profile Image
    public function getEventImgAttribute($value)
    {
        if (!$value) {
            return [];
        }

        $imagePaths = unserialize($value);

        $imageUrls = array_map(function ($image) {
            return url('event_pooja/' . $image);
        }, $imagePaths);

        return $imageUrls;
    }

    public function getOriginalEventImgAttribute()
    {
        return $this->attributes['event_img'];
    }
}
