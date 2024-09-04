<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'notifications';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'notfication_to',
        'send_to',
        'notification_by',
        'date',
        'msg',
        'title',
        'body',
        'image',
        'status',
        'created_at',
    ];


    public function getAttribute($key){
        $value = parent::getAttribute($key);
        return $value ?? '';
    }

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/notification_img/'.$value);
        return $imageUrl;
    }

    public function getOrigionalImageAttribute()
    {
        return $this->attributes['image'];
    }
}
