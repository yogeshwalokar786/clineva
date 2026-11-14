@extends('layouts.app')

@php
    $title = is_object($article) ? $article->title : $article['title'];
    $slug = is_object($article) ? $article->slug : $article['slug'];
    $categoryName = is_object($article) ? $article->category_name : $article['category_name'];
    $categorySlug = is_object($article) ? $article->category : $article['category'];
    $readTime = is_object($article) ? $article->read_time : $article['read_time'];
    $date = is_object($article) ? ($article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y')) : $article['date'];
    $image = is_object($article) ? $article->featured_image : $article['image'];
    $intro = is_object($article) ? ($article->content ?: $article->excerpt) : ($article['content']['intro'] ?? $article['excerpt']);
    $takeaways = is_object($article) ? $article->parsed_takeaways : ($article['content']['takeaways'] ?? []);
    $quote = is_object($article) ? $article->quote_text : ($article['content']['quote'] ?? null);
    $section1Title = is_object($article) ? $article->section1_title : ($article['content']['section1_title'] ?? null);
    $section1Body = is_object($article) ? $article->section1_body : ($article['content']['section1_body'] ?? null);
    $section2Title = is_object($article) ? $article->section2_title : ($article['content']['section2_title'] ?? null);
    $section2Body = is_object($article) ? $article->section2_body : ($article['content']['section2_body'] ?? null);
    $section3Title = is_object($article) ? $article->section3_title : ($article['content']['section3_title'] ?? null);
    $section3Body = is_object($article) ? $article->section3_body : ($article['content']['section3_body'] ?? null);

    // Advanced SEO Variables
    $seoTitle = is_object($article) ? $article->seo_meta_title : ($title . ' | Clineva Research Laboratories');
    $seoDesc = is_object($article) ? $article->seo_meta_description : \Illuminate\Support\Str::limit(strip_tags($intro), 155);
    $seoCanonical = is_object($article) ? $article->seo_canonical_url : route('blog.details', ['slug' => $slug]);
    $seoOgImage = is_object($article) ? $article->seo_og_image : asset($image);
    $seoRobots = is_object($article) ? ($article->robots ?: 'index, follow') : 'index, follow';
    $jsonLd = is_object($article) ? $article->schema_json_ld : null;

    $prevSlug = is_object($prevArticle) ? $prevArticle->slug : $prevArticle['slug'];
    $prevTitle = is_object($prevArticle) ? $prevArticle->title : $prevArticle['title'];
    $nextSlug = is_object($nextArticle) ? $nextArticle->slug : $nextArticle['slug'];
    $nextTitle = is_object($nextArticle) ? $nextArticle->title : $nextArticle['title'];
@endphp

@section('title', $seoTitle)

@section('seo')
    <meta name="description" content="{{ $seoDesc }}">
    <link rel="canonical" href="{{ $seoCanonical }}">
    <meta name="robots" content="{{ $seoRobots }}">

    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDesc }}">
    <meta property="og:url" content="{{ $seoCanonical }}">
    <meta property="og:site_name" content="Clineva Research Laboratories">
    <meta property="og:image" content="{{ $seoOgImage }}">
    <meta property="article:section" content="{{ $categoryName }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDesc }}">
    <meta name="twitter:image" content="{{ $seoOgImage }}">

    <!-- Structured Data (JSON-LD Schema.org) -->
    @if(!empty($jsonLd))
        <script type="application/ld+json">
            {!! $jsonLd !!}
        </script>
    @else
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "MedicalScholarlyArticle",
            "headline": "{{ addslashes($title) }}",
            "description": "{{ addslashes($seoDesc) }}",
            "image": "{{ $seoOgImage }}",
            "mainEntityOfPage": "{{ $seoCanonical }}",
            "publisher": {
                "@@type": "Organization",
                "name": "Clineva Research Laboratories",
                "logo": {
                    "@@type": "ImageObject",
                    "url": "{{ asset('image/logo/logo-main.png') }}"
                }
            }
        }
        </script>
    @endif
@endsection

@section('content')
<style>
    /* Scoped Refinements for Blog Details */
    .page-title.page-details .page-title-content {
        padding-top: 45px;
        padding-bottom: 45px;
    }
    .page-title.page-details .title {
        font-size: 38px;
        line-height: 1.3;
        margin-top: 14px;
        margin-bottom: 20px;
        color: #FFFFFF;
        max-width: 960px;
    }
    @media (max-width: 768px) {
        .page-title.page-details .title {
            font-size: 26px;
        }
    }
    .page-title.page-details .post-metas {
        display: flex;
        align-items: center;
        gap: 24px;
        flex-wrap: wrap;
    }
    .clinical-takeaways-box {
        background: #F0FDF4;
        border: 1px solid #BBF7D0;
        border-left: 5px solid #16A34A;
        border-radius: 12px;
        padding: 24px 28px;
    }
    .clinical-takeaways-box .takeaways-title {
        font-size: 16.5px;
        font-weight: 800;
        color: #14532D;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .clinical-takeaways-box .takeaways-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .clinical-takeaways-box .takeaways-list li {
        font-size: 14px;
        line-height: 1.6;
        color: #166534;
        margin-bottom: 8px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .clinical-takeaways-box .takeaways-list li:last-child {
        margin-bottom: 0;
    }
    .clinical-takeaways-box .takeaways-list i {
        color: #16A34A;
        margin-top: 3px;
        flex-shrink: 0;
    }
    .blog-details-content .image-blog-details .image {
        height: 440px;
        overflow: hidden;
        border-radius: 14px;
        background: #0B1E33;
    }
    @media (max-width: 768px) {
        .blog-details-content .image-blog-details .image {
            height: 240px;
        }
    }
    .blog-details-content .details-content .title {
        font-size: 28px;
        line-height: 1.35;
        margin-bottom: 16px;
        color: #0F172A;
    }
    .blog-details-cta-card {
        background: linear-gradient(135deg, #072836 0%, #00505A 60%, #007E8A 100%);
        border-radius: 18px;
        padding: 34px 40px;
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        box-shadow: 0 10px 30px rgba(0, 126, 138, 0.16);
        margin-bottom: 50px;
    }
    .blog-details-cta-card h3 {
        font-size: 22px;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 6px;
    }
    .blog-details-cta-card p {
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
        max-width: 580px;
    }
    .btn-details-cta {
        background: #FFFFFF;
        color: #072836 !important;
        font-size: 13.5px;
        font-weight: 800;
        padding: 12px 24px;
        border-radius: 999px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .btn-details-cta:hover {
        background: #E6F4F6;
        color: var(--primary, #007E8A) !important;
        transform: translateY(-2px);
    }
</style>

<!-- Theme Page Header with Details Metadata (Same as Previous) -->
<div class="page-title page-details mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3><a href="{{ route('blog') }}" class="link-breadkcum">Blogs</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">{{ $categoryName }}</h3>
            </div>
            <h1 class="title text-anime">
                {{ $title }}
            </h1>
            <div class="post-metas position-relative">
                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-tag"></i></div>
                    <span class="color-white fw7">{{ $categoryName }}</span>
                </div>

                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-clock"></i></div>
                    <span class="color-white fw7">{{ $readTime }}</span>
                </div>

                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-calendar"></i></div>
                    <span class="color-white fw7">{{ $date }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-title -->

<!-- Main Content (Full-Width Clean Reading Layout Without Sidebar) -->
<div class="main-content">
    <div class="tf-container tf-spacing-1">
        <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="blog-details-content">

                    <!-- Featured Hero Image with Date Badge -->
                    <div class="image-blog-details hover-img mb-40">
                        <div class="image">
                            <img src="{{ Str::startsWith($image, 'http') ? $image : asset($image) }}" alt="{{ $title }}" class="lazyload">
                        </div>
                        <div class="date">
                            <span class="day">{{ explode(' ', $date)[0] ?? '12' }}</span>
                            <span>{{ (explode(' ', $date)[1] ?? 'Nov') . ' ' . (explode(' ', $date)[2] ?? '2026') }}</span>
                        </div>
                    </div>

                    <!-- Intro / Lead Section -->
                    <div class="details-content mb-40">
                        <h3 class="title">
                            {{ $title }}
                        </h3>
                        <div class="desc" style="font-size: 16.5px; line-height: 1.8;">
                            {{ $intro }}
                        </div>
                    </div>

                    <!-- Executive Key Takeaways Callout -->
                    @if(!empty($takeaways) && count($takeaways) > 0)
                        <div class="clinical-takeaways-box mb-40">
                            <h4 class="takeaways-title">
                                <i class="icon-check"></i> Executive & Clinical Key Takeaways
                            </h4>
                            <ul class="takeaways-list">
                                @foreach($takeaways as $takeaway)
                                    <li>
                                        <i class="icon-check"></i>
                                        <span>{{ $takeaway }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Section 1 -->
                    @if(!empty($section1Title))
                        <div class="details-content-2 mb-40">
                            <h4 class="title" style="font-size: 22px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $section1Title }}
                            </h4>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $section1Body }}
                            </div>
                        </div>
                    @endif

                    <!-- Section 2 -->
                    @if(!empty($section2Title))
                        <div class="details-content-3 mb-40">
                            <h5 class="title" style="font-size: 20px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $section2Title }}
                            </h5>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $section2Body }}
                            </div>
                        </div>
                    @endif

                    <!-- Investigator / Expert Quote -->
                    @if(!empty($quote))
                        <div class="wg-quote mb-40">
                            <h4 class="text">
                                "{{ $quote }}"
                            </h4>
                            <span class="name-quote">Clineva Research Laboratories &bull; {{ $categoryName }}</span>
                        </div>
                    @endif

                    <!-- Section 3 -->
                    @if(!empty($section3Title))
                        <div class="details-content-3 mb-40">
                            <h5 class="title" style="font-size: 20px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $section3Title }}
                            </h5>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $section3Body }}
                            </div>
                        </div>
                    @endif

                    <!-- Social Share -->
                    <div class="post-tags-share flex align-items-center justify-content-between flex-wrap g-20 mb-50">
                        <div>
                            <span style="font-size: 15px; font-weight: 700; color: #0F172A;">Share this Article:</span>
                        </div>
                        <div class="post-share-wrap flex align-items-center g-10">
                            <ul class="post-social style-border">
                                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($seoCanonical) }}" target="_blank" class="icon-social" title="Share on LinkedIn"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text={{ urlencode($title) }}&url={{ urlencode($seoCanonical) }}" target="_blank" class="icon-social" title="Share on X"><i class="icon-twitter"></i></a></li>
                                <li><a href="mailto:?subject={{ rawurlencode($title) }}&body={{ rawurlencode($seoCanonical) }}" class="icon-social" title="Email Article"><i class="icon-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Previous / Grid / Next Article Navigation -->
                    <div class="list-btn flex justify-content-between align-items-center rg-30 mb-60">
                        <a href="{{ route('blog.details', ['slug' => $prevSlug]) }}" class="btn-arrow-details previous-details">
                            <span class="icon">
                                <i class="icon-chevron-left"></i>
                            </span>
                            <span class="text lh-24 fw7">
                                {{ Str::limit($prevTitle, 55) }}
                            </span>
                        </a>
                        <a href="{{ route('blog') }}" class="btn-grid" title="Back to All Blogs">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <a href="{{ route('blog.details', ['slug' => $nextSlug]) }}" class="btn-arrow-details next-details">
                            <span class="icon">
                                <i class="icon-chevron-right"></i>
                            </span>
                            <span class="text lh-24 fw7">
                                {{ Str::limit($nextTitle, 55) }}
                            </span>
                        </a>
                    </div>

                    <!-- Sponsor Consultation CTA Box -->
                    <div class="blog-details-cta-card">
                        <div>
                            <h3>Planning a Clinical Study or BA/BE Protocol?</h3>
                            <p>Consult with our Principal Investigators, medical writers, and regulatory specialists for protocol feasibility and timeline projections.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn-details-cta">
                            <span>Request Consultation</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Related Clinical Insights -->
                    @if(!empty($relatedArticles) && count($relatedArticles) > 0)
                        <div style="margin-top: 20px;">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 22px;">
                                <h3 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0;">Related Insights</h3>
                                <a href="{{ route('blog', ['category' => $categorySlug]) }}" style="font-size: 13.5px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                                    View More in {{ $categoryName }}
                                </a>
                            </div>
                            <div class="row">
                                @foreach($relatedArticles as $rel)
                                    @php
                                        $relSlug = is_object($rel) ? $rel->slug : $rel['slug'];
                                        $relTitle = is_object($rel) ? $rel->title : $rel['title'];
                                        $relDate = is_object($rel) ? ($rel->published_at ? $rel->published_at->format('d M Y') : $rel->created_at->format('d M Y')) : $rel['date'];
                                        $relRead = is_object($rel) ? $rel->read_time : $rel['read_time'];
                                        $relImage = is_object($rel) ? $rel->featured_image : $rel['image'];
                                    @endphp
                                    <div class="col-md-6 mb-24">
                                        <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 16px; overflow: hidden; height: 100%; display: flex; flex-direction: column; box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);">
                                            <a href="{{ route('blog.details', ['slug' => $relSlug]) }}" style="height: 170px; display: block; overflow: hidden;">
                                                <img src="{{ Str::startsWith($relImage, 'http') ? $relImage : asset($relImage) }}" alt="{{ $relTitle }}" style="width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                            <div style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                                                <div style="font-size: 12px; color: #64748B; margin-bottom: 6px;">{{ $relDate }} &bull; {{ $relRead }}</div>
                                                <a href="{{ route('blog.details', ['slug' => $relSlug]) }}" style="font-size: 16px; font-weight: 700; color: #0F172A; text-decoration: none; margin-bottom: 12px; line-height: 1.4;">
                                                    {{ $relTitle }}
                                                </a>
                                                <div style="margin-top: auto;">
                                                    <a href="{{ route('blog.details', ['slug' => $relSlug]) }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
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
