<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_posting_id',
        'role_title',
        'name',
        'email',
        'phone',
        'experience',
        'resume_path',
        'resume_original_name',
        'message',
        'status',
        'admin_notes',
    ];

    /**
     * Parent job posting if linked.
     */
    public function jobPosting(): BelongsTo
    {
        return $this->belongsTo(JobPosting::class);
    }

    /**
     * Scope for pending review applications.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Check if application includes a resume file.
     */
    public function hasResume(): bool
    {
        return !empty($this->resume_path) && Storage::exists($this->resume_path);
    }
}
