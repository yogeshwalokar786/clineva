@extends('layouts.app')

@section('title', 'Insights & Clinical Perspectives - Clineva Research Laboratories')

@section('content')
<style>
    /* Clineva Modern Blog System Styles */
    .blog-page-header {
        background: linear-gradient(135deg, #071E2F 0%, #004D56 55%, #007E8A 100%);
        position: relative;
        overflow: hidden;
        padding: 70px 0 60px;
        color: #FFFFFF;
        border-radius: 0 0 28px 28px;
    }
    .blog-page-header::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 80% 20%, rgba(0, 194, 203, 0.15) 0%, transparent 60%);
        pointer-events: none;
    }
    .blog-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.22);
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #E6F4F6;
        margin-bottom: 18px;
        backdrop-filter: blur(8px);
    }
    .blog-hero-badge i {
        color: #38BDF8;
        font-size: 14px;
    }
    .blog-hero-title {
        font-size: 42px;
        line-height: 1.22;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 16px;
        letter-spacing: -0.5px;
    }
    .blog-hero-subtitle {
        font-size: 17px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
        max-width: 720px;
        margin: 0 auto 24px;
    }
    .blog-breadcrumb-nav {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.7);
    }
    .blog-breadcrumb-nav a {
        color: #FFFFFF;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .blog-breadcrumb-nav a:hover {
        color: #38BDF8;
    }

    /* Category Filter Nav */
    .blog-filter-bar {
        margin: -24px auto 44px;
        position: relative;
        z-index: 10;
        max-width: 1040px;
        background: #FFFFFF;
        padding: 8px 12px;
        border-radius: 999px;
        box-shadow: 0 12px 36px -4px rgba(15, 23, 42, 0.12), 0 4px 12px rgba(15, 23, 42, 0.06);
        border: 1px solid #E2E8F0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        flex-wrap: wrap;
    }
    .blog-filter-btn {
        padding: 8px 18px;
        border-radius: 999px;
        font-size: 13.5px;
        font-weight: 600;
        color: #475569;
        text-decoration: none;
        border: none;
        background: transparent;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s ease;
    }
    .blog-filter-btn:hover {
        background: #F1F5F9;
        color: var(--primary, #007E8A);
    }
    .blog-filter-btn.active {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
        box-shadow: 0 4px 14px rgba(0, 126, 138, 0.35);
    }
    .blog-filter-btn .cat-count {
        display: inline-block;
        font-size: 11px;
        font-weight: 700;
        padding: 1px 7px;
        border-radius: 999px;
        background: rgba(0, 0, 0, 0.08);
    }
    .blog-filter-btn.active .cat-count {
        background: rgba(255, 255, 255, 0.25);
        color: #FFFFFF;
    }

    /* Featured Lead Article Card */
    .featured-article-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 48px;
        box-shadow: 0 10px 30px -4px rgba(15, 23, 42, 0.08);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }
    @media (min-width: 992px) {
        .featured-article-card {
            flex-direction: row;
        }
        .featured-article-card .featured-img-wrap {
            width: 48%;
            min-height: 400px;
        }
        .featured-article-card .featured-content-wrap {
            width: 52%;
        }
    }
    .featured-article-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -6px rgba(0, 126, 138, 0.16);
    }
    .featured-img-wrap {
        position: relative;
        overflow: hidden;
        background: #0B1E33;
    }
    .featured-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        display: block;
    }
    .featured-article-card:hover .featured-img-wrap img {
        transform: scale(1.05);
    }
    .featured-badge-overlay {
        position: absolute;
        top: 20px;
        left: 20px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(15, 23, 42, 0.82);
        color: #F8FAFC;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 5px 12px;
        border-radius: 999px;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .featured-badge-overlay i {
        color: #F59E0B;
    }
    .featured-content-wrap {
        padding: 40px 36px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .featured-meta-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
        flex-wrap: wrap;
    }
    .badge-category-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        background: #E6F4F6;
        color: var(--primary, #007E8A);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .article-meta-text {
        font-size: 13px;
        color: #64748B;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .article-meta-text i {
        font-size: 12px;
        color: #94A3B8;
    }
    .featured-title {
        font-size: 26px;
        line-height: 1.32;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 16px;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .featured-title:hover {
        color: var(--primary, #007E8A);
    }
    .featured-excerpt {
        font-size: 15px;
        line-height: 1.65;
        color: #475569;
        margin-bottom: 24px;
    }
    .featured-author-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 20px;
        border-top: 1px solid #F1F5F9;
        flex-wrap: wrap;
        gap: 16px;
    }
    .author-info-group {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .author-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #E2E8F0;
    }
    .author-name {
        font-size: 14px;
        font-weight: 700;
        color: #1E293B;
        line-height: 1.2;
    }
    .author-role {
        font-size: 12px;
        color: #64748B;
        margin-top: 2px;
    }
    .btn-read-insight {
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
        transition: all 0.25s ease;
    }
    .btn-read-insight:hover {
        background: #00606B;
        transform: translateX(3px);
        box-shadow: 0 4px 12px rgba(0, 126, 138, 0.35);
    }

    /* Standard Article Grid Cards */
    .blog-cards-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 28px;
        margin-bottom: 40px;
    }
    @media (min-width: 768px) {
        .blog-cards-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    .clineva-post-card {
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
    .clineva-post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 36px -4px rgba(0, 126, 138, 0.14);
        border-color: #CBD5E1;
    }
    .post-card-thumb {
        position: relative;
        height: 220px;
        overflow: hidden;
        background: #0B1E33;
    }
    .post-card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .clineva-post-card:hover .post-card-thumb img {
        transform: scale(1.06);
    }
    .post-card-category {
        position: absolute;
        top: 14px;
        left: 14px;
        z-index: 2;
    }
    .post-card-readtime {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(15, 23, 42, 0.75);
        color: #F8FAFC;
        font-size: 11px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 999px;
        backdrop-filter: blur(6px);
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    .post-card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .post-card-date {
        font-size: 12.5px;
        color: #64748B;
        margin-bottom: 8px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .post-card-title {
        font-size: 18.5px;
        line-height: 1.4;
        font-weight: 700;
        color: #0F172A;
        margin-bottom: 12px;
        display: block;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .post-card-title:hover {
        color: var(--primary, #007E8A);
    }
    .post-card-excerpt {
        font-size: 13.5px;
        line-height: 1.6;
        color: #475569;
        margin-bottom: 20px;
        flex-grow: 1;
    }
    .post-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 16px;
        border-top: 1px solid #F1F5F9;
    }
    .post-author-mini {
        display: flex;
        align-items: center;
        gap: 9px;
    }
    .post-author-mini img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }
    .post-author-mini span {
        font-size: 12.5px;
        font-weight: 600;
        color: #1E293B;
    }
    .post-read-link {
        font-size: 13px;
        font-weight: 700;
        color: var(--primary, #007E8A);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.2s ease;
    }
    .post-read-link:hover {
        gap: 8px;
        color: #005A63;
    }

    /* Sidebar Modern Cards */
    .blog-sidebar-wrap {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .blog-sidebar-box {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 18px;
        padding: 26px 24px;
        box-shadow: 0 4px 16px rgba(15, 23, 42, 0.03);
    }
    .sidebar-head-title {
        font-size: 17px;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #F1F5F9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sidebar-head-title i {
        color: var(--primary, #007E8A);
    }

    /* Search Box */
    .sidebar-search-form {
        position: relative;
    }
    .sidebar-search-input {
        width: 100%;
        padding: 12px 44px 12px 16px;
        border: 1.5px solid #CBD5E1;
        border-radius: 12px;
        font-size: 13.5px;
        background: #F8FAFC;
        outline: none;
        transition: all 0.2s ease;
    }
    .sidebar-search-input:focus {
        border-color: var(--primary, #007E8A);
        background: #FFFFFF;
        box-shadow: 0 0 0 3px rgba(0, 126, 138, 0.12);
    }
    .sidebar-search-submit {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--primary, #007E8A);
        border: none;
        color: #FFFFFF;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    .sidebar-search-submit:hover {
        background: #005E66;
    }

    /* Category List in Sidebar */
    .sidebar-category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sidebar-category-item {
        margin-bottom: 8px;
    }
    .sidebar-category-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 14px;
        border-radius: 10px;
        font-size: 13.5px;
        font-weight: 600;
        color: #334155;
        text-decoration: none;
        transition: all 0.2s ease;
        background: #F8FAFC;
    }
    .sidebar-category-link:hover,
    .sidebar-category-link.active {
        background: #E6F4F6;
        color: var(--primary, #007E8A);
        padding-left: 18px;
    }
    .sidebar-category-link .badge-counter {
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 999px;
        background: #E2E8F0;
        color: #475569;
    }
    .sidebar-category-link.active .badge-counter {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
    }

    /* Recent Posts Mini */
    .sidebar-recent-card {
        display: flex;
        gap: 14px;
        margin-bottom: 18px;
        text-decoration: none;
    }
    .sidebar-recent-card:last-child {
        margin-bottom: 0;
    }
    .sidebar-recent-thumb {
        width: 76px;
        height: 64px;
        border-radius: 10px;
        overflow: hidden;
        flex-shrink: 0;
    }
    .sidebar-recent-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .sidebar-recent-card:hover .sidebar-recent-thumb img {
        transform: scale(1.08);
    }
    .sidebar-recent-meta {
        font-size: 11.5px;
        color: #64748B;
        margin-bottom: 4px;
    }
    .sidebar-recent-title {
        font-size: 13.5px;
        line-height: 1.38;
        font-weight: 700;
        color: #1E293B;
        transition: color 0.2s ease;
    }
    .sidebar-recent-card:hover .sidebar-recent-title {
        color: var(--primary, #007E8A);
    }

    /* Sponsor CTA Box */
    .sidebar-sponsor-box {
        background: linear-gradient(135deg, #072836 0%, #00505A 60%, #007E8A 100%);
        border-radius: 18px;
        padding: 30px 24px;
        color: #FFFFFF;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 126, 138, 0.2);
    }
    .sidebar-sponsor-box::after {
        content: '';
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        background: radial-gradient(circle, rgba(0, 194, 203, 0.25) 0%, transparent 70%);
        pointer-events: none;
    }
    .sponsor-box-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #38BDF8;
        margin-bottom: 16px;
    }
    .sponsor-box-title {
        font-size: 20px;
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.3;
        margin-bottom: 10px;
    }
    .sponsor-box-desc {
        font-size: 13px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.82);
        margin-bottom: 20px;
    }
    .btn-sponsor-contact {
        display: block;
        width: 100%;
        text-align: center;
        background: #FFFFFF;
        color: #072836 !important;
        font-size: 13.5px;
        font-weight: 800;
        padding: 11px 16px;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .btn-sponsor-contact:hover {
        background: #E6F4F6;
        color: var(--primary, #007E8A) !important;
        transform: translateY(-2px);
    }
    .sponsor-contact-direct {
        margin-top: 16px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
        text-align: center;
    }
    .sponsor-contact-direct a {
        color: #FFFFFF;
        text-decoration: underline;
    }

    /* Tags Cloud */
    .sidebar-tags-cloud {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .sidebar-tag-item {
        font-size: 12px;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 8px;
        background: #F1F5F9;
        color: #475569;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .sidebar-tag-item:hover {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
    }

    /* Empty search state */
    .empty-search-state {
        text-align: center;
        padding: 60px 20px;
        background: #FFFFFF;
        border: 1px dashed #CBD5E1;
        border-radius: 18px;
    }
    .empty-search-state i {
        font-size: 48px;
        color: #94A3B8;
        margin-bottom: 16px;
    }
</style>

<!-- Modern Clineva Blog Page Header -->
<div class="blog-page-header text-center">
    <div class="tf-container">
        <div class="blog-hero-badge">
            <i class="icon-atom-simple"></i> Clineva Knowledge & Perspectives
        </div>
        <h1 class="blog-hero-title">
            Clinical Insights & Research Perspectives
        </h1>
        <p class="blog-hero-subtitle">
            Authoritative regulatory analysis, trial methodology breakthroughs, and BA/BE scientific advances curated by Clineva's clinical research teams.
        </p>
        <div class="blog-breadcrumb-nav">
            <a href="{{ route('home') }}">Home</a>
            <span>&bull;</span>
            <span>Insights & Blogs</span>
        </div>
    </div>
</div>

<!-- Category Filter Pills Bar -->
<div class="tf-container">
    <div class="blog-filter-bar" id="blogFilterBar">
        @foreach($categories as $cat)
            <a href="{{ route('blog', ['category' => $cat['slug']]) }}"
               class="blog-filter-btn {{ $selectedCategory === $cat['slug'] ? 'active' : '' }}"
               data-cat-slug="{{ $cat['slug'] }}">
                <span>{{ $cat['name'] }}</span>
                <span class="cat-count">{{ $cat['count'] }}</span>
            </a>
        @endforeach
    </div>
</div>

<!-- Main Content Area -->
<div class="main-content" style="padding-bottom: 90px;">
    <div class="tf-container">
        <div class="row">

            <!-- Main Articles Column -->
            <div class="col-xl-8 col-lg-8">

                <!-- Lead Featured Story (when viewing All or matching category) -->
                @if(empty($searchQuery) && ($selectedCategory === 'all' || $selectedCategory === $featuredArticle['category']))
                    <div class="featured-article-card" id="featuredArticleBox">
                        <div class="featured-img-wrap">
                            <img src="{{ asset($featuredArticle['image']) }}" alt="{{ $featuredArticle['title'] }}" loading="lazy">
                            <span class="featured-badge-overlay">
                                <i class="icon-star"></i> Lead Insight
                            </span>
                        </div>
                        <div class="featured-content-wrap">
                            <div class="featured-meta-row">
                                <span class="badge-category-pill" style="color: {{ $featuredArticle['category_color'] }}; background: {{ $featuredArticle['category_color'] }}15;">
                                    {{ $featuredArticle['category_name'] }}
                                </span>
                                <span class="article-meta-text">
                                    <i class="icon-clock"></i> {{ $featuredArticle['read_time'] }}
                                </span>
                                <span class="article-meta-text">
                                    <i class="icon-calendar"></i> {{ $featuredArticle['date'] }}
                                </span>
                            </div>
                            <a href="{{ route('blog.details', ['article' => $featuredArticle['slug']]) }}" class="featured-title">
                                {{ $featuredArticle['title'] }}
                            </a>
                            <p class="featured-excerpt">
                                {{ $featuredArticle['excerpt'] }}
                            </p>
                            <div class="featured-author-box">
                                <div class="author-info-group">
                                    <img src="{{ asset($featuredArticle['author']['avatar']) }}" alt="{{ $featuredArticle['author']['name'] }}" class="author-avatar">
                                    <div>
                                        <div class="author-name">{{ $featuredArticle['author']['name'] }}</div>
                                        <div class="author-role">{{ $featuredArticle['author']['role'] }}</div>
                                    </div>
                                </div>
                                <a href="{{ route('blog.details', ['article' => $featuredArticle['slug']]) }}" class="btn-read-insight">
                                    <span>Read Full Insight</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Search Query Notice (if active) -->
                @if(!empty($searchQuery))
                    <div style="margin-bottom: 24px; padding: 14px 20px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-size: 14px; color: #475569;">
                            Showing results for: <strong>"{{ $searchQuery }}"</strong> ({{ count($articles) }} found)
                        </span>
                        <a href="{{ route('blog') }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                            Clear Search
                        </a>
                    </div>
                @endif

                <!-- Article Cards Grid -->
                <div class="blog-cards-grid" id="articlesGrid">
                    @forelse($articles as $post)
                        @if(empty($searchQuery) && $selectedCategory === 'all' && $post['slug'] === $featuredArticle['slug'])
                            {{-- Skip featured in the regular grid if already prominently showcased above --}}
                            @continue
                        @endif
                        <article class="clineva-post-card" data-category="{{ $post['category'] }}">
                            <div class="post-card-thumb">
                                <a href="{{ route('blog.details', ['article' => $post['slug']]) }}">
                                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" loading="lazy">
                                </a>
                                <div class="post-card-category">
                                    <span class="badge-category-pill" style="color: {{ $post['category_color'] }}; background: #FFFFFF; box-shadow: 0 2px 8px rgba(0,0,0,0.12);">
                                        {{ $post['category_name'] }}
                                    </span>
                                </div>
                                <div class="post-card-readtime">
                                    <i class="icon-clock"></i> {{ $post['read_time'] }}
                                </div>
                            </div>
                            <div class="post-card-body">
                                <div class="post-card-date">
                                    <i class="icon-calendar"></i> {{ $post['date'] }}
                                </div>
                                <a href="{{ route('blog.details', ['article' => $post['slug']]) }}" class="post-card-title">
                                    {{ $post['title'] }}
                                </a>
                                <p class="post-card-excerpt">
                                    {{ $post['excerpt'] }}
                                </p>
                                <div class="post-card-footer">
                                    <div class="post-author-mini">
                                        <img src="{{ asset($post['author']['avatar']) }}" alt="{{ $post['author']['name'] }}">
                                        <span>{{ $post['author']['name'] }}</span>
                                    </div>
                                    <a href="{{ route('blog.details', ['article' => $post['slug']]) }}" class="post-read-link">
                                        <span>Read</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="col-12 empty-search-state" style="grid-column: 1 / -1;">
                            <i class="icon-file-word"></i>
                            <h4 style="font-size: 20px; font-weight: 700; color: #1E293B; margin-bottom: 8px;">No Insights Found</h4>
                            <p style="font-size: 14px; color: #64748B; margin-bottom: 20px;">
                                We couldn't find any articles matching your search criteria.
                            </p>
                            <a href="{{ route('blog') }}" class="btn-read-insight" style="display: inline-flex;">
                                View All Clinical Insights
                            </a>
                        </div>
                    @endforelse
                </div>

                <!-- Bottom Consultation Banner -->
                <div style="background: #F8FAFC; border: 1.5px dashed #CBD5E1; border-radius: 18px; padding: 28px; display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
                    <div>
                        <h4 style="font-size: 18px; font-weight: 800; color: #0F172A; margin-bottom: 6px;">Looking for scientific trial protocol consultation?</h4>
                        <p style="font-size: 13.5px; color: #64748B; margin: 0;">Our clinical investigators and biostatisticians are ready to discuss your pipeline.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-read-insight" style="white-space: nowrap;">
                        <span>Speak with Our Team</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- Right Sidebar Column -->
            <div class="col-xl-4 col-lg-4">
                <aside class="blog-sidebar-wrap">

                    <!-- Search Box Card -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Search Insights</span>
                            <i class="icon-magnifying-glass"></i>
                        </div>
                        <form action="{{ route('blog') }}" method="GET" class="sidebar-search-form" id="sidebarSearchForm">
                            <input type="text"
                                   name="q"
                                   value="{{ $searchQuery }}"
                                   placeholder="Search regulatory, BA/BE, GCP..."
                                   class="sidebar-search-input"
                                   id="searchInputField"
                                   autocomplete="off">
                            <button type="submit" class="sidebar-search-submit" title="Search">
                                <i class="icon-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Research Focus Categories -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Research Categories</span>
                            <i class="icon-tag"></i>
                        </div>
                        <ul class="sidebar-category-list">
                            @foreach($categories as $cat)
                                <li class="sidebar-category-item">
                                    <a href="{{ route('blog', ['category' => $cat['slug']]) }}"
                                       class="sidebar-category-link {{ $selectedCategory === $cat['slug'] ? 'active' : '' }}">
                                        <span>{{ $cat['name'] }}</span>
                                        <span class="badge-counter">{{ $cat['count'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Trending Insights -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Trending Insights</span>
                            <i class="icon-fire"></i>
                        </div>
                        <div>
                            @foreach($recentArticles as $recent)
                                <a href="{{ route('blog.details', ['article' => $recent['slug']]) }}" class="sidebar-recent-card">
                                    <div class="sidebar-recent-thumb">
                                        <img src="{{ asset($recent['image']) }}" alt="{{ $recent['title'] }}" loading="lazy">
                                    </div>
                                    <div style="flex-grow: 1;">
                                        <div class="sidebar-recent-meta">
                                            <span>{{ $recent['date'] }}</span> &bull; <span>{{ $recent['read_time'] }}</span>
                                        </div>
                                        <div class="sidebar-recent-title">
                                            {{ Str::limit($recent['title'], 60) }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sponsor Consultation CTA Box -->
                    <div class="sidebar-sponsor-box">
                        <div class="sponsor-box-icon">
                            <i class="icon-stethoscope"></i>
                        </div>
                        <div class="sponsor-box-title">
                            Planning an Upcoming Clinical Study?
                        </div>
                        <p class="sponsor-box-desc">
                            Connect with Clineva's clinical operations leads and regulatory specialists to evaluate trial feasibility, protocol design, and BA/BE PK timelines.
                        </p>
                        <a href="{{ route('contact') }}" class="btn-sponsor-contact">
                            Request CRO Consultation &rarr;
                        </a>
                        <div class="sponsor-contact-direct">
                            Or reach us directly at<br>
                            <a href="tel:+919870484499">+91 9870484499</a> &bull;
                            <a href="mailto:priti.gotpagar@clineva.in">priti.gotpagar@clineva.in</a>
                        </div>
                    </div>

                    <!-- Scientific Tags -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Key Scientific Topics</span>
                            <i class="icon-atom-simple"></i>
                        </div>
                        <div class="sidebar-tags-cloud">
                            <a href="{{ route('blog', ['q' => 'ICH-GCP']) }}" class="sidebar-tag-item">ICH-GCP E6 (R3)</a>
                            <a href="{{ route('blog', ['q' => 'Bioequivalence']) }}" class="sidebar-tag-item">Bioequivalence</a>
                            <a href="{{ route('blog', ['q' => 'Phase I-IV']) }}" class="sidebar-tag-item">Phase I-IV Trials</a>
                            <a href="{{ route('blog', ['q' => 'LC-MS/MS']) }}" class="sidebar-tag-item">LC-MS/MS</a>
                            <a href="{{ route('blog', ['q' => 'Protocol']) }}" class="sidebar-tag-item">Protocol Optimization</a>
                            <a href="{{ route('blog', ['q' => 'Decentralized']) }}" class="sidebar-tag-item">Hybrid DCT</a>
                            <a href="{{ route('blog', ['q' => 'Pharmacovigilance']) }}" class="sidebar-tag-item">Pharmacovigilance</a>
                            <a href="{{ route('blog', ['q' => 'Medical Writing']) }}" class="sidebar-tag-item">Medical Writing</a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>

<script>
    // Client-side quick filter enhancement
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInputField');
        const articlesGrid = document.getElementById('articlesGrid');

        // Optional smooth instant search filtering if on page
        if (searchInput && articlesGrid) {
            searchInput.addEventListener('input', function (e) {
                const term = e.target.value.toLowerCase().trim();
                const cards = articlesGrid.querySelectorAll('.clineva-post-card');
                let visibleCount = 0;

                cards.forEach(card => {
                    const title = (card.querySelector('.post-card-title')?.innerText || '').toLowerCase();
                    const excerpt = (card.querySelector('.post-card-excerpt')?.innerText || '').toLowerCase();
                    const cat = (card.getAttribute('data-category') || '').toLowerCase();

                    if (!term || title.includes(term) || excerpt.includes(term) || cat.includes(term)) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
    });
</script>
@endsection
