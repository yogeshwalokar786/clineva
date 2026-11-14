@extends('admin.layout')

@section('title', 'Edit Blog - ' . $blog->title)
@section('page_title', 'Edit Blog Post & SEO')

@section('content')

<style>
    .form-section-title {
        font-size: 16px;
        font-weight: 800;
        color: #0F172A;
        margin-bottom: 6px;
    }
    .form-section-sub {
        font-size: 13px;
        color: #64748B;
        margin-bottom: 20px;
    }
    .seo-card-box {
        background: #F8FAFC;
        border: 1.5px solid #CBD5E1;
        border-radius: 14px;
        padding: 24px;
        margin-top: 10px;
    }
    .serp-preview-box {
        background: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        padding: 18px 22px;
        margin-bottom: 24px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        max-width: 650px;
    }
    .serp-url {
        font-size: 12.5px;
        color: #202124;
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 4px;
    }
    .serp-url cite {
        font-style: normal;
        color: #4D5156;
    }
    .serp-title {
        font-size: 19px;
        line-height: 1.35;
        color: #1A0DAB;
        font-weight: 500;
        margin-bottom: 6px;
        cursor: pointer;
    }
    .serp-desc {
        font-size: 13.5px;
        line-height: 1.55;
        color: #4D5156;
    }
    .char-count {
        font-size: 11.5px;
        color: #64748B;
        text-align: right;
        margin-top: 4px;
    }
</style>

<form action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <a href="{{ route('admin.blogs.index') }}" class="btn-live-site" style="padding: 6px 14px; font-size: 12.5px;">
                &larr; Back to All Blogs
            </a>
            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" target="_blank" class="btn-live-site" style="padding: 6px 14px; font-size: 12.5px; color: var(--primary);">
                View Live Article &rarr;
            </a>
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary); padding: 10px 24px; font-size: 13.5px; font-weight: 700;">
                Update Blog Post &rarr;
            </button>
        </div>
    </div>

    @if ($errors->any())
        <div style="background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px;">
            <div style="font-weight: 800; margin-bottom: 6px;">Please correct the errors below:</div>
            <ul style="margin: 0; padding-left: 20px; font-size: 13px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <!-- Main Column (Left): Content & Sections -->
        <div class="col-lg-8">

            <!-- Basic Content Details -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div class="form-section-title">Article Details</div>
                <div class="form-section-sub">Primary headline, slug, and core summary for your clinical audience.</div>

                <div class="form-group" style="margin-bottom: 18px;">
                    <label class="form-label" style="font-weight: 700;">Article Headline / Title *</label>
                    <input type="text"
                           name="title"
                           id="postTitle"
                           value="{{ old('title', $blog->title) }}"
                           class="form-control"
                           required
                           style="font-size: 15px; font-weight: 600;">
                </div>

                <div class="form-group" style="margin-bottom: 18px;">
                    <label class="form-label" style="font-weight: 700;">URL Slug (Clean URL)</label>
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-size: 13px; color: #64748B; background: #F1F5F9; padding: 8px 12px; border-radius: 6px; border: 1px solid #CBD5E1;">
                            {{ url('/blog') }}/
                        </span>
                        <input type="text"
                               name="slug"
                               id="postSlug"
                               value="{{ old('slug', $blog->slug) }}"
                               class="form-control">
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 18px;">
                    <label class="form-label" style="font-weight: 700;">Executive Excerpt / Summary *</label>
                    <textarea name="excerpt"
                              id="postExcerpt"
                              rows="3"
                              class="form-control"
                              required>{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>
            </div>

            <!-- Structured Scientific Sections -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div class="form-section-title">Structured Scientific Content</div>
                <div class="form-section-sub">Format in clean sections for readability and search engine topical depth.</div>

                <!-- Section 1 -->
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; margin-bottom: 18px;">
                    <div class="form-group" style="margin-bottom: 12px;">
                        <label class="form-label" style="font-weight: 700;">Section 1 Heading</label>
                        <input type="text"
                               name="section1_title"
                               value="{{ old('section1_title', $blog->section1_title) }}"
                               class="form-control">
                    </div>
                    <div class="form-group" style="margin: 0;">
                        <label class="form-label" style="font-weight: 600; font-size: 13px;">Section 1 Body Text</label>
                        <textarea name="section1_body" rows="4" class="form-control">{{ old('section1_body', $blog->section1_body) }}</textarea>
                    </div>
                </div>

                <!-- Section 2 -->
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; margin-bottom: 18px;">
                    <div class="form-group" style="margin-bottom: 12px;">
                        <label class="form-label" style="font-weight: 700;">Section 2 Heading</label>
                        <input type="text"
                               name="section2_title"
                               value="{{ old('section2_title', $blog->section2_title) }}"
                               class="form-control">
                    </div>
                    <div class="form-group" style="margin: 0;">
                        <label class="form-label" style="font-weight: 600; font-size: 13px;">Section 2 Body Text</label>
                        <textarea name="section2_body" rows="4" class="form-control">{{ old('section2_body', $blog->section2_body) }}</textarea>
                    </div>
                </div>

                <!-- Expert Quote Callout -->
                <div class="form-group" style="margin-bottom: 18px;">
                    <label class="form-label" style="font-weight: 700;">Clinical Investigator Quote Callout</label>
                    <textarea name="quote_text" rows="2" class="form-control">{{ old('quote_text', $blog->quote_text) }}</textarea>
                </div>

                <!-- Section 3 -->
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 18px; margin-bottom: 18px;">
                    <div class="form-group" style="margin-bottom: 12px;">
                        <label class="form-label" style="font-weight: 700;">Section 3 Heading</label>
                        <input type="text"
                               name="section3_title"
                               value="{{ old('section3_title', $blog->section3_title) }}"
                               class="form-control">
                    </div>
                    <div class="form-group" style="margin: 0;">
                        <label class="form-label" style="font-weight: 600; font-size: 13px;">Section 3 Body Text</label>
                        <textarea name="section3_body" rows="4" class="form-control">{{ old('section3_body', $blog->section3_body) }}</textarea>
                    </div>
                </div>

                <!-- Executive Takeaways -->
                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-weight: 700;">Executive Key Takeaways (One per line)</label>
                    @php
                        $takeawaysVal = old('key_takeaways');
                        if ($takeawaysVal === null) {
                            $decoded = json_decode($blog->key_takeaways, true);
                            $takeawaysVal = is_array($decoded) ? implode("\n", $decoded) : $blog->key_takeaways;
                        }
                    @endphp
                    <textarea name="key_takeaways" rows="4" class="form-control">{{ $takeawaysVal }}</textarea>
                    <span style="font-size: 12px; color: #64748B; margin-top: 4px; display: block;">Each line renders as a green checkmark item on the article details page.</span>
                </div>
            </div>

            <!-- ADVANCED SEO ENGINE CARD -->
            <div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--primary);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
                    <div class="form-section-title" style="color: var(--primary); display: flex; align-items: center; gap: 8px;">
                        <i class="icon-magnifying-glass"></i> Advanced Search Engine Optimization (SEO)
                    </div>
                    <span style="font-size: 11.5px; font-weight: 700; background: #E6F4F6; color: var(--primary); padding: 3px 10px; border-radius: 999px;">
                        Google SERP & Schema.org
                    </span>
                </div>
                <div class="form-section-sub">Configure customized search metadata, social Open Graph tags, and Schema.org rich snippets.</div>

                <!-- Live Google Search SERP Preview -->
                <div class="serp-preview-box">
                    <div style="font-size: 11px; font-weight: 700; color: #64748B; text-transform: uppercase; margin-bottom: 8px; letter-spacing: 0.5px;">
                        Google Search Result Preview:
                    </div>
                    <div class="serp-url">
                        <span style="color: #202124; font-weight: 600;">clineva.in</span>
                        <span>&rsaquo;</span>
                        <cite id="serpUrlPreview">blog &rsaquo; {{ $blog->slug }}</cite>
                    </div>
                    <div class="serp-title" id="serpTitlePreview">
                        {{ old('meta_title', $blog->seo_meta_title) }}
                    </div>
                    <div class="serp-desc" id="serpDescPreview">
                        {{ Str::limit(old('meta_description', $blog->seo_meta_description), 155) }}
                    </div>
                </div>

                <div class="seo-card-box">
                    <div class="row">
                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Focus Keyword / Query</label>
                            <input type="text"
                                   name="focus_keyword"
                                   value="{{ old('focus_keyword', $blog->focus_keyword) }}"
                                   class="form-control">
                        </div>

                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Schema.org Rich Snippet Type</label>
                            <select name="schema_type" class="form-control">
                                <option value="MedicalScholarlyArticle" {{ old('schema_type', $blog->schema_type) === 'MedicalScholarlyArticle' ? 'selected' : '' }}>MedicalScholarlyArticle (Clinical Standard)</option>
                                <option value="BlogPosting" {{ old('schema_type', $blog->schema_type) === 'BlogPosting' ? 'selected' : '' }}>BlogPosting</option>
                                <option value="Article" {{ old('schema_type', $blog->schema_type) === 'Article' ? 'selected' : '' }}>General Article</option>
                                <option value="NewsArticle" {{ old('schema_type', $blog->schema_type) === 'NewsArticle' ? 'selected' : '' }}>NewsArticle</option>
                            </select>
                        </div>

                        <div class="col-12 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Custom SEO Meta Title</label>
                            <input type="text"
                                   name="meta_title"
                                   id="metaTitleInput"
                                   value="{{ old('meta_title', $blog->meta_title) }}"
                                   class="form-control"
                                   placeholder="Optimal length: 50-60 characters">
                            <div class="char-count" id="metaTitleCount">0 / 60 characters</div>
                        </div>

                        <div class="col-12 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Custom Meta Description</label>
                            <textarea name="meta_description"
                                      id="metaDescInput"
                                      rows="3"
                                      class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
                            <div class="char-count" id="metaDescCount">0 / 160 characters</div>
                        </div>

                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Meta Keywords</label>
                            <input type="text"
                                   name="meta_keywords"
                                   value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                                   class="form-control">
                        </div>

                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Custom Canonical URL</label>
                            <input type="url"
                                   name="canonical_url"
                                   value="{{ old('canonical_url', $blog->canonical_url) }}"
                                   class="form-control"
                                   placeholder="Defaults automatically to this post's clean live URL">
                        </div>

                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Social Open Graph (OG) Title</label>
                            <input type="text"
                                   name="og_title"
                                   value="{{ old('og_title', $blog->og_title) }}"
                                   class="form-control">
                        </div>

                        <div class="col-md-6 form-group" style="margin-bottom: 18px;">
                            <label class="form-label" style="font-weight: 700;">Twitter Card Title</label>
                            <input type="text"
                                   name="twitter_title"
                                   value="{{ old('twitter_title', $blog->twitter_title) }}"
                                   class="form-control">
                        </div>

                        <div class="col-12 form-group" style="margin: 0;">
                            <label class="form-label" style="font-weight: 700;">Robots Indexing Tag</label>
                            <input type="text"
                                   name="robots"
                                   value="{{ old('robots', $blog->robots) }}"
                                   class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sidebar Column (Right): Publishing & Media Settings -->
        <div class="col-lg-4">

            <!-- Publishing Settings Card -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div class="form-section-title">Publishing Settings</div>
                <div class="form-section-sub">Status and visibility settings.</div>

                <div class="form-group" style="margin-bottom: 16px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                        <label class="form-label" style="font-weight: 700; margin: 0;">Research Category *</label>
                        <a href="{{ route('admin.blog-categories.index') }}" target="_blank" style="font-size: 11.5px; color: var(--primary); font-weight: 600; text-decoration: underline;">
                            + Manage Categories
                        </a>
                    </div>
                    <select name="category" class="form-control" required style="font-size: 13.5px;">
                        @forelse($categories as $catSlug => $catLabel)
                            <option value="{{ $catSlug }}" {{ old('category', $blog->category) === $catSlug ? 'selected' : '' }}>
                                {{ $catLabel }}
                            </option>
                        @empty
                            <option value="" disabled selected>No categories found — please create one first</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 16px;">
                    <label class="form-label" style="font-weight: 700;">Estimated Read Time</label>
                    <input type="text"
                           name="read_time"
                           value="{{ old('read_time', $blog->read_time) }}"
                           class="form-control">
                </div>

                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 14px; margin-bottom: 18px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; margin-bottom: 10px; font-weight: 700; font-size: 13.5px;">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }} style="width: 17px; height: 17px;">
                        <span>Published Live</span>
                    </label>
                    <span style="font-size: 12px; color: #64748B; display: block; margin-left: 27px;">Uncheck to set status to draft.</span>
                </div>

                <div style="background: #FFFBEB; border: 1px solid #FDE68A; border-radius: 10px; padding: 14px; margin-bottom: 18px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; margin-bottom: 4px; font-weight: 700; font-size: 13.5px; color: #92400E;">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }} style="width: 17px; height: 17px;">
                        <span>Mark as Featured Lead Story</span>
                    </label>
                    <span style="font-size: 12px; color: #B45309; display: block; margin-left: 27px;">Featured article displays in the top showcase card on the blog home.</span>
                </div>

                <div style="font-size: 12px; color: #64748B;">
                    <div>Views Count: <strong>{{ number_format($blog->views_count) }}</strong></div>
                    <div>Published: <strong>{{ $blog->published_at ? $blog->published_at->format('d M Y, h:i A') : 'Draft' }}</strong></div>
                </div>
            </div>

            <!-- Featured Image Card -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div class="form-section-title">Cover Image</div>
                <div class="form-section-sub">Current cover image & replacement options.</div>

                @if($blog->featured_image)
                    <div style="margin-bottom: 16px; border-radius: 10px; overflow: hidden; height: 160px; background: #0B1E33;">
                        <img src="{{ Str::startsWith($blog->featured_image, 'http') ? $blog->featured_image : asset($blog->featured_image) }}"
                             alt="{{ $blog->title }}"
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                @endif

                <div class="form-group" style="margin-bottom: 16px;">
                    <label class="form-label" style="font-weight: 700;">Upload New Image</label>
                    <input type="file" name="featured_image_file" class="form-control" accept="image/*">
                </div>

                <div style="text-align: center; margin: 12px 0; font-size: 12px; color: #94A3B8; font-weight: 700;">&mdash; OR &mdash;</div>

                <div class="form-group" style="margin: 0;">
                    <label class="form-label" style="font-weight: 700;">Existing Asset Path</label>
                    <input type="text"
                           name="featured_image_path"
                           value="{{ old('featured_image_path', $blog->featured_image) }}"
                           class="form-control"
                           style="font-size: 12.5px;">
                </div>
            </div>

            <!-- Update Action -->
            <div class="content-card">
                <button type="submit" class="btn-live-site" style="width: 100%; background: var(--primary); color: #fff; border-color: var(--primary); padding: 12px; font-size: 14px; font-weight: 800; justify-content: center;">
                    Update Blog Post
                </button>
            </div>

        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const titleInput = document.getElementById('postTitle');
        const slugInput = document.getElementById('postSlug');
        const excerptInput = document.getElementById('postExcerpt');
        const metaTitleInput = document.getElementById('metaTitleInput');
        const metaDescInput = document.getElementById('metaDescInput');
        const serpTitlePreview = document.getElementById('serpTitlePreview');
        const serpDescPreview = document.getElementById('serpDescPreview');
        const serpUrlPreview = document.getElementById('serpUrlPreview');
        const metaTitleCount = document.getElementById('metaTitleCount');
        const metaDescCount = document.getElementById('metaDescCount');

        function updateSerp() {
            const titleVal = metaTitleInput.value.trim() || titleInput.value.trim() || 'Your Blog Title';
            const descVal = metaDescInput.value.trim() || excerptInput.value.trim() || 'Your post summary will appear here on Google search results...';
            const slugVal = slugInput.value.trim() || 'your-post-slug';

            serpTitlePreview.innerText = titleVal.includes('Clineva') ? titleVal : titleVal + ' | Clineva Research Laboratories';
            serpDescPreview.innerText = descVal.length > 155 ? descVal.substring(0, 155) + '...' : descVal;
            serpUrlPreview.innerText = 'blog \u203A ' + slugVal;

            const tLen = (metaTitleInput.value || '').length;
            metaTitleCount.innerText = tLen + ' / 60 characters';
            metaTitleCount.style.color = tLen > 60 ? '#DC2626' : (tLen >= 40 ? '#059669' : '#64748B');

            const dLen = (metaDescInput.value || '').length;
            metaDescCount.innerText = dLen + ' / 160 characters';
            metaDescCount.style.color = dLen > 160 ? '#DC2626' : (dLen >= 120 ? '#059669' : '#64748B');
        }

        titleInput.addEventListener('input', updateSerp);
        slugInput.addEventListener('input', updateSerp);
        excerptInput.addEventListener('input', updateSerp);
        metaTitleInput.addEventListener('input', updateSerp);
        metaDescInput.addEventListener('input', updateSerp);

        updateSerp();
    });
</script>

@endsection
