<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of candidate applications.
     */
    public function index(Request $request)
    {
        $status = $request->query('status');
        $search = $request->query('search');

        $query = JobApplication::with('jobPosting')->latest();

        if ($status && in_array($status, ['pending', 'reviewed', 'shortlisted', 'rejected'])) {
            $query->where('status', $status);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('role_title', 'like', "%{$search}%");
            });
        }

        $applications = $query->paginate(15)->withQueryString();

        $counts = [
            'all' => JobApplication::count(),
            'pending' => JobApplication::where('status', 'pending')->count(),
            'reviewed' => JobApplication::where('status', 'reviewed')->count(),
            'shortlisted' => JobApplication::where('status', 'shortlisted')->count(),
            'rejected' => JobApplication::where('status', 'rejected')->count(),
        ];

        return view('admin.applications.index', compact('applications', 'counts', 'status', 'search'));
    }

    /**
     * Display the specified application details.
     */
    public function show(JobApplication $application)
    {
        $application->load('jobPosting');

        // Automatically mark as reviewed if it was pending
        if ($application->status === 'pending') {
            $application->update(['status' => 'reviewed']);
        }

        return view('admin.applications.show', compact('application'));
    }

    /**
     * Download or stream the candidate resume.
     */
    public function resume(JobApplication $application)
    {
        if (! $application->resume_path || ! Storage::exists($application->resume_path)) {
            return back()->with('error', 'Resume file not found on the server.');
        }

        $filename = $application->resume_original_name ?: basename($application->resume_path);

        return Storage::download($application->resume_path, $filename);
    }

    /**
     * Update candidate application status or admin notes.
     */
    public function updateStatus(Request $request, JobApplication $application)
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:pending,reviewed,shortlisted,rejected'],
            'admin_notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $application->update($validated);

        return back()->with('success', 'Application status updated successfully.');
    }

    /**
     * Remove the specified candidate application from storage.
     */
    public function destroy(JobApplication $application)
    {
        if ($application->resume_path && Storage::exists($application->resume_path)) {
            Storage::delete($application->resume_path);
        }

        $name = $application->name;
        $application->delete();

        return redirect()->route('admin.applications.index')
            ->with('success', "Application from '{$name}' has been deleted.");
    }
}
