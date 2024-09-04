<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Kathavachak extends Model
{
    use HasFactory;
    protected $table = 'pujari_kathavachaks';
    protected $fillable = [
        'kthavchk_id',
        'jajmaan_id',
        'kthavchk_image',
        'kthavchk_name',
        'kthavchk_surname',
        'kthavchk_father',
        'kthavchk_phone',
        'kthavchk_whatsapp',
        'kthavchk_dob',
        'kthavchk_education',
        'kthavchk_gender',
        'kthavchk_address',
        'kthavchk_vill_flat',
        'kthavchk_post',
        'kthavchk_polic_station',
        'kthavchk_city',
        'kthavchk_state',
        'kthavchk_pincode',
        'kthavchk_otherjob',
        'kthavchk_gst_name',
        'kthavchk_gstno',
        'kthavchk_language',
        'kthavchk_katha',
        'kthavchk_youtube',
        'kthavchk_price',
        'kthavchk_aadharpic',
        'kthavchk_aadharpic_back',
        'kthavchk_about',
        'kthavchk_wallet',
        'date',
        'login_otp',
        'status',
    ];

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, ['kthavchk_name', 'kthavchk_surname']) && is_string($value)) {
            $value = ucwords($value);
        }

        return $value;
    }
    // Accressor Profile Image
    public function getKthavchkImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/kathavachak/profile/'.$value);
        return $imageUrl;
    }

    public function getOrigionalKthavchkImageAttribute()
    {
        return $this->attributes['kthavchk_image'];
    }

       // Accressor Profile Image
    public function getKthavchkAadharpicAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/kathavachak/documents/'.$value);
        return $imageUrl;
    }

    public function getOrigionalKthavchkAadharpicAttribute()
    {
        return $this->attributes['kthavchk_aadharpic'];
    }


    // Accressor Profile Image
    public function getKthavchkAadharpicBackAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/kathavachak/documents/'.$value);
        return $imageUrl;
    }

    public function getOrigionalKthavchkAadharpicBackAttribute()
    {
        return $this->attributes['kthavchk_aadharpic_back'];
    }


    // Validation rules for creating a Kathavachak
    // public static $createRules = [
    //     'kthavchk_id' => '',
    //     'kthavchk_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     'kthavchk_name' => 'required',
    //     'kthavchk_surname' => 'required',
    //     'kthavchk_father' => 'required',
    //     // 'kthavchk_phone' => 'required|digits:10|numeric|unique:pujari_kathavachaks,kthavchk_phone',
    //     'kthavchk_phone' => [
    //             'required',
    //             'numeric',
    //             'digits:10',
    //             Rule::unique('pujari_kathavachaks', 'kthavchk_phone')->whereNull('deleted_at'),
    //     ],
        
    //     'kthavchk_whatsapp' => 'required|digits:10|numeric|unique:pujari_kathavachaks,kthavchk_whatsapp',
    //     'kthavchk_dob' => 'required|date|before:now',
    //     'kthavchk_education' => 'required',
    //     'kthavchk_gender' => 'required|in:0,1,2',
    //     'kthavchk_address' => 'required',
    //     'kthavchk_vill_flat' => 'required',
    //     'kthavchk_post' => '',
    //     'kthavchk_polic_station' => 'required',
    //     'kthavchk_city' => 'required',
    //     'kthavchk_state' => 'required',
    //     'kthavchk_pincode' => 'required|numeric|digits:6',
    //     'kthavchk_otherjob' => 'required',
    //     'kthavchk_gst_name' => '',
    //     'kthavchk_gstno' => '',
    //     'kthavchk_language' => 'required',
    //     'kthavchk_katha' => 'required',
    //     'kthavchk_youtube' => '',
    //     'kthavchk_price' => 'required|numeric',
    //     'kthavchk_aadharpic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     'kthavchk_aadharpic_back' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     'kthavchk_about' => 'required'
    // ];


}
