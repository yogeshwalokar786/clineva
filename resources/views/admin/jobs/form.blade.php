@extends('admin.layout')

@section('title', ($isEdit ? 'Edit Job Posting' : 'Create Job Posting') . ' - Admin Console')
@section('page_title', $isEdit ? 'Edit Job Posting' : 'New Job Posting')

@section('content')

    <div style="max-width: 840px; margin: 0 auto;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
            <div>
                <h2 style="font-size: 20px; font-weight: 700; color: var(--dark); margin-bottom: 4px;">
                    {{ $isEdit ? 'Edit Vacancy: ' . $job->title : 'Post a New Clinical Vacancy' }}
                </h2>
                <p style="font-size: 13.5px; color: var(--text-muted); margin: 0;">Fill in role details to publish directly onto the public Careers portal.</p>
            </div>
            <a href="{{ route('admin.jobs.index') }}" class="btn-live-site">
                &larr; Back to Openings
            </a>
        </div>

        <div class="content-card" style="padding: 28px;">
            <form action="{{ $isEdit ? route('admin.jobs.update', $job) : route('admin.jobs.store') }}" method="POST">
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="title">
                            Job Title *
                        </label>
                        <input type="text" id="title" name="title" value="{{ old('title', $job->title) }}" class="form-control" placeholder="e.g. Clinical Research Associate (CRA)" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px;">
                        @error('title') <span style="color: #EF4444; font-size: 12px;">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="category">
                            Department / Category *
                        </label>
                        <select id="category" name="category" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px; background: #fff;">
                            <option value="Clinical Operations" {{ old('category', $job->category) == 'Clinical Operations' ? 'selected' : '' }}>Clinical Operations</option>
                            <option value="Medical Writing" {{ old('category', $job->category) == 'Medical Writing' ? 'selected' : '' }}>Medical Writing</option>
                            <option value="Quality & Audit" {{ old('category', $job->category) == 'Quality & Audit' ? 'selected' : '' }}>Quality &amp; Audit</option>
                            <option value="BA / BE Studies" {{ old('category', $job->category) == 'BA / BE Studies' ? 'selected' : '' }}>BA / BE Studies</option>
                            <option value="Regulatory Affairs" {{ old('category', $job->category) == 'Regulatory Affairs' ? 'selected' : '' }}>Regulatory Affairs</option>
                            <option value="Biostatistics & Data" {{ old('category', $job->category) == 'Biostatistics & Data' ? 'selected' : '' }}>Biostatistics &amp; Data</option>
                            <option value="Medico-Marketing" {{ old('category', $job->category) == 'Medico-Marketing' ? 'selected' : '' }}>Medico-Marketing</option>
                        </select>
                        @error('category') <span style="color: #EF4444; font-size: 12px;">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="job_type">
                            Job Type *
                        </label>
                        <select id="job_type" name="job_type" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px; background: #fff;">
                            <option value="Full-Time" {{ old('job_type', $job->job_type) == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                            <option value="Part-Time" {{ old('job_type', $job->job_type) == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                            <option value="Contract" {{ old('job_type', $job->job_type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                            <option value="Internship" {{ old('job_type', $job->job_type) == 'Internship' ? 'selected' : '' }}>Internship</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="experience">
                            Experience Required
                        </label>
                        <input type="text" id="experience" name="experience" value="{{ old('experience', $job->experience) }}" class="form-control" placeholder="e.g. 2–5 Years" style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px;">
                    </div>

                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="location">
                            Location *
                        </label>
                        <input type="text" id="location" name="location" value="{{ old('location', $job->location) }}" class="form-control" placeholder="e.g. Mumbai, Maharashtra" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 8px;">
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="description">
                        Job Description &amp; Responsibilities *
                    </label>
                    <textarea id="description" name="description" rows="5" required style="width: 100%; padding: 12px 14px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 14px; line-height: 1.5;" placeholder="Describe core tasks, clinical scope, protocol monitoring, etc...">{{ old('description', $job->description) }}</textarea>
                    @error('description') <span style="color: #EF4444; font-size: 12px;">{{ $message }}</span> @enderror
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: var(--dark); margin-bottom: 6px;" for="requirements">
                        Qualifications &amp; Requirements (Optional)
                    </label>
                    <textarea id="requirements" name="requirements" rows="4" style="width: 100%; padding: 12px 14px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 14px; line-height: 1.5;" placeholder="e.g. B.Pharm / M.Pharm / MBBS / Life Sciences degree, ICH-GCP certification, excellent verbal communication...">{{ old('requirements', $job->requirements) }}</textarea>
                </div>

                <div style="margin-bottom: 28px; background: #F8FAFC; padding: 14px 18px; border-radius: 8px; border: 1px solid var(--border-color);">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; font-size: 13.5px; font-weight: 600; color: var(--dark);">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $job->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--primary);">
                        <span>Publish vacancy immediately (Visible on live Careers page)</span>
                    </label>
                </div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn-live-site" style="background: var(--primary); color: #fff; border-color: var(--primary); padding: 12px 24px; font-size: 14px; font-weight: 700; cursor: pointer;">
                        {{ $isEdit ? 'Save Changes' : 'Publish Job Opening' }}
                    </button>
                    <a href="{{ route('admin.jobs.index') }}" class="btn-live-site" style="padding: 12px 20px;">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
