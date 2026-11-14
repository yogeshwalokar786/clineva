<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PolicyPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PolicyPageController extends Controller
{
    /**
     * Display a listing of dynamic policy pages.
     */
    public function index()
    {
        try {
            $this->ensureDefaultPoliciesSeeded();
            $policies = PolicyPage::orderBy('title')->get();
        } catch (\Throwable $e) {
            $policies = collect();
        }
        return view('admin.policy-pages.index', compact('policies'));
    }

    /**
     * Show the form for creating a new policy page.
     */
    public function create()
    {
        return view('admin.policy-pages.form', [
            'isEdit' => false,
            'policy' => new PolicyPage(['is_active' => true]),
        ]);
    }

    /**
     * Store a newly created policy page.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:policy_pages,slug'],
            'content' => ['required', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $slug = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['title']);

        PolicyPage::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'meta_title' => $validated['meta_title'] ?: ($validated['title'] . ' | Clineva Research Laboratories'),
            'meta_description' => $validated['meta_description'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.policy-pages.index')
            ->with('success', 'Policy page created successfully.');
    }

    /**
     * Show the form for editing a policy page.
     */
    public function edit(PolicyPage $policyPage)
    {
        return view('admin.policy-pages.form', [
            'isEdit' => true,
            'policy' => $policyPage,
        ]);
    }

    /**
     * Update an existing policy page.
     */
    public function update(Request $request, PolicyPage $policyPage)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:policy_pages,slug,' . $policyPage->id],
            'content' => ['required', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $slug = $validated['slug'] ? Str::slug($validated['slug']) : ($policyPage->slug ?: Str::slug($validated['title']));

        $policyPage->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'content' => $validated['content'],
            'meta_title' => $validated['meta_title'] ?: ($validated['title'] . ' | Clineva Research Laboratories'),
            'meta_description' => $validated['meta_description'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.policy-pages.index')
            ->with('success', 'Policy page updated successfully.');
    }

    /**
     * Remove a policy page from storage.
     */
    public function destroy(PolicyPage $policyPage)
    {
        $policyPage->delete();
        return redirect()->route('admin.policy-pages.index')
            ->with('success', 'Policy page deleted successfully.');
    }

    /**
     * Toggle the active status of a policy page.
     */
    public function toggle(PolicyPage $policyPage)
    {
        $policyPage->update([
            'is_active' => !$policyPage->is_active,
        ]);

        return back()->with('success', 'Policy page status updated.');
    }

    /**
     * Auto-seed default policies if table is empty.
     */
    protected function ensureDefaultPoliciesSeeded(): void
    {
        try {
            if (Schema::hasTable('policy_pages') && PolicyPage::count() === 0) {
                foreach (['privacy-policy', 'terms-conditions', 'cookie-policy'] as $slug) {
                    $default = PolicyPage::getDefaultPolicy($slug);
                    if ($default) {
                        PolicyPage::create($default);
                    }
                }
            }
        } catch (\Throwable $e) {}
    }
}
