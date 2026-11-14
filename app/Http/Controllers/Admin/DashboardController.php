<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\JobPosting;
use App\Models\JobApplication;
use App\Data\ServicesCatalog;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $currentAdmin = Auth::guard('admin')->user();
        $allServices = ServicesCatalog::all();
        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoServices = ServicesCatalog::getByCategory('medico-marketing');

        try {
            $admins = Admin::latest()->get();
            $activeJobsCount = JobPosting::where('is_active', true)->count();
            $totalJobsCount = JobPosting::count();
            $pendingApplicationsCount = JobApplication::where('status', 'pending')->count();
            $totalApplicationsCount = JobApplication::count();
            $recentApplications = JobApplication::latest()->take(5)->get();
        } catch (\Throwable $e) {
            $admins = collect();
            $activeJobsCount = 0;
            $totalJobsCount = 0;
            $pendingApplicationsCount = 0;
            $totalApplicationsCount = 0;
            $recentApplications = collect();
        }

        $stats = [
            'total_services' => count($allServices),
            'clinical_count' => count($clinicalServices),
            'babe_count' => count($babeServices),
            'medico_count' => count($medicoServices),
            'total_admins' => $admins->count(),
            'active_jobs' => $activeJobsCount,
            'total_jobs' => $totalJobsCount,
            'pending_applications' => $pendingApplicationsCount,
            'total_applications' => $totalApplicationsCount,
        ];

        $systemInfo = [
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
            'environment' => config('app.env'),
            'db_driver' => config('database.default'),
            'server_time' => now()->format('d M Y, h:i A T'),
        ];

        return view('admin.dashboard', compact(
            'currentAdmin',
            'allServices',
            'clinicalServices',
            'babeServices',
            'medicoServices',
            'admins',
            'stats',
            'recentApplications',
            'systemInfo'
        ));
    }
}
