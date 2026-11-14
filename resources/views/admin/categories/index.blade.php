@extends('admin.layout')

@section('title', 'Blog Categories')

@section('content')
<style>
    .cat-grid-layout {
        display: grid;
        grid-template-columns: 360px 1fr;
        gap: 24px;
        align-items: start;
    }
    @media (max-width: 991px) {
        .cat-grid-layout {
            grid-template-columns: 1fr;
        }
    }
    .cat-color-preview {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: inline-block;
        border: 2px solid #FFFFFF;
        box-shadow: 0 0 0 1px #CBD5E1;
    }
</style>

<div style="margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
    <div>
        <h1 style="font-size: 24px; font-weight: 800; color: #0F172A; margin: 0 0 4px 0;">Blog Categories</h1>
        <p style="font-size: 13.5px; color: #64748B; margin: 0;">Manage strictly dynamic categories for clinical articles, filter badges, and SEO metadata.</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <a href="{{ route('admin.blogs.index') }}" class="btn-admin btn-admin-secondary">
            <i class="icon-file-word"></i>
            <span>View Blog Posts</span>
        </a>
    </div>
</div>

@if (session('success'))
    <div style="background: #ECFDF5; border: 1px solid #A7F3D0; color: #065F46; padding: 14px 18px; border-radius: 12px; margin-bottom: 20px; font-size: 13.5px; font-weight: 600;">
        <i class="icon-check" style="margin-right: 6px;"></i>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; padding: 14px 18px; border-radius: 12px; margin-bottom: 20px; font-size: 13.5px; font-weight: 600;">
        <i class="icon-cross" style="margin-right: 6px;"></i>
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div style="background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; padding: 14px 18px; border-radius: 12px; margin-bottom: 20px; font-size: 13.5px;">
        <div style="font-weight: 700; margin-bottom: 4px;">Please correct the errors below:</div>
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="cat-grid-layout">
    <!-- Left Column: Add Category Form -->
    <div class="admin-card" style="position: sticky; top: 90px;">
        <h3 style="font-size: 17px; font-weight: 800; color: #0F172A; margin: 0 0 16px 0;">Create New Category</h3>
        <form action="{{ route('admin.blog-categories.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                    Category Name <span style="color: #EF4444;">*</span>
                </label>
                <input type="text" name="name" id="newCatName" required value="{{ old('name') }}"
                       placeholder="e.g. Clinical Trials"
                       class="form-control" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                    URL Slug
                </label>
                <input type="text" name="slug" id="newCatSlug" value="{{ old('slug') }}"
                       placeholder="e.g. clinical-trials (auto-generated)"
                       class="form-control" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px;">
                <div style="font-size: 11.5px; color: #64748B; margin-top: 4px;">Leave blank to generate automatically from name.</div>
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                    Badge Color Accent
                </label>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <input type="color" name="color" id="newCatColor" value="{{ old('color', '#007E8A') }}"
                           style="width: 44px; height: 38px; border: 1px solid #CBD5E1; border-radius: 6px; padding: 2px; cursor: pointer;">
                    <input type="text" id="newCatColorText" value="{{ old('color', '#007E8A') }}"
                           style="flex: 1; padding: 9px 12px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 13.5px;"
                           placeholder="#007E8A">
                </div>
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">
                    Description (Optional)
                </label>
                <textarea name="description" rows="3" class="form-control"
                          style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 13.5px;"
                          placeholder="Brief description for SEO or internal reference...">{{ old('description') }}</textarea>
            </div>

            <div style="margin-bottom: 22px;">
                <label style="display: flex; align-items: center; gap: 8px; font-size: 13.5px; font-weight: 600; color: #334155; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" checked style="width: 16px; height: 16px; accent-color: var(--primary);">
                    <span>Active & Visible in Filters</span>
                </label>
            </div>

            <button type="submit" class="btn-admin btn-admin-primary" style="width: 100%; justify-content: center; padding: 12px;">
                <i class="icon-plus"></i>
                <span>Add Category</span>
            </button>
        </form>
    </div>

    <!-- Right Column: Categories List -->
    <div class="admin-card">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
            <h3 style="font-size: 17px; font-weight: 800; color: #0F172A; margin: 0;">Existing Categories ({{ count($categories) }})</h3>
        </div>

        @if($categories->isEmpty())
            <div style="text-align: center; padding: 48px 20px; color: #64748B;">
                <i class="icon-file-word" style="font-size: 40px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
                <h4 style="font-size: 16px; font-weight: 700; color: #1E293B; margin-bottom: 6px;">No Categories Created Yet</h4>
                <p style="font-size: 13px; max-width: 380px; margin: 0 auto;">
                    Use the form on the left to create dynamic categories. Only categories created here (or used in posts) will appear on the frontend.
                </p>
            </div>
        @else
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; font-size: 13.5px;">
                    <thead>
                        <tr style="border-bottom: 2px solid #E2E8F0; text-align: left; color: #64748B; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">
                            <th style="padding: 12px 14px;">Color</th>
                            <th style="padding: 12px 14px;">Name</th>
                            <th style="padding: 12px 14px;">Slug</th>
                            <th style="padding: 12px 14px; text-align: center;">Total Posts</th>
                            <th style="padding: 12px 14px; text-align: center;">Published</th>
                            <th style="padding: 12px 14px; text-align: center;">Status</th>
                            <th style="padding: 12px 14px; text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $cat)
                            <tr style="border-bottom: 1px solid #F1F5F9; transition: background 0.15s ease;" onmouseover="this.style.background='#F8FAFC'" onmouseout="this.style.background='transparent'">
                                <td style="padding: 14px;">
                                    <span class="cat-color-preview" style="background-color: {{ $cat->color }};" title="{{ $cat->color }}"></span>
                                </td>
                                <td style="padding: 14px;">
                                    <div style="font-weight: 700; color: #0F172A;">{{ $cat->name }}</div>
                                    @if($cat->description)
                                        <div style="font-size: 11.5px; color: #64748B; margin-top: 2px; max-width: 240px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            {{ $cat->description }}
                                        </div>
                                    @endif
                                </td>
                                <td style="padding: 14px; font-family: monospace; font-size: 12.5px; color: #475569;">
                                    {{ $cat->slug }}
                                </td>
                                <td style="padding: 14px; text-align: center;">
                                    <span style="font-weight: 700; color: #0F172A; background: #F1F5F9; padding: 3px 8px; border-radius: 999px; font-size: 12px;">
                                        {{ $cat->posts_count ?? 0 }}
                                    </span>
                                </td>
                                <td style="padding: 14px; text-align: center;">
                                    <span style="font-weight: 700; color: #059669; background: #ECFDF5; padding: 3px 8px; border-radius: 999px; font-size: 12px;">
                                        {{ $cat->published_posts_count ?? 0 }}
                                    </span>
                                </td>
                                <td style="padding: 14px; text-align: center;">
                                    @if($cat->is_active)
                                        <span style="color: #059669; background: #ECFDF5; padding: 3px 8px; border-radius: 6px; font-size: 11.5px; font-weight: 700;">Active</span>
                                    @else
                                        <span style="color: #64748B; background: #F1F5F9; padding: 3px 8px; border-radius: 6px; font-size: 11.5px; font-weight: 700;">Hidden</span>
                                    @endif
                                </td>
                                <td style="padding: 14px; text-align: right;">
                                    <div style="display: inline-flex; align-items: center; gap: 8px;">
                                        <!-- Edit Button (Opens inline form) -->
                                        <button type="button" onclick="openEditModal({{ $cat->id }}, '{{ addslashes($cat->name) }}', '{{ $cat->slug }}', '{{ $cat->color }}', '{{ addslashes($cat->description ?? '') }}', {{ $cat->is_active ? 1 : 0 }})"
                                                class="btn-admin btn-admin-secondary" style="padding: 6px 10px; font-size: 12px;" title="Edit Category">
                                            <i class="icon-file-word"></i>
                                            <span>Edit</span>
                                        </button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.blog-categories.destroy', $cat->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete category \'{{ $cat->name }}\'?');"
                                              style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-admin" style="padding: 6px 10px; font-size: 12px; background: #FEE2E2; color: #B91C1C; border: none;" title="Delete Category">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<!-- Edit Category Modal -->
<div id="editCatModal" style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6); z-index: 100; align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #FFFFFF; border-radius: 16px; max-width: 480px; width: 100%; padding: 24px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
            <h3 style="font-size: 18px; font-weight: 800; color: #0F172A; margin: 0;">Edit Category</h3>
            <button type="button" onclick="closeEditModal()" style="background: none; border: none; font-size: 20px; color: #64748B; cursor: pointer;">&times;</button>
        </div>
        <form id="editCatForm" action="" method="POST">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">Category Name</label>
                <input type="text" name="name" id="modalCatName" required class="form-control" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">URL Slug</label>
                <input type="text" name="slug" id="modalCatSlug" required class="form-control" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 14px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">Badge Color Accent</label>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <input type="color" name="color" id="modalCatColor" style="width: 44px; height: 38px; border: 1px solid #CBD5E1; border-radius: 6px; padding: 2px; cursor: pointer;">
                    <input type="text" id="modalCatColorText" class="form-control" style="flex: 1; padding: 9px 12px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 13.5px;">
                </div>
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 700; color: #334155; margin-bottom: 6px;">Description</label>
                <textarea name="description" id="modalCatDesc" rows="3" class="form-control" style="width: 100%; padding: 10px 14px; border: 1px solid #CBD5E1; border-radius: 8px; font-size: 13.5px;"></textarea>
            </div>

            <div style="margin-bottom: 22px;">
                <label style="display: flex; align-items: center; gap: 8px; font-size: 13.5px; font-weight: 600; color: #334155; cursor: pointer;">
                    <input type="checkbox" name="is_active" id="modalCatActive" value="1" style="width: 16px; height: 16px; accent-color: var(--primary);">
                    <span>Active & Visible in Filters</span>
                </label>
            </div>

            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <button type="button" onclick="closeEditModal()" class="btn-admin btn-admin-secondary">Cancel</button>
                <button type="submit" class="btn-admin btn-admin-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nameInput = document.getElementById('newCatName');
        const slugInput = document.getElementById('newCatSlug');
        const colorInput = document.getElementById('newCatColor');
        const colorText = document.getElementById('newCatColorText');

        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function () {
                if (!slugInput.value || slugInput.getAttribute('data-manual') !== 'true') {
                    slugInput.value = nameInput.value.toLowerCase().trim()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/[\s_-]+/g, '-')
                        .replace(/^-+|-+$/g, '');
                }
            });

            slugInput.addEventListener('input', function () {
                slugInput.setAttribute('data-manual', 'true');
            });
        }

        if (colorInput && colorText) {
            colorInput.addEventListener('input', function () {
                colorText.value = colorInput.value;
            });
            colorText.addEventListener('input', function () {
                if (/^#[0-9A-Fa-f]{6}$/.test(colorText.value)) {
                    colorInput.value = colorText.value;
                }
            });
        }

        const modalColor = document.getElementById('modalCatColor');
        const modalColorText = document.getElementById('modalCatColorText');
        if (modalColor && modalColorText) {
            modalColor.addEventListener('input', function () {
                modalColorText.value = modalColor.value;
            });
            modalColorText.addEventListener('input', function () {
                if (/^#[0-9A-Fa-f]{6}$/.test(modalColorText.value)) {
                    modalColor.value = modalColorText.value;
                }
            });
        }
    });

    function openEditModal(id, name, slug, color, description, isActive) {
        const modal = document.getElementById('editCatModal');
        const form = document.getElementById('editCatForm');
        form.action = "{{ url('admin/blog-categories') }}/" + id;

        document.getElementById('modalCatName').value = name;
        document.getElementById('modalCatSlug').value = slug;
        document.getElementById('modalCatColor').value = color || '#007E8A';
        document.getElementById('modalCatColorText').value = color || '#007E8A';
        document.getElementById('modalCatDesc').value = description;
        document.getElementById('modalCatActive').checked = (isActive === 1);

        modal.style.display = 'flex';
    }

    function closeEditModal() {
        document.getElementById('editCatModal').style.display = 'none';
    }
</script>
@endsection
