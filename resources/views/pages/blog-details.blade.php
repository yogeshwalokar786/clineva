@extends('layouts.app')

@section('title', $article['title'] . ' - Clineva Research Laboratories')

@section('content')
<style>
    /* Article Details Clean Centered View */
    .article-details-wrapper {
        padding: 50px 0 80px;
    }
    .article-details-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 20px;
        padding: 44px;
        box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
        margin-bottom: 40px;
    }
    @media (max-width: 768px) {
        .article-details-card {
            padding: 24px;
        }
    }
    .article-meta-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 24px;
        margin-bottom: 28px;
        border-bottom: 1px solid #F1F5F9;
        flex-wrap: wrap;
        gap: 16px;
    }
    .article-author-group {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .article-author-group img {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #E2E8F0;
    }
    .article-meta-tags {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 13px;
        color: #64748B;
        flex-wrap: wrap;
    }
    .article-hero-media {
        width: 100%;
        height: 440px;
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 36px;
        background: #0B1E33;
    }
    @media (max-width: 768px) {
        .article-hero-media {
            height: 250px;
        }
    }
    .article-hero-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .article-lead-paragraph {
        font-size: 18px;
        line-height: 1.7;
        color: #334155;
        font-weight: 500;
        margin-bottom: 30px;
        padding-bottom: 24px;
        border-bottom: 1px solid #F1F5F9;
    }
    .clinical-takeaways-card {
        background: #F0FDF4;
        border: 1px solid #BBF7D0;
        border-left: 5px solid #16A34A;
        border-radius: 12px;
        padding: 24px 28px;
        margin-bottom: 36px;
    }
    .clinical-takeaways-card h4 {
        font-size: 16.5px;
        font-weight: 800;
        color: #14532D;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .clinical-takeaways-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .clinical-takeaways-list li {
        font-size: 14px;
        line-height: 1.6;
        color: #166534;
        margin-bottom: 8px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .clinical-takeaways-list li:last-child {
        margin-bottom: 0;
    }
    .clinical-takeaways-list i {
        color: #16A34A;
        margin-top: 3px;
        flex-shrink: 0;
    }
    .article-prose-body h2 {
        font-size: 24px;
        font-weight: 800;
        color: #0F172A;
        margin-top: 36px;
        margin-bottom: 16px;
        line-height: 1.35;
    }
    .article-prose-body p {
        font-size: 15.5px;
        line-height: 1.75;
        color: #475569;
        margin-bottom: 20px;
    }
    .clinical-quote-card {
        background: linear-gradient(135deg, #E6F4F6 0%, #F0F9FF 100%);
        border-left: 4px solid var(--primary, #007E8A);
        border-radius: 12px;
        padding: 26px 30px;
        margin: 36px 0;
    }
    .clinical-quote-text {
        font-size: 17.5px;
        line-height: 1.6;
        font-weight: 600;
        color: #0F172A;
        font-style: italic;
        margin-bottom: 10px;
    }
    .clinical-quote-author {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--primary, #007E8A);
    }
    .article-footer-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 26px;
        margin-top: 38px;
        border-top: 1px solid #E2E8F0;
        flex-wrap: wrap;
        gap: 18px;
    }
    .article-tag-cloud {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }
    .article-tag-item {
        font-size: 12px;
        font-weight: 600;
        background: #F1F5F9;
        color: #475569;
        padding: 5px 12px;
        border-radius: 999px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .article-tag-item:hover {
        background: var(--primary, #007E8A);
        color: #FFFFFF;
    }
    .article-share-links {
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
    .author-signature-card {
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 16px;
        padding: 26px;
        display: flex;
        gap: 18px;
        align-items: center;
        margin-top: 36px;
    }
    @media (max-width: 600px) {
        .author-signature-card {
            flex-direction: column;
            text-align: center;
        }
    }
    .author-signature-avatar {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #E2E8F0;
        flex-shrink: 0;
    }
    .article-bottom-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 32px;
        padding-top: 22px;
        border-top: 1px solid #E2E8F0;
        flex-wrap: wrap;
        gap: 14px;
    }
</style>

<!-- Original Standard Page Header (Same as Previous) -->
<div class="page-title page-details mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3><a href="{{ route('blog') }}" class="link-breadkcum">Blogs</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">{{ $article['category_name'] }}</h3>
            </div>
            <h1 class="title text-anime">
                {{ $article['title'] }}
            </h1>
        </div>
    </div>
</div>
<!-- /.page-title -->

<!-- Main Content Area (Clean Centered Full-Width Without Right Sidebar) -->
<div class="main-content">
    <div class="article-details-wrapper">
        <div class="tf-container">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">

                    <article class="article-details-card">

                        <!-- Meta Row -->
                        <div class="article-meta-bar">
                            <div class="article-author-group">
                                <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}">
                                <div>
                                    <div style="font-size: 14px; font-weight: 700; color: #1E293B;">{{ $article['author']['name'] }}</div>
                                    <div style="font-size: 12px; color: #64748B;">{{ $article['author']['role'] }}</div>
                                </div>
                            </div>
                            <div class="article-meta-tags">
                                <span style="background: {{ $article['category_color'] }}15; color: {{ $article['category_color'] }}; font-weight: 700; padding: 3px 12px; border-radius: 999px; font-size: 12px; text-transform: uppercase;">
                                    {{ $article['category_name'] }}
                                </span>
                                <span><i class="icon-calendar"></i> {{ $article['date'] }}</span>
                                <span><i class="icon-clock"></i> {{ $article['read_time'] }}</span>
                            </div>
                        </div>

                        <!-- Hero Cover -->
                        <div class="article-hero-media">
                            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
                        </div>

                        <!-- Lead Paragraph -->
                        <div class="article-lead-paragraph">
                            {{ $article['content']['intro'] ?? $article['excerpt'] }}
                        </div>

                        <!-- Key Takeaways -->
                        @if(!empty($article['content']['takeaways']))
                            <div class="clinical-takeaways-card">
                                <h4><i class="icon-check"></i> Executive & Clinical Key Takeaways</h4>
                                <ul class="clinical-takeaways-list">
                                    @foreach($article['content']['takeaways'] as $takeaway)
                                        <li>
                                            <i class="icon-check"></i>
                                            <span>{{ $takeaway }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Prose Content -->
                        <div class="article-prose-body">
                            @if(!empty($article['content']['section1_title']))
                                <h2>{{ $article['content']['section1_title'] }}</h2>
                                <p>{{ $article['content']['section1_body'] }}</p>
                            @endif

                            @if(!empty($article['content']['section2_title']))
                                <h2>{{ $article['content']['section2_title'] }}</h2>
                                <p>{{ $article['content']['section2_body'] }}</p>
                            @endif

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

                        <!-- Tags & Share -->
                        <div class="article-footer-bar">
                            <div class="article-tag-cloud">
                                <span style="font-size: 13px; font-weight: 700; color: #1E293B;">Topics:</span>
                                @foreach($article['tags'] as $tag)
                                    <a href="{{ route('blog', ['q' => $tag]) }}" class="article-tag-item">
                                        #{{ $tag }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="article-share-links">
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

                        <!-- Author Bio -->
                        <div class="author-signature-card">
                            <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}" class="author-signature-avatar">
                            <div>
                                <div style="font-size: 16px; font-weight: 800; color: #0F172A; margin-bottom: 2px;">{{ $article['author']['name'] }}</div>
                                <div style="font-size: 12.5px; color: var(--primary, #007E8A); font-weight: 700; margin-bottom: 6px;">{{ $article['author']['role'] }} &bull; Clineva Research Laboratories</div>
                                <p style="font-size: 13.5px; line-height: 1.55; color: #475569; margin: 0;">
                                    Guiding sponsors through Phase I-IV trial setup, international GCP regulatory compliance, bioavailability/bioequivalence (BA/BE) studies, and CDSCO/USFDA/EMA submissions.
                                </p>
                            </div>
                        </div>

                        <!-- Back to Blogs & Consultation -->
                        <div class="article-bottom-nav">
                            <a href="{{ route('blog') }}" class="btn-live-site" style="font-size: 13.5px; font-weight: 700; padding: 9px 18px;">
                                <i class="icon-arrow-left"></i>
                                <span>Back to All Blogs</span>
                            </a>
                            <a href="{{ route('contact') }}" class="btn-live-site" style="font-size: 13.5px; font-weight: 700; padding: 9px 18px; background: var(--primary); color: #FFFFFF; border-color: var(--primary);">
                                <span>Discuss Your Protocol</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>

                    </article>

                    <!-- Related Clinical Insights Section -->
                    @if(!empty($relatedArticles) && count($relatedArticles) > 0)
                        <div style="margin-top: 48px;">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
                                <h3 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0;">Related Insights</h3>
                                <a href="{{ route('blog', ['category' => $article['category']]) }}" style="font-size: 13.5px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                                    View More in {{ $article['category_name'] }}
                                </a>
                            </div>
                            <div class="row">
                                @foreach($relatedArticles as $rel)
                                    <div class="col-md-6 mb-24">
                                        <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 16px; overflow: hidden; height: 100%; display: flex; flex-direction: column; box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);">
                                            <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="height: 170px; display: block; overflow: hidden;">
                                                <img src="{{ asset($rel['image']) }}" alt="{{ $rel['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                            <div style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                                                <div style="font-size: 12px; color: #64748B; margin-bottom: 6px;">{{ $rel['date'] }} &bull; {{ $rel['read_time'] }}</div>
                                                <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="font-size: 16.5px; font-weight: 700; color: #0F172A; text-decoration: none; margin-bottom: 12px; line-height: 1.4;">
                                                    {{ $rel['title'] }}
                                                </a>
                                                <div style="margin-top: auto;">
                                                    <a href="{{ route('blog.details', ['article' => $rel['slug']]) }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                                        <span>Read Full Insight</span>
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
            </div>
        </div>
    </div>
</div>
@endsection
