@extends('admin.layout')

@section('title', 'Application: ' . $application->name . ' - Admin Console')
@section('page_title', 'Candidate Profile')

@section('content')

    <div style="max-width: 900px; margin: 0 auto;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
            <div>
                <a href="{{ route('admin.applications.index') }}" class="btn-live-site" style="margin-bottom: 8px;">
                    &larr; Back to Applications
                </a>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--dark); margin: 0;">
                    {{ $application->name }}
                </h2>
                <div style="font-size: 13.5px; color: var(--text-muted); margin-top: 4px;">
                    Applied for <strong>{{ $application->role_title }}</strong> on {{ $application->created_at->format('d M Y, h:i A') }}
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <a href="mailto:{{ $application->email }}?subject=Clineva Application - {{ urlencode($application->role_title) }}" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary);">
                    Email Candidate
                </a>
                <a href="tel:{{ $application->phone }}" class="btn-live-site">
                    Call Candidate
                </a>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
            <!-- Left: Application Details -->
            <div>
                <!-- Candidate Information -->
                <div class="content-card" style="padding: 24px; margin-bottom: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 18px; border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">
                        Candidate Details
                    </h3>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 20px;">
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Full Name</div>
                            <div style="font-size: 14.5px; font-weight: 700; color: var(--dark); margin-top: 2px;">{{ $application->name }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Position Applied</div>
                            <div style="font-size: 14.5px; font-weight: 700; color: var(--primary); margin-top: 2px;">{{ $application->role_title }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Email Address</div>
                            <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">
                                <a href="mailto:{{ $application->email }}" style="color: var(--primary); text-decoration: none;">{{ $application->email }}</a>
                            </div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Phone Number</div>
                            <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">
                                <a href="tel:{{ $application->phone }}" style="color: var(--dark); text-decoration: none;">{{ $application->phone }}</a>
                            </div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Total Experience</div>
                            <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">{{ $application->experience ?: 'Not specified' }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Current Status</div>
                            <div style="margin-top: 2px;">
                                @if($application->status === 'pending')
                                    <span style="background: #FEF2F2; color: #991B1B; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Pending</span>
                                @elseif($application->status === 'reviewed')
                                    <span style="background: #EFF6FF; color: #1D4ED8; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Reviewed</span>
                                @elseif($application->status === 'shortlisted')
                                    <span style="background: #ECFDF5; color: #065F46; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Shortlisted</span>
                                @else
                                    <span style="background: #F1F5F9; color: #475569; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Rejected</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Resume Document Box -->
                    <div style="background: #F8FAFC; border: 1px solid var(--border-color); border-radius: 10px; padding: 16px; display: flex; align-items: center; justify-content: space-between;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                <i class="icon-file-word"></i>
                            </div>
                            <div>
                                <div style="font-weight: 700; color: var(--dark); font-size: 14px;">
                                    {{ $application->resume_original_name ?: 'Candidate_Resume.pdf' }}
                                </div>
                                <div style="font-size: 12px; color: var(--text-muted);">
                                    Uploaded with application
                                </div>
                            </div>
                        </div>

                        @if($application->resume_path)
                            <a href="{{ route('admin.applications.resume', $application) }}" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary); font-size: 13px;">
                                <span>Download Resume</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        @else
                            <span style="font-size: 12.5px; color: #94A3B8; font-weight: 600;">No Resume Attached</span>
                        @endif
                    </div>
                </div>

                <!-- Cover Note -->
                <div class="content-card" style="padding: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 14px;">
                        Cover Note / Candidate Statement
                    </h3>
                    <div style="font-size: 14px; line-height: 1.7; color: #334155; background: #FAFBFD; padding: 18px; border-radius: 8px; border: 1px solid #E2E8F0; white-space: pre-wrap;">
                        {{ $application->message ?: 'No cover note was provided by the candidate.' }}
                    </div>
                </div>
            </div>

            <!-- Right: Status Changer & Admin Notes -->
            <div>
                <div class="content-card" style="padding: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 16px;">
                        Manage Application
                    </h3>

                    <form action="{{ route('admin.applications.status', $application) }}" method="POST">
                        @csrf
                        <div style="margin-bottom: 18px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="status">
                                Hiring Stage
                            </label>
                            <select id="status" name="status" style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px; background: #fff; font-weight: 600;">
                                <option value="pending" {{ $application->status === 'pending' ? 'selected' : '' }}>Pending Review</option>
                                <option value="reviewed" {{ $application->status === 'reviewed' ? 'selected' : '' }}>Reviewed / Under Consideration</option>
                                <option value="shortlisted" {{ $application->status === 'shortlisted' ? 'selected' : '' }}>Shortlisted for Interview</option>
                                <option value="rejected" {{ $application->status === 'rejected' ? 'selected' : '' }}>Rejected / Not Suitable</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="admin_notes">
                                Internal Notes (HR / Interviewers)
                            </label>
                            <textarea id="admin_notes" name="admin_notes" rows="5" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 13.5px; line-height: 1.5;" placeholder="Add interview feedback, expected salary, availability, etc...">{{ old('admin_notes', $application->admin_notes) }}</textarea>
                        </div>

                        <button type="submit" class="btn-live-site" style="width: 100%; justify-content: center; background: var(--primary); color: #fff; border-color: var(--primary); padding: 11px; font-weight: 700;">
                            Update Status &amp; Notes
                        </button>
                    </form>

                    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                        <form action="{{ route('admin.applications.destroy', $application) }}" method="POST" onsubmit="return confirm('Permanently delete this candidate application?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-live-site" style="width: 100%; justify-content: center; color: #EF4444; border-color: rgba(239, 68, 68, 0.2); padding: 10px;">
                                Delete Application Record
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
