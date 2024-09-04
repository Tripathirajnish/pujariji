<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceProduct extends Model
{
    use HasFactory;
    protected $table = 'ecom_products';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'product_id',
        'product_status',
        'product_date',
        'name_hindi',
        'name_eng',
        'desc_hindi',
        'desc_eng',
        'price',
        'thumbnail_image',
        'product_images'
    ];

    // Accressor Profile Image
    public function getThumbnailImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/ecommerce/thumbnail/'.$value);
        return $imageUrl;
    }

    public function getOrigionalThumbnailImageAttribute()
    {
        return $this->attributes['thumbnail_image'];
    }

    // // Accressor Profile Image
    // public function getProductImagesAttribute($value)
    // {
    //     if (!$value) {
    //         return '';
    //     }
    //     $imageUrl = url('/ecommerce/product/'.$value);
    //     return $imageUrl;
    // }

    // public function getOrigionalProductImagesAttribute()
    // {
    //     return $this->attributes['product_images'];
    // }


}
