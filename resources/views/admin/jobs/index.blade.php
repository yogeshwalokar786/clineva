@extends('admin.layout')

@section('title', 'Job Postings - Admin Console')
@section('page_title', 'Careers & Job Postings')

@section('content')

    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
            <h2 style="font-size: 20px; font-weight: 700; color: var(--dark); margin-bottom: 4px;">Career Openings</h2>
            <p style="font-size: 13.5px; color: var(--text-muted); margin: 0;">Manage current vacancies and dynamic postings on the Clineva Careers page.</p>
        </div>
        <div style="display: flex; gap: 10px;">
            <a href="{{ route('careers') }}" target="_blank" class="btn-live-site">
                <span>View Public Careers</span>
                <i class="icon-arrow-right"></i>
            </a>
            <a href="{{ route('admin.jobs.create') }}" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary);">
                <span>+ Post New Job</span>
            </a>
        </div>
    </div>

    <!-- Stats Overview -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 18px; margin-bottom: 24px;">
        <div style="background: #fff; padding: 18px 20px; border-radius: 12px; border: 1px solid var(--border-color);">
            <div style="font-size: 12.5px; color: var(--text-muted); font-weight: 600;">Total Positions</div>
            <div style="font-size: 24px; font-weight: 800; color: var(--dark); margin-top: 4px;">{{ $stats['total'] }}</div>
        </div>
        <div style="background: #fff; padding: 18px 20px; border-radius: 12px; border: 1px solid var(--border-color);">
            <div style="font-size: 12.5px; color: var(--text-muted); font-weight: 600;">Active Vacancies</div>
            <div style="font-size: 24px; font-weight: 800; color: #10B981; margin-top: 4px;">{{ $stats['active'] }}</div>
        </div>
        <div style="background: #fff; padding: 18px 20px; border-radius: 12px; border: 1px solid var(--border-color);">
            <div style="font-size: 12.5px; color: var(--text-muted); font-weight: 600;">Draft / Closed</div>
            <div style="font-size: 24px; font-weight: 800; color: #64748B; margin-top: 4px;">{{ $stats['inactive'] }}</div>
        </div>
        <div style="background: #fff; padding: 18px 20px; border-radius: 12px; border: 1px solid var(--border-color);">
            <div style="font-size: 12.5px; color: var(--text-muted); font-weight: 600;">Total Applications</div>
            <div style="font-size: 24px; font-weight: 800; color: var(--primary); margin-top: 4px;">{{ $stats['applications_count'] }}</div>
        </div>
    </div>

    <!-- Jobs Table -->
    <div class="content-card">
        <div class="card-head">
            <div class="card-head-title">Job Postings Directory</div>
            <span class="card-head-badge">{{ $jobs->count() }} Records</span>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Job Title &amp; Department</th>
                        <th>Type &amp; Experience</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Applications</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                        <tr>
                            <td>
                                <div style="font-weight: 700; color: var(--dark); font-size: 14.5px;">{{ $job->title }}</div>
                                <span style="font-size: 12px; color: var(--text-muted);">{{ $job->category }}</span>
                            </td>
                            <td>
                                <span class="badge-category badge-clinical">{{ $job->job_type }}</span>
                                @if($job->experience)
                                    <div style="font-size: 11.5px; color: var(--text-muted); margin-top: 4px;">{{ $job->experience }}</div>
                                @endif
                            </td>
                            <td>
                                <div style="font-size: 13px; color: #334155;">{{ $job->location }}</div>
                            </td>
                            <td>
                                @if($job->is_active)
                                    <span style="display: inline-flex; align-items: center; gap: 5px; background: #ECFDF5; color: #065F46; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 600;">
                                        <span style="width: 6px; height: 6px; border-radius: 50%; background: #10B981;"></span>
                                        Active
                                    </span>
                                @else
                                    <span style="display: inline-flex; align-items: center; gap: 5px; background: #F1F5F9; color: #64748B; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 600;">
                                        <span style="width: 6px; height: 6px; border-radius: 50%; background: #94A3B8;"></span>
                                        Closed
                                    </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.applications.index', ['search' => $job->title]) }}" style="font-weight: 700; color: var(--primary); text-decoration: none;">
                                    {{ $job->applications_count }} Candidates
                                </a>
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; align-items: center; gap: 6px;">
                                    <!-- Toggle Active -->
                                    <form action="{{ route('admin.jobs.toggle', ['job' => $job->id]) }}" method="POST" style="margin: 0;">
                                        @csrf
                                        <button type="submit" class="btn-live-site" style="padding: 5px 10px; font-size: 12px;" title="{{ $job->is_active ? 'Deactivate' : 'Activate' }}">
                                            {{ $job->is_active ? 'Close' : 'Publish' }}
                                        </button>
                                    </form>

                                    <!-- Edit -->
                                    <a href="{{ route('admin.jobs.edit', ['job' => $job->id]) }}" class="btn-live-site" style="padding: 5px 10px; font-size: 12px; color: var(--primary);" title="Edit Job">
                                        Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('admin.jobs.destroy', ['job' => $job->id]) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to delete this job posting?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-live-site" style="padding: 5px 10px; font-size: 12px; color: #EF4444; border-color: rgba(239, 68, 68, 0.2);" title="Delete Job">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 40px; color: var(--text-muted);">
                                No job postings created yet. Click <strong>+ Post New Job</strong> above to add your first opening.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
