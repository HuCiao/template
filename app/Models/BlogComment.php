<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id','reviewer','comments'
    ];

    // 与博客一对一关联
    public function comments()
    {
        return $this->belongsTo(Blog::class);
    }
}
