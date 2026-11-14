@extends('admin.layout')

@section('title', 'Inquiry from ' . $inquiry->name . ' - Admin Console')
@section('page_title', 'Inquiry Details')

@section('content')

    <div style="max-width: 900px; margin: 0 auto;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
            <div>
                <a href="{{ route('admin.inquiries.index') }}" class="btn-live-site" style="margin-bottom: 8px;">
                    &larr; Back to Inquiries
                </a>
                <h2 style="font-size: 22px; font-weight: 800; color: var(--dark); margin: 0;">
                    {{ $inquiry->name }}
                </h2>
                <div style="font-size: 13.5px; color: var(--text-muted); margin-top: 4px;">
                    Received on {{ $inquiry->created_at->format('d M Y, h:i A') }} ({{ $inquiry->created_at->diffForHumans() }})
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                <a href="mailto:{{ $inquiry->email }}?subject=Re: {{ urlencode($inquiry->subject ?: 'Clineva Inquiry') }}" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary);">
                    Reply via Email
                </a>
                @if($inquiry->phone)
                    <a href="tel:{{ $inquiry->phone }}" class="btn-live-site">
                        Call Sender
                    </a>
                @endif
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
            <!-- Left: Message & Contact Info -->
            <div>
                <!-- Sender Information -->
                <div class="content-card" style="padding: 24px; margin-bottom: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 18px; border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">
                        Sender Information
                    </h3>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Full Name</div>
                            <div style="font-size: 14.5px; font-weight: 700; color: var(--dark); margin-top: 2px;">{{ $inquiry->name }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Service of Interest</div>
                            <div style="font-size: 14.5px; font-weight: 700; color: var(--primary); margin-top: 2px;">{{ $inquiry->service ?: 'General Inquiry' }}</div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Email Address</div>
                            <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">
                                <a href="mailto:{{ $inquiry->email }}" style="color: var(--primary); text-decoration: none;">{{ $inquiry->email }}</a>
                            </div>
                        </div>
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Phone Number</div>
                            <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">
                                @if($inquiry->phone)
                                    <a href="tel:{{ $inquiry->phone }}" style="color: var(--dark); text-decoration: none;">{{ $inquiry->phone }}</a>
                                @else
                                    <span style="color: var(--text-muted);">Not provided</span>
                                @endif
                            </div>
                        </div>
                        @if($inquiry->company)
                            <div>
                                <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Company / Organization</div>
                                <div style="font-size: 14px; font-weight: 600; color: var(--dark); margin-top: 2px;">{{ $inquiry->company }}</div>
                            </div>
                        @endif
                        <div>
                            <div style="font-size: 12px; color: var(--text-muted); font-weight: 600;">Inquiry Status</div>
                            <div style="margin-top: 2px;">
                                @if($inquiry->status === 'unread')
                                    <span style="background: #FEF2F2; color: #991B1B; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Unread</span>
                                @elseif($inquiry->status === 'read')
                                    <span style="background: #EFF6FF; color: #1D4ED8; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Read</span>
                                @else
                                    <span style="background: #ECFDF5; color: #065F46; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 700;">Replied</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Body -->
                <div class="content-card" style="padding: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 14px;">
                        Inquiry Message
                    </h3>
                    <div style="font-size: 14.5px; line-height: 1.7; color: #1E293B; background: #FAFBFD; padding: 20px; border-radius: 8px; border: 1px solid #E2E8F0; white-space: pre-wrap;">{{ $inquiry->message }}</div>
                </div>
            </div>

            <!-- Right: Status Changer & Notes -->
            <div>
                <div class="content-card" style="padding: 24px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dark); margin-bottom: 16px;">
                        Manage Inquiry
                    </h3>

                    <form action="{{ route('admin.inquiries.status', $inquiry) }}" method="POST">
                        @csrf
                        <div style="margin-bottom: 18px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="status">
                                Inquiry Status
                            </label>
                            <select id="status" name="status" style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px; background: #fff; font-weight: 600;">
                                <option value="unread" {{ $inquiry->status === 'unread' ? 'selected' : '' }}>Unread</option>
                                <option value="read" {{ $inquiry->status === 'read' ? 'selected' : '' }}>Read</option>
                                <option value="replied" {{ $inquiry->status === 'replied' ? 'selected' : '' }}>Replied to Sender</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="admin_notes">
                                Internal Follow-up Notes
                            </label>
                            <textarea id="admin_notes" name="admin_notes" rows="5" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 13.5px; line-height: 1.5;" placeholder="Add notes on communication, quote provided, meeting scheduled...">{{ old('admin_notes', $inquiry->admin_notes) }}</textarea>
                        </div>

                        <button type="submit" class="btn-live-site" style="width: 100%; justify-content: center; background: var(--primary); color: #fff; border-color: var(--primary); padding: 11px; font-weight: 700;">
                            Update Status &amp; Notes
                        </button>
                    </form>

                    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Permanently delete this inquiry record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-live-site" style="width: 100%; justify-content: center; color: #EF4444; border-color: rgba(239, 68, 68, 0.2); padding: 10px;">
                                Delete Inquiry Record
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
