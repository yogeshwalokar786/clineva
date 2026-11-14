@extends('admin.layout')

@section('title', 'Edit Blog - ' . $blog->title)
@section('page_title', 'Edit Blog Post & SEO')

@section('styles')
    <!-- Summernote Lite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editor.note-frame {
            border: 1px solid #CBD5E1 !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            box-shadow: none !important;
        }
        .note-toolbar {
            background: #F8FAFC !important;
            border-bottom: 1px solid #E2E8F0 !important;
            padding: 8px 10px !important;
        }
        .note-btn {
            background: #FFFFFF !important;
            border: 1px solid #CBD5E1 !important;
            border-radius: 6px !important;
            padding: 5px 9px !important;
            font-size: 13px !important;
            color: #1E293B !important;
        }
        .note-btn:hover {
            background: #F1F5F9 !important;
            color: #0077C8 !important;
        }
        .note-editable {
            min-height: 380px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 15px !important;
            line-height: 1.8 !important;
            color: #1E293B !important;
            background: #FFFFFF !important;
            padding: 22px !important;
        }
    </style>
@endsection

@section('content')

<form action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <a href="{{ route('admin.blogs.index') }}" class="btn-admin btn-admin-secondary" style="padding: 7px 16px; font-size: 13px;">
                &larr; Back to All Blogs
            </a>
            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" target="_blank" class="btn-admin btn-admin-secondary" style="padding: 7px 16px; font-size: 13px;">
                <i class="icon-arrow-right"></i> View Live
            </a>
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn-admin btn-admin-primary" style="padding: 10px 24px; font-size: 13.5px; font-weight: 700;">
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
                    <label class="form-label">Article Headline / Title *</label>
                    <input type="text"
                           name="title"
                           id="postTitle"
                           value="{{ old('title', $blog->title) }}"
                           class="form-control"
                           required
                           style="font-size: 15px; font-weight: 600;">
                </div>

                <div class="form-group" style="margin-bottom: 18px;">
                    <label class="form-label">URL Slug (Clean URL)</label>
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <span style="font-size: 13px; color: #64748B; background: #F1F5F9; padding: 9px 12px; border-radius: 8px; border: 1px solid #CBD5E1; white-space: nowrap;">
                            {{ url('/blog') }}/
                        </span>
                        <input type="text"
                               name="slug"
                               id="postSlug"
                               value="{{ old('slug', $blog->slug) }}"
                               class="form-control">
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Executive Excerpt / Summary *</label>
                    <textarea name="excerpt"
                              id="postExcerpt"
                              rows="3"
                              class="form-control"
                              required>{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>
            </div>

            <!-- WYSIWYG Full Article Rich Editor -->
            <div class="content-card" style="margin-bottom: 24px;">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <div class="form-section-title" style="margin-bottom: 2px;">Article Body Content (WYSIWYG Editor)</div>
                        <div class="form-section-sub" style="margin: 0;">Rich text editor with headings, tables, blockquotes, media manager, and live HTML support.</div>
                    </div>
                    <button type="button" onclick="openMediaManagerForEditor()" class="btn-admin btn-admin-primary" style="padding: 7px 14px; font-size: 12.5px;">
                        <i class="icon-camera"></i> Insert Media from Library
                    </button>
                </div>

                <div class="form-group" style="margin: 0;">
                    <textarea name="content" id="postContent" class="form-control">{{ old('content', $blog->content) }}</textarea>
                </div>
            </div>

            <!-- Optional Structured Scientific Sections & Callouts -->
            <div class="content-card" style="margin-bottom: 24px;">
                <details {{ old('section1_title', $blog->section1_title) || old('key_takeaways', $blog->key_takeaways) ? 'open' : '' }}>
                    <summary style="font-weight: 700; font-size: 15px; color: #0F172A; cursor: pointer; user-select: none; display: flex; align-items: center; justify-content: space-between;">
                        <span>+ Clinical Protocol Highlights & Structured Callouts (Optional)</span>
                        <span style="font-size: 12px; color: #64748B; font-weight: 500;">Takeaways, quote box, sub-sections</span>
                    </summary>

                    <div style="margin-top: 20px; padding-top: 18px; border-top: 1px solid #E2E8F0;">
                        <!-- Executive Takeaways -->
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label class="form-label">Executive Key Takeaways (One item per line)</label>
                            <textarea name="key_takeaways" rows="3" class="form-control">{{ old('key_takeaways', $blog->key_takeaways) }}</textarea>
                            <span class="form-text">Each line renders as a green checkmark clinical takeaway on the published post.</span>
                        </div>

                        <!-- Expert Quote Callout -->
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label class="form-label">Clinical Investigator Quote Callout</label>
                            <textarea name="quote_text" rows="2" class="form-control">{{ old('quote_text', $blog->quote_text) }}</textarea>
                        </div>

                        <!-- Section 1 -->
                        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 16px; margin-bottom: 16px;">
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label class="form-label">Section 1 Subheading</label>
                                <input type="text" name="section1_title" value="{{ old('section1_title', $blog->section1_title) }}" class="form-control">
                            </div>
                            <div class="form-group" style="margin: 0;">
                                <label class="form-label" style="font-size: 12.5px; font-weight: 600;">Section 1 Body Text</label>
                                <textarea name="section1_body" rows="3" class="form-control">{{ old('section1_body', $blog->section1_body) }}</textarea>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 16px; margin-bottom: 16px;">
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label class="form-label">Section 2 Subheading</label>
                                <input type="text" name="section2_title" value="{{ old('section2_title', $blog->section2_title) }}" class="form-control">
                            </div>
                            <div class="form-group" style="margin: 0;">
                                <label class="form-label" style="font-size: 12.5px; font-weight: 600;">Section 2 Body Text</label>
                                <textarea name="section2_body" rows="3" class="form-control">{{ old('section2_body', $blog->section2_body) }}</textarea>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 16px;">
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label class="form-label">Section 3 Subheading</label>
                                <input type="text" name="section3_title" value="{{ old('section3_title', $blog->section3_title) }}" class="form-control">
                            </div>
                            <div class="form-group" style="margin: 0;">
                                <label class="form-label" style="font-size: 12.5px; font-weight: 600;">Section 3 Body Text</label>
                                <textarea name="section3_body" rows="3" class="form-control">{{ old('section3_body', $blog->section3_body) }}</textarea>
                            </div>
                        </div>
                    </div>
                </details>
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

                <!-- Google SERP Live Snippet Preview Box -->
                <div class="serp-preview-box">
                    <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #5F6368; margin-bottom: 8px;">
                        Google Search Result Preview (Desktop)
                    </div>
                    <div class="serp-url">
                        <span>{{ config('app.url', 'https://clineva.in') }}</span>
                        <cite id="serpUrlPreview">› blog › {{ $blog->slug }}</cite>
                    </div>
                    <div class="serp-title" id="serpTitlePreview">
                        {{ $blog->seo_meta_title }}
                    </div>
                    <div class="serp-snippet" id="serpSnippetPreview">
                        {{ $blog->seo_meta_description }}
                    </div>
                </div>

                <!-- Primary Keyword & Meta Title -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Focus SEO Keyword</label>
                            <input type="text"
                                   name="focus_keyword"
                                   id="focusKeywordInput"
                                   value="{{ old('focus_keyword', $blog->focus_keyword) }}"
                                   class="form-control"
                                   placeholder="e.g. ICH GCP E6 R3, Bioequivalence CRO">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Custom Meta Title</label>
                            <input type="text"
                                   name="meta_title"
                                   id="metaTitleInput"
                                   value="{{ old('meta_title', $blog->meta_title) }}"
                                   class="form-control">
                            <div class="char-count" id="metaTitleCount">0 / 60 characters</div>
                        </div>
                    </div>
                </div>

                <!-- Meta Description -->
                <div class="form-group">
                    <label class="form-label">Meta Description (Search Engines & AI Overviews)</label>
                    <textarea name="meta_description"
                              id="metaDescInput"
                              rows="3"
                              class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    <div class="char-count" id="metaDescCount">0 / 160 characters</div>
                </div>

                <!-- Meta Keywords & Canonical -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Meta Keywords (Comma-separated)</label>
                            <input type="text"
                                   name="meta_keywords"
                                   value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Custom Canonical URL</label>
                            <input type="url"
                                   name="canonical_url"
                                   value="{{ old('canonical_url', $blog->canonical_url) }}"
                                   class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Social Open Graph & Schema Type -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Social Share Title (og:title)</label>
                            <input type="text"
                                   name="og_title"
                                   value="{{ old('og_title', $blog->og_title) }}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Structured Data Schema Type</label>
                            <select name="schema_type" class="form-control">
                                <option value="MedicalScholarlyArticle" {{ old('schema_type', $blog->schema_type) === 'MedicalScholarlyArticle' ? 'selected' : '' }}>MedicalScholarlyArticle (Clinical/Scientific)</option>
                                <option value="Article" {{ old('schema_type', $blog->schema_type) === 'Article' ? 'selected' : '' }}>Standard Article</option>
                                <option value="BlogPosting" {{ old('schema_type', $blog->schema_type) === 'BlogPosting' ? 'selected' : '' }}>BlogPosting</option>
                                <option value="TechArticle" {{ old('schema_type', $blog->schema_type) === 'TechArticle' ? 'selected' : '' }}>Technical Article (Bioanalytical/Methodology)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Social Share Description (og:description)</label>
                            <textarea name="og_description" rows="2" class="form-control">{{ old('og_description', $blog->og_description) }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Robots Directive</label>
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
                <div class="form-section-sub">Status, metrics, and category settings.</div>

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
                    <label class="form-label">Estimated Read Time</label>
                    <input type="text"
                           name="read_time"
                           value="{{ old('read_time', $blog->read_time) }}"
                           class="form-control">
                </div>

                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 14px; margin-bottom: 18px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; margin-bottom: 10px; font-weight: 700; font-size: 13.5px;">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }} style="width: 17px; height: 17px; accent-color: var(--primary);">
                        <span>Published Live</span>
                    </label>
                    <span style="font-size: 12px; color: #64748B; display: block; margin-left: 27px;">Uncheck to set status to draft.</span>
                </div>

                <div style="background: #FFFBEB; border: 1px solid #FDE68A; border-radius: 10px; padding: 14px; margin-bottom: 18px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; margin-bottom: 4px; font-weight: 700; font-size: 13.5px; color: #92400E;">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }} style="width: 17px; height: 17px; accent-color: #D97706;">
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

                <!-- Live Preview Thumbnail -->
                <div style="margin-bottom: 16px; border-radius: 12px; overflow: hidden; border: 1.5px solid #CBD5E1; background: #0B192C; height: 160px; display: flex; align-items: center; justify-content: center; position: relative;">
                    <img id="coverImagePreview"
                         src="{{ Str::startsWith($blog->featured_image, 'http') ? $blog->featured_image : asset($blog->featured_image) }}"
                         alt="{{ $blog->title }}"
                         style="width: 100%; height: 100%; object-fit: cover;">
                    <span id="coverBadge" style="position: absolute; bottom: 8px; right: 8px; font-size: 10.5px; font-weight: 700; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 8px; border-radius: 4px;">Active Cover</span>
                </div>

                <div class="form-group" style="margin-bottom: 14px;">
                    <button type="button" onclick="openMediaManagerForCover()" class="btn-admin btn-admin-primary" style="width: 100%; justify-content: center; padding: 10px; font-size: 13.5px; font-weight: 700;">
                        <i class="icon-camera"></i> Choose from Media Library
                    </button>
                </div>

                <div style="text-align: center; margin: 10px 0; font-size: 11.5px; color: #94A3B8; font-weight: 700;">&mdash; OR UPLOAD FROM DEVICE &mdash;</div>

                <div class="form-group" style="margin-bottom: 12px;">
                    <input type="file" name="featured_image_file" id="coverFileInput" class="form-control" accept="image/*" onchange="previewLocalCoverImage(this)">
                    <span class="form-text">Upload new file to replace cover (Max 10MB).</span>
                </div>

                <input type="hidden" name="featured_image_path" id="featuredImagePathInput" value="{{ old('featured_image_path', $blog->featured_image) }}">
            </div>

            <!-- Update Action -->
            <div class="content-card">
                <button type="submit" class="btn-admin btn-admin-primary" style="width: 100%; padding: 14px; font-size: 14.5px; font-weight: 800; justify-content: center;">
                    Update Blog Post
                </button>
            </div>

        </div>
    </div>
</form>

<!-- Include Universal Media Manager Modal -->
@include('admin.media.modal')

@endsection

@section('scripts')
<!-- jQuery (Local) & Summernote Lite JS (CDN) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const titleInput = document.getElementById('postTitle');
        const slugInput = document.getElementById('postSlug');
        const postExcerpt = document.getElementById('postExcerpt');
        const metaTitleInput = document.getElementById('metaTitleInput');
        const metaDescInput = document.getElementById('metaDescInput');
        const serpTitlePreview = document.getElementById('serpTitlePreview');
        const serpDescPreview = document.getElementById('serpDescPreview');
        const serpUrlPreview = document.getElementById('serpUrlPreview');
        const metaTitleCount = document.getElementById('metaTitleCount');
        const metaDescCount = document.getElementById('metaDescCount');

        function updateSerp() {
            const titleVal = metaTitleInput.value.trim() || titleInput.value.trim() || 'Your Blog Title';
            const descVal = metaDescInput.value.trim() || postExcerpt.value.trim() || 'Your post summary will appear here on Google search results...';
            const slugVal = slugInput.value.trim() || 'your-post-slug';

            serpTitlePreview.innerText = titleVal.includes('Clineva') ? titleVal : titleVal + ' | Clineva Research Laboratories';
            serpDescPreview.innerText = descVal.length > 155 ? descVal.substring(0, 155) + '...' : descVal;
            serpUrlPreview.innerText = '› blog › ' + slugVal;

            const tLen = (metaTitleInput.value || '').length;
            metaTitleCount.innerText = tLen + ' / 60 characters';
            metaTitleCount.style.color = tLen > 60 ? '#DC2626' : (tLen >= 40 ? '#059669' : '#64748B');

            const dLen = (metaDescInput.value || '').length;
            metaDescCount.innerText = dLen + ' / 160 characters';
            metaDescCount.style.color = dLen > 160 ? '#DC2626' : (dLen >= 120 ? '#059669' : '#64748B');
        }

        [titleInput, slugInput, postExcerpt, metaTitleInput, metaDescInput].forEach(el => {
            if (el) el.addEventListener('input', updateSerp);
        });
        updateSerp();

        // Initialize Summernote Lite
        $('#postContent').summernote({
            placeholder: 'Author detailed scientific breakdown, methodologies, findings, regulatory citations, tables, and images...',
            tabsize: 2,
            height: 420,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['custom', ['mediaBtn']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            buttons: {
                mediaBtn: function (context) {
                    const ui = $.summernote.ui;
                    const button = ui.button({
                        contents: '<i class="icon-camera" style="color: #0077C8; font-weight: bold;"></i> Media Library',
                        tooltip: 'Insert image from Media Manager',
                        click: function () {
                            openMediaManagerForEditor();
                        }
                    });
                    return button.render();
                }
            },
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        uploadEditorImageFile(files[i]);
                    }
                }
            }
        });
    });

    // Editor Image Insertion via Media Manager
    function openMediaManagerForEditor() {
        openMediaManager(function(url, path, item) {
            $('#postContent').summernote('insertImage', url, item ? item.name : 'Clinical Image');
        });
    }

    // Direct drag-and-drop AJAX upload for Summernote
    function uploadEditorImageFile(file) {
        const data = new FormData();
        data.append('file', file);
        data.append('_token', '{{ csrf_token() }}');

        $.ajax({
            url: "{{ route('admin.media.upload') }}",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(res) {
                if (res.success && res.url) {
                    $('#postContent').summernote('insertImage', res.url, res.name);
                } else {
                    alert('Upload failed: ' + (res.message || 'Unknown error'));
                }
            },
            error: function(err) {
                alert('Network error while uploading image to editor.');
            }
        });
    }

    // Cover Image Selection via Media Manager
    function openMediaManagerForCover() {
        openMediaManager(function(url, path, item) {
            document.getElementById('featuredImagePathInput').value = path;
            document.getElementById('coverImagePreview').src = url;
            document.getElementById('coverBadge').innerText = 'Selected: ' + (item ? item.name : path);
        });
    }

    // Local Cover Image Preview
    function previewLocalCoverImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('coverImagePreview').src = e.target.result;
                document.getElementById('coverBadge').innerText = 'Local Upload: ' + input.files[0].name;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
