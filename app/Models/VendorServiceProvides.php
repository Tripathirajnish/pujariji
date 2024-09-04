<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorServiceProvides extends Model
{
    use HasFactory;
    protected $table = 'vendor_service_provides';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'service_id',
        'image',
        'service_provider',
        'service_name',
        'description',
        'status'
    ];


    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pujariji_pic/vendor_service_types/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}
