<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katha extends Model
{
    use HasFactory;
    protected $table = 'kathas';
    protected $fillable = [
        'katha_id',
        'image',
        'name',
        'name_hindi',
        'date',
        'status',
    ];

     // Accressor Profile Image
     public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pujariji_pic/katha/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}
