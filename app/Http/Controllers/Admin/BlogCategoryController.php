<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of blog categories with post counts.
     */
    public function index()
    {
        try {
            $categories = BlogCategory::withCount(['posts', 'publishedPosts'])
                ->orderBy('name')
                ->get();
        } catch (\Throwable $e) {
            $categories = collect();
        }

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'slug' => 'nullable|string|max:150',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['name']);

        // Ensure unique slug
        $originalSlug = $slug;
        $counter = 1;
        while (BlogCategory::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        BlogCategory::create([
            'name' => $validated['name'],
            'slug' => $slug,
            'color' => '#0077C8',
            'description' => $validated['description'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.blog-categories.index')
            ->with('success', "Category '{$validated['name']}' created successfully.");
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'slug' => 'nullable|string|max:150',
            'description' => 'nullable|string|max:1000',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['name']);

        $category->update([
            'name' => $validated['name'],
            'slug' => $slug,
            'color' => '#0077C8',
            'description' => $validated['description'] ?? null,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.blog-categories.index')
            ->with('success', "Category '{$category->name}' updated successfully.");
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy($id)
    {
        $category = BlogCategory::findOrFail($id);

        $postCount = $category->posts()->count();
        if ($postCount > 0) {
            return redirect()->route('admin.blog-categories.index')
                ->with('error', "Cannot delete category '{$category->name}' because it has {$postCount} blog post(s) associated with it.");
        }

        $name = $category->name;
        $category->delete();

        return redirect()->route('admin.blog-categories.index')
            ->with('success', "Category '{$name}' deleted successfully.");
    }
}
