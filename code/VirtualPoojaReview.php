<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualPoojaReview extends Model
{
    protected $table = 'virtual_pooja_review';
    use SoftDeletes;

    protected $fillable = [
        'pooja_id',
        'status',
        'name',
        'email',
        'jajmaan_id',
        'title',
        'description',
        'attachment',
        'rating'
    ];

    // Accressor Profile Image
    public function getAttachmentAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/pooja/review/attachment/'.$value);
        return $imageUrl;
    }

}

