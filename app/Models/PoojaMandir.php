<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoojaMandir extends Model
{
    protected $table = 'pooja_mandirs';
    use SoftDeletes;

    protected $fillable = [
        'pooja_id',
        'title',
        'lang',
        'image',
        'description'
    ];

    // Accressor Profile Image
    public function getImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/mandir/'.$value);
        return $imageUrl;
    }

}


