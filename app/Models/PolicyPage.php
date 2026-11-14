<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PolicyPage extends Model
{
    use HasFactory;

    protected $table = 'policy_pages';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->title);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Return default fallback content for standard policies when database is empty.
     */
    public static function getDefaultPolicy(string $slug): ?array
    {
        $defaults = [
            'privacy-policy' => [
                'title' => 'Privacy Policy & Data Protection',
                'slug' => 'privacy-policy',
                'meta_title' => 'Privacy Policy & Data Protection | Clineva Research Laboratories',
                'meta_description' => 'Comprehensive privacy and clinical data governance guidelines at Clineva Research Laboratories.',
                'content' => '<h2>1. Introduction & Commitment to Privacy</h2>
<p>Clineva Research Laboratories ("Clineva", "we", "us", or "our") respects the privacy of our website visitors, clinical study sponsors, principal investigators, clinical trial participants, and prospective candidates. This Privacy Policy details how we collect, process, safeguard, and disclose personal and clinical data in accordance with applicable global regulations, including the Digital Personal Data Protection Act (DPDP), ICH GCP guidelines, and ISO 27001 data security principles.</p>

<h2>2. Information We Collect</h2>
<p>We may collect information directly from you when you interact with our website or services:</p>
<ul>
    <li><strong>Direct Contact Data:</strong> Name, professional title, corporate email address, contact telephone number, organization name, and service inquiry specifics submitted through our contact and consultation forms.</li>
    <li><strong>Careers & Recruitment Data:</strong> Curriculum Vitae (CV), professional qualifications, work experience, certifications, and candidate summaries provided during job applications.</li>
    <li><strong>Clinical & Sponsor Communications:</strong> Study protocol inquiries, non-disclosure agreements, and regulatory feasibility discussions.</li>
    <li><strong>Automated Analytics Data:</strong> IP addresses, browser types, device identifiers, and page interaction timestamps collected via cookies to optimize site performance and security.</li>
</ul>

<h2>3. Purpose & Legal Basis for Processing</h2>
<p>All data collected by Clineva is utilized exclusively for legitimate business and scientific operations:</p>
<ul>
    <li>Responding to clinical trial, BA/BE, or bioanalytical proposals.</li>
    <li>Evaluating job candidates for active vacancies within our laboratory network.</li>
    <li>Maintaining regulatory compliance, audit trails, and pharmacovigilance commitments.</li>
    <li>Protecting our digital infrastructure against security incidents and unauthorized access.</li>
</ul>

<h2>4. Confidentiality & Security Standards</h2>
<p>We implement stringent physical, administrative, and technical safeguards. All data transmission across our website is protected using 256-bit SSL encryption. Access to candidate files and sponsor inquiries is strictly restricted on a need-to-know basis.</p>

<h2>5. Data Retention & Your Rights</h2>
<p>We retain personal information only for as long as necessary to fulfill the purposes for which it was gathered, or as required by regulatory statutory retention mandates. You have the right to request access to, rectification of, or erasure of your personal data by contacting our Data Protection Officer at <a href="mailto:priti.gotpagar@clineva.in">priti.gotpagar@clineva.in</a>.</p>',
            ],
            'terms-conditions' => [
                'title' => 'Terms of Use & Regulatory Notice',
                'slug' => 'terms-conditions',
                'meta_title' => 'Terms & Conditions of Service | Clineva Research Laboratories',
                'meta_description' => 'Terms governing the access, scientific publications, and use of the Clineva Research Laboratories digital portal.',
                'content' => '<h2>1. Acceptance of Terms</h2>
<p>Welcome to the digital portal of Clineva Research Laboratories. By accessing or using this website, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use and comply with all applicable laws and regulations.</p>

<h2>2. Scientific & Informational Use Only</h2>
<p>The materials, whitepapers, clinical methodologies, and regulatory analyses published on this website are provided solely for general informational, educational, and professional reference. They do not constitute formal legal advice, regulatory authorization, or medical consultation. Binding clinical study protocols, BA/BE contracts, and service agreements are governed strictly by executed bilateral Master Service Agreements (MSAs).</p>

<h2>3. Intellectual Property Rights</h2>
<p>All content on this website—including scientific summaries, research abstracts, brand trademarks, logos, diagrams, graphics, and interface designs—is the exclusive intellectual property of Clineva Research Laboratories or its licensors and is protected by international copyright, trademark, and intellectual property statutes. Unauthorized reproduction, modification, or distribution is prohibited.</p>

<h2>4. External Links & Third-Party Resources</h2>
<p>This portal may provide hyperlinks to external regulatory bodies (such as CDSCO, USFDA, EMA, and ICH). Clineva does not control or assume liability for the availability, accuracy, or privacy practices of external third-party domains.</p>

<h2>5. Governing Law & Jurisdiction</h2>
<p>These terms and any disputes arising out of the use of this website shall be governed by and construed in accordance with the laws of India, under the exclusive jurisdiction of the competent courts in Navi Mumbai / Mumbai, Maharashtra.</p>',
            ],
            'cookie-policy' => [
                'title' => 'Cookie & Tracking Policy',
                'slug' => 'cookie-policy',
                'meta_title' => 'Cookie Policy | Clineva Research Laboratories',
                'meta_description' => 'Learn how Clineva Research Laboratories uses essential and analytical cookies.',
                'content' => '<h2>1. Use of Cookies</h2>
<p>Clineva Research Laboratories uses essential cookies to ensure our website functions correctly, remembers your session security, and provides a smooth browsing experience.</p>
<h2>2. Analytics & Performance</h2>
<p>We use non-invasive aggregated analytics cookies to monitor website performance, understand user reading patterns on clinical whitepapers, and identify technical errors.</p>
<h2>3. Managing Cookie Preferences</h2>
<p>You can adjust your browser settings at any time to block or notify you about cookies. Disabling essential cookies may impact certain interactive features such as inquiry submissions.</p>',
            ],
        ];

        return $defaults[$slug] ?? null;
    }
}
