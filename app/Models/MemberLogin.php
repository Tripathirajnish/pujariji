<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MemberLogin extends Model
{
    protected $table = 'member_login';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'member_id',
        'type',
        'status',
        'login_id',
        'password'
    ];


    public function getAttribute($key){
        $value = parent::getAttribute($key);
        return $value ?? '';
    }

}
