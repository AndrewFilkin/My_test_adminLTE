<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'excerpt',
        'content_raw',
        'content_html',
        'image',
        'likes',
        'comments_count',
        'published_at',
        'is_published',
        'created_at',
    ];

    public function category()
    {
        //статья пренадлежит категорие
        return $this->belongsTo(BlogCategory::class);
    }


    public function user()
    {
        //статья пренадлежит пользователю
        return $this->belongsTo(User::class);
    }
}
