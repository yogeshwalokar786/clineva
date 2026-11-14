<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'slug',
        'color',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
            if (empty($category->color)) {
                $category->color = '#007E8A';
            }
        });
    }

    /**
     * Scope for active categories.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Associated blog posts.
     */
    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'category', 'slug');
    }

    /**
     * Published blog posts count.
     */
    public function publishedPosts()
    {
        return $this->hasMany(BlogPost::class, 'category', 'slug')->where('is_published', true);
    }
}
