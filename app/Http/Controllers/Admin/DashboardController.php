<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        $admins = Admin::latest()->get();

        $stats = [
            'total_services' => count($allServices),
            'clinical_count' => count($clinicalServices),
            'babe_count' => count($babeServices),
            'medico_count' => count($medicoServices),
            'total_admins' => $admins->count(),
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
            'systemInfo'
        ));
    }
}
