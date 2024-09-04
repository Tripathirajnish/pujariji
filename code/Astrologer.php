<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Astrologer extends Model
{
    use HasFactory;
    protected $table = 'pujari_astrologers';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'astro_id',
        'status',
        'verification',
        'astro_name',
        'astro_surname',
        'astro_father',
        'astro_image',
        'astro_phone',
        'astro_whatsapp',
        'astro_dob',
        'astro_education',
        'astro_gender',
        'astro_address',
        'astro_vill_flat',
        'astro_post',
        'astro_police_station',
        'astro_city',
        'astro_state',
        'astro_pincode',
        'astro_other_job',
        'astro_gst',
        'astro_gst_name',
        'astro_jyotish_language',
        'astro_types',
        'astro_slot',
        'astro_price',
        'astro_final_price',
        'astro_aadhar_pic',
        'astro_aadhar_back_pic',
        'astro_about',
        'astro_wallet',
        'date',
        'login_otp'
    ];
    

    public function getAttribute($key){
        if($key!=='astro_jyotish_language' && $key!=='astro_types'){
            $value = ucwords(parent::getAttribute($key));
        }else{
            $value = parent::getAttribute($key);
        }
        return $value ?? '';
    }
    // Accressor Profile Image
    public function getAstroImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/astrologer/profile/'.$value);
        return $imageUrl;
    }

    public function getOrigionalAstroImageAttribute()
    {
        return $this->attributes['astro_image'];
    }

       // Accressor Profile Image
    public function getAstroAadharPicAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/astrologer/aadhar/'.$value);
        return $imageUrl;
    }

    public function getOrigionalAstroAadharPicAttribute()
    {
        return $this->attributes['astro_aadhar_pic'];
    }

       // Accressor Profile Image
    public function getAstroAadharBackPicAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/astrologer/aadhar/'.$value);
        return $imageUrl;
    }

    public function getOrigionalAstroAadharBackPicAttribute()
    {
        return $this->attributes['astro_aadhar_back_pic'];
    }













}
