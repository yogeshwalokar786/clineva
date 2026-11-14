@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard Overview')

@section('content')

    <!-- Top Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-info">
                <div class="stat-label">Total Services</div>
                <div class="stat-value">{{ $stats['total_services'] }}</div>
            </div>
            <div class="stat-icon primary">
                <i class="icon-stethoscope"></i>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-info">
                <div class="stat-label">Active Job Openings</div>
                <div class="stat-value">{{ $stats['active_jobs'] ?? 0 }}</div>
            </div>
            <div class="stat-icon success">
                <i class="icon-suitcase"></i>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-info">
                <div class="stat-label">Received Applications</div>
                <div class="stat-value">{{ $stats['total_applications'] ?? 0 }}</div>
            </div>
            <div class="stat-icon warning">
                <i class="icon-file-word"></i>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-info">
                <div class="stat-label">Admin Accounts</div>
                <div class="stat-value">{{ $stats['total_admins'] }}</div>
            </div>
            <div class="stat-icon indigo">
                <i class="icon-lock"></i>
            </div>
        </div>
    </div>

    <!-- Main Two Column Grid -->
    <div class="dashboard-split">
        <!-- Left: Applications & Services Catalog -->
        <div>
            <!-- Recent Candidate Applications -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div class="card-head">
                    <div class="card-head-title">Recent Candidate Applications</div>
                    <div style="display: flex; gap: 8px;">
                        <a href="{{ route('admin.jobs.create') }}" class="btn-live-site" style="font-size: 12px; padding: 4px 10px; background: var(--primary); color: #fff; border-color: var(--primary);">
                            + Post Vacancy
                        </a>
                        <a href="{{ route('admin.applications.index') }}" class="btn-live-site" style="font-size: 12px; padding: 4px 10px;">
                            View All ({{ $stats['total_applications'] ?? 0 }})
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Candidate</th>
                                <th>Role Applied</th>
                                <th>Resume</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentApplications as $app)
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: var(--dark); font-size: 13.5px;">{{ $app->name }}</div>
                                        <div style="font-size: 12px; color: var(--text-muted);">{{ $app->email }} &bull; {{ $app->phone }}</div>
                                    </td>
                                    <td>
                                        <div style="font-weight: 600; color: #1E293B; font-size: 13px;">{{ $app->role_title }}</div>
                                    </td>
                                    <td>
                                        @if($app->resume_path)
                                            <a href="{{ route('admin.applications.resume', $app) }}" class="btn-live-site" style="padding: 3px 8px; font-size: 11.5px; color: var(--primary);">
                                                Download CV
                                            </a>
                                        @else
                                            <span style="font-size: 11.5px; color: #94A3B8;">No CV</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($app->status === 'pending')
                                            <span style="background: #FEF2F2; color: #991B1B; padding: 2px 8px; border-radius: 999px; font-size: 11px; font-weight: 700;">Pending</span>
                                        @elseif($app->status === 'reviewed')
                                            <span style="background: #EFF6FF; color: #1D4ED8; padding: 2px 8px; border-radius: 999px; font-size: 11px; font-weight: 700;">Reviewed</span>
                                        @elseif($app->status === 'shortlisted')
                                            <span style="background: #ECFDF5; color: #065F46; padding: 2px 8px; border-radius: 999px; font-size: 11px; font-weight: 700;">Shortlisted</span>
                                        @else
                                            <span style="background: #F1F5F9; color: #475569; padding: 2px 8px; border-radius: 999px; font-size: 11px; font-weight: 700;">Rejected</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.applications.show', $app) }}" class="btn-live-site" style="padding: 4px 10px; font-size: 12px; color: var(--primary);">
                                            Review
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center; padding: 28px; color: var(--text-muted); font-size: 13.5px;">
                                        No candidate applications received yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Services Catalog Overview -->
            <div class="content-card">
                <div class="card-head">
                    <div class="card-head-title">Clineva Services Catalog</div>
                    <span class="card-head-badge">{{ count($allServices) }} Active Capabilities</span>
                </div>
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Capability</th>
                            <th>Division</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allServices as $slug => $service)
                            <tr>
                                <td>
                                    <div class="service-cell">
                                        <div class="service-cell-icon">
                                            <i class="{{ $service['icon'] ?? 'icon-check' }}"></i>
                                        </div>
                                        <div>
                                            <div class="service-cell-title">{{ $service['title'] }}</div>
                                            <div style="font-size: 12px; color: var(--text-muted);">{{ $service['slug'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($service['category'] === 'clinical-trials')
                                        <span class="badge-category badge-clinical">Clinical Trials</span>
                                    @elseif($service['category'] === 'babe-services')
                                        <span class="badge-category badge-babe">BA/BE Services</span>
                                    @else
                                        <span class="badge-category badge-medico">Medico-Marketing</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('services.details', ['service' => $service['slug']]) }}" target="_blank" class="btn-action-view">
                                        <span>View Live</span>
                                        <i class="icon-arrow-right" style="font-size: 11px;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <!-- Right: System Info & Administrators -->
        <div>
            <!-- System Status -->
            <div class="content-card">
                <div class="card-head">
                    <div class="card-head-title">System Information</div>
                    <span class="badge-category badge-clinical">Production Ready</span>
                </div>
                <div class="system-list">
                    <div class="system-item">
                        <span class="system-label">Framework</span>
                        <span class="system-val">Laravel {{ $systemInfo['laravel_version'] }}</span>
                    </div>
                    <div class="system-item">
                        <span class="system-label">PHP Runtime</span>
                        <span class="system-val">{{ $systemInfo['php_version'] }}</span>
                    </div>
                    <div class="system-item">
                        <span class="system-label">Database Driver</span>
                        <span class="system-val" style="text-transform: uppercase;">{{ $systemInfo['db_driver'] }}</span>
                    </div>
                    <div class="system-item">
                        <span class="system-label">Environment</span>
                        <span class="system-val" style="text-transform: capitalize;">{{ $systemInfo['environment'] }}</span>
                    </div>
                    <div class="system-item">
                        <span class="system-label">Server Time</span>
                        <span class="system-val">{{ $systemInfo['server_time'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Administrators -->
            <div class="content-card">
                <div class="card-head">
                    <div class="card-head-title">Registered Administrators</div>
                    <span class="card-head-badge">{{ $admins->count() }} Users</span>
                </div>
                <div>
                    @foreach($admins as $admin)
                        <div class="admin-account-item">
                            <div class="admin-account-meta">
                                <div class="user-avatar" style="width: 32px; height: 32px; font-size: 12px;">
                                    {{ strtoupper(substr($admin->name, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="admin-account-name">{{ $admin->name }}</div>
                                    <div class="admin-account-email">{{ $admin->email }}</div>
                                </div>
                            </div>
                            <span class="badge-category badge-clinical" style="font-size: 11px;">Active Admin</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

