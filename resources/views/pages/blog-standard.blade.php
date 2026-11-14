@extends('layouts.app')

@section('title', 'Blogs - Clineva Research Laboratories')

@section('content')
<style>
    /* Full-Width Modern Blog Styling */
    .blog-filter-toolbar {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 14px 20px;
        margin-bottom: 36px;
        box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }
    .blog-categories-group {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }
    .blog-cat-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 16px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        color: #475569;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .blog-cat-pill:hover {
        background: #E6F4F6;
        color: var(--primary, #007E8A);
        border-color: #CBD5E1;
    }
    .blog-cat-pill.active {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
        border-color: var(--primary, #007E8A);
        box-shadow: 0 4px 12px rgba(0, 126, 138, 0.25);
    }
    .blog-cat-pill .cat-count-badge {
        font-size: 11px;
        font-weight: 700;
        padding: 1px 7px;
        border-radius: 999px;
        background: rgba(0, 0, 0, 0.07);
    }
    .blog-cat-pill.active .cat-count-badge {
        background: rgba(255, 255, 255, 0.25);
        color: #FFFFFF;
    }
    .blog-search-wrap {
        position: relative;
        min-width: 260px;
    }
    .blog-search-box {
        width: 100%;
        padding: 8px 38px 8px 14px;
        border: 1.5px solid #CBD5E1;
        border-radius: 999px;
        font-size: 13px;
        background: #F8FAFC;
        outline: none;
        transition: all 0.2s ease;
    }
    .blog-search-box:focus {
        border-color: var(--primary, #007E8A);
        background: #FFFFFF;
        box-shadow: 0 0 0 3px rgba(0, 126, 138, 0.12);
    }
    .blog-search-btn {
        position: absolute;
        right: 4px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--primary, #007E8A);
        border: none;
        color: #FFFFFF;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 11px;
    }

    /* Featured Lead Article Card (Full Width) */
    .featured-lead-box {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 44px;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    @media (min-width: 992px) {
        .featured-lead-box {
            flex-direction: row;
        }
        .featured-lead-thumb {
            width: 46%;
            min-height: 380px;
        }
        .featured-lead-body {
            width: 54%;
        }
    }
    .featured-lead-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 36px -4px rgba(0, 126, 138, 0.15);
    }
    .featured-lead-thumb {
        position: relative;
        overflow: hidden;
        background: #0B1E33;
    }
    .featured-lead-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        display: block;
    }
    .featured-lead-box:hover .featured-lead-thumb img {
        transform: scale(1.05);
    }
    .featured-pill-tag {
        position: absolute;
        top: 18px;
        left: 18px;
        background: rgba(15, 23, 42, 0.85);
        color: #FFFFFF;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 5px 12px;
        border-radius: 999px;
        backdrop-filter: blur(6px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .featured-pill-tag i {
        color: #F59E0B;
    }
    .featured-lead-body {
        padding: 36px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .featured-meta-line {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
        flex-wrap: wrap;
    }
    .badge-cat-tag {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .featured-post-title {
        font-size: 25px;
        line-height: 1.32;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 14px;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .featured-post-title:hover {
        color: var(--primary, #007E8A);
    }
    .featured-post-desc {
        font-size: 14.5px;
        line-height: 1.65;
        color: #475569;
        margin-bottom: 24px;
    }
    .featured-bottom-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 18px;
        border-top: 1px solid #F1F5F9;
        flex-wrap: wrap;
        gap: 14px;
    }
    .author-meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .author-meta-item img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
    .btn-read-lead {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--primary, #007E8A);
        color: #FFFFFF !important;
        font-size: 13.5px;
        font-weight: 700;
        padding: 9px 20px;
        border-radius: 999px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .btn-read-lead:hover {
        background: #005F69;
        transform: translateX(3px);
    }

    /* 3-Column Modern Grid */
    .blog-grid-3col {
        display: grid;
        grid-template-columns: 1fr;
        gap: 28px;
        margin-bottom: 50px;
    }
    @media (min-width: 680px) {
        .blog-grid-3col {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (min-width: 1024px) {
        .blog-grid-3col {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    .blog-grid-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.04);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        height: 100%;
    }
    .blog-grid-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 36px -4px rgba(0, 126, 138, 0.14);
        border-color: #CBD5E1;
    }
    .blog-card-thumb-wrap {
        position: relative;
        height: 210px;
        overflow: hidden;
        background: #0B1E33;
    }
    .blog-card-thumb-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .blog-grid-card:hover .blog-card-thumb-wrap img {
        transform: scale(1.06);
    }
    .blog-card-cat-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 2;
    }
    .blog-card-readtime {
        position: absolute;
        top: 12px;
        right: 12px;
        background: rgba(15, 23, 42, 0.75);
        color: #F8FAFC;
        font-size: 11px;
        font-weight: 600;
        padding: 3px 9px;
        border-radius: 999px;
        backdrop-filter: blur(6px);
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    .blog-card-content {
        padding: 22px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .blog-card-date {
        font-size: 12px;
        color: #64748B;
        margin-bottom: 8px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .blog-card-heading {
        font-size: 17.5px;
        line-height: 1.4;
        font-weight: 700;
        color: #0F172A;
        margin-bottom: 12px;
        display: block;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .blog-grid-card:hover .blog-card-heading {
        color: var(--primary, #007E8A);
    }
    .blog-card-excerpt {
        font-size: 13.5px;
        line-height: 1.6;
        color: #475569;
        margin-bottom: 18px;
        flex-grow: 1;
    }
    .blog-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 14px;
        border-top: 1px solid #F1F5F9;
    }
    .card-author-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .card-author-info img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        object-fit: cover;
    }
    .card-author-info span {
        font-size: 12px;
        font-weight: 600;
        color: #1E293B;
    }
    .card-read-action {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--primary, #007E8A);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: gap 0.2s ease;
    }
    .card-read-action:hover {
        gap: 7px;
        color: #005F69;
    }

    /* Bottom Consultation CTA Bar */
    .blog-bottom-cta {
        background: linear-gradient(135deg, #072836 0%, #00505A 60%, #007E8A 100%);
        border-radius: 20px;
        padding: 36px 40px;
        color: #FFFFFF;
        box-shadow: 0 10px 30px rgba(0, 126, 138, 0.16);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }
    .blog-bottom-cta h3 {
        font-size: 22px;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 6px;
    }
    .blog-bottom-cta p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
        max-width: 620px;
    }
    .btn-bottom-cta {
        background: #FFFFFF;
        color: #072836 !important;
        font-size: 14px;
        font-weight: 800;
        padding: 12px 26px;
        border-radius: 999px;
        text-decoration: none;
        white-space: nowrap;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .btn-bottom-cta:hover {
        background: #E6F4F6;
        color: var(--primary, #007E8A) !important;
        transform: translateY(-2px);
    }
</style>

<!-- Original Standard Page Header (Same as Previous) -->
<div class="page-title mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <h1 class="title text-anime">
                Blogs
            </h1>
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">Blogs</h3>
            </div>
        </div>
    </div>
</div>
<!-- /.page-title -->

<!-- Main Content (Full-Width Without Right Sidebar) -->
<div class="main-content">
    <section style="padding: 50px 0 80px;">
        <div class="tf-container">

            <!-- Category Filter & Search Toolbar -->
            <div class="blog-filter-toolbar">
                <div class="blog-categories-group">
                    @foreach($categories as $cat)
                        <a href="{{ route('blog', ['category' => $cat['slug']]) }}"
                           class="blog-cat-pill {{ $selectedCategory === $cat['slug'] ? 'active' : '' }}">
                            <span>{{ $cat['name'] }}</span>
                            <span class="cat-count-badge">{{ $cat['count'] }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="blog-search-wrap">
                    <form action="{{ route('blog') }}" method="GET">
                        <input type="text"
                               name="q"
                               value="{{ $searchQuery }}"
                               placeholder="Search insights..."
                               class="blog-search-box"
                               id="blogSearchInput"
                               autocomplete="off">
                        <button type="submit" class="blog-search-btn" title="Search">
                            <i class="icon-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Search Query Notice (if active) -->
            @if(!empty($searchQuery))
                <div style="margin-bottom: 28px; padding: 14px 20px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-size: 14px; color: #475569;">
                        Showing results for: <strong>"{{ $searchQuery }}"</strong> ({{ count($articles) }} found)
                    </span>
                    <a href="{{ route('blog') }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                        Clear Search
                    </a>
                </div>
            @endif

            <!-- Lead Featured Story (when viewing All or matching category) -->
            @if(empty($searchQuery) && ($selectedCategory === 'all' || $selectedCategory === $featuredArticle['category']))
                <div class="featured-lead-box">
                    <div class="featured-lead-thumb">
                        <a href="{{ route('blog.details', ['slug' => $featuredArticle['slug']]) }}">
                            <img src="{{ asset($featuredArticle['image']) }}" alt="{{ $featuredArticle['title'] }}" loading="lazy">
                        </a>
                        <span class="featured-pill-tag">
                            <i class="icon-star"></i> Featured Insight
                        </span>
                    </div>
                    <div class="featured-lead-body">
                        <div class="featured-meta-line">
                            <span class="badge-cat-tag" style="color: {{ $featuredArticle['category_color'] }}; background: {{ $featuredArticle['category_color'] }}15;">
                                {{ $featuredArticle['category_name'] }}
                            </span>
                            <span style="font-size: 12.5px; color: #64748B;">
                                <i class="icon-clock"></i> {{ $featuredArticle['read_time'] }}
                            </span>
                            <span style="font-size: 12.5px; color: #64748B;">
                                <i class="icon-calendar"></i> {{ $featuredArticle['date'] }}
                            </span>
                        </div>
                        <a href="{{ route('blog.details', ['slug' => $featuredArticle['slug']]) }}" class="featured-post-title">
                            {{ $featuredArticle['title'] }}
                        </a>
                        <p class="featured-post-desc">
                            {{ $featuredArticle['excerpt'] }}
                        </p>
                        <div class="featured-bottom-row">
                            <div class="author-meta-item">
                                <img src="{{ asset($featuredArticle['author']['avatar']) }}" alt="{{ $featuredArticle['author']['name'] }}">
                                <div>
                                    <div style="font-size: 13.5px; font-weight: 700; color: #1E293B;">{{ $featuredArticle['author']['name'] }}</div>
                                    <div style="font-size: 11.5px; color: #64748B;">{{ $featuredArticle['author']['role'] }}</div>
                                </div>
                            </div>
                            <a href="{{ route('blog.details', ['slug' => $featuredArticle['slug']]) }}" class="btn-read-lead">
                                <span>Read Full Analysis</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- 3-Column Articles Grid -->
            <div class="blog-grid-3col" id="blogGridFull">
                @forelse($articles as $post)
                    @if(empty($searchQuery) && $selectedCategory === 'all' && $post['slug'] === $featuredArticle['slug'])
                        {{-- Skip featured lead card from repeating in grid --}}
                        @continue
                    @endif
                    <article class="blog-grid-card" data-category="{{ $post['category'] }}">
                        <div class="blog-card-thumb-wrap">
                            <a href="{{ route('blog.details', ['slug' => $post['slug']]) }}">
                                <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" loading="lazy">
                            </a>
                            <div class="blog-card-cat-badge">
                                <span class="badge-cat-tag" style="color: {{ $post['category_color'] }}; background: #FFFFFF; box-shadow: 0 2px 8px rgba(0,0,0,0.12);">
                                    {{ $post['category_name'] }}
                                </span>
                            </div>
                            <div class="blog-card-readtime">
                                <i class="icon-clock"></i> {{ $post['read_time'] }}
                            </div>
                        </div>
                        <div class="blog-card-content">
                            <div class="blog-card-date">
                                <i class="icon-calendar"></i> {{ $post['date'] }}
                            </div>
                            <a href="{{ route('blog.details', ['slug' => $post['slug']]) }}" class="blog-card-heading">
                                {{ $post['title'] }}
                            </a>
                            <p class="blog-card-excerpt">
                                {{ $post['excerpt'] }}
                            </p>
                            <div class="blog-card-footer">
                                <div class="card-author-info">
                                    <img src="{{ asset($post['author']['avatar']) }}" alt="{{ $post['author']['name'] }}">
                                    <span>{{ $post['author']['name'] }}</span>
                                </div>
                                <a href="{{ route('blog.details', ['slug' => $post['slug']]) }}" class="card-read-action">
                                    <span>Read</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #FFFFFF; border: 1.5px dashed #CBD5E1; border-radius: 18px;">
                        <i class="icon-file-word" style="font-size: 44px; color: #94A3B8; margin-bottom: 12px; display: block;"></i>
                        <h4 style="font-size: 20px; font-weight: 700; color: #1E293B; margin-bottom: 8px;">No Insights Found</h4>
                        <p style="font-size: 14px; color: #64748B; margin-bottom: 20px;">
                            We couldn't find any articles matching your search query.
                        </p>
                        <a href="{{ route('blog') }}" class="btn-read-lead" style="display: inline-flex;">
                            View All Insights
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Bottom Sponsor CTA Banner -->
            <div class="blog-bottom-cta">
                <div>
                    <h3>Planning a Clinical Trial or BA/BE Protocol?</h3>
                    <p>Connect with Clineva's clinical operations specialists, biostatisticians, and regulatory affairs team for protocol design, sample size modeling, and regulatory feasibility.</p>
                </div>
                <a href="{{ route('contact') }}" class="btn-bottom-cta">
                    <span>Request Technical Consultation</span>
                    <i class="icon-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('blogSearchInput');
        const grid = document.getElementById('blogGridFull');

        if (searchInput && grid) {
            searchInput.addEventListener('input', function (e) {
                const term = e.target.value.toLowerCase().trim();
                const cards = grid.querySelectorAll('.blog-grid-card');

                cards.forEach(card => {
                    const title = (card.querySelector('.blog-card-heading')?.innerText || '').toLowerCase();
                    const excerpt = (card.querySelector('.blog-card-excerpt')?.innerText || '').toLowerCase();
                    const cat = (card.getAttribute('data-category') || '').toLowerCase();

                    if (!term || title.includes(term) || excerpt.includes(term) || cat.includes(term)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
    });
</script>
@endsection
