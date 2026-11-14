<!-- Clineva Universal Media Manager Modal -->
<div id="mediaManagerModal" style="display: none; position: fixed; inset: 0; background: rgba(10, 28, 50, 0.7); z-index: 99999; align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #FFFFFF; border-radius: 18px; width: 100%; max-width: 960px; max-height: 90vh; display: flex; flex-direction: column; overflow: hidden; box-shadow: 0 25px 60px rgba(0,0,0,0.35);">
        
        <!-- Modal Header -->
        <div style="padding: 18px 24px; border-bottom: 1px solid #E2E8F0; display: flex; align-items: center; justify-content: space-between; background: #F8FAFC;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="icon-camera"></i>
                </div>
                <div>
                    <h3 style="font-size: 17px; font-weight: 800; color: #0F172A; margin: 0;">Media Manager</h3>
                    <p style="font-size: 12px; color: #64748B; margin: 0;">Select an existing image or upload new media for your article</p>
                </div>
            </div>
            <button type="button" onclick="closeMediaManagerModal()" style="background: none; border: none; font-size: 24px; color: #64748B; cursor: pointer; line-height: 1; padding: 4px 8px; border-radius: 6px;">&times;</button>
        </div>

        <!-- Modal Toolbar: Tabs & Search -->
        <div style="padding: 14px 24px; border-bottom: 1px solid #F1F5F9; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="display: flex; gap: 8px;">
                <button type="button" id="tabLibraryBtn" onclick="switchMediaTab('library')" class="btn-admin btn-admin-primary" style="padding: 6px 14px; font-size: 12.5px;">
                    <i class="icon-folder"></i> Media Library
                </button>
                <button type="button" id="tabUploadBtn" onclick="switchMediaTab('upload')" class="btn-admin btn-admin-secondary" style="padding: 6px 14px; font-size: 12.5px;">
                    <i class="icon-upload"></i> Upload New Image
                </button>
            </div>
            <div id="mediaSearchWrap" style="min-width: 240px;">
                <input type="text" id="mediaSearchInput" placeholder="Filter images..." oninput="filterMediaLibrary(this.value)" class="form-control" style="padding: 7px 12px; font-size: 12.5px; border-radius: 8px;">
            </div>
        </div>

        <!-- Modal Body -->
        <div style="flex: 1; overflow-y: auto; padding: 24px; min-height: 380px;">
            
            <!-- Tab 1: Media Library Gallery -->
            <div id="mediaTabLibrary">
                <div id="mediaLoadingIndicator" style="text-align: center; padding: 50px 20px; color: #64748B;">
                    <i class="icon-spinner" style="font-size: 28px; display: block; margin-bottom: 10px; animation: spin 1s linear infinite;"></i>
                    <span>Loading media assets...</span>
                </div>

                <div id="mediaEmptyNotice" style="display: none; text-align: center; padding: 50px 20px; color: #64748B;">
                    <i class="icon-camera" style="font-size: 36px; color: #CBD5E1; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 15px; font-weight: 700; color: #1E293B; margin-bottom: 4px;">No Media Found</h4>
                    <p style="font-size: 13px;">Upload an image or clear your search query.</p>
                </div>

                <div id="mediaGridContainer" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 16px;">
                    <!-- Dynamically populated -->
                </div>
            </div>

            <!-- Tab 2: Upload Zone -->
            <div id="mediaTabUpload" style="display: none;">
                <div id="dropzoneArea" style="border: 2px dashed #93C5FD; border-radius: 14px; background: #F8FAFC; padding: 48px 24px; text-align: center; cursor: pointer; transition: all 0.2s;"
                     onclick="document.getElementById('mediaFileInput').click()"
                     ondragover="event.preventDefault(); this.style.borderColor='var(--primary)'; this.style.background='#F0F9FF';"
                     ondragleave="this.style.borderColor='#93C5FD'; this.style.background='#F8FAFC';"
                     ondrop="event.preventDefault(); this.style.borderColor='#93C5FD'; this.style.background='#F8FAFC'; handleMediaDrop(event);">
                    
                    <input type="file" id="mediaFileInput" accept="image/*" style="display: none;" onchange="handleMediaSelect(this.files)">
                    <div style="width: 56px; height: 56px; border-radius: 999px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: inline-flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 14px;">
                        <i class="icon-upload"></i>
                    </div>
                    <h4 style="font-size: 16px; font-weight: 700; color: #0F172A; margin-bottom: 6px;">Click or Drag & Drop Image Here</h4>
                    <p style="font-size: 13px; color: #64748B; margin-bottom: 14px;">Supports PNG, JPG, JPEG, WEBP, SVG & GIF (Up to 10MB)</p>
                    <button type="button" class="btn-admin btn-admin-primary" style="padding: 8px 20px; font-size: 13px;">Browse from Device</button>
                </div>

                <div id="uploadProgressBox" style="display: none; margin-top: 20px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px 20px;">
                    <div style="display: flex; justify-content: space-between; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 8px;">
                        <span id="uploadStatusText">Uploading image...</span>
                        <span id="uploadPercentText">0%</span>
                    </div>
                    <div style="height: 6px; background: #E2E8F0; border-radius: 999px; overflow: hidden;">
                        <div id="uploadProgressBar" style="height: 100%; width: 0%; background: var(--primary); transition: width 0.2s;"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Footer: Selected Item Info & Insert Button -->
        <div style="padding: 16px 24px; border-top: 1px solid #E2E8F0; background: #F8FAFC; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div id="mediaSelectedItemInfo" style="font-size: 13px; color: #475569; display: flex; align-items: center; gap: 10px;">
                <span style="color: #94A3B8;">No image selected</span>
            </div>
            <div style="display: flex; gap: 10px;">
                <button type="button" onclick="closeMediaManagerModal()" class="btn-admin btn-admin-secondary" style="padding: 8px 18px;">Cancel</button>
                <button type="button" id="mediaSelectConfirmBtn" onclick="confirmMediaSelection()" disabled class="btn-admin btn-admin-primary" style="padding: 8px 22px; opacity: 0.5;">
                    Use Selected Image
                </button>
            </div>
        </div>

    </div>
</div>

<style>
    .media-card-item {
        border: 2px solid transparent;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        background: #F8FAFC;
        transition: all 0.2s ease;
        position: relative;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }
    .media-card-item:hover {
        border-color: #93C5FD;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .media-card-item.selected {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(0, 119, 200, 0.25);
    }
    .media-card-thumb {
        height: 110px;
        width: 100%;
        object-fit: cover;
        display: block;
        background: #0B192C;
    }
    .media-card-meta {
        padding: 8px 10px;
        background: #FFFFFF;
        border-top: 1px solid #F1F5F9;
    }
    .media-card-name {
        font-size: 11.5px;
        font-weight: 600;
        color: #1E293B;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 2px;
    }
    .media-card-size {
        font-size: 10.5px;
        color: #94A3B8;
    }
    .media-card-badge {
        position: absolute;
        top: 6px;
        right: 6px;
        background: rgba(0,0,0,0.6);
        color: #fff;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 4px;
        font-weight: 600;
    }
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>

<script>
    let mediaManagerCallback = null;
    let allMediaItems = [];
    let selectedMediaItem = null;

    function openMediaManager(callback) {
        mediaManagerCallback = callback;
        selectedMediaItem = null;
        updateSelectedMediaUI();
        switchMediaTab('library');
        document.getElementById('mediaManagerModal').style.display = 'flex';
        loadMediaLibrary();
    }

    function closeMediaManagerModal() {
        document.getElementById('mediaManagerModal').style.display = 'none';
        mediaManagerCallback = null;
    }

    function switchMediaTab(tab) {
        const libTab = document.getElementById('mediaTabLibrary');
        const upTab = document.getElementById('mediaTabUpload');
        const libBtn = document.getElementById('tabLibraryBtn');
        const upBtn = document.getElementById('tabUploadBtn');
        const searchWrap = document.getElementById('mediaSearchWrap');

        if (tab === 'library') {
            libTab.style.display = 'block';
            upTab.style.display = 'none';
            libBtn.className = 'btn-admin btn-admin-primary';
            upBtn.className = 'btn-admin btn-admin-secondary';
            if (searchWrap) searchWrap.style.display = 'block';
        } else {
            libTab.style.display = 'none';
            upTab.style.display = 'block';
            libBtn.className = 'btn-admin btn-admin-secondary';
            upBtn.className = 'btn-admin btn-admin-primary';
            if (searchWrap) searchWrap.style.display = 'none';
        }
    }

    function loadMediaLibrary() {
        const loader = document.getElementById('mediaLoadingIndicator');
        const grid = document.getElementById('mediaGridContainer');
        const empty = document.getElementById('mediaEmptyNotice');

        loader.style.display = 'block';
        grid.innerHTML = '';
        empty.style.display = 'none';

        fetch("{{ route('admin.media.index') }}", {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            loader.style.display = 'none';
            if (data.success && data.media && data.media.length > 0) {
                allMediaItems = data.media;
                renderMediaGrid(allMediaItems);
            } else {
                allMediaItems = [];
                empty.style.display = 'block';
            }
        })
        .catch(err => {
            loader.style.display = 'none';
            grid.innerHTML = '<div style="color: #EF4444; text-align: center; grid-column: 1 / -1;">Failed to load media. Please try again.</div>';
        });
    }

    function renderMediaGrid(items) {
        const grid = document.getElementById('mediaGridContainer');
        const empty = document.getElementById('mediaEmptyNotice');
        grid.innerHTML = '';

        if (!items || items.length === 0) {
            empty.style.display = 'block';
            return;
        }
        empty.style.display = 'none';

        items.forEach(item => {
            const card = document.createElement('div');
            card.className = 'media-card-item' + (selectedMediaItem && selectedMediaItem.path === item.path ? ' selected' : '');
            card.onclick = () => selectMediaItem(item, card);

            card.innerHTML = `
                <img src="${item.url}" alt="${item.name}" class="media-card-thumb" loading="lazy">
                ${item.folder === 'Uploads' ? '<span class="media-card-badge">Custom</span>' : ''}
                <div class="media-card-meta">
                    <div class="media-card-name" title="${item.name}">${item.name}</div>
                    <div class="media-card-size">${item.size}</div>
                </div>
            `;
            grid.appendChild(card);
        });
    }

    function filterMediaLibrary(query) {
        const q = (query || '').toLowerCase().trim();
        if (!q) {
            renderMediaGrid(allMediaItems);
            return;
        }
        const filtered = allMediaItems.filter(item => item.name.toLowerCase().includes(q));
        renderMediaGrid(filtered);
    }

    function selectMediaItem(item, cardEl) {
        selectedMediaItem = item;
        document.querySelectorAll('.media-card-item').forEach(c => c.classList.remove('selected'));
        if (cardEl) cardEl.classList.add('selected');
        updateSelectedMediaUI();
    }

    function updateSelectedMediaUI() {
        const info = document.getElementById('mediaSelectedItemInfo');
        const confirmBtn = document.getElementById('mediaSelectConfirmBtn');

        if (selectedMediaItem) {
            info.innerHTML = `
                <img src="${selectedMediaItem.url}" style="width: 28px; height: 28px; border-radius: 6px; object-fit: cover;">
                <div>
                    <strong style="color: #0F172A;">${selectedMediaItem.name}</strong>
                    <span style="font-size: 11.5px; color: #64748B; margin-left: 6px;">(${selectedMediaItem.size})</span>
                </div>
            `;
            confirmBtn.disabled = false;
            confirmBtn.style.opacity = '1';
        } else {
            info.innerHTML = '<span style="color: #94A3B8;">No image selected</span>';
            confirmBtn.disabled = true;
            confirmBtn.style.opacity = '0.5';
        }
    }

    function confirmMediaSelection() {
        if (!selectedMediaItem) return;
        if (typeof mediaManagerCallback === 'function') {
            mediaManagerCallback(selectedMediaItem.url, selectedMediaItem.path, selectedMediaItem);
        }
        closeMediaManagerModal();
    }

    function handleMediaSelect(files) {
        if (files && files.length > 0) {
            uploadMediaFile(files[0]);
        }
    }

    function handleMediaDrop(e) {
        if (e.dataTransfer && e.dataTransfer.files && e.dataTransfer.files.length > 0) {
            uploadMediaFile(e.dataTransfer.files[0]);
        }
    }

    function uploadMediaFile(file) {
        const progressBox = document.getElementById('uploadProgressBox');
        const progressBar = document.getElementById('uploadProgressBar');
        const percentText = document.getElementById('uploadPercentText');
        const statusText = document.getElementById('uploadStatusText');

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
                try {
                    const res = JSON.parse(xhr.responseText);
                    if (res.success) {
                        progressBox.style.display = 'none';
                        document.getElementById('mediaFileInput').value = '';
                        // Switch to library, reload, and auto-select new item
                        switchMediaTab('library');
                        loadMediaLibrary();
                        selectedMediaItem = {
                            name: res.name,
                            url: res.url,
                            path: res.path,
                            size: res.size
                        };
                        updateSelectedMediaUI();
                    } else {
                        statusText.innerText = 'Upload failed: ' + (res.message || 'Unknown error');
                    }
                } catch (e) {
                    statusText.innerText = 'Error parsing server response.';
                }
            } else {
                statusText.innerText = 'Upload failed. HTTP error ' + xhr.status;
            }
        };

        xhr.onerror = function () {
            statusText.innerText = 'Network error while uploading.';
        };

        xhr.send(formData);
    }
</script>
