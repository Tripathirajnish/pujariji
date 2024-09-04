<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AstroWithdrawMoney extends Model
{
    use HasFactory;
    protected $table = 'astro_withdraw_money';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'withdraw_id',
        'withdraw_status',
        'withdraw_date',
        'astro_id',
        'ac_holder',
        'ac_number',
        'ifsc',
        'type',
        'amount'
    ];
}
