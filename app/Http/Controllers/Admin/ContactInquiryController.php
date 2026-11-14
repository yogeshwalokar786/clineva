<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactInquiryController extends Controller
{
    /**
     * Display a listing of received inquiries.
     */
    public function index(Request $request)
    {
        $status = $request->query('status');
        $search = $request->query('search');

        $query = Contact::latest();

        if ($status && in_array($status, ['unread', 'read', 'replied'])) {
            $query->where('status', $status);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('service', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        try {
            $inquiries = $query->paginate(15)->withQueryString();

            $counts = [
                'all' => Contact::count(),
                'unread' => Contact::where('status', 'unread')->count(),
                'read' => Contact::where('status', 'read')->count(),
                'replied' => Contact::where('status', 'replied')->count(),
            ];
        } catch (\Throwable $e) {
            $inquiries = new \Illuminate\Pagination\LengthAwarePaginator(collect(), 0, 15);
            $counts = ['all' => 0, 'unread' => 0, 'read' => 0, 'replied' => 0];
        }

        return view('admin.inquiries.index', compact('inquiries', 'counts', 'status', 'search'));
    }

    /**
     * Display the specified inquiry.
     */
    public function show(Contact $inquiry)
    {
        // Automatically mark as read if it was unread
        if ($inquiry->status === 'unread') {
            try {
                $inquiry->update(['status' => 'read']);
            } catch (\Throwable $e) {
                // Silently continue
            }
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    /**
     * Update inquiry status or admin notes.
     */
    public function updateStatus(Request $request, Contact $inquiry)
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:unread,read,replied'],
            'admin_notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $inquiry->update($validated);

        return back()->with('success', 'Inquiry status updated successfully.');
    }

    /**
     * Remove the specified inquiry from storage.
     */
    public function destroy(Contact $inquiry)
    {
        $name = $inquiry->name;
        $inquiry->delete();

        return redirect()->route('admin.inquiries.index')
            ->with('success', "Inquiry from '{$name}' has been deleted.");
    }
}
