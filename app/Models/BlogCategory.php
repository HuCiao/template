<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // 与博客一对多关联
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
