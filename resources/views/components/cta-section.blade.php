<!-- Dynamic Clineva CTA & Location Section -->
<style>
    .clineva-cta-block {
        position: relative;
        background: linear-gradient(135deg, #0A1C32 0%, #0E294B 50%, #004F8A 100%);
        border-radius: 20px;
        padding: 50px 48px;
        color: #FFFFFF;
        overflow: hidden;
        margin: 50px 0;
        box-shadow: 0 20px 40px rgba(10, 28, 50, 0.25);
    }
    .clineva-cta-block::before {
        content: "";
        position: absolute;
        top: -100px;
        right: -100px;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(56, 189, 248, 0.18) 0%, transparent 70%);
        pointer-events: none;
        border-radius: 50%;
    }
    .clineva-cta-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #38BDF8;
        background: rgba(56, 189, 248, 0.15);
        border: 1px solid rgba(56, 189, 248, 0.3);
        padding: 5px 14px;
        border-radius: 999px;
        margin-bottom: 16px;
    }
    .clineva-cta-title {
        font-size: 32px;
        font-weight: 800;
        line-height: 1.25;
        color: #FFFFFF;
        margin-bottom: 14px;
        letter-spacing: -0.3px;
    }
    .clineva-cta-desc {
        font-size: 15.5px;
        line-height: 1.7;
        color: #CBD5E1;
        margin-bottom: 28px;
        max-width: 620px;
    }
    .clineva-map-card {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        padding: 16px;
        backdrop-filter: blur(10px);
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .clineva-map-card:hover {
        border-color: rgba(56, 189, 248, 0.4);
        transform: translateY(-2px);
    }
    .clineva-map-frame {
        width: 100%;
        height: 190px;
        border: 0;
        border-radius: 10px;
        display: block;
    }
    .clineva-cta-actions {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }
    .clineva-btn-primary {
        background: #0077C8;
        color: #FFFFFF !important;
        padding: 13px 26px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        transition: all 0.25s ease;
        box-shadow: 0 4px 14px rgba(0, 119, 200, 0.4);
    }
    .clineva-btn-primary:hover {
        background: #005FA3;
        transform: translateY(-2px);
    }
    .clineva-btn-secondary {
        background: rgba(255, 255, 255, 0.12);
        color: #FFFFFF !important;
        border: 1px solid rgba(255, 255, 255, 0.25);
        padding: 13px 24px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        transition: all 0.25s ease;
    }
    .clineva-btn-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: #FFFFFF;
        transform: translateY(-2px);
    }
    @media (max-width: 991px) {
        .clineva-cta-block {
            padding: 32px 24px;
            margin: 30px 0;
        }
        .clineva-cta-title {
            font-size: 25px;
        }
        .clineva-map-frame {
            height: 170px;
        }
    }
</style>

<div class="tf-container">
    <div class="clineva-cta-block">
        <div class="row align-items-center g-4">
            
            <!-- Left: Headline, Subtitle & Action Buttons -->
            <div class="col-lg-7">
                <span class="clineva-cta-badge">
                    <i class="icon-location-dot"></i> {{ $siteSettings['cta_location_badge'] ?? 'Turbhe MIDC, Navi Mumbai, India' }}
                </span>
                
                <h2 class="clineva-cta-title">
                    {{ $siteSettings['cta_title'] ?? 'Accelerate Your Clinical Studies with Clineva' }}
                </h2>
                
                <p class="clineva-cta-desc">
                    {{ $siteSettings['cta_subtitle'] ?? 'Partner with our GCP-compliant CRO network for Phase I–IV trials, bioanalytical studies, BA/BE testing, and CDSCO regulatory intelligence.' }}
                </p>

                <div class="clineva-cta-actions">
                    <a href="{{ $siteSettings['cta_btn_url'] ?? route('contact') }}" class="clineva-btn-primary">
                        <span>{{ $siteSettings['cta_btn_text'] ?? 'Schedule Sponsor Consultation' }}</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}" class="clineva-btn-secondary">
                        <i class="icon-phone"></i>
                        <span>{{ $siteSettings['cta_secondary_btn_text'] ?? 'Call Our Scientists' }}</span>
                    </a>
                </div>
            </div>

            <!-- Right: Interactive Location & Google Map Widget -->
            <div class="col-lg-5">
                <div class="clineva-map-card">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
                        <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #38BDF8; letter-spacing: 0.5px;">
                            <i class="icon-map-pin"></i> Research Headquarters
                        </span>
                        <a href="{{ $siteSettings['google_map_directions_url'] ?? 'https://maps.google.com/?q=D-318,+Phase+II,+Turbhe+MIDC,+TTC+Industrial+Area,+Navi+Mumbai,+Maharashtra+400705' }}" target="_blank" rel="noopener" style="font-size: 12px; color: #FFFFFF; font-weight: 700; text-decoration: underline;">
                            Get Directions &rarr;
                        </a>
                    </div>
                    
                    <iframe class="clineva-map-frame" 
                            src="{{ $siteSettings['google_map_embed'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8385078502014!2d73.01893427599026!3d19.070798952136015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c146e29788d7%3A0x6b44766ecad7f202!2sTurbhe%20MIDC%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin' }}" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <div style="margin-top: 10px; font-size: 12px; color: #CBD5E1; line-height: 1.4;">
                        {{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
