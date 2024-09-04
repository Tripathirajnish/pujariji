<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualPoojaJajmaan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'virtual_pooja_jajmaans';
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
            return url('/front/img/avtar.png');
        }
        $imageUrl = url('/user/profile/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }

}
