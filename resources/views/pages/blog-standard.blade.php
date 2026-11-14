@extends('layouts.app')

@php
    $pageSeo = \App\Models\Setting::getPageSeo('blog');
@endphp

@section('title', $pageSeo['title'])

@section('seo')
    <meta name="description" content="{{ $pageSeo['description'] }}">
    <meta name="keywords" content="{{ $pageSeo['keywords'] }}">
    <link rel="canonical" href="{{ $pageSeo['canonical'] }}">
    <meta name="robots" content="{{ $pageSeo['robots'] }}">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $pageSeo['og_title'] }}">
    <meta property="og:description" content="{{ $pageSeo['og_description'] }}">
    <meta property="og:url" content="{{ $pageSeo['canonical'] }}">
    <meta property="og:site_name" content="{{ $siteSettings['site_name'] ?? 'Clineva Research Laboratories' }}">
    <meta property="og:image" content="{{ asset($pageSeo['og_image']) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageSeo['og_title'] }}">
    <meta name="twitter:description" content="{{ $pageSeo['og_description'] }}">
    <meta name="twitter:image" content="{{ asset($pageSeo['og_image']) }}">

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "CollectionPage",
                "@@id": "{{ $pageSeo['canonical'] }}#webpage",
                "url": "{{ $pageSeo['canonical'] }}",
                "name": "{{ $pageSeo['title'] }}",
                "description": "{{ $pageSeo['description'] }}",
                "publisher": {
                    "@@type": "Organization",
                    "name": "{{ $siteSettings['site_name'] ?? 'Clineva Research Laboratories' }}",
                    "url": "{{ url('/') }}",
                    "logo": "{{ asset('image/logo/logo-main.png') }}"
                }
            },
            {
                "@@type": "BreadcrumbList",
                "@@id": "{{ route('blog') }}#breadcrumb",
                "itemListElement": [
                    {
                        "@@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "{{ url('/') }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 2,
                        "name": "Blogs",
                        "item": "{{ route('blog') }}"
                    }
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
<style>
    /* Full-Width Modern Blog Styling - Clineva Website Brand System */
    .blog-filter-toolbar {
        background: #FFFFFF;
        border: 1px solid #DCECF7;
        border-radius: 16px;
        padding: 14px 20px;
        margin-bottom: 36px;
        box-shadow: 0 4px 18px rgba(0, 119, 200, 0.05);
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
        color: #334155;
        background: #F0F6FB;
        border: 1px solid #DCECF7;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .blog-cat-pill:hover {
        background: #E6F2FA;
        color: #0077C8;
        border-color: #0077C8;
    }
    .blog-cat-pill.active {
        background: #0077C8;
        color: #FFFFFF;
        border-color: #0077C8;
        box-shadow: 0 4px 14px rgba(0, 119, 200, 0.3);
    }
    .blog-cat-pill .cat-count-badge {
        font-size: 11px;
        font-weight: 700;
        padding: 1px 7px;
        border-radius: 999px;
        background: rgba(0, 119, 200, 0.1);
        color: #0077C8;
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
        border: 1.5px solid #DCECF7;
        border-radius: 999px;
        font-size: 13px;
        background: #F0F6FB;
        outline: none;
        transition: all 0.2s ease;
    }
    .blog-search-box:focus {
        border-color: #0077C8;
        background: #FFFFFF;
        box-shadow: 0 0 0 3px rgba(0, 119, 200, 0.15);
    }
    .blog-search-btn {
        position: absolute;
        right: 4px;
        top: 50%;
        transform: translateY(-50%);
        background: #0077C8;
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
        transition: background 0.2s ease;
    }
    .blog-search-btn:hover {
        background: #005FA3;
    }

    /* Featured Lead Article Card (Full Width) */
    .featured-lead-box {
        background: #FFFFFF;
        border: 1px solid #DCECF7;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 44px;
        box-shadow: 0 8px 24px rgba(10, 28, 50, 0.06);
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
        box-shadow: 0 16px 36px -4px rgba(0, 119, 200, 0.15);
        border-color: #0077C8;
    }
    .featured-lead-thumb {
        position: relative;
        overflow: hidden;
        background: #0A1C32;
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
        background: rgba(10, 28, 50, 0.88);
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
        color: #00A3E0;
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
    /* Uniform Category Badge - Brand Blue */
    .badge-cat-tag {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #0077C8 !important;
        background: #F0F6FB !important;
        border: 1px solid #DCECF7;
    }
    .featured-post-title {
        font-size: 25px;
        line-height: 1.32;
        font-weight: 800;
        color: #0A1C32;
        margin-bottom: 14px;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .featured-post-title:hover {
        color: #0077C8;
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
        border-top: 1px solid #DCECF7;
        flex-wrap: wrap;
        gap: 14px;
    }
    .btn-read-lead {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #0077C8;
        color: #FFFFFF !important;
        font-size: 13.5px;
        font-weight: 700;
        padding: 9px 20px;
        border-radius: 999px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .btn-read-lead:hover {
        background: #005FA3;
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
        border: 1px solid #DCECF7;
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 18px rgba(10, 28, 50, 0.04);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        height: 100%;
    }
    .blog-grid-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 36px -4px rgba(0, 119, 200, 0.15);
        border-color: #0077C8;
    }
    .blog-card-thumb-wrap {
        position: relative;
        height: 210px;
        overflow: hidden;
        background: #0A1C32;
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
        background: rgba(10, 28, 50, 0.82);
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
        color: #0A1C32;
        margin-bottom: 12px;
        display: block;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .blog-grid-card:hover .blog-card-heading {
        color: #0077C8;
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
        justify-content: flex-end;
        padding-top: 14px;
        border-top: 1px solid #F1F5F9;
    }
    .card-read-action {
        font-size: 12.5px;
        font-weight: 700;
        color: #0077C8;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: gap 0.2s ease, color 0.2s ease;
    }
    .card-read-action:hover {
        gap: 7px;
        color: #005FA3;
    }

    /* Bottom Consultation CTA Bar - Clineva Navy & Blue */
    .blog-bottom-cta {
        background: linear-gradient(135deg, #0A1C32 0%, #0E294B 45%, #0077C8 100%);
        border-radius: 20px;
        padding: 36px 40px;
        color: #FFFFFF;
        box-shadow: 0 12px 32px rgba(0, 119, 200, 0.18);
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
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
        max-width: 620px;
    }
    .btn-bottom-cta {
        background: #FFFFFF;
        color: #0A1C32 !important;
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
        background: #F0F6FB;
        color: #0077C8 !important;
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
            <div class="blog-filter-toolbar" style="{{ count($categories) <= 1 ? 'justify-content: flex-end;' : '' }}">
                @if(count($categories) > 1)
                <div class="blog-categories-group">
                    @foreach($categories as $cat)
                        <a href="{{ route('blog', ['category' => $cat['slug']]) }}"
                           class="blog-cat-pill {{ $selectedCategory === $cat['slug'] ? 'active' : '' }}">
                            <span>{{ $cat['name'] }}</span>
                            <span class="cat-count-badge">{{ $cat['count'] }}</span>
                        </a>
                    @endforeach
                </div>
                @endif
                <div class="blog-search-wrap" style="{{ count($categories) <= 1 ? 'max-width: 380px; width: 100%;' : '' }}">
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
            @if($featuredArticle)
                @php
                    $fSlug = is_object($featuredArticle) ? $featuredArticle->slug : $featuredArticle['slug'];
                    $fTitle = is_object($featuredArticle) ? $featuredArticle->title : $featuredArticle['title'];
                    $fCat = is_object($featuredArticle) ? $featuredArticle->category : $featuredArticle['category'];
                    $fCatName = is_object($featuredArticle) ? $featuredArticle->category_name : $featuredArticle['category_name'];
                    $fCatColor = is_object($featuredArticle) ? $featuredArticle->category_color : $featuredArticle['category_color'];
                    $fImage = is_object($featuredArticle) ? $featuredArticle->featured_image : $featuredArticle['image'];
                    $fExcerpt = is_object($featuredArticle) ? $featuredArticle->excerpt : $featuredArticle['excerpt'];
                    $fDate = is_object($featuredArticle) ? ($featuredArticle->published_at ? $featuredArticle->published_at->format('d M Y') : $featuredArticle->created_at->format('d M Y')) : $featuredArticle['date'];
                    $fRead = is_object($featuredArticle) ? $featuredArticle->read_time : $featuredArticle['read_time'];
                @endphp

                @if(empty($searchQuery) && ($selectedCategory === 'all' || $selectedCategory === $fCat))
                    <div class="featured-lead-box">
                        <div class="featured-lead-thumb">
                            <a href="{{ route('blog.details', ['slug' => $fSlug]) }}">
                                <img src="{{ Str::startsWith($fImage, 'http') ? $fImage : asset($fImage) }}" alt="{{ $fTitle }}" loading="lazy">
                            </a>
                            <span class="featured-pill-tag">
                                <i class="icon-star"></i> Featured Insight
                            </span>
                        </div>
                        <div class="featured-lead-body">
                            <div class="featured-meta-line">
                                <span class="badge-cat-tag">
                                    {{ $fCatName }}
                                </span>
                                <span style="font-size: 12.5px; color: #64748B;">
                                    <i class="icon-clock"></i> {{ $fRead }}
                                </span>
                                <span style="font-size: 12.5px; color: #64748B;">
                                    <i class="icon-calendar"></i> {{ $fDate }}
                                </span>
                            </div>
                            <a href="{{ route('blog.details', ['slug' => $fSlug]) }}" class="featured-post-title">
                                {{ $fTitle }}
                            </a>
                            <p class="featured-post-desc">
                                {{ $fExcerpt }}
                            </p>
                            <div class="featured-bottom-row">
                                <div style="font-size: 13.5px; color: #64748B; display: inline-flex; align-items: center; gap: 6px;">
                                    <i class="icon-calendar"></i> Published {{ $fDate }} &bull; {{ $fRead }}
                                </div>
                                <a href="{{ route('blog.details', ['slug' => $fSlug]) }}" class="btn-read-lead">
                                    <span>Read Full Analysis</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif

            <!-- 3-Column Articles Grid -->
            <div class="blog-grid-3col" id="blogGridFull">
                @forelse($articles as $post)
                    @php
                        $pSlug = is_object($post) ? $post->slug : $post['slug'];
                        $pTitle = is_object($post) ? $post->title : $post['title'];
                        $pCat = is_object($post) ? $post->category : $post['category'];
                        $pCatName = is_object($post) ? $post->category_name : $post['category_name'];
                        $pCatColor = is_object($post) ? $post->category_color : $post['category_color'];
                        $pImage = is_object($post) ? $post->featured_image : $post['image'];
                        $pExcerpt = is_object($post) ? $post->excerpt : $post['excerpt'];
                        $pDate = is_object($post) ? ($post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y')) : $post['date'];
                        $pRead = is_object($post) ? $post->read_time : $post['read_time'];
                    @endphp
                    @if(empty($searchQuery) && $selectedCategory === 'all' && $pSlug === $fSlug)
                        {{-- Skip featured lead card from repeating in grid --}}
                        @continue
                    @endif
                    <article class="blog-grid-card" data-category="{{ $pCat }}">
                        <div class="blog-card-thumb-wrap">
                            <a href="{{ route('blog.details', ['slug' => $pSlug]) }}">
                                <img src="{{ Str::startsWith($pImage, 'http') ? $pImage : asset($pImage) }}" alt="{{ $pTitle }}" loading="lazy">
                            </a>
                            <div class="blog-card-cat-badge">
                                <span class="badge-cat-tag">
                                    {{ $pCatName }}
                                </span>
                            </div>
                            <div class="blog-card-readtime">
                                <i class="icon-clock"></i> {{ $pRead }}
                            </div>
                        </div>
                        <div class="blog-card-content">
                            <div class="blog-card-date">
                                <i class="icon-calendar"></i> {{ $pDate }}
                            </div>
                            <a href="{{ route('blog.details', ['slug' => $pSlug]) }}" class="blog-card-heading">
                                {{ $pTitle }}
                            </a>
                            <p class="blog-card-excerpt">
                                {{ $pExcerpt }}
                            </p>
                            <div class="blog-card-footer">
                                <span style="font-size: 12.5px; color: #64748B; display: inline-flex; align-items: center; gap: 5px;">
                                    <i class="icon-clock"></i> {{ $pRead }}
                                </span>
                                <a href="{{ route('blog.details', ['slug' => $pSlug]) }}" class="card-read-action">
                                    <span>Read Insight</span>
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
                            {{ !empty($searchQuery) || $selectedCategory !== 'all' ? "We couldn't find any articles matching your search query or category." : "No blog articles have been published yet. Check back soon for the latest clinical trial updates and regulatory insights." }}
                        </p>
                        @if(!empty($searchQuery) || $selectedCategory !== 'all')
                            <a href="{{ route('blog') }}" class="btn-read-lead" style="display: inline-flex;">
                                View All Insights
                            </a>
                        @endif
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
