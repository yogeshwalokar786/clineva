<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    /**
     * Display a listing of blog posts.
     */
    public function index(Request $request)
    {
        $status = $request->query('status', 'all');
        $search = trim($request->query('search', ''));
        $category = $request->query('category', 'all');

        try {
            $query = BlogPost::query()->latest('published_at');

            if ($status === 'published') {
                $query->where('is_published', true);
            } elseif ($status === 'draft') {
                $query->where('is_published', false);
            } elseif ($status === 'featured') {
                $query->where('is_featured', true);
            }

            if ($category !== 'all' && !empty($category)) {
                $query->where('category', $category);
            }

            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                      ->orWhere('excerpt', 'like', "%{$search}%")
                      ->orWhere('category_name', 'like', "%{$search}%")
                      ->orWhere('focus_keyword', 'like', "%{$search}%");
                });
            }

            $posts = $query->paginate(12)->withQueryString();

            $counts = [
                'all' => BlogPost::count(),
                'published' => BlogPost::where('is_published', true)->count(),
                'draft' => BlogPost::where('is_published', false)->count(),
                'featured' => BlogPost::where('is_featured', true)->count(),
            ];
        } catch (\Throwable $e) {
            $posts = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 12);
            $counts = ['all' => 0, 'published' => 0, 'draft' => 0, 'featured' => 0];
        }

        $categories = BlogPost::categoryLabels();

        return view('admin.blogs.index', compact('posts', 'status', 'search', 'category', 'counts', 'categories'));
    }

    /**
     * Show the form for creating a new blog post.
     */
    public function create()
    {
        $categories = BlogPost::categoryLabels();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created blog post.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blog_posts,slug'],
            'category' => ['required', 'string', 'max:100'],
            'category_name' => ['nullable', 'string', 'max:150'],
            'featured_image_file' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'featured_image_path' => ['nullable', 'string', 'max:500'],
            'excerpt' => ['required', 'string', 'max:2000'],
            'content' => ['nullable', 'string'],
            'key_takeaways' => ['nullable', 'string'],
            'quote_text' => ['nullable', 'string'],
            'section1_title' => ['nullable', 'string', 'max:255'],
            'section1_body' => ['nullable', 'string'],
            'section2_title' => ['nullable', 'string', 'max:255'],
            'section2_body' => ['nullable', 'string'],
            'section3_title' => ['nullable', 'string', 'max:255'],
            'section3_body' => ['nullable', 'string'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'is_published' => ['nullable', 'boolean'],
            'is_featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],

            // Advanced SEO Fields
            'focus_keyword' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:1000'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'canonical_url' => ['nullable', 'url', 'max:500'],
            'og_title' => ['nullable', 'string', 'max:255'],
            'og_description' => ['nullable', 'string', 'max:1000'],
            'og_image' => ['nullable', 'string', 'max:500'],
            'twitter_title' => ['nullable', 'string', 'max:255'],
            'twitter_description' => ['nullable', 'string', 'max:1000'],
            'schema_type' => ['nullable', 'string', 'max:100'],
            'robots' => ['nullable', 'string', 'max:100'],
        ]);

        $imagePath = $request->input('featured_image_path') ?: 'image/blog/tf-post-absolute-1.jpg';
        if ($request->hasFile('featured_image_file')) {
            $file = $request->file('featured_image_file');
            $fileName = 'blog_' . time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blog'), $fileName);
            $imagePath = 'uploads/blog/' . $fileName;
        }

        $slug = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['title']);

        $categoryLabels = BlogPost::categoryLabels();
        $categoryName = $validated['category_name'] ?: ($categoryLabels[$validated['category']] ?? Str::title(str_replace('-', ' ', $validated['category'])));

        $post = BlogPost::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'category_name' => $categoryName,
            'featured_image' => $imagePath,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'] ?? null,
            'key_takeaways' => $validated['key_takeaways'] ?? null,
            'quote_text' => $validated['quote_text'] ?? null,
            'section1_title' => $validated['section1_title'] ?? null,
            'section1_body' => $validated['section1_body'] ?? null,
            'section2_title' => $validated['section2_title'] ?? null,
            'section2_body' => $validated['section2_body'] ?? null,
            'section3_title' => $validated['section3_title'] ?? null,
            'section3_body' => $validated['section3_body'] ?? null,
            'read_time' => $validated['read_time'] ?: '5 min read',
            'is_published' => $request->boolean('is_published'),
            'is_featured' => $request->boolean('is_featured'),
            'published_at' => $validated['published_at'] ? \Carbon\Carbon::parse($validated['published_at']) : now(),

            // Advanced SEO
            'focus_keyword' => $validated['focus_keyword'] ?? null,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'canonical_url' => $validated['canonical_url'] ?? null,
            'og_title' => $validated['og_title'] ?? null,
            'og_description' => $validated['og_description'] ?? null,
            'og_image' => $validated['og_image'] ?: $imagePath,
            'twitter_title' => $validated['twitter_title'] ?? null,
            'twitter_description' => $validated['twitter_description'] ?? null,
            'schema_type' => $validated['schema_type'] ?: 'MedicalScholarlyArticle',
            'robots' => $validated['robots'] ?: 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1',
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully with advanced SEO configuration!');
    }

    /**
     * Show the form for editing the specified blog post.
     */
    public function edit(BlogPost $blog)
    {
        $categories = BlogPost::categoryLabels();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified blog post.
     */
    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blog_posts,slug,' . $blog->id],
            'category' => ['required', 'string', 'max:100'],
            'category_name' => ['nullable', 'string', 'max:150'],
            'featured_image_file' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'featured_image_path' => ['nullable', 'string', 'max:500'],
            'excerpt' => ['required', 'string', 'max:2000'],
            'content' => ['nullable', 'string'],
            'key_takeaways' => ['nullable', 'string'],
            'quote_text' => ['nullable', 'string'],
            'section1_title' => ['nullable', 'string', 'max:255'],
            'section1_body' => ['nullable', 'string'],
            'section2_title' => ['nullable', 'string', 'max:255'],
            'section2_body' => ['nullable', 'string'],
            'section3_title' => ['nullable', 'string', 'max:255'],
            'section3_body' => ['nullable', 'string'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'is_published' => ['nullable', 'boolean'],
            'is_featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],

            // Advanced SEO Fields
            'focus_keyword' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:1000'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'canonical_url' => ['nullable', 'url', 'max:500'],
            'og_title' => ['nullable', 'string', 'max:255'],
            'og_description' => ['nullable', 'string', 'max:1000'],
            'og_image' => ['nullable', 'string', 'max:500'],
            'twitter_title' => ['nullable', 'string', 'max:255'],
            'twitter_description' => ['nullable', 'string', 'max:1000'],
            'schema_type' => ['nullable', 'string', 'max:100'],
            'robots' => ['nullable', 'string', 'max:100'],
        ]);

        $imagePath = $blog->featured_image;
        if ($request->filled('featured_image_path')) {
            $imagePath = $request->input('featured_image_path');
        }
        if ($request->hasFile('featured_image_file')) {
            $file = $request->file('featured_image_file');
            $fileName = 'blog_' . time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blog'), $fileName);
            $imagePath = 'uploads/blog/' . $fileName;
        }

        $slug = $validated['slug'] ? Str::slug($validated['slug']) : ($blog->slug ?: Str::slug($validated['title']));

        $categoryLabels = BlogPost::categoryLabels();
        $categoryName = $validated['category_name'] ?: ($categoryLabels[$validated['category']] ?? Str::title(str_replace('-', ' ', $validated['category'])));

        $blog->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'category_name' => $categoryName,
            'featured_image' => $imagePath,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'] ?? null,
            'key_takeaways' => $validated['key_takeaways'] ?? null,
            'quote_text' => $validated['quote_text'] ?? null,
            'section1_title' => $validated['section1_title'] ?? null,
            'section1_body' => $validated['section1_body'] ?? null,
            'section2_title' => $validated['section2_title'] ?? null,
            'section2_body' => $validated['section2_body'] ?? null,
            'section3_title' => $validated['section3_title'] ?? null,
            'section3_body' => $validated['section3_body'] ?? null,
            'read_time' => $validated['read_time'] ?: '5 min read',
            'is_published' => $request->boolean('is_published'),
            'is_featured' => $request->boolean('is_featured'),
            'published_at' => $validated['published_at'] ? \Carbon\Carbon::parse($validated['published_at']) : $blog->published_at,

            // Advanced SEO
            'focus_keyword' => $validated['focus_keyword'] ?? null,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'canonical_url' => $validated['canonical_url'] ?? null,
            'og_title' => $validated['og_title'] ?? null,
            'og_description' => $validated['og_description'] ?? null,
            'og_image' => $validated['og_image'] ?: $imagePath,
            'twitter_title' => $validated['twitter_title'] ?? null,
            'twitter_description' => $validated['twitter_description'] ?? null,
            'schema_type' => $validated['schema_type'] ?: 'MedicalScholarlyArticle',
            'robots' => $validated['robots'] ?: 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1',
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Quick toggle published status.
     */
    public function toggleStatus(BlogPost $blog)
    {
        $blog->is_published = ! $blog->is_published;
        if ($blog->is_published && empty($blog->published_at)) {
            $blog->published_at = now();
        }
        $blog->save();

        $statusText = $blog->is_published ? 'published' : 'moved to drafts';
        return back()->with('success', "Post has been {$statusText}.");
    }

    /**
     * Quick toggle featured status.
     */
    public function toggleFeatured(BlogPost $blog)
    {
        $blog->is_featured = ! $blog->is_featured;
        $blog->save();

        $statusText = $blog->is_featured ? 'marked as featured lead story' : 'removed from featured status';
        return back()->with('success', "Post {$statusText}.");
    }

    /**
     * Remove the specified blog post.
     */
    public function destroy(BlogPost $blog)
    {
        $title = $blog->title;
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', "Blog post \"{$title}\" has been deleted.");
    }
}
