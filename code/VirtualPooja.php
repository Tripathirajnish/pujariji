<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualPooja extends Model
{
    protected $table = 'virtual_poojas';
    use SoftDeletes;

    protected $fillable = [
        'pooja_id',
        'status',
        'upcoming_pooja',
        'date',
        'booking_end_date',
        'name',
        'category_id',
        'image',
        'temple_image'
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

    public function getTempleImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/temple/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

    public function detail()
    {
        return $this->hasMany(PoojaDetail::class);
    }

}

