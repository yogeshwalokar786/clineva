@extends('admin.layout')

@section('title', ($isEdit ? 'Edit Policy: ' . $policy->title : 'Create New Policy Page') . ' - Admin Console')
@section('page_title', $isEdit ? 'Edit Policy Page' : 'New Policy Page')

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
            min-height: 440px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 15px !important;
            line-height: 1.8 !important;
            color: #1E293B !important;
            background: #FFFFFF !important;
            padding: 24px !important;
        }
    </style>
@endsection

@section('content')

<div style="max-width: 1000px; margin: 0 auto;">

    <form action="{{ $isEdit ? route('admin.policy-pages.update', $policy) : route('admin.policy-pages.store') }}" method="POST">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <a href="{{ route('admin.policy-pages.index') }}" class="btn-admin btn-admin-secondary">
                    &larr; Back to Policies
                </a>
                @if($isEdit)
                    <a href="{{ route('policy.show', ['slug' => $policy->slug]) }}" target="_blank" class="btn-admin btn-admin-secondary">
                        <i class="icon-arrow-right"></i> View Live
                    </a>
                @endif
            </div>
            <div>
                <button type="submit" class="btn-admin btn-admin-primary" style="padding: 10px 24px; font-size: 14px; font-weight: 700;">
                    {{ $isEdit ? 'Save Policy Changes' : 'Publish Policy Page' }} &rarr;
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

        <!-- Document Details Card -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div class="form-section-title">Document Title & Clean URL</div>
            <div class="form-section-sub">Define the official document title and web permalink.</div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="form-label">Policy Title *</label>
                        <input type="text"
                               name="title"
                               id="policyTitleInput"
                               value="{{ old('title', $policy->title) }}"
                               class="form-control"
                               placeholder="e.g. Privacy Policy & Clinical Data Governance"
                               required
                               style="font-size: 15px; font-weight: 600;">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">URL Slug (Permalink) *</label>
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <span style="font-size: 13px; color: #64748B; background: #F1F5F9; padding: 9px 12px; border-radius: 8px; border: 1px solid #CBD5E1; white-space: nowrap;">
                                /policy/
                            </span>
                            <input type="text"
                                   name="slug"
                                   id="policySlugInput"
                                   value="{{ old('slug', $policy->slug) }}"
                                   class="form-control"
                                   placeholder="privacy-policy">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WYSIWYG Summernote Content Card -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; flex-wrap: wrap; gap: 10px;">
                <div>
                    <div class="form-section-title" style="margin-bottom: 2px;">Policy Body Content (WYSIWYG Editor) *</div>
                    <div class="form-section-sub" style="margin: 0;">Author detailed policy clauses, numbered sections, bullet points, tables, and links.</div>
                </div>
                <button type="button" onclick="openMediaManagerForPolicy()" class="btn-admin btn-admin-primary" style="padding: 7px 14px; font-size: 12.5px;">
                    <i class="icon-camera"></i> Insert Media
                </button>
            </div>

            <div class="form-group" style="margin: 0;">
                <textarea name="content" id="policyContentEditor" class="form-control">{{ old('content', $policy->content) }}</textarea>
            </div>
        </div>

        <!-- SEO Metadata & Visibility Card -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div class="form-section-title">Search Engine Optimization & Visibility</div>
            <div class="form-section-sub">Configure how this legal page appears on Google search results and navigation.</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Custom Meta Title</label>
                        <input type="text"
                               name="meta_title"
                               id="metaTitleInput"
                               value="{{ old('meta_title', $policy->meta_title) }}"
                               class="form-control"
                               placeholder="Defaults to Policy Title | Clineva Research Laboratories">
                        <div class="char-count" id="metaTitleCount">0 / 60 characters</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description"
                                  id="metaDescInput"
                                  rows="2"
                                  class="form-control"
                                  placeholder="Concise summary for search engine indexing...">{{ old('meta_description', $policy->meta_description) }}</textarea>
                        <div class="char-count" id="metaDescCount">0 / 160 characters</div>
                    </div>
                </div>
            </div>

            <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 14px 18px; margin-top: 10px;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; font-weight: 700; font-size: 14px; color: #0F172A;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $policy->is_active ?? true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                    <span>Active & Publicly Accessible</span>
                </label>
                <span class="form-text" style="margin-left: 28px;">When unchecked, page will return a draft status to non-admin visitors.</span>
            </div>
        </div>

        <!-- Submit Actions -->
        <div class="content-card" style="padding: 20px; display: flex; justify-content: flex-end; gap: 12px;">
            <a href="{{ route('admin.policy-pages.index') }}" class="btn-admin btn-admin-secondary" style="padding: 10px 20px;">
                Cancel
            </a>
            <button type="submit" class="btn-admin btn-admin-primary" style="padding: 10px 28px; font-size: 14.5px; font-weight: 800;">
                {{ $isEdit ? 'Save Policy Changes' : 'Publish Policy Page' }}
            </button>
        </div>

    </form>

</div>

<!-- Universal Media Manager Modal -->
@include('admin.media.modal')

@endsection

@section('scripts')
<!-- jQuery & Summernote Lite -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const titleInput = document.getElementById('policyTitleInput');
        const slugInput = document.getElementById('policySlugInput');
        let userEditedSlug = Boolean('{{ $isEdit }}');

        function slugify(text) {
            return text.toString().toLowerCase().trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }

        if (titleInput && slugInput && !userEditedSlug) {
            titleInput.addEventListener('input', function () {
                slugInput.value = slugify(titleInput.value);
            });
            slugInput.addEventListener('input', function () {
                userEditedSlug = slugInput.value.trim().length > 0;
            });
        }

        const metaTitleInput = document.getElementById('metaTitleInput');
        const metaDescInput = document.getElementById('metaDescInput');
        const metaTitleCount = document.getElementById('metaTitleCount');
        const metaDescCount = document.getElementById('metaDescCount');

        function updateCounts() {
            if (metaTitleInput && metaTitleCount) {
                const len = metaTitleInput.value.length;
                metaTitleCount.innerText = len + ' / 60 characters';
                metaTitleCount.style.color = len > 60 ? '#DC2626' : '#64748B';
            }
            if (metaDescInput && metaDescCount) {
                const dLen = metaDescInput.value.length;
                metaDescCount.innerText = dLen + ' / 160 characters';
                metaDescCount.style.color = dLen > 160 ? '#DC2626' : '#64748B';
            }
        }

        if (metaTitleInput) metaTitleInput.addEventListener('input', updateCounts);
        if (metaDescInput) metaDescInput.addEventListener('input', updateCounts);
        updateCounts();

        // Initialize Summernote Lite
        $('#policyContentEditor').summernote({
            placeholder: 'Author detailed policy articles, regulatory declarations, and legal clauses...',
            tabsize: 2,
            height: 460,
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
                            openMediaManagerForPolicy();
                        }
                    });
                    return button.render();
                }
            }
        });
    });

    function openMediaManagerForPolicy() {
        openMediaManager(function(url, path, item) {
            $('#policyContentEditor').summernote('insertImage', url, item ? item.name : 'Policy Asset');
        });
    }
</script>
@endsection
