@extends('admin.layout')

@section('title', 'Blog Posts & Insights - Admin')
@section('page_title', 'Blog Posts & Advanced SEO')

@section('content')

    <!-- Top Action Bar -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
        <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
            <a href="{{ route('admin.blogs.index', ['status' => 'all']) }}"
               class="btn-live-site"
               style="padding: 7px 16px; font-size: 13px; font-weight: 700; {{ $status === 'all' ? 'background: var(--primary); color: #fff; border-color: var(--primary);' : '' }}">
                All Posts ({{ $counts['all'] }})
            </a>
            <a href="{{ route('admin.blogs.index', ['status' => 'published']) }}"
               class="btn-live-site"
               style="padding: 7px 16px; font-size: 13px; font-weight: 700; {{ $status === 'published' ? 'background: #059669; color: #fff; border-color: #059669;' : '' }}">
                Published ({{ $counts['published'] }})
            </a>
            <a href="{{ route('admin.blogs.index', ['status' => 'draft']) }}"
               class="btn-live-site"
               style="padding: 7px 16px; font-size: 13px; font-weight: 700; {{ $status === 'draft' ? 'background: #64748B; color: #fff; border-color: #64748B;' : '' }}">
                Drafts ({{ $counts['draft'] }})
            </a>
            <a href="{{ route('admin.blogs.index', ['status' => 'featured']) }}"
               class="btn-live-site"
               style="padding: 7px 16px; font-size: 13px; font-weight: 700; {{ $status === 'featured' ? 'background: #D97706; color: #fff; border-color: #D97706;' : '' }}">
                Featured ({{ $counts['featured'] }})
            </a>
        </div>

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('blog') }}" target="_blank" class="btn-live-site" style="padding: 8px 16px; font-size: 13px;">
                <i class="icon-arrow-right"></i> View Live Blog
            </a>
            <a href="{{ route('admin.blogs.create') }}" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary); padding: 8px 18px; font-size: 13px; font-weight: 700;">
                + Write New Blog
            </a>
        </div>
    </div>

    <!-- Filter & Search Card -->
    <div class="content-card" style="margin-bottom: 24px; padding: 18px 24px;">
        <form action="{{ route('admin.blogs.index') }}" method="GET" style="display: flex; gap: 16px; flex-wrap: wrap; align-items: center;">
            <input type="hidden" name="status" value="{{ $status }}">

            <div style="flex-grow: 1; min-width: 240px;">
                <input type="text"
                       name="search"
                       value="{{ $search }}"
                       placeholder="Search by title, excerpt, focus keyword..."
                       class="form-control"
                       style="padding: 9px 14px; font-size: 13.5px; border-radius: 8px; border: 1.5px solid #CBD5E1; width: 100%;">
            </div>

            <div style="min-width: 200px;">
                <select name="category" class="form-control" style="padding: 9px 14px; font-size: 13.5px; border-radius: 8px; border: 1.5px solid #CBD5E1; width: 100%;">
                    <option value="all">All Categories</option>
                    @foreach($categories as $catSlug => $catLabel)
                        <option value="{{ $catSlug }}" {{ $category === $catSlug ? 'selected' : '' }}>
                            {{ $catLabel }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-live-site" style="background: #1E293B; color: #fff; border-color: #1E293B; padding: 9px 18px; font-size: 13px; font-weight: 700;">
                Filter
            </button>

            @if(!empty($search) || $category !== 'all')
                <a href="{{ route('admin.blogs.index', ['status' => $status]) }}" class="btn-live-site" style="padding: 9px 14px; font-size: 13px; color: #DC2626;">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <!-- Blog Posts Table -->
    <div class="content-card">
        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 38%;">Article & Title</th>
                        <th>Category</th>
                        <th>SEO Status</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 14px;">
                                    @if($post->featured_image)
                                        <div style="width: 58px; height: 48px; border-radius: 8px; overflow: hidden; flex-shrink: 0; background: #0B1E33;">
                                            <img src="{{ Str::startsWith($post->featured_image, 'http') ? $post->featured_image : asset($post->featured_image) }}"
                                                 alt="{{ $post->title }}"
                                                 style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    @endif
                                    <div>
                                        <div style="font-weight: 700; color: #0F172A; font-size: 14px; line-height: 1.35; margin-bottom: 3px;">
                                            {{ $post->title }}
                                            @if($post->is_featured)
                                                <span style="font-size: 10.5px; font-weight: 800; background: #FEF3C7; color: #92400E; padding: 1px 7px; border-radius: 999px; vertical-align: middle; margin-left: 6px;">
                                                    Lead Story
                                                </span>
                                            @endif
                                        </div>
                                        <div style="font-size: 12px; color: var(--text-muted);">
                                            <code style="font-size: 11px; background: #F1F5F9; padding: 1px 5px; border-radius: 4px;">/blog/{{ $post->slug }}</code>
                                            &bull; {{ $post->read_time }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge-category" style="background: {{ $post->category_color }}15; color: {{ $post->category_color }}; font-weight: 700;">
                                    {{ $post->category_name }}
                                </span>
                            </td>
                            <td>
                                @if(!empty($post->meta_title) && !empty($post->meta_description))
                                    <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 700; background: #ECFDF5; color: #065F46; padding: 2px 8px; border-radius: 999px;">
                                        <i class="icon-check" style="font-size: 10px;"></i> Optimized
                                    </span>
                                @else
                                    <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 11.5px; font-weight: 700; background: #FEF3C7; color: #92400E; padding: 2px 8px; border-radius: 999px;">
                                        Auto Fallback
                                    </span>
                                @endif
                                @if($post->focus_keyword)
                                    <div style="font-size: 11px; color: #64748B; margin-top: 3px;">
                                        Key: <strong>{{ $post->focus_keyword }}</strong>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.blogs.toggle', ['blog' => $post->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit"
                                            title="Click to toggle status"
                                            style="cursor: pointer; border: none; padding: 3px 10px; border-radius: 999px; font-size: 11.5px; font-weight: 700; {{ $post->is_published ? 'background: #ECFDF5; color: #065F46;' : 'background: #F1F5F9; color: #475569;' }}">
                                        {{ $post->is_published ? 'Published' : 'Draft' }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <span style="font-size: 13px; font-weight: 700; color: #1E293B;">
                                    {{ number_format($post->views_count) }}
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 6px; align-items: center;">
                                    <a href="{{ route('blog.details', ['slug' => $post->slug]) }}" target="_blank" class="btn-live-site" style="padding: 4px 10px; font-size: 11.5px;" title="View Live">
                                        View
                                    </a>
                                    <a href="{{ route('admin.blogs.edit', ['blog' => $post->id]) }}" class="btn-live-site" style="padding: 4px 10px; font-size: 11.5px; color: var(--primary); border-color: var(--primary);" title="Edit Article & SEO">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.blogs.destroy', ['blog' => $post->id]) }}" method="POST" onsubmit="return confirm('Delete this blog post permanently?');" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-live-site" style="padding: 4px 8px; font-size: 11.5px; color: #DC2626; border-color: #FCA5A5;" title="Delete Post">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 48px; color: var(--text-muted); font-size: 14px;">
                                <i class="icon-file-word" style="font-size: 36px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
                                No blog posts found matching your criteria.
                                <div style="margin-top: 14px;">
                                    <a href="{{ route('admin.blogs.create') }}" class="btn-live-site" style="background: var(--primary); color: #fff; padding: 6px 16px; font-size: 12.5px;">
                                        + Write First Blog Post
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(method_exists($posts, 'links') && $posts->hasPages())
            <div style="padding: 18px 24px; border-top: 1px solid #E2E8F0;">
                {{ $posts->links() }}
            </div>
        @endif
    </div>

@endsection
