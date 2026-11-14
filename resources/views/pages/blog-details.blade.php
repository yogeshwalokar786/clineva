@extends('layouts.app')

@section('title', $article['title'] . ' - Clineva Research Laboratories')

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
                <h3 class="page-breadkcum pl-0">{{ $article['category_name'] }}</h3>
            </div>
            <h1 class="title text-anime">
                {{ $article['title'] }}
            </h1>
            <div class="post-metas position-relative">
                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-tag"></i></div>
                    <span class="color-white fw7">{{ $article['category_name'] }}</span>
                </div>

                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-clock"></i></div>
                    <span class="color-white fw7">{{ $article['read_time'] }}</span>
                </div>

                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-calendar"></i></div>
                    <span class="color-white fw7">{{ $article['date'] }}</span>
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
                            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" class="lazyload">
                        </div>
                        <div class="date">
                            <span class="day">{{ explode(' ', $article['date'])[0] ?? '12' }}</span>
                            <span>{{ (explode(' ', $article['date'])[1] ?? 'Nov') . ' ' . (explode(' ', $article['date'])[2] ?? '2026') }}</span>
                        </div>
                    </div>

                    <!-- Intro / Lead Section -->
                    <div class="details-content mb-40">
                        <h3 class="title">
                            {{ $article['title'] }}
                        </h3>
                        <div class="desc" style="font-size: 16.5px; line-height: 1.8;">
                            {{ $article['content']['intro'] ?? $article['excerpt'] }}
                        </div>
                    </div>

                    <!-- Executive Key Takeaways Callout -->
                    @if(!empty($article['content']['takeaways']))
                        <div class="clinical-takeaways-box mb-40">
                            <h4 class="takeaways-title">
                                <i class="icon-check"></i> Executive & Clinical Key Takeaways
                            </h4>
                            <ul class="takeaways-list">
                                @foreach($article['content']['takeaways'] as $takeaway)
                                    <li>
                                        <i class="icon-check"></i>
                                        <span>{{ $takeaway }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Section 1 -->
                    @if(!empty($article['content']['section1_title']))
                        <div class="details-content-2 mb-40">
                            <h4 class="title" style="font-size: 22px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $article['content']['section1_title'] }}
                            </h4>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $article['content']['section1_body'] }}
                            </div>
                        </div>
                    @endif

                    <!-- Section 2 -->
                    @if(!empty($article['content']['section2_title']))
                        <div class="details-content-3 mb-40">
                            <h5 class="title" style="font-size: 20px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $article['content']['section2_title'] }}
                            </h5>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $article['content']['section2_body'] }}
                            </div>
                        </div>
                    @endif

                    <!-- Investigator / Expert Quote -->
                    @if(!empty($article['content']['quote']))
                        <div class="wg-quote mb-40">
                            <h4 class="text">
                                "{{ $article['content']['quote'] }}"
                            </h4>
                            <span class="name-quote">Clineva Research Laboratories &bull; {{ $article['category_name'] }}</span>
                        </div>
                    @endif

                    <!-- Section 3 -->
                    @if(!empty($article['content']['section3_title']))
                        <div class="details-content-3 mb-40">
                            <h5 class="title" style="font-size: 20px; font-weight: 800; color: #0F172A; margin-bottom: 14px;">
                                {{ $article['content']['section3_title'] }}
                            </h5>
                            <div class="desc" style="font-size: 15.5px; line-height: 1.75;">
                                {{ $article['content']['section3_body'] }}
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
                                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="icon-social" title="Share on LinkedIn"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text={{ urlencode($article['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="icon-social" title="Share on X"><i class="icon-twitter"></i></a></li>
                                <li><a href="mailto:?subject={{ rawurlencode($article['title']) }}&body={{ rawurlencode(url()->current()) }}" class="icon-social" title="Email Article"><i class="icon-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Previous / Grid / Next Article Navigation -->
                    <div class="list-btn flex justify-content-between align-items-center rg-30 mb-60">
                        <a href="{{ route('blog.details', ['slug' => $prevArticle['slug']]) }}" class="btn-arrow-details previous-details">
                            <span class="icon">
                                <i class="icon-chevron-left"></i>
                            </span>
                            <span class="text lh-24 fw7">
                                {{ Str::limit($prevArticle['title'], 55) }}
                            </span>
                        </a>
                        <a href="{{ route('blog') }}" class="btn-grid" title="Back to All Blogs">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <a href="{{ route('blog.details', ['slug' => $nextArticle['slug']]) }}" class="btn-arrow-details next-details">
                            <span class="icon">
                                <i class="icon-chevron-right"></i>
                            </span>
                            <span class="text lh-24 fw7">
                                {{ Str::limit($nextArticle['title'], 55) }}
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
                                <a href="{{ route('blog', ['category' => $article['category']]) }}" style="font-size: 13.5px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: underline;">
                                    View More in {{ $article['category_name'] }}
                                </a>
                            </div>
                            <div class="row">
                                @foreach($relatedArticles as $rel)
                                    <div class="col-md-6 mb-24">
                                        <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 16px; overflow: hidden; height: 100%; display: flex; flex-direction: column; box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);">
                                            <a href="{{ route('blog.details', ['slug' => $rel['slug']]) }}" style="height: 170px; display: block; overflow: hidden;">
                                                <img src="{{ asset($rel['image']) }}" alt="{{ $rel['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                            <div style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                                                <div style="font-size: 12px; color: #64748B; margin-bottom: 6px;">{{ $rel['date'] }} &bull; {{ $rel['read_time'] }}</div>
                                                <a href="{{ route('blog.details', ['slug' => $rel['slug']]) }}" style="font-size: 16px; font-weight: 700; color: #0F172A; text-decoration: none; margin-bottom: 12px; line-height: 1.4;">
                                                    {{ $rel['title'] }}
                                                </a>
                                                <div style="margin-top: auto;">
                                                    <a href="{{ route('blog.details', ['slug' => $rel['slug']]) }}" style="font-size: 13px; font-weight: 700; color: var(--primary, #007E8A); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
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
