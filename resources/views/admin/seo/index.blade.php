@extends('admin.layout')

@section('title', 'Page SEO & Meta Management - Admin Console')
@section('page_title', 'All Pages Dynamic SEO')

@section('content')

<style>
    .seo-tab-btn {
        padding: 12px 18px;
        background: #F1F5F9;
        color: #475569;
        border: 1px solid #E2E8F0;
        border-radius: 10px;
        font-weight: 700;
        font-size: 13.5px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
        text-decoration: none;
    }
    .seo-tab-btn:hover {
        background: #E2E8F0;
        color: #0F172A;
    }
    .seo-tab-btn.active {
        background: #0077C8;
        color: #FFFFFF;
        border-color: #0077C8;
        box-shadow: 0 4px 12px rgba(0, 119, 200, 0.25);
    }
    .google-serp-card {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        padding: 18px 22px;
        margin-bottom: 24px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        font-family: Arial, sans-serif;
    }
    .google-serp-header {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: #202124;
        margin-bottom: 4px;
    }
    .google-serp-title {
        font-size: 19px;
        font-weight: 400;
        color: #1a0dab;
        line-height: 1.3;
        margin-bottom: 4px;
        cursor: pointer;
        word-break: break-word;
    }
    .google-serp-desc {
        font-size: 13.5px;
        color: #4d5156;
        line-height: 1.55;
        word-break: break-word;
    }
    .char-counter {
        font-size: 11.5px;
        font-weight: 700;
        float: right;
    }
    .char-counter.good {
        color: #10B981;
    }
    .char-counter.warn {
        color: #F59E0B;
    }
    .char-counter.bad {
        color: #EF4444;
    }
</style>

<div style="max-width: 1050px; margin: 0 auto;">

    <!-- Header Intro -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0 0 4px 0;">All Pages Dynamic SEO Manager</h2>
            <p style="font-size: 13.5px; color: #64748B; margin: 0;">Customize search engine meta tags, OpenGraph social previews, canonical URLs, and robots indexing per page.</p>
        </div>
        <div>
            <a href="{{ route('sitemap') }}" target="_blank" class="btn-admin btn-admin-secondary">
                <i class="icon-file-word"></i> View XML Sitemap
            </a>
        </div>
    </div>

    @if($errors->any())
        <div style="background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px;">
            <div style="font-weight: 800; margin-bottom: 6px;">Please correct the errors below:</div>
            <ul style="margin: 0; padding-left: 20px; font-size: 13px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.seo.update') }}" method="POST">
        @csrf

        <!-- Tabs Navigation -->
        <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 24px;">
            @foreach($pages as $key => $info)
                <button type="button" class="seo-tab-btn {{ $loop->first ? 'active' : '' }}" onclick="switchSeoTab('tab_{{ $key }}', this)">
                    <i class="{{ $info['icon'] }}"></i>
                    <span>{{ $info['name'] }}</span>
                </button>
            @endforeach
            <button type="button" class="seo-tab-btn" onclick="switchSeoTab('tab_global', this)">
                <i class="icon-share"></i>
                <span>Global Defaults</span>
            </button>
        </div>

        <!-- Page Specific Panels -->
        @foreach($pages as $key => $info)
            @php
                $seo = \App\Models\Setting::getPageSeo($key);
                $pTitle = old("seo_{$key}_title", $settings["seo_{$key}_title"] ?? $seo['title']);
                $pDesc = old("seo_{$key}_description", $settings["seo_{$key}_description"] ?? $seo['description']);
                $pKeys = old("seo_{$key}_keywords", $settings["seo_{$key}_keywords"] ?? $seo['keywords']);
                $pCanon = old("seo_{$key}_canonical", $settings["seo_{$key}_canonical"] ?? '');
                $pOgTitle = old("seo_{$key}_og_title", $settings["seo_{$key}_og_title"] ?? '');
                $pOgDesc = old("seo_{$key}_og_description", $settings["seo_{$key}_og_description"] ?? '');
            @endphp

            <div id="tab_{{ $key }}" class="seo-panel" style="{{ $loop->first ? '' : 'display: none;' }}">
                
                <!-- Google SERP Live Preview Card -->
                <div class="google-serp-card">
                    <div style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px; color: #64748B; margin-bottom: 10px;">
                        Google Search Live Snippet Preview (Desktop &amp; Mobile)
                    </div>
                    <div class="google-serp-header">
                        <img src="{{ asset('image/logo/favicon.png') }}" style="width: 16px; height: 16px; border-radius: 50%;" alt="Favicon">
                        <span>Clineva Research Laboratories</span>
                        <span style="color: #5f6368;">› {{ str_replace(url('/'), '', $info['url']) ?: '/' }}</span>
                    </div>
                    <div class="google-serp-title" id="serp_title_{{ $key }}">
                        {{ $pTitle }}
                    </div>
                    <div class="google-serp-desc" id="serp_desc_{{ $key }}">
                        {{ $pDesc }}
                    </div>
                </div>

                <div class="content-card" style="padding: 28px; margin-bottom: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 18px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <div class="form-section-title" style="margin: 0 0 4px;">{{ $info['name'] }} Meta Data</div>
                            <div class="form-section-sub" style="margin: 0;">{{ $info['desc'] }} (Target URL: <a href="{{ $info['url'] }}" target="_blank" style="color: #0077C8;">{{ $info['url'] }}</a>)</div>
                        </div>
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label class="form-label">
                            Meta Title
                            <span class="char-counter" id="cnt_title_{{ $key }}">0 / 60</span>
                        </label>
                        <input type="text" 
                               name="seo_{{ $key }}_title" 
                               id="input_title_{{ $key }}" 
                               value="{{ $pTitle }}" 
                               class="form-control" 
                               placeholder="Page title displayed in search engines..."
                               oninput="updateSerpPreview('{{ $key }}')">
                        <span class="form-text">Recommended: 50–60 characters. Appears in browser tab and search results.</span>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label class="form-label">
                            Meta Description
                            <span class="char-counter" id="cnt_desc_{{ $key }}">0 / 160</span>
                        </label>
                        <textarea name="seo_{{ $key }}_description" 
                                  id="input_desc_{{ $key }}" 
                                  rows="3" 
                                  class="form-control" 
                                  placeholder="Compelling page summary displayed below search results..."
                                  oninput="updateSerpPreview('{{ $key }}')">{{ $pDesc }}</textarea>
                        <span class="form-text">Recommended: 140–160 characters. Higher click-through rate when concise and relevant.</span>
                    </div>

                    <!-- Meta Keywords -->
                    <div class="form-group">
                        <label class="form-label">Meta Focus Keywords</label>
                        <input type="text" 
                               name="seo_{{ $key }}_keywords" 
                               value="{{ $pKeys }}" 
                               class="form-control" 
                               placeholder="clinical research, CRO India, BA/BE, trials (comma-separated)">
                        <span class="form-text">Separate keywords with commas.</span>
                    </div>

                    <!-- Canonical URL Override -->
                    <div class="form-group">
                        <label class="form-label">Canonical URL (Optional Override)</label>
                        <input type="url" 
                               name="seo_{{ $key }}_canonical" 
                               value="{{ $pCanon }}" 
                               class="form-control" 
                               placeholder="{{ $info['url'] }}">
                        <span class="form-text">Leave blank to use default page URL: {{ $info['url'] }}</span>
                    </div>

                    <!-- OpenGraph Overrides -->
                    <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 20px; margin-top: 20px;">
                        <div style="font-weight: 700; color: #0F172A; font-size: 14px; margin-bottom: 4px;">Social Media Preview (OpenGraph / Twitter)</div>
                        <div style="font-size: 12.5px; color: #64748B; margin-bottom: 16px;">Optional custom text when this page is shared on LinkedIn, WhatsApp, X/Twitter, or Facebook.</div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">OG / Social Title</label>
                                    <input type="text" name="seo_{{ $key }}_og_title" value="{{ $pOgTitle }}" class="form-control" placeholder="Defaults to Meta Title if blank">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">OG / Social Description</label>
                                    <input type="text" name="seo_{{ $key }}_og_description" value="{{ $pOgDesc }}" class="form-control" placeholder="Defaults to Meta Description if blank">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

        <!-- Global Defaults Tab -->
        <div id="tab_global" class="seo-panel" style="display: none;">
            <div class="content-card" style="padding: 28px; margin-bottom: 24px;">
                <div class="form-section-title" style="margin: 0 0 4px;">Global Crawler &amp; Sharing Defaults</div>
                <div class="form-section-sub">Settings applied universally across all standard and fallback views.</div>

                <div class="form-group">
                    <label class="form-label">Default Robots Meta Directive</label>
                    <input type="text" name="seo_global_robots" value="{{ old('seo_global_robots', $settings['seo_global_robots'] ?? 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1') }}" class="form-control">
                    <span class="form-text">Standard directive telling search engines to index and display snippet cards.</span>
                </div>

                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Global Social Share Image (OG:Image)</label>
                    <input type="text" name="seo_global_og_image" value="{{ old('seo_global_og_image', $settings['seo_global_og_image'] ?? '/image/logo/logo-main.png') }}" class="form-control">
                    <span class="form-text">Default banner image displayed on LinkedIn, Facebook, and Twitter shares.</span>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="content-card" style="padding: 20px; display: flex; justify-content: flex-end; position: sticky; bottom: 20px; z-index: 10; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
            <button type="submit" class="btn-admin btn-admin-primary" style="padding: 12px 32px; font-size: 15px; font-weight: 800;">
                Save All Pages SEO Configurations
            </button>
        </div>

    </form>

</div>

<script>
function switchSeoTab(tabId, btn) {
    document.querySelectorAll('.seo-panel').forEach(function(el) {
        el.style.display = 'none';
    });
    document.querySelectorAll('.seo-tab-btn').forEach(function(el) {
        el.classList.remove('active');
    });

    var target = document.getElementById(tabId);
    if (target) {
        target.style.display = 'block';
    }
    if (btn) {
        btn.classList.add('active');
    }
}

function updateSerpPreview(pageKey) {
    var titleInput = document.getElementById('input_title_' + pageKey);
    var descInput = document.getElementById('input_desc_' + pageKey);
    var titlePreview = document.getElementById('serp_title_' + pageKey);
    var descPreview = document.getElementById('serp_desc_' + pageKey);
    var titleCnt = document.getElementById('cnt_title_' + pageKey);
    var descCnt = document.getElementById('cnt_desc_' + pageKey);

    if (titleInput && titlePreview) {
        var tLen = titleInput.value.trim().length;
        titlePreview.textContent = titleInput.value.trim() || 'Page Title Here';
        titleCnt.textContent = tLen + ' / 60';
        titleCnt.className = 'char-counter ' + (tLen > 65 ? 'bad' : (tLen >= 45 ? 'good' : 'warn'));
    }

    if (descInput && descPreview) {
        var dLen = descInput.value.trim().length;
        descPreview.textContent = descInput.value.trim() || 'Page description snippet appears here...';
        descCnt.textContent = dLen + ' / 160';
        descCnt.className = 'char-counter ' + (dLen > 165 ? 'bad' : (dLen >= 120 ? 'good' : 'warn'));
    }
}

document.addEventListener('DOMContentLoaded', function() {
    ['home', 'about', 'services', 'careers', 'blog', 'contact'].forEach(function(k) {
        updateSerpPreview(k);
    });
});
</script>

@endsection
