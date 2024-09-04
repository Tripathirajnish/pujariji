<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceOrderProduct extends Model
{
    use HasFactory;

    protected $table = 'ecom_order_product';
    protected $fillable = [
        'order_id',
        'jajmaan_id',
        'order_status',
        'order_date',
        'total_products',
        'product_details',
        'total_amt',
        'transection_id',
        'payment_date',
        'transaction_id',
        'cancel_date',
        'can_acholder',
        'can_acnumber',
        'can_ifsc',
        'can_type',
        'can_amount',
        'shipping_charge',
        'delivery_time',
        'del_city',
        'del_address',
        'del_email',
        'del_whatsapp',
    ];



}
