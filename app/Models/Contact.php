<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service',
        'subject',
        'message',
        'status',
        'admin_notes',
    ];

    /**
     * Scope for unread inquiries.
     */
    public function scopeUnread($query)
    {
        return $query->where('status', 'unread');
    }
}
