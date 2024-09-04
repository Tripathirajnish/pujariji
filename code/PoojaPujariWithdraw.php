<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoojaPujariWithdraw extends Model
{
    protected $table = 'pooja_pujari_withdraw';
    public $timestamps = false;

    protected $fillable = [
        'withdra_id',
        'withdraw_status',
        'date',
        'pujari_id',
        'withdraw_amount',
        'wallet_amount',
        'payment_date',
        'ac_holder',
        'ac_name',
        'ac_number',
        'ifsc',
        'ac_type'
    ];

    public function poojari()
    {
        return $this->belongsTo(PoojaPujari::class, 'pujari_id','pujari_id');
    }

}

// ✅
