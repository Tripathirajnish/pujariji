<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'admin_id',
        'name',
        'image',
        'email',
        'phone',
        'mobile',
        'address',
        'password',
        'authkey',
        'status'
    ];


    public function getAttribute($key){
        $value = parent::getAttribute($key);
        return $value ?? '';
    }

}
