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
        $categories = \App\Data\BlogCatalog::categories();
        $featuredArticle = \App\Data\BlogCatalog::featured();
        $allArticles = \App\Data\BlogCatalog::all();
        $selectedCategory = $request->query('category', 'all');
        $searchQuery = trim($request->query('q', ''));

        $articles = \App\Data\BlogCatalog::getByCategory($selectedCategory);

        if (!empty($searchQuery)) {
            $articles = array_values(array_filter($articles, function ($a) use ($searchQuery) {
                return stripos($a['title'], $searchQuery) !== false
                    || stripos($a['excerpt'], $searchQuery) !== false
                    || stripos($a['category_name'], $searchQuery) !== false;
            }));
        }

        $recentArticles = \App\Data\BlogCatalog::recent(3);

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
        $articleData = \App\Data\BlogCatalog::findBySlug($lookupSlug) ?? \App\Data\BlogCatalog::featured();
        $categories = \App\Data\BlogCatalog::categories();
        $recentArticles = \App\Data\BlogCatalog::recent(3);
        $relatedArticles = \App\Data\BlogCatalog::related($articleData['category'], $articleData['slug'], 2);

        $allArticles = \App\Data\BlogCatalog::all();
        $currentIndex = 0;
        foreach ($allArticles as $idx => $item) {
            if ($item['slug'] === $articleData['slug']) {
                $currentIndex = $idx;
                break;
            }
        }
        $count = count($allArticles);
        $prevArticle = $allArticles[($currentIndex - 1 + $count) % $count];
        $nextArticle = $allArticles[($currentIndex + 1) % $count];

        return view('pages.blog-details', [
            'article' => $articleData,
            'categories' => $categories,
            'recentArticles' => $recentArticles,
            'relatedArticles' => $relatedArticles,
            'prevArticle' => $prevArticle,
            'nextArticle' => $nextArticle,
        ]);
    }
}
