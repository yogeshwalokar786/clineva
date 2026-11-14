<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobPostingController extends Controller
{
    /**
     * Display a listing of job postings.
     */
    public function index()
    {
        try {
            $jobs = JobPosting::withCount('applications')->latest()->get();
        } catch (\Throwable $e) {
            $jobs = collect();
        }

        $stats = [
            'total' => $jobs->count(),
            'active' => $jobs->where('is_active', true)->count(),
            'inactive' => $jobs->where('is_active', false)->count(),
            'applications_count' => $jobs->sum('applications_count'),
        ];

        return view('admin.jobs.index', compact('jobs', 'stats'));
    }

    /**
     * Show the form for creating a new job posting.
     */
    public function create()
    {
        return view('admin.jobs.form', [
            'job' => new JobPosting([
                'is_active' => true,
                'job_type' => 'Full-Time',
                'location' => 'Mumbai, Maharashtra',
                'category' => 'Clinical Operations',
            ]),
            'isEdit' => false,
        ]);
    }

    /**
     * Store a newly created job posting in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:150'],
            'job_type' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:150'],
            'experience' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'requirements' => ['nullable', 'string'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);

        JobPosting::create($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job posting created successfully!');
    }

    /**
     * Show the form for editing the specified job posting.
     */
    public function edit(JobPosting $job)
    {
        return view('admin.jobs.form', [
            'job' => $job,
            'isEdit' => true,
        ]);
    }

    /**
     * Update the specified job posting in storage.
     */
    public function update(Request $request, JobPosting $job)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:150'],
            'job_type' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:150'],
            'experience' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'requirements' => ['nullable', 'string'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $job->update($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job posting updated successfully!');
    }

    /**
     * Toggle the active status of the job posting.
     */
    public function toggle(JobPosting $job)
    {
        $job->update([
            'is_active' => ! $job->is_active,
        ]);

        $statusText = $job->is_active ? 'activated' : 'deactivated';

        return back()->with('success', "Job posting '{$job->title}' has been {$statusText}.");
    }

    /**
     * Remove the specified job posting from storage.
     */
    public function destroy(JobPosting $job)
    {
        $title = $job->title;
        $job->delete();

        return redirect()->route('admin.jobs.index')
            ->with('success', "Job posting '{$title}' removed successfully.");
    }
}
