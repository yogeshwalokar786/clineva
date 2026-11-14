@extends('admin.layout')

@section('title', 'Media Manager - Admin Console')
@section('page_title', 'Media Library')

@section('content')

<!-- Header Action Bar -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
    <div>
        <h2 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0 0 4px 0;">Digital Asset & Media Manager</h2>
        <p style="font-size: 13.5px; color: #64748B; margin: 0;">Upload, organize, and manage image assets for clinical articles, case studies, and pages.</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button type="button" onclick="document.getElementById('pageMediaFileInput').click()" class="btn-admin btn-admin-primary" style="padding: 9px 18px; font-size: 13.5px; font-weight: 700;">
            <i class="icon-upload"></i> Upload Image
        </button>
        <input type="file" id="pageMediaFileInput" accept="image/*" style="display: none;" onchange="uploadFromPage(this.files)">
    </div>
</div>

<!-- Upload Progress Bar (Hidden by Default) -->
<div id="pageUploadProgressBox" style="display: none; margin-bottom: 24px;" class="content-card">
    <div style="display: flex; justify-content: space-between; font-size: 13.5px; font-weight: 700; color: #0F172A; margin-bottom: 8px;">
        <span id="pageUploadStatusText">Uploading asset...</span>
        <span id="pageUploadPercentText" style="color: var(--primary);">0%</span>
    </div>
    <div style="height: 8px; background: #E2E8F0; border-radius: 999px; overflow: hidden;">
        <div id="pageUploadProgressBar" style="height: 100%; width: 0%; background: var(--primary); transition: width 0.2s;"></div>
    </div>
</div>

<!-- Search & Statistics Bar -->
<div class="content-card" style="padding: 18px 24px; margin-bottom: 24px;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <div style="flex-grow: 1; max-width: 400px;">
            <input type="text" id="pageSearchInput" oninput="filterPageMedia(this.value)" placeholder="Search media by filename..." class="form-control" style="padding: 9px 14px; font-size: 13.5px;">
        </div>
        <div style="display: flex; align-items: center; gap: 14px; font-size: 13px; color: #64748B;">
            <span>Total Assets: <strong style="color: #0F172A;" id="totalMediaCount">{{ count($media) }}</strong></span>
            <span>&bull;</span>
            <span>Uploads: <strong style="color: #0F172A;">{{ count(array_filter($media, fn($m) => $m['is_deletable'])) }}</strong></span>
            <span>&bull;</span>
            <span>Theme Stock: <strong style="color: #0F172A;">{{ count(array_filter($media, fn($m) => !$m['is_deletable'])) }}</strong></span>
        </div>
    </div>
</div>

<!-- Drag & Drop Quick Upload Area -->
<div id="pageDropzone" style="border: 2px dashed #CBD5E1; border-radius: 14px; background: #F8FAFC; padding: 28px 20px; text-align: center; cursor: pointer; margin-bottom: 28px; transition: all 0.2s;"
     onclick="document.getElementById('pageMediaFileInput').click()"
     ondragover="event.preventDefault(); this.style.borderColor='var(--primary)'; this.style.background='#F0F9FF';"
     ondragleave="this.style.borderColor='#CBD5E1'; this.style.background='#F8FAFC';"
     ondrop="event.preventDefault(); this.style.borderColor='#CBD5E1'; this.style.background='#F8FAFC'; handlePageDrop(event);">
    <i class="icon-upload" style="font-size: 26px; color: var(--primary); margin-bottom: 8px; display: inline-block;"></i>
    <div style="font-size: 14px; font-weight: 700; color: #1E293B;">Click or Drag & Drop Images Here to Upload</div>
    <div style="font-size: 12px; color: #64748B; margin-top: 3px;">Supports WEBP, PNG, JPG, JPEG, SVG up to 10MB</div>
</div>

<!-- Media Gallery Grid -->
<div id="pageMediaGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
    @forelse($media as $item)
        <div class="content-card media-grid-card" data-name="{{ strtolower($item['name']) }}" style="padding: 0; margin-bottom: 0; display: flex; flex-direction: column;">
            <div style="position: relative; height: 140px; background: #0B192C; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                <img src="{{ $item['url'] }}" alt="{{ $item['name'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                <span style="position: absolute; top: 8px; right: 8px; font-size: 10.5px; font-weight: 700; padding: 2px 7px; border-radius: 4px; background: {{ $item['is_deletable'] ? '#0077C8' : '#334155' }}; color: #FFFFFF;">
                    {{ $item['folder'] }}
                </span>
            </div>
            <div style="padding: 14px 16px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="font-size: 13px; font-weight: 700; color: #0F172A; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; margin-bottom: 4px;" title="{{ $item['name'] }}">
                        {{ $item['name'] }}
                    </div>
                    <div style="font-size: 11.5px; color: #64748B; display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span>{{ $item['size'] }}</span>
                        <span>{{ $item['date'] }}</span>
                    </div>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 10px;">
                    <button type="button" onclick="copyMediaUrl('{{ $item['url'] }}', this)" class="btn-admin btn-admin-secondary" style="flex: 1; padding: 6px 10px; font-size: 11.5px; justify-content: center;">
                        <i class="icon-link"></i> Copy Link
                    </button>
                    <a href="{{ $item['url'] }}" target="_blank" class="btn-admin btn-admin-secondary" style="padding: 6px 10px; font-size: 11.5px;" title="View Full Image">
                        <i class="icon-magnifying-glass"></i>
                    </a>
                    @if($item['is_deletable'])
                        <button type="button" onclick="deleteMediaItem('{{ $item['path'] }}', this)" class="btn-admin btn-admin-danger" style="padding: 6px 10px; font-size: 11.5px;" title="Delete Image">
                            <i class="icon-trash"></i>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #fff; border-radius: 14px; border: 1px solid #E2E8F0;">
            <i class="icon-camera" style="font-size: 44px; color: #CBD5E1; margin-bottom: 12px; display: block;"></i>
            <h4 style="font-size: 17px; font-weight: 700; color: #1E293B; margin-bottom: 6px;">No Media Files Yet</h4>
            <p style="font-size: 13.5px; color: #64748B;">Upload your first blog image using the button above.</p>
        </div>
    @endforelse
</div>

<script>
    function filterPageMedia(query) {
        const q = (query || '').toLowerCase().trim();
        const cards = document.querySelectorAll('.media-grid-card');
        let visibleCount = 0;
        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            if (!q || name.includes(q)) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        document.getElementById('totalMediaCount').innerText = visibleCount;
    }

    function copyMediaUrl(url, btn) {
        navigator.clipboard.writeText(url).then(() => {
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '✓ Copied!';
            btn.style.color = '#059669';
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.style.color = '';
            }, 2000);
        });
    }

    function deleteMediaItem(path, btn) {
        if (!confirm('Are you sure you want to permanently delete this media file?')) return;

        fetch("{{ route('admin.media.destroy') }}", {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ path: path })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const card = btn.closest('.media-grid-card');
                if (card) card.remove();
            } else {
                alert(data.message || 'Failed to delete file.');
            }
        })
        .catch(err => alert('Network error while deleting file.'));
    }

    function handlePageDrop(e) {
        if (e.dataTransfer && e.dataTransfer.files && e.dataTransfer.files.length > 0) {
            uploadFromPage(e.dataTransfer.files);
        }
    }

    function uploadFromPage(files) {
        if (!files || files.length === 0) return;
        const file = files[0];

        const progressBox = document.getElementById('pageUploadProgressBox');
        const progressBar = document.getElementById('pageUploadProgressBar');
        const percentText = document.getElementById('pageUploadPercentText');
        const statusText = document.getElementById('pageUploadStatusText');

        progressBox.style.display = 'block';
        progressBar.style.width = '0%';
        percentText.innerText = '0%';
        statusText.innerText = 'Uploading ' + file.name + '...';

        const formData = new FormData();
        formData.append('file', file);
        formData.append('_token', '{{ csrf_token() }}');

        const xhr = new XMLHttpRequest();
        xhr.open('POST', "{{ route('admin.media.upload') }}", true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.upload.onprogress = function (e) {
            if (e.lengthComputable) {
                const percent = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percent + '%';
                percentText.innerText = percent + '%';
            }
        };

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                statusText.innerText = 'Upload complete! Refreshing media library...';
                setTimeout(() => window.location.reload(), 600);
            } else {
                statusText.innerText = 'Upload failed. HTTP error ' + xhr.status;
            }
        };

        xhr.onerror = function () {
            statusText.innerText = 'Network error during upload.';
        };

        xhr.send(formData);
    }
</script>
@endsection
