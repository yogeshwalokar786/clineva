@extends('admin.layout')

@section('title', 'Dynamic Policy Pages - Admin Console')
@section('page_title', 'Policy & Legal Pages')

@section('content')

<!-- Header Action Bar -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
    <div>
        <h2 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0 0 4px 0;">Compliance, Legal & Policy Pages</h2>
        <p style="font-size: 13.5px; color: #64748B; margin: 0;">Manage dynamic legal documents, privacy notices, and terms of service with the rich text editor.</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <a href="{{ route('admin.policy-pages.create') }}" class="btn-admin btn-admin-primary" style="padding: 9px 18px; font-size: 13.5px; font-weight: 700;">
            + Create New Policy Page
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        ✓ {{ session('success') }}
    </div>
@endif

<!-- Policy Pages Table -->
<div class="content-card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 38%;">Policy Document Title</th>
                    <th>URL Slug & Permalink</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($policies as $item)
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0;">
                                    <i class="icon-file-word"></i>
                                </div>
                                <div>
                                    <div style="font-size: 14.5px; font-weight: 700; color: #0F172A;">
                                        {{ $item->title }}
                                    </div>
                                    <div style="font-size: 12px; color: #64748B; margin-top: 2px;">
                                        {{ Str::limit(strip_tags($item->content), 70) }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <code style="font-size: 12.5px; color: #0077C8; background: #F0F6FB; padding: 4px 8px; border-radius: 6px;">
                                /policy/{{ $item->slug }}
                            </code>
                        </td>
                        <td>
                            @if($item->is_active)
                                <span style="font-size: 11.5px; font-weight: 700; background: #ECFDF5; color: #059669; padding: 3px 10px; border-radius: 999px;">
                                    Active / Published
                                </span>
                            @else
                                <span style="font-size: 11.5px; font-weight: 700; background: #FEF2F2; color: #DC2626; padding: 3px 10px; border-radius: 999px;">
                                    Draft / Hidden
                                </span>
                            @endif
                        </td>
                        <td style="font-size: 13px; color: #64748B;">
                            {{ $item->updated_at ? $item->updated_at->format('d M Y, h:i A') : 'Default' }}
                        </td>
                        <td style="text-align: right;">
                            <div style="display: inline-flex; gap: 6px;">
                                <a href="{{ route('policy.show', ['slug' => $item->slug]) }}" target="_blank" class="btn-admin btn-admin-secondary" style="padding: 5px 10px; font-size: 12px;" title="View Live Page">
                                    <i class="icon-arrow-right"></i> View
                                </a>
                                <a href="{{ route('admin.policy-pages.edit', $item) }}" class="btn-admin btn-admin-primary" style="padding: 5px 12px; font-size: 12px;" title="Edit Content & SEO">
                                    <i class="icon-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.policy-pages.destroy', $item) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete policy \'{{ $item->title }}\'?');" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin-danger" style="padding: 5px 9px; font-size: 12px;" title="Delete Policy Page">
                                        <i class="icon-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 48px 20px; color: #64748B;">
                            <i class="icon-file-word" style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
                            <h4 style="font-size: 16px; font-weight: 700; color: #1E293B; margin-bottom: 4px;">No Policy Pages Found</h4>
                            <p style="font-size: 13px; margin-bottom: 14px;">Create your first dynamic policy or regulatory page using the button above.</p>
                            <a href="{{ route('admin.policy-pages.create') }}" class="btn-admin btn-admin-primary" style="padding: 8px 18px;">
                                + Create Policy Page
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
