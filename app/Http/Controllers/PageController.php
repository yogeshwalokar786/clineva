<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ServicesCatalog;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $categories = ServicesCatalog::categories();
        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoMarketingServices = ServicesCatalog::getByCategory('medico-marketing');

        return view('pages.services', compact(
            'categories',
            'clinicalServices',
            'babeServices',
            'medicoMarketingServices'
        ));
    }

    public function serviceDetails(Request $request, ?string $service = null)
    {
        $slug = $service ?: $request->query('service', 'clinical-operations');
        $all = ServicesCatalog::all();
        $currentService = ServicesCatalog::find($slug);

        $keys = array_keys($all);
        $idx = array_search($currentService['slug'], $keys, true);
        $prevService = ($idx !== false && $idx > 0) ? $all[$keys[$idx - 1]] : null;
        $nextService = ($idx !== false && $idx < count($keys) - 1) ? $all[$keys[$idx + 1]] : null;

        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoMarketingServices = ServicesCatalog::getByCategory('medico-marketing');

        return view('pages.services-details', compact(
            'currentService',
            'prevService',
            'nextService',
            'clinicalServices',
            'babeServices',
            'medicoMarketingServices'
        ));
    }

    public function careers()
    {
        try {
            $jobPostings = \App\Models\JobPosting::where('is_active', true)->latest()->get();
        } catch (\Throwable $e) {
            $jobPostings = collect();
        }

        return view('pages.careers', compact('jobPostings'));
    }

    public function submitApplication(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:50'],
            'role' => ['required', 'string', 'max:150'],
            'experience' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:3000'],
            'resume' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        $jobPosting = \App\Models\JobPosting::where('title', $validated['role'])
            ->orWhere('id', $request->input('job_posting_id'))
            ->first();

        $resumePath = null;
        $resumeOriginalName = null;

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $resumeOriginalName = $file->getClientOriginalName();
            $filename = time() . '_' . \Illuminate\Support\Str::slug(pathinfo($resumeOriginalName, PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $resumePath = $file->storeAs('resumes', $filename);
        }

        \App\Models\JobApplication::create([
            'job_posting_id' => $jobPosting?->id,
            'role_title' => $validated['role'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'experience' => $validated['experience'] ?? null,
            'resume_path' => $resumePath,
            'resume_original_name' => $resumeOriginalName,
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for applying! Our HR team has received your application and will review your profile shortly.',
            ]);
        }

        return back()->with('career_success', 'Thank you for applying! Our HR team has received your application and will review your profile shortly.');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:50'],
            'company' => ['nullable', 'string', 'max:150'],
            'service' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            \App\Models\Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'company' => $validated['company'] ?? null,
                'service' => $validated['service'] ?? null,
                'subject' => $validated['service'] ? 'Inquiry: ' . $validated['service'] : 'General Website Inquiry',
                'message' => $validated['message'],
                'status' => 'unread',
            ]);
        } catch (\Throwable $e) {
            // Silently allow fallback if database offline
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been received. Our specialists will get back to you shortly.',
            ]);
        }

        return back()->with('contact_success', 'Thank you! Your message has been received. Our specialists will get back to you shortly.');
    }

    public function blog(Request $request)
    {
        $selectedCategory = $request->query('category', 'all');
        $searchQuery = trim($request->query('q', ''));

        try {
            $query = \App\Models\BlogPost::published();

            if ($selectedCategory !== 'all' && !empty($selectedCategory)) {
                $query->where('category', $selectedCategory);
            }

            if (!empty($searchQuery)) {
                $query->where(function ($q) use ($searchQuery) {
                    $q->where('title', 'like', "%{$searchQuery}%")
                      ->orWhere('excerpt', 'like', "%{$searchQuery}%")
                      ->orWhere('category_name', 'like', "%{$searchQuery}%")
                      ->orWhere('focus_keyword', 'like', "%{$searchQuery}%");
                });
            }

            $articles = $query->orderBy('is_featured', 'desc')
                ->orderBy('published_at', 'desc')
                ->get();

            $allArticles = \App\Models\BlogPost::published()->get();
            $featuredArticle = $allArticles->where('is_featured', true)->first() ?: $allArticles->first();
            $recentArticles = $allArticles->take(3);
            $allCount = $allArticles->count();

            // Strict dynamic categories from database
            $categories = [
                ['slug' => 'all', 'name' => 'All Insights', 'count' => $allCount],
            ];

            try {
                $dbCategories = \App\Models\BlogCategory::active()->orderBy('name')->get();
                if ($dbCategories->isNotEmpty()) {
                    foreach ($dbCategories as $cat) {
                        $cCount = $allArticles->where('category', $cat->slug)->count();
                        $categories[] = [
                            'slug' => $cat->slug,
                            'name' => $cat->name,
                            'count' => $cCount,
                            'color' => $cat->color,
                        ];
                    }
                } else {
                    $catGroups = $allArticles->groupBy('category');
                    foreach ($catGroups as $catSlug => $group) {
                        if (empty($catSlug)) continue;
                        $categories[] = [
                            'slug' => $catSlug,
                            'name' => $group->first()->category_name ?: \Illuminate\Support\Str::title(str_replace('-', ' ', $catSlug)),
                            'count' => $group->count(),
                            'color' => $group->first()->category_color,
                        ];
                    }
                }
            } catch (\Throwable $e) {
                // If table doesn't exist, group by articles
                $catGroups = $allArticles->groupBy('category');
                foreach ($catGroups as $catSlug => $group) {
                    if (empty($catSlug)) continue;
                    $categories[] = [
                        'slug' => $catSlug,
                        'name' => $group->first()->category_name ?: \Illuminate\Support\Str::title(str_replace('-', ' ', $catSlug)),
                        'count' => $group->count(),
                        'color' => $group->first()->category_color,
                    ];
                }
            }
        } catch (\Throwable $e) {
            $articles = collect();
            $allArticles = collect();
            $featuredArticle = null;
            $recentArticles = collect();
            $categories = [
                ['slug' => 'all', 'name' => 'All Insights', 'count' => 0],
                ['slug' => 'clinical-trials', 'name' => 'Clinical Trials', 'count' => 0],
                ['slug' => 'babe-services', 'name' => 'BA/BE Studies', 'count' => 0],
                ['slug' => 'regulatory-gcp', 'name' => 'Regulatory & GCP', 'count' => 0],
                ['slug' => 'bioanalytics-pk', 'name' => 'Bioanalytical & PK', 'count' => 0],
                ['slug' => 'medico-marketing', 'name' => 'Medico-Marketing', 'count' => 0],
            ];
        }

        return view('pages.blog-standard', compact(
            'categories',
            'featuredArticle',
            'articles',
            'allArticles',
            'selectedCategory',
            'searchQuery',
            'recentArticles'
        ));
    }

    public function blogDetails(Request $request, ?string $slug = null)
    {
        $lookupSlug = $slug ?: ($request->route('slug') ?: ($request->route('article') ?: $request->query('article')));

        try {
            $post = \App\Models\BlogPost::published()->where('slug', $lookupSlug)->first();
        } catch (\Throwable $e) {
            $post = null;
        }

        if (!$post) {
            abort(404, 'Blog article not found.');
        }

        try {
            $post->increment('views_count');
        } catch (\Throwable $e) {}

        try {
            $allArticles = \App\Models\BlogPost::published()->get();
            $currentIndex = 0;
            foreach ($allArticles as $idx => $item) {
                if ($item->slug === $post->slug) {
                    $currentIndex = $idx;
                    break;
                }
            }
            $count = $allArticles->count();
            $prevArticle = $count > 1 ? $allArticles[($currentIndex - 1 + $count) % $count] : null;
            $nextArticle = $count > 1 ? $allArticles[($currentIndex + 1) % $count] : null;

            $relatedArticles = \App\Models\BlogPost::published()
                ->where('id', '!=', $post->id)
                ->where('category', $post->category)
                ->take(2)
                ->get();

            if ($relatedArticles->count() < 2) {
                $relatedArticles = \App\Models\BlogPost::published()
                    ->where('id', '!=', $post->id)
                    ->take(2)
                    ->get();
            }

            $recentArticles = \App\Models\BlogPost::published()->where('id', '!=', $post->id)->take(3)->get();
        } catch (\Throwable $e) {
            $allArticles = collect();
            $prevArticle = null;
            $nextArticle = null;
            $relatedArticles = collect();
            $recentArticles = collect();
        }

        try {
            $dbCategories = \App\Models\BlogCategory::active()->orderBy('name')->get();
            if ($dbCategories->isNotEmpty()) {
                $categories = $dbCategories->map(fn($c) => ['slug' => $c->slug, 'name' => $c->name])->toArray();
            } else {
                $categories = \App\Models\BlogPost::published()
                    ->select('category as slug', 'category_name as name')
                    ->distinct()
                    ->whereNotNull('category')
                    ->get()
                    ->toArray();
            }
        } catch (\Throwable $e) {
            $categories = [];
        }

        return view('pages.blog-details', [
            'article' => $post,
            'categories' => $categories,
            'recentArticles' => $recentArticles,
            'relatedArticles' => $relatedArticles,
            'prevArticle' => $prevArticle,
            'nextArticle' => $nextArticle,
        ]);
    }

    /**
     * Generate dynamic XML Sitemap for Google Search Console and SEO crawlers.
     */
    public function sitemap()
    {
        $services = \App\Data\ServicesCatalog::all();

        try {
            $blogPosts = \App\Models\BlogPost::published()->get();
        } catch (\Throwable $e) {
            $blogPosts = collect();
        }

        return response()->view('sitemap', [
            'services' => $services,
            'blogPosts' => $blogPosts,
        ])->header('Content-Type', 'text/xml');
    }
}
