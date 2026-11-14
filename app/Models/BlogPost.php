<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'category_name',
        'featured_image',
        'excerpt',
        'content',
        'key_takeaways',
        'quote_text',
        'section1_title',
        'section1_body',
        'section2_title',
        'section2_body',
        'section3_title',
        'section3_body',
        'read_time',
        'views_count',
        'is_published',
        'is_featured',
        'published_at',
        'focus_keyword',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'og_title',
        'og_description',
        'og_image',
        'twitter_title',
        'twitter_description',
        'schema_type',
        'robots',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'views_count' => 'integer',
    ];

    /**
     * Boot model events for auto slugging.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            if (empty($post->published_at) && $post->is_published) {
                $post->published_at = now();
            }
            if (empty($post->category_name) && !empty($post->category)) {
                $post->category_name = self::categoryLabels()[$post->category] ?? Str::title(str_replace('-', ' ', $post->category));
            }
        });
    }

    /**
     * Scope for published posts only.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderBy('published_at', 'desc');
    }

    /**
     * Scope for featured posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Category mappings loaded strictly from database.
     */
    public static function categoryLabels(): array
    {
        try {
            $cats = BlogCategory::active()->orderBy('name')->pluck('name', 'slug')->toArray();
            if (!empty($cats)) {
                return $cats;
            }
        } catch (\Throwable $e) {}

        try {
            $distinct = self::select('category', 'category_name')->distinct()->whereNotNull('category')->pluck('category_name', 'category')->toArray();
            if (!empty($distinct)) {
                return $distinct;
            }
        } catch (\Throwable $e) {}

        return [];
    }

    /**
     * Associated category model.
     */
    public function categoryModel()
    {
        return $this->belongsTo(BlogCategory::class, 'category', 'slug');
    }

    /**
     * Get category badge color dynamically from database.
     */
    public function getCategoryColorAttribute(): string
    {
        try {
            $color = BlogCategory::where('slug', $this->category)->value('color');
            if ($color) {
                return $color;
            }
        } catch (\Throwable $e) {}

        $colors = [
            'regulatory-gcp' => '#059669', // Emerald
            'babe-services' => '#0284C7',   // Sky Blue
            'clinical-trials' => '#007E8A', // Teal Primary
            'bioanalytics-pk' => '#6366F1', // Indigo
            'medico-marketing' => '#8B5CF6',// Purple
        ];

        return $colors[$this->category] ?? '#007E8A';
    }

    /**
     * Array of parsed key takeaways.
     */
    public function getParsedTakeawaysAttribute(): array
    {
        if (empty($this->key_takeaways)) {
            return [];
        }

        $decoded = json_decode($this->key_takeaways, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        // Split by lines
        return array_values(array_filter(array_map('trim', explode("\n", $this->key_takeaways))));
    }

    /**
     * SEO Meta Title accessor.
     */
    public function getSeoMetaTitleAttribute(): string
    {
        if (!empty($this->meta_title)) {
            return $this->meta_title;
        }

        return $this->title . ' | Clineva Research Laboratories';
    }

    /**
     * SEO Meta Description accessor.
     */
    public function getSeoMetaDescriptionAttribute(): string
    {
        if (!empty($this->meta_description)) {
            return $this->meta_description;
        }

        return Str::limit(strip_tags($this->excerpt ?: $this->content), 155, '...');
    }

    /**
     * SEO Canonical URL.
     */
    public function getSeoCanonicalUrlAttribute(): string
    {
        if (!empty($this->canonical_url)) {
            return $this->canonical_url;
        }

        return route('blog.details', ['slug' => $this->slug]);
    }

    /**
     * SEO Open Graph Image URL.
     */
    public function getSeoOgImageAttribute(): string
    {
        if (!empty($this->og_image)) {
            return Str::startsWith($this->og_image, 'http') ? $this->og_image : asset($this->og_image);
        }

        if (!empty($this->featured_image)) {
            return Str::startsWith($this->featured_image, 'http') ? $this->featured_image : asset($this->featured_image);
        }

        return asset('image/logo/logo-main.png');
    }

    /**
     * Full Schema.org JSON-LD Structured Data.
     */
    public function getSchemaJsonLdAttribute(): string
    {
        $schemaType = $this->schema_type ?: 'MedicalScholarlyArticle';
        $canonical = $this->seo_canonical_url;
        $image = $this->seo_og_image;
        $published = $this->published_at ? $this->published_at->toIso8601String() : $this->created_at->toIso8601String();
        $modified = $this->updated_at ? $this->updated_at->toIso8601String() : $published;

        $schema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => $schemaType,
                    '@id' => $canonical . '#article',
                    'isPartOf' => [
                        '@id' => url('/') . '#website'
                    ],
                    'headline' => $this->title,
                    'description' => $this->seo_meta_description,
                    'inLanguage' => 'en-US',
                    'mainEntityOfPage' => $canonical,
                    'datePublished' => $published,
                    'dateModified' => $modified,
                    'image' => [
                        '@type' => 'ImageObject',
                        'url' => $image
                    ],
                    'author' => [
                        '@type' => 'Organization',
                        'name' => 'Clineva Research Laboratories',
                        'url' => url('/')
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'Clineva Research Laboratories',
                        'url' => url('/'),
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => asset('image/logo/logo-main.png')
                        ]
                    ],
                    'articleSection' => $this->category_name
                ],
                [
                    '@type' => 'BreadcrumbList',
                    '@id' => $canonical . '#breadcrumb',
                    'itemListElement' => [
                        [
                            '@type' => 'ListItem',
                            'position' => 1,
                            'name' => 'Home',
                            'item' => url('/')
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 2,
                            'name' => 'Blogs',
                            'item' => route('blog')
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 3,
                            'name' => $this->title,
                            'item' => $canonical
                        ]
                    ]
                ]
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
