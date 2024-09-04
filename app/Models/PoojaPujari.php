<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaPujari extends Model
{
    protected $table = 'pooja_pujari';
    public $timestamps = false;

    protected $fillable = [
        'pujari_id',
        'status',
        'date',
        'verification',
        'pujari_image',
        'name',
        'surname',
        'father_name',
        'phone_number',
        'whatsapp_number',
        'date_of_birth',
        'education',
        'gender',
        'address',
        'village_or_flat_no',
        'post',
        'police_station',
        'city',
        'state',
        'pincode',
        'other_job',
        'gst_name',
        'gst_number',
        'list_languages',
        'list_perform_pooja',
        'online_or_offline',
        'temple_name',
        'adhar_front_image',
        'adhar_back_image',
        'about',
        'wallet_amt',
        'fine_amt',
        'login_otp',
        'fcm_token',
    ];


    // Accressor Profile Image
    public function getPujariImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/pujari/profile/'.$value);
        return $imageUrl;
    }

    public function getOrigionalPujariImageAttribute()
    {
        return $this->attributes['pujari_image'];
    }

       // Accressor Profile Image
    public function getAdharFrontImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/pujari/aadhar/'.$value);
        return $imageUrl;
    }

    public function getOrigionalAdharFrontImageAttribute()    // origional_adhar_front_image
    {
        return $this->attributes['adhar_front_image'];
    }
       // Accressor Profile Image
    public function getAdharBackImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/pujari/aadhar/'.$value);
        return $imageUrl;
    }

    public function getOrigionalAdharBackImageAttribute()      // origional_adhar_back_image
    {
        return $this->attributes['adhar_back_image'];
    }

}
