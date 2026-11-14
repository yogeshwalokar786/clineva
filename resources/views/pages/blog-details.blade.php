@extends('layouts.app')

@section('title', $article['title'] . ' - Clineva Research Laboratories')

@section('content')
<style>
    /* Clineva Article Details Styling */
    .article-header-banner {
        background: linear-gradient(135deg, #071E2F 0%, #004D56 55%, #007E8A 100%);
        color: #FFFFFF;
        padding: 60px 0 50px;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 28px 28px;
    }
    .article-header-banner::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 80% 20%, rgba(0, 194, 203, 0.15) 0%, transparent 60%);
        pointer-events: none;
    }
    .article-breadcrumb-nav {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .article-breadcrumb-nav a {
        color: #FFFFFF;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .article-breadcrumb-nav a:hover {
        color: #38BDF8;
    }
    .article-header-title {
        font-size: 36px;
        line-height: 1.28;
        font-weight: 800;
        color: #FFFFFF;
        max-width: 900px;
        margin-bottom: 24px;
        letter-spacing: -0.5px;
    }
    @media (max-width: 768px) {
        .article-header-title {
            font-size: 26px;
        }
    }
    .article-header-meta {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .article-author-pill {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .article-author-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.3);
        object-fit: cover;
    }
    .article-author-name {
        font-size: 14px;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.2;
    }
    .article-author-role {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.75);
    }
    .article-meta-divider {
        width: 1px;
        height: 28px;
        background: rgba(255, 255, 255, 0.2);
    }
    .article-meta-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.85);
    }
    .article-meta-badge i {
        color: #38BDF8;
    }

    /* Article Body Elements */
    .article-main-body {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
        margin-bottom: 40px;
    }
    @media (max-width: 768px) {
        .article-main-body {
            padding: 24px;
        }
    }
    .article-hero-cover {
        width: 100%;
        height: 420px;
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 36px;
        background: #0B1E33;
    }
    @media (max-width: 768px) {
        .article-hero-cover {
            height: 240px;
        }
    }
    .article-hero-cover img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .article-lead-text {
        font-size: 17.5px;
        line-height: 1.7;
        color: #334155;
        font-weight: 500;
        margin-bottom: 30px;
        padding-bottom: 24px;
        border-bottom: 1px solid #F1F5F9;
    }

    /* Key Takeaways Box */
    .takeaways-box {
        background: #F0FDF4;
        border: 1px solid #BBF7D0;
        border-left: 5px solid #16A34A;
        border-radius: 12px;
        padding: 24px 28px;
        margin-bottom: 36px;
    }
    .takeaways-title {
        font-size: 16.5px;
        font-weight: 800;
        color: #14532D;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .takeaways-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .takeaways-item {
        font-size: 14px;
        line-height: 1.6;
        color: #166534;
        margin-bottom: 10px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .takeaways-item:last-child {
        margin-bottom: 0;
    }
    .takeaways-item i {
        color: #16A34A;
        font-size: 15px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* Prose styling */
    .article-prose h2 {
        font-size: 24px;
        font-weight: 800;
        color: #0F172A;
        margin-top: 36px;
        margin-bottom: 16px;
        line-height: 1.35;
    }
    .article-prose p {
        font-size: 15.5px;
        line-height: 1.75;
        color: #475569;
        margin-bottom: 20px;
    }

    /* Quote Callout */
    .clinical-quote-card {
        background: linear-gradient(135deg, #E6F4F6 0%, #F0F9FF 100%);
        border-left: 4px solid var(--primary, #007E8A);
        border-radius: 12px;
        padding: 28px 32px;
        margin: 36px 0;
        position: relative;
    }
    .clinical-quote-text {
        font-size: 18px;
        line-height: 1.6;
        font-weight: 600;
        color: #0F172A;
        font-style: italic;
        margin-bottom: 12px;
    }
    .clinical-quote-author {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--primary, #007E8A);
    }

    /* Tags & Share Bar */
    .article-footer-tags-share {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 28px;
        margin-top: 40px;
        border-top: 1px solid #E2E8F0;
        flex-wrap: wrap;
        gap: 20px;
    }
    .article-tags-wrap {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }
    .article-tag-pill {
        font-size: 12px;
        font-weight: 600;
        background: #F1F5F9;
        color: #475569;
        padding: 5px 12px;
        border-radius: 999px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .article-tag-pill:hover {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
    }
    .article-share-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .article-share-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #F1F5F9;
        color: #475569;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .article-share-btn:hover {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
        transform: translateY(-2px);
    }

    /* Author Bio Box */
    .author-bio-card {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 28px;
        display: flex;
        gap: 20px;
        align-items: center;
        margin-top: 36px;
    }
    @media (max-width: 600px) {
        .author-bio-card {
            flex-direction: column;
            text-align: center;
        }
    }
    .author-bio-avatar {
        width: 76px;
        height: 76px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #E2E8F0;
        flex-shrink: 0;
    }
    .author-bio-title {
        font-size: 17px;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 4px;
    }
    .author-bio-role {
        font-size: 13px;
        color: var(--primary, #007E8A);
        font-weight: 700;
        margin-bottom: 8px;
    }
    .author-bio-desc {
        font-size: 13.5px;
        line-height: 1.55;
        color: #475569;
        margin: 0;
    }

    /* Next / Prev Navigation */
    .article-nav-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 36px;
        padding-top: 24px;
        border-top: 1px solid #E2E8F0;
        flex-wrap: wrap;
        gap: 16px;
    }
    .btn-nav-insights {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13.5px;
        font-weight: 700;
        color: var(--primary, #007E8A);
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 8px;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        transition: all 0.2s ease;
    }
    .btn-nav-insights:hover {
        background: #E6F4F6;
        border-color: var(--primary, #007E8A);
    }

    /* Related Articles Cards */
    .related-articles-section {
        margin-top: 48px;
    }
    .related-section-title {
        font-size: 22px;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Reused Sidebar Box Styles */
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
    .sidebar-search-input {
        width: 100%;
        padding: 12px 44px 12px 16px;
        border: 1.5px solid #CBD5E1;
        border-radius: 12px;
        font-size: 13.5px;
        background: #F8FAFC;
        outline: none;
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
    }
    .sidebar-category-list {
        list-style: none;
        padding: 0;
        margin: 0;
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
        background: #F8FAFC;
        margin-bottom: 8px;
        transition: all 0.2s ease;
    }
    .sidebar-category-link:hover {
        background: #E6F4F6;
        color: var(--primary, #007E8A);
    }
    .sidebar-recent-card {
        display: flex;
        gap: 14px;
        margin-bottom: 18px;
        text-decoration: none;
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
    }
    .sidebar-sponsor-box {
        background: linear-gradient(135deg, #072836 0%, #00505A 60%, #007E8A 100%);
        border-radius: 18px;
        padding: 30px 24px;
        color: #FFFFFF;
        box-shadow: 0 10px 25px rgba(0, 126, 138, 0.2);
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
    }
</style>

<!-- Article Header Banner -->
<div class="article-header-banner">
    <div class="tf-container">
        <div class="article-breadcrumb-nav">
            <a href="{{ route('home') }}">Home</a>
            <span>&bull;</span>
            <a href="{{ route('blog') }}">Insights & Blogs</a>
            <span>&bull;</span>
            <span>{{ $article['category_name'] }}</span>
        </div>

        <div style="margin-bottom: 16px;">
            <span style="display: inline-block; padding: 5px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; background: rgba(255, 255, 255, 0.15); color: #E6F4F6; border: 1px solid rgba(255, 255, 255, 0.25);">
                {{ $article['category_name'] }}
            </span>
        </div>

        <h1 class="article-header-title">
            {{ $article['title'] }}
        </h1>

        <div class="article-header-meta">
            <div class="article-author-pill">
                <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}" class="article-author-avatar">
                <div>
                    <div class="article-author-name">{{ $article['author']['name'] }}</div>
                    <div class="article-author-role">{{ $article['author']['role'] }}</div>
                </div>
            </div>
            <div class="article-meta-divider"></div>
            <div class="article-meta-badge">
                <i class="icon-calendar"></i>
                <span>Published {{ $article['date'] }}</span>
            </div>
            <div class="article-meta-badge">
                <i class="icon-clock"></i>
                <span>{{ $article['read_time'] }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Area -->
<div class="main-content" style="padding-top: 50px; padding-bottom: 90px;">
    <div class="tf-container">
        <div class="row">

            <!-- Left: Article Content -->
            <div class="col-xl-8 col-lg-8">
                <article class="article-main-body">

                    <!-- Hero Cover Image -->
                    <div class="article-hero-cover">
                        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
                    </div>

                    <!-- Intro Lead -->
                    <div class="article-lead-text">
                        {{ $article['content']['intro'] ?? $article['excerpt'] }}
                    </div>

                    <!-- Key Takeaways Callout -->
                    @if(!empty($article['content']['takeaways']))
                        <div class="takeaways-box">
                            <div class="takeaways-title">
                                <i class="icon-check"></i> Executive & Clinical Key Takeaways
                            </div>
                            <ul class="takeaways-list">
                                @foreach($article['content']['takeaways'] as $takeaway)
                                    <li class="takeaways-item">
                                        <i class="icon-check"></i>
                                        <span>{{ $takeaway }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Prose Sections -->
                    <div class="article-prose">
                        @if(!empty($article['content']['section1_title']))
                            <h2>{{ $article['content']['section1_title'] }}</h2>
                            <p>{{ $article['content']['section1_body'] }}</p>
                        @endif

                        @if(!empty($article['content']['section2_title']))
                            <h2>{{ $article['content']['section2_title'] }}</h2>
                            <p>{{ $article['content']['section2_body'] }}</p>
                        @endif

                        <!-- Clinical Investigator Quote -->
                        @if(!empty($article['content']['quote']))
                            <div class="clinical-quote-card">
                                <div class="clinical-quote-text">
                                    "{{ $article['content']['quote'] }}"
                                </div>
                                <div class="clinical-quote-author">
                                    &mdash; {{ $article['author']['name'] }}, {{ $article['author']['role'] }}
                                </div>
                            </div>
                        @endif

                        @if(!empty($article['content']['section3_title']))
                            <h2>{{ $article['content']['section3_title'] }}</h2>
                            <p>{{ $article['content']['section3_body'] }}</p>
                        @endif
                    </div>

                    <!-- Tags & Social Share -->
                    <div class="article-footer-tags-share">
                        <div class="article-tags-wrap">
                            <span style="font-size: 13px; font-weight: 700; color: #1E293B;">Scientific Tags:</span>
                            @foreach($article['tags'] as $tag)
                                <a href="{{ route('blog', ['q' => $tag]) }}" class="article-tag-pill">
                                    #{{ $tag }}
                                </a>
                            @endforeach
                        </div>
                        <div class="article-share-group">
                            <span style="font-size: 13px; font-weight: 700; color: #1E293B;">Share:</span>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="article-share-btn" title="Share on LinkedIn">
                                <i class="icon-linkedin2"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($article['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="article-share-btn" title="Share on X">
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="mailto:?subject={{ rawurlencode($article['title']) }}&body={{ rawurlencode(url()->current()) }}" class="article-share-btn" title="Email Article">
                                <i class="icon-envelope"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Author Biography Card -->
                    <div class="author-bio-card">
                        <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}" class="author-bio-avatar">
                        <div>
                            <div class="author-bio-title">{{ $article['author']['name'] }}</div>
                            <div class="author-bio-role">{{ $article['author']['role'] }} &bull; Clineva Research Laboratories</div>
                            <p class="author-bio-desc">
                                Specializing in clinical trial design, international GCP compliance, bioanalytical pharmacokinetic modeling, and regulatory dossiers across USFDA, EMA, and CDSCO frameworks.
                            </p>
                        </div>
                    </div>

                    <!-- Article Navigation -->
                    <div class="article-nav-row">
                        <a href="{{ route('blog') }}" class="btn-nav-insights">
                            <i class="icon-arrow-left"></i>
                            <span>Back to All Clinical Insights</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-nav-insights" style="background: var(--primary, #007E8A); color: #FFFFFF; border-color: var(--primary, #007E8A);">
                            <span>Consult Clineva Investigators</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>

                </article>

                <!-- Related Clinical Insights -->
                @if(!empty($relatedArticles) && count($relatedArticles) > 0)
                    <div class="related-articles-section">
                        <div class="related-section-title">
                            <span>Related Clinical Insights</span>
                            <a href="{{ route('blog', ['category' => $article['category']]) }}" style="font-size: 13.5px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                                View Category
                            </a>
                        </div>
                        <div class="row">
                            @foreach($relatedArticles as $rel)
                                <div class="col-md-6 mb-24">
                                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 16px; overflow: hidden; height: 100%; display: flex; flex-direction: column;">
                                        <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="height: 160px; display: block; overflow: hidden;">
                                            <img src="{{ asset($rel['image']) }}" alt="{{ $rel['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        </a>
                                        <div style="padding: 20px; display: flex; flex-direction: column; flex-grow: 1;">
                                            <div style="font-size: 12px; color: #64748B; margin-bottom: 6px;">{{ $rel['date'] }} &bull; {{ $rel['read_time'] }}</div>
                                            <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="font-size: 16px; font-weight: 700; color: #0F172A; text-decoration: none; margin-bottom: 10px; line-height: 1.4;">
                                                {{ $rel['title'] }}
                                            </a>
                                            <div style="margin-top: auto; padding-top: 12px;">
                                                <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                                    <span>Read Insight</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

            <!-- Right: Sidebar Column -->
            <div class="col-xl-4 col-lg-4">
                <aside class="blog-sidebar-wrap">

                    <!-- Search Box Card -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Search Insights</span>
                            <i class="icon-magnifying-glass"></i>
                        </div>
                        <form action="{{ route('blog') }}" method="GET" style="position: relative;">
                            <input type="text"
                                   name="q"
                                   placeholder="Search regulatory, BA/BE, GCP..."
                                   class="sidebar-search-input"
                                   autocomplete="off">
                            <button type="submit" class="sidebar-search-submit" title="Search">
                                <i class="icon-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Research Categories -->
                    <div class="blog-sidebar-box">
                        <div class="sidebar-head-title">
                            <span>Research Categories</span>
                            <i class="icon-tag"></i>
                        </div>
                        <ul class="sidebar-category-list">
                            @foreach($categories as $cat)
                                <li>
                                    <a href="{{ route('blog', ['category' => $cat['slug']]) }}" class="sidebar-category-link">
                                        <span>{{ $cat['name'] }}</span>
                                        <span style="font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 999px; background: #E2E8F0; color: #475569;">
                                            {{ $cat['count'] }}
                                        </span>
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
                                        <img src="{{ asset($recent['image']) }}" alt="{{ $recent['title'] }}">
                                    </div>
                                    <div style="flex-grow: 1;">
                                        <div style="font-size: 11.5px; color: #64748B; margin-bottom: 4px;">{{ $recent['date'] }} &bull; {{ $recent['read_time'] }}</div>
                                        <div style="font-size: 13.5px; line-height: 1.38; font-weight: 700; color: #1E293B;">
                                            {{ Str::limit($recent['title'], 60) }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sponsor Consultation CTA Box -->
                    <div class="sidebar-sponsor-box">
                        <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(255, 255, 255, 0.15); display: flex; align-items: center; justify-content: center; font-size: 20px; color: #38BDF8; margin-bottom: 16px;">
                            <i class="icon-stethoscope"></i>
                        </div>
                        <div style="font-size: 20px; font-weight: 800; color: #FFFFFF; line-height: 1.3; margin-bottom: 10px;">
                            Planning an Upcoming Clinical Study?
                        </div>
                        <p style="font-size: 13px; line-height: 1.6; color: rgba(255, 255, 255, 0.82); margin-bottom: 20px;">
                            Connect with Clineva's clinical operations leads and regulatory specialists to evaluate trial feasibility, protocol design, and BA/BE PK timelines.
                        </p>
                        <a href="{{ route('contact') }}" class="btn-sponsor-contact">
                            Request CRO Consultation &rarr;
                        </a>
                        <div style="margin-top: 16px; font-size: 12px; color: rgba(255, 255, 255, 0.7); text-align: center;">
                            Or reach us directly at<br>
                            <a href="tel:+919870484499" style="color: #FFFFFF; text-decoration: underline;">+91 9870484499</a> &bull;
                            <a href="mailto:priti.gotpagar@clineva.in" style="color: #FFFFFF; text-decoration: underline;">priti.gotpagar@clineva.in</a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
