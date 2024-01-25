<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'blog_id',
    ];

    public function article()
    {
        return $this->belongsTo(Blog::class);
    }
}
