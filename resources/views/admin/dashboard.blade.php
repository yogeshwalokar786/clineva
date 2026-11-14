@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard Overview')

@section('styles')
<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
        margin-bottom: 28px;
    }

    .stat-card {
        background: #FFFFFF;
        border-radius: 14px;
        padding: 22px 24px;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 12px rgba(10, 28, 50, 0.03);
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(10, 28, 50, 0.06);
    }

    .stat-info .stat-label {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-muted);
        margin-bottom: 6px;
    }

    .stat-info .stat-value {
        font-size: 28px;
        font-weight: 800;
        color: var(--dark);
        line-height: 1;
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .stat-icon.primary { background: rgba(0, 119, 200, 0.1); color: #0077C8; }
    .stat-icon.success { background: rgba(16, 185, 129, 0.1); color: #10B981; }
    .stat-icon.warning { background: rgba(245, 158, 11, 0.1); color: #F59E0B; }
    .stat-icon.indigo  { background: rgba(99, 102, 241, 0.1); color: #6366F1; }

    .dashboard-split {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
    }

    .content-card {
        background: #FFFFFF;
        border-radius: 14px;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 12px rgba(10, 28, 50, 0.03);
        overflow: hidden;
        margin-bottom: 24px;
    }

    .card-head {
        padding: 18px 24px;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-head-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--dark);
    }

    .card-head-badge {
        font-size: 12px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 999px;
        background: #F1F5F9;
        color: #475569;
    }

    /* Data Table */
    .table-responsive {
        overflow-x: auto;
    }

    table.admin-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13.5px;
    }

    table.admin-table th {
        background: #F8FAFC;
        padding: 12px 20px;
        text-align: left;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748B;
        border-bottom: 1px solid var(--border-color);
    }

    table.admin-table td {
        padding: 14px 20px;
        border-bottom: 1px solid #F1F5F9;
        vertical-align: middle;
    }

    table.admin-table tr:hover td {
        background: #F8FBFF;
    }

    .service-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .service-cell-icon {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        background: rgba(0, 119, 200, 0.08);
        color: #0077C8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .service-cell-title {
        font-weight: 600;
        color: var(--dark);
    }

    .badge-category {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-clinical { background: #E0F2FE; color: #0284C7; }
    .badge-babe { background: #EDE9FE; color: #7C3AED; }
    .badge-medico { background: #FEF3C7; color: #D97706; }

    .btn-action-view {
        padding: 6px 12px;
        font-size: 12.5px;
        font-weight: 600;
        color: var(--primary);
        background: #F0F9FF;
        border: 1px solid #BAE6FD;
        border-radius: 6px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.2s;
    }

    .btn-action-view:hover {
        background: var(--primary);
        color: #FFFFFF;
        border-color: var(--primary);
    }

    /* System Info List */
    .system-list {
        padding: 12px 20px;
    }

    .system-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 11px 0;
        border-bottom: 1px solid #F1F5F9;
        font-size: 13px;
    }

    .system-item:last-child {
        border-bottom: none;
    }

    .system-label {
        color: var(--text-muted);
        font-weight: 500;
    }

    .system-val {
        font-weight: 600;
        color: var(--dark);
    }

    /* Admin Accounts List */
    .admin-account-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 20px;
        border-bottom: 1px solid #F1F5F9;
    }

    .admin-account-item:last-child {
        border-bottom: none;
    }

    .admin-account-meta {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .admin-account-name {
        font-size: 14px;
        font-weight: 600;
        color: var(--dark);
    }

    .admin-account-email {
        font-size: 12px;
        color: var(--text-muted);
    }

    @media (max-width: 1199px) {
        .stats-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .dashboard-split {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 575px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

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

