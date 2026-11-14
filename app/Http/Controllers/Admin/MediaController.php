<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the media assets or return JSON for AJAX modals.
     */
    public function index(Request $request)
    {
        $media = $this->collectMedia();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'media' => $media,
            ]);
        }

        return view('admin.media.index', compact('media'));
    }

    /**
     * Upload an image and return JSON.
     */
    public function upload(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg,gif', 'max:10240'],
        ]);

        $file = $request->file('file');
        $uploadDir = public_path('uploads/blog');

        if (!File::exists($uploadDir)) {
            File::makeDirectory($uploadDir, 0755, true);
        }

        $baseName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        $ext = $file->getClientOriginalExtension();
        $fileName = 'media_' . time() . '_' . $baseName . '.' . $ext;

        $file->move($uploadDir, $fileName);
        $relativePath = 'uploads/blog/' . $fileName;

        return response()->json([
            'success' => true,
            'url' => asset($relativePath),
            'path' => $relativePath,
            'name' => $fileName,
            'size' => $this->formatBytes(File::size(public_path($relativePath))),
        ]);
    }

    /**
     * Delete an uploaded image file.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'path' => ['required', 'string'],
        ]);

        $path = ltrim($request->input('path'), '/');

        // Only allow deleting files inside uploads/blog directory for safety
        if (!Str::startsWith($path, 'uploads/blog/')) {
            return response()->json([
                'success' => false,
                'message' => 'Default system assets cannot be deleted.',
            ], 403);
        }

        $fullPath = public_path($path);
        if (File::exists($fullPath)) {
            File::delete($fullPath);
            return response()->json([
                'success' => true,
                'message' => 'Image successfully removed from media library.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'File not found.',
        ], 404);
    }

    /**
     * Collect all media files from uploads/blog and image/blog directories.
     */
    protected function collectMedia(): array
    {
        $items = [];

        // 1. Uploaded user images
        $uploadDir = public_path('uploads/blog');
        if (File::exists($uploadDir)) {
            foreach (File::files($uploadDir) as $file) {
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif'])) {
                    $rel = 'uploads/blog/' . $file->getFilename();
                    $items[] = [
                        'name' => $file->getFilename(),
                        'url' => asset($rel),
                        'path' => $rel,
                        'size' => $this->formatBytes($file->getSize()),
                        'size_raw' => $file->getSize(),
                        'mtime' => $file->getMTime(),
                        'date' => date('d M Y, h:i A', $file->getMTime()),
                        'is_deletable' => true,
                        'folder' => 'Uploads',
                    ];
                }
            }
        }

        // 2. Stock / theme blog images
        $stockDir = public_path('image/blog');
        if (File::exists($stockDir)) {
            foreach (File::files($stockDir) as $file) {
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif'])) {
                    $rel = 'image/blog/' . $file->getFilename();
                    $items[] = [
                        'name' => $file->getFilename(),
                        'url' => asset($rel),
                        'path' => $rel,
                        'size' => $this->formatBytes($file->getSize()),
                        'size_raw' => $file->getSize(),
                        'mtime' => $file->getMTime(),
                        'date' => date('d M Y', $file->getMTime()),
                        'is_deletable' => false,
                        'folder' => 'Theme Stock',
                    ];
                }
            }
        }

        // Sort: newest uploads first
        usort($items, function ($a, $b) {
            return $b['mtime'] <=> $a['mtime'];
        });

        return $items;
    }

    protected function formatBytes(int $bytes): string
    {
        if ($bytes >= 1048576) {
            return round($bytes / 1048576, 2) . ' MB';
        }
        if ($bytes >= 1024) {
            return round($bytes / 1024, 1) . ' KB';
        }
        return $bytes . ' B';
    }
}
