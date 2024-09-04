<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaDetail extends Model
{
    protected $table = 'pooja_details';
    use SoftDeletes;

    protected $fillable = [
        'pooja_id',
        'name',
        'purpose',
        'lang',
        'tithi_name',
        'description'
    ];

    public function pooja()
    {
        return $this->belongsTo(Pooja::class);
    }

}

