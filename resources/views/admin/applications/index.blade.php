@extends('admin.layout')

@section('title', 'Job Applications - Admin Console')
@section('page_title', 'Received Applications')

@section('content')

    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
            <h2 style="font-size: 20px; font-weight: 700; color: var(--dark); margin-bottom: 4px;">Candidate Applications</h2>
            <p style="font-size: 13.5px; color: var(--text-muted); margin: 0;">Review resumes, candidate summaries, and manage applicant progression.</p>
        </div>
        <div>
            <form action="{{ route('admin.applications.index') }}" method="GET" style="display: flex; gap: 8px;">
                @if($status)
                    <input type="hidden" name="status" value="{{ $status }}">
                @endif
                <input type="text" name="search" value="{{ $search }}" placeholder="Search by candidate, email, role..." style="padding: 8px 14px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 13.5px; width: 260px;">
                <button type="submit" class="btn-live-site" style="padding: 8px 14px;">
                    Search
                </button>
                @if($search || $status)
                    <a href="{{ route('admin.applications.index') }}" class="btn-live-site" style="padding: 8px 12px; color: #EF4444;" title="Reset Filters">✕</a>
                @endif
            </form>
        </div>
    </div>

    <!-- Status Tabs -->
    <div style="display: flex; gap: 8px; margin-bottom: 20px; overflow-x: auto; padding-bottom: 4px;">
        <a href="{{ route('admin.applications.index', ['search' => $search]) }}" class="btn-live-site {{ !$status ? 'active' : '' }}" style="{{ !$status ? 'background: var(--primary); color: #fff; border-color: var(--primary);' : '' }}">
            <span>All Applications ({{ $counts['all'] }})</span>
        </a>
        <a href="{{ route('admin.applications.index', ['status' => 'pending', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'pending' ? 'background: #EF4444; color: #fff; border-color: #EF4444;' : '' }}">
            <span>Pending ({{ $counts['pending'] }})</span>
        </a>
        <a href="{{ route('admin.applications.index', ['status' => 'reviewed', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'reviewed' ? 'background: #3B82F6; color: #fff; border-color: #3B82F6;' : '' }}">
            <span>Reviewed ({{ $counts['reviewed'] }})</span>
        </a>
        <a href="{{ route('admin.applications.index', ['status' => 'shortlisted', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'shortlisted' ? 'background: #10B981; color: #fff; border-color: #10B981;' : '' }}">
            <span>Shortlisted ({{ $counts['shortlisted'] }})</span>
        </a>
        <a href="{{ route('admin.applications.index', ['status' => 'rejected', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'rejected' ? 'background: #64748B; color: #fff; border-color: #64748B;' : '' }}">
            <span>Rejected ({{ $counts['rejected'] }})</span>
        </a>
    </div>

    <!-- Applications Table -->
    <div class="content-card">
        <div class="card-head">
            <div class="card-head-title">Application Records</div>
            <span class="card-head-badge">{{ $applications->total() }} Candidates</span>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Candidate</th>
                        <th>Applied Role</th>
                        <th>Experience</th>
                        <th>Resume</th>
                        <th>Status</th>
                        <th>Applied On</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div class="user-avatar" style="width: 34px; height: 34px; font-size: 13px;">
                                        {{ strtoupper(substr($app->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: var(--dark); font-size: 14px;">{{ $app->name }}</div>
                                        <div style="font-size: 12px; color: var(--text-muted);">
                                            <a href="mailto:{{ $app->email }}" style="color: inherit; text-decoration: none;">{{ $app->email }}</a> &bull;
                                            <a href="tel:{{ $app->phone }}" style="color: inherit; text-decoration: none;">{{ $app->phone }}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #1E293B; font-size: 13.5px;">{{ $app->role_title }}</div>
                                @if($app->jobPosting)
                                    <span style="font-size: 11px; color: var(--primary);">Active Vacancy</span>
                                @else
                                    <span style="font-size: 11px; color: #64748B;">General Influx</span>
                                @endif
                            </td>
                            <td>
                                <span style="font-size: 13px; color: #334155;">{{ $app->experience ?: 'Not specified' }}</span>
                            </td>
                            <td>
                                @if($app->resume_path)
                                    <a href="{{ route('admin.applications.resume', $app) }}" class="btn-live-site" style="padding: 4px 10px; font-size: 12px; color: var(--primary);" title="Download Resume">
                                        <i class="icon-file-word"></i>
                                        <span>Download CV</span>
                                    </a>
                                @else
                                    <span style="font-size: 12px; color: #94A3B8;">No CV</span>
                                @endif
                            </td>
                            <td>
                                @if($app->status === 'pending')
                                    <span style="background: #FEF2F2; color: #991B1B; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Pending</span>
                                @elseif($app->status === 'reviewed')
                                    <span style="background: #EFF6FF; color: #1D4ED8; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Reviewed</span>
                                @elseif($app->status === 'shortlisted')
                                    <span style="background: #ECFDF5; color: #065F46; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Shortlisted</span>
                                @else
                                    <span style="background: #F1F5F9; color: #475569; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Rejected</span>
                                @endif
                            </td>
                            <td>
                                <div style="font-size: 12.5px; color: var(--text-muted);">
                                    {{ $app->created_at->format('d M Y, h:i A') }}
                                </div>
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; align-items: center; gap: 6px;">
                                    <a href="{{ route('admin.applications.show', $app) }}" class="btn-live-site" style="padding: 5px 12px; font-size: 12.5px; color: var(--primary);">
                                        Review Details
                                    </a>
                                    <form action="{{ route('admin.applications.destroy', $app) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete this application record?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-live-site" style="padding: 5px 8px; font-size: 12px; color: #EF4444; border-color: rgba(239, 68, 68, 0.2);" title="Delete Application">
                                            ✕
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">
                                No applications found for the selected criteria.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($applications->hasPages())
            <div style="padding: 16px 20px; border-top: 1px solid var(--border-color);">
                {{ $applications->links() }}
            </div>
        @endif
    </div>

@endsection
