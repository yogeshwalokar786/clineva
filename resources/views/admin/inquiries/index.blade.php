@extends('admin.layout')

@section('title', 'Contact Inquiries - Admin Console')
@section('page_title', 'Contact Inquiries')

@section('content')

    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
            <h2 style="font-size: 20px; font-weight: 700; color: var(--dark); margin-bottom: 4px;">Website Inquiries &amp; Messages</h2>
            <p style="font-size: 13.5px; color: var(--text-muted); margin: 0;">Messages and study proposals submitted through the Clineva public Contact page.</p>
        </div>
        <div>
            <form action="{{ route('admin.inquiries.index') }}" method="GET" style="display: flex; gap: 8px;">
                @if($status)
                    <input type="hidden" name="status" value="{{ $status }}">
                @endif
                <input type="text" name="search" value="{{ $search }}" placeholder="Search by name, email, company, service..." style="padding: 8px 14px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 13.5px; width: 270px;">
                <button type="submit" class="btn-live-site" style="padding: 8px 14px;">
                    Search
                </button>
                @if($search || $status)
                    <a href="{{ route('admin.inquiries.index') }}" class="btn-live-site" style="padding: 8px 12px; color: #EF4444;" title="Reset Filters">✕</a>
                @endif
            </form>
        </div>
    </div>

    <!-- Status Tabs -->
    <div style="display: flex; gap: 8px; margin-bottom: 20px; overflow-x: auto; padding-bottom: 4px;">
        <a href="{{ route('admin.inquiries.index', ['search' => $search]) }}" class="btn-live-site {{ !$status ? 'active' : '' }}" style="{{ !$status ? 'background: var(--primary); color: #fff; border-color: var(--primary);' : '' }}">
            <span>All Messages ({{ $counts['all'] }})</span>
        </a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'unread', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'unread' ? 'background: #EF4444; color: #fff; border-color: #EF4444;' : '' }}">
            <span>Unread ({{ $counts['unread'] }})</span>
        </a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'read', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'read' ? 'background: #3B82F6; color: #fff; border-color: #3B82F6;' : '' }}">
            <span>Read ({{ $counts['read'] }})</span>
        </a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'replied', 'search' => $search]) }}" class="btn-live-site" style="{{ $status === 'replied' ? 'background: #10B981; color: #fff; border-color: #10B981;' : '' }}">
            <span>Replied ({{ $counts['replied'] }})</span>
        </a>
    </div>

    <!-- Inquiries Table -->
    <div class="content-card">
        <div class="card-head">
            <div class="card-head-title">Inquiries Inbox</div>
            <span class="card-head-badge">{{ $inquiries->total() }} Inquiries</span>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Service / Company</th>
                        <th>Message Preview</th>
                        <th>Status</th>
                        <th>Received On</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inquiries as $inq)
                        <tr style="{{ $inq->status === 'unread' ? 'background: rgba(0, 119, 200, 0.02);' : '' }}">
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div class="user-avatar" style="width: 34px; height: 34px; font-size: 13px; background: {{ $inq->status === 'unread' ? 'linear-gradient(135deg, #EF4444, #F87171)' : 'linear-gradient(135deg, #0077C8, #00A3E0)' }};">
                                        {{ strtoupper(substr($inq->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div style="font-weight: {{ $inq->status === 'unread' ? '800' : '600' }}; color: var(--dark); font-size: 14px;">
                                            {{ $inq->name }}
                                        </div>
                                        <div style="font-size: 12px; color: var(--text-muted);">
                                            <a href="mailto:{{ $inq->email }}" style="color: inherit; text-decoration: none;">{{ $inq->email }}</a> &bull;
                                            <a href="tel:{{ $inq->phone }}" style="color: inherit; text-decoration: none;">{{ $inq->phone }}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: #1E293B; font-size: 13.5px;">{{ $inq->service ?: 'General Inquiry' }}</div>
                                @if($inq->company)
                                    <span style="font-size: 11.5px; color: var(--text-muted);">{{ $inq->company }}</span>
                                @endif
                            </td>
                            <td>
                                <div style="font-size: 13px; color: #334155; max-width: 320px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $inq->message }}
                                </div>
                            </td>
                            <td>
                                @if($inq->status === 'unread')
                                    <span style="display: inline-flex; align-items: center; gap: 5px; background: #FEF2F2; color: #991B1B; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">
                                        <span style="width: 6px; height: 6px; border-radius: 50%; background: #EF4444;"></span>
                                        Unread
                                    </span>
                                @elseif($inq->status === 'read')
                                    <span style="background: #EFF6FF; color: #1D4ED8; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Read</span>
                                @else
                                    <span style="background: #ECFDF5; color: #065F46; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700;">Replied</span>
                                @endif
                            </td>
                            <td>
                                <div style="font-size: 12.5px; color: var(--text-muted);">
                                    {{ $inq->created_at->format('d M Y, h:i A') }}
                                </div>
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; align-items: center; gap: 6px;">
                                    <a href="{{ route('admin.inquiries.show', $inq) }}" class="btn-live-site" style="padding: 5px 12px; font-size: 12.5px; color: var(--primary);">
                                        View Details
                                    </a>
                                    <form action="{{ route('admin.inquiries.destroy', $inq) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Delete this inquiry message?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-live-site" style="padding: 5px 8px; font-size: 12px; color: #EF4444; border-color: rgba(239, 68, 68, 0.2);" title="Delete Inquiry">
                                            ✕
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 40px; color: var(--text-muted);">
                                No contact inquiries found matching the selected criteria.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($inquiries->hasPages())
            <div style="padding: 16px 20px; border-top: 1px solid var(--border-color);">
                {{ $inquiries->links() }}
            </div>
        @endif
    </div>

@endsection
