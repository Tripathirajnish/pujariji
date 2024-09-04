<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FCMServerKey extends Model
{
    protected $table = 'fcmserver_keys';

    protected $fillable = [
        'key_ids',
        'server_key'
    ];

}
