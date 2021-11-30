<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','author','image','view_count','comment_count','content','introduction','category_id'
    ];

    // 与博客评论一对多关联
    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }

    // 与博客种类一对一关联
    public function categories()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function getImageUrlAttribute()
    {
        //如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        // return Storage::disk('public')->url( $this->attributes['image']);
        return url('storage/' . $this->attributes['image']);
    }


}
