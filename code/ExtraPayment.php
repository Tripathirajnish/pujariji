<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ExtraPayment extends Model
{
    protected $table = 'extra_payments';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'pay_id',
        'user_id',
        'title',
        'description',
        'amount',
        'transaction_id',
        'status'
    ];


    public function getAttribute($key){
        $value = parent::getAttribute($key);
        return $value ?? '';
    }

}
