<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jajmaan extends Model
{
    use HasFactory;

    protected $table = 'jajmaans';
    protected $fillable = [
        'jajmaan_id',
        'date',
        'name',
        'surname',
        'address',
        'horoscope',
        'state',
        'city',
        'phone',
        'gender',
        'image',
        'loginotp',
        'login_date',
        'fcm_token',
        'status'
    ];

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/user/profile/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}
