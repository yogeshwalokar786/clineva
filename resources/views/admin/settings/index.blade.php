@extends('admin.layout')

@section('title', 'General Settings - Admin Console')
@section('page_title', 'Website Settings')

@section('content')

<div style="max-width: 1000px; margin: 0 auto;">

    <!-- Header Intro -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 0 0 4px 0;">General Website Settings</h2>
            <p style="font-size: 13.5px; color: #64748B; margin: 0;">Configure dynamic contact info, social links, and footer details displayed across the website.</p>
        </div>
        <div>
            <a href="{{ route('home') }}" target="_blank" class="btn-admin btn-admin-secondary">
                <i class="icon-arrow-right"></i> View Live Site
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            ✓ {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div style="background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; padding: 16px 20px; border-radius: 12px; margin-bottom: 24px;">
            <div style="font-weight: 800; margin-bottom: 6px;">Please correct the errors below:</div>
            <ul style="margin: 0; padding-left: 20px; font-size: 13px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf

        <!-- 1. Contact & Headquarters Information -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 15px;">
                    <i class="icon-phone"></i>
                </div>
                <div class="form-section-title" style="margin: 0;">Contact & Communication Details</div>
            </div>
            <div class="form-section-sub">Updates header topbar, contact page, and footer contact cards instantly.</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Official Website Name *</label>
                        <input type="text" name="site_name" value="{{ old('site_name', $settings['site_name'] ?? 'Clineva Research Laboratories') }}" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Official Contact / Inquiry Email *</label>
                        <input type="email" name="contact_email" value="{{ old('contact_email', $settings['contact_email'] ?? 'priti.gotpagar@clineva.in') }}" class="form-control" required>
                        <span class="form-text">Primary recipient for client and sponsor inquiries.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Primary Telephone Number *</label>
                        <input type="text" name="contact_phone" value="{{ old('contact_phone', $settings['contact_phone'] ?? '+91 9870484499') }}" class="form-control" required>
                        <span class="form-text">Displayed on header topbar and footer support box.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Working / Operating Hours</label>
                        <input type="text" name="working_hours" value="{{ old('working_hours', $settings['working_hours'] ?? 'Mon – Sat: 9:00 AM – 6:00 PM') }}" class="form-control">
                        <span class="form-text">E.g. Mon – Sat: 9:00 AM – 6:00 PM</span>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 0;">
                <label class="form-label">Headquarters Physical Address</label>
                <textarea name="contact_address" rows="2" class="form-control">{{ old('contact_address', $settings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705') }}</textarea>
                <span class="form-text">Appears on the Contact page, Footer address card, and regulatory schema.</span>
            </div>
        </div>

        <!-- 2. Footer Content & Copyright -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 15px;">
                    <i class="icon-file-word"></i>
                </div>
                <div class="form-section-title" style="margin: 0;">Footer Presentation & Copyright</div>
            </div>
            <div class="form-section-sub">Controls the core corporate description and legal copyright notice in the website footer.</div>

            <div class="form-group">
                <label class="form-label">Footer Corporate Description</label>
                <textarea name="footer_description" rows="3" class="form-control">{{ old('footer_description', $settings['footer_description'] ?? '') }}</textarea>
                <span class="form-text">2-3 sentences introducing Clineva's CRO services below the footer logo.</span>
            </div>

            <div class="form-group" style="margin-bottom: 0;">
                <label class="form-label">Footer Copyright Notice</label>
                <input type="text" name="copyright_text" value="{{ old('copyright_text', $settings['copyright_text'] ?? ('© ' . date('Y') . ' Clineva Research Laboratories. All rights reserved.')) }}" class="form-control">
                <span class="form-text">Displayed at the very bottom bar of every public page.</span>
            </div>
        </div>

        <!-- 3. Social Media Channels -->
        <div class="content-card" style="margin-bottom: 24px; padding: 28px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(0, 119, 200, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 15px;">
                    <i class="icon-share"></i>
                </div>
                <div class="form-section-title" style="margin: 0;">Official Social Media Links</div>
            </div>
            <div class="form-section-sub">Leave any social platform URL empty if you do not want its icon to appear on the site.</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">LinkedIn Company Page</label>
                        <input type="url" name="social_linkedin" value="{{ old('social_linkedin', $settings['social_linkedin'] ?? '') }}" class="form-control" placeholder="https://linkedin.com/company/clineva">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">X (Twitter) Profile</label>
                        <input type="url" name="social_twitter" value="{{ old('social_twitter', $settings['social_twitter'] ?? '') }}" class="form-control" placeholder="https://twitter.com/clineva">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Facebook Page</label>
                        <input type="url" name="social_facebook" value="{{ old('social_facebook', $settings['social_facebook'] ?? '') }}" class="form-control" placeholder="https://facebook.com/clineva">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Instagram Profile</label>
                        <input type="url" name="social_instagram" value="{{ old('social_instagram', $settings['social_instagram'] ?? '') }}" class="form-control" placeholder="https://instagram.com/clineva">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">YouTube Channel</label>
                        <input type="url" name="social_youtube" value="{{ old('social_youtube', $settings['social_youtube'] ?? '') }}" class="form-control" placeholder="https://youtube.com/@clineva">
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="content-card" style="padding: 20px; display: flex; justify-content: flex-end;">
            <button type="submit" class="btn-admin btn-admin-primary" style="padding: 12px 28px; font-size: 14.5px; font-weight: 800;">
                Save Website Settings
            </button>
        </div>

    </form>

</div>

@endsection
