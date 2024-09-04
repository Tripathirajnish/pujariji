<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'blog_id',
        'date',
        'status',
        'added_by',
        'description',
        'blog_image',
        'title',
        'description'
    ];

    // Accressor Profile Image
    public function getBlogImageAttribute($value)
    {
        if (!$value) {
            return '';
        }
        $imageUrl = url('/blog_image/'.$value);
        return $imageUrl;
    }

    public function getOrigionalBlogImageAttribute()
    {
        return $this->attributes['blog_image'];
    }

}
