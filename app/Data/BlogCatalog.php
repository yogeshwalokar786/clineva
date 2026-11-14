<?php

namespace App\Data;

class BlogCatalog
{
    /**
     * Get all clinical research blog articles.
     */
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ich-gcp-e6-r3-modernization-clinical-trials',
                'title' => 'ICH GCP E6 (R3) Modernization: How Global Sponsors Are Structuring Agile, Risk-Based Clinical Trials in 2026',
                'category' => 'regulatory-gcp',
                'category_name' => 'Regulatory & GCP',
                'category_color' => '#059669', // Emerald
                'date' => '12 Nov 2026',
                'iso_date' => '2026-11-12',
                'read_time' => '7 min read',
                'image' => 'image/blog/tf-post-absolute-1.jpg',
                'featured' => true,
                'author' => [
                    'name' => 'Dr. Sunita Kulkarni',
                    'role' => 'VP, Clinical Regulatory Affairs',
                    'avatar' => 'image/avatar/box-agent-1.jpg'
                ],
                'excerpt' => 'An executive breakdown of the ICH GCP E6 (R3) draft principles, focusing on risk-based monitoring (RBM), electronic source data verification (eSource), decentralized trial governance, and investigator oversight obligations.',
                'tags' => ['ICH-GCP', 'Regulatory', 'Risk-Based Monitoring', 'Phase I-IV', 'Trial Governance'],
                'content' => [
                    'intro' => 'The forthcoming finalization of ICH GCP E6 (R3) represents the most comprehensive modernization of Good Clinical Practice standards in nearly two decades. Driven by rapid advances in electronic data capture, decentralized clinical trial (DCT) architectures, and complex adaptive trial designs, the revised guideline moves beyond prescriptive tick-box checklists toward a holistic, risk-proportionate quality management paradigm.',
                    'section1_title' => 'From Retrospective Auditing to Quality-by-Design (QbD)',
                    'section1_body' => 'Under ICH GCP E6 (R3), clinical study protocols must embed Quality-by-Design (QbD) principles from inception. Sponsors and CROs are expected to prospectively identify "Critical to Quality" (CtQ) factors—patient safety endpoints, informed consent workflows, and primary efficacy variables—and focus monitoring efforts where deviations pose genuine risks to trial integrity.',
                    'section2_title' => 'Decentralized Elements & Investigator Oversight',
                    'section2_body' => 'A pivotal enhancement in R3 is the explicit regulatory framework for remote trial conduct. The guideline clarifies that while investigators may utilize digital health technologies (DHTs), wearable biosensors, and home health nursing visits, the ultimate responsibility for clinical decisions, adverse event adjudication, and patient welfare remains firmly with the Principal Investigator (PI).',
                    'quote' => 'ICH GCP E6 (R3) is not merely an updated compliance document—it is a modern operational blueprint that enables clinical sponsors to run faster, safer, and more patient-centric trials globally.',
                    'section3_title' => 'Electronic Source Records (eSource) and Data Lineage',
                    'section3_body' => 'With clinical data now originating directly from electronic health records (EHR), connected medical devices, and patient portals, the guideline mandates clear audit trails, robust data provenance, and validated cloud systems that ensure ALCOA++ standards are preserved end-to-end.',
                    'takeaways' => [
                        'Mandatory identification of Critical-to-Quality (CtQ) factors during protocol authoring.',
                        'Transition from 100% Source Data Verification (SDV) to targeted, centralized statistical monitoring.',
                        'Formalized governance models for hybrid and decentralized clinical trial operations.',
                        'Heightened auditability requirements for electronic systems, DHTs, and digital endpoints.'
                    ]
                ]
            ],
            [
                'id' => 2,
                'slug' => 'navigating-usfda-ema-bioequivalence-complex-generics',
                'title' => 'Navigating USFDA & EMA Bioequivalence Guidelines for Complex Injectable & Oral Generics',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Studies',
                'category_color' => '#0284C7', // Sky Blue
                'date' => '08 Nov 2026',
                'iso_date' => '2026-11-08',
                'read_time' => '6 min read',
                'image' => 'image/blog/tf-port-grid-1.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Dr. Ramesh Joshi',
                    'role' => 'Head of Bioanalytical Sciences',
                    'avatar' => 'image/avatar/box-agent-2.jpg'
                ],
                'excerpt' => 'Strategic bioequivalence study designs to satisfy stringent regulatory expectations for highly variable drugs (HVDs), narrow therapeutic index compounds, and weight-of-evidence dossiers.',
                'tags' => ['Bioequivalence', 'BA/BE', 'USFDA', 'EMA', 'Pharmacokinetics', 'Complex Generics'],
                'content' => [
                    'intro' => 'Demonstrating bioequivalence (BE) for complex drug products—such as long-acting injectables, liposomal formulations, and narrow therapeutic index (NTI) agents—presents distinctive scientific and regulatory hurdles under USFDA and EMA review frameworks.',
                    'section1_title' => 'Study Design Considerations for Highly Variable Drugs',
                    'section1_body' => 'For drugs with intra-subject variability exceeding 30%, partial or fully replicated crossover designs (e.g., 3-period or 4-period) are essential to allow reference-scaled average bioequivalence (RSABE) methodologies, optimizing sample size while safeguarding statistical rigor.',
                    'section2_title' => 'Bioanalytical Precision and Analyte Selection',
                    'section2_body' => 'Regulators increasingly scrutinize the biological relevance of parent drug versus active metabolite quantification. Clineva\'s bioanalytical protocols deploy validated LC-MS/MS methods capable of sub-picogram sensitivity to capture true terminal elimination kinetics.',
                    'quote' => 'Bioequivalence for complex dosage forms is no longer a simple pharmacokinetic exercise; it demands an integrated understanding of biopharmaceutics, formulation release kinetics, and statistical scaling.',
                    'section3_title' => 'Overcoming Common Filing Deficiencies',
                    'section3_body' => 'Common regulatory Complete Response Letters (CRLs) cite inadequate statistical power, inappropriate washout durations, and unaddressed food-effect interactions. Early regulatory consultation and pilot PK studies mitigate these submission risks.',
                    'takeaways' => [
                        'Deploy replicated crossover designs for compounds with intra-subject CV > 30%.',
                        'Validate LC-MS/MS assays with strict adherence to ICH M10 bioanalytical guidance.',
                        'Account for non-fasting conditions and fed-state pharmacokinetics early in development.',
                        'Prepare comprehensive In Vitro - In Vivo Correlation (IVIVC) data packages where applicable.'
                    ]
                ]
            ],
            [
                'id' => 3,
                'slug' => 'decentralized-clinical-trials-hybrid-monitoring',
                'title' => 'Hybrid & Decentralized Clinical Trials: Accelerating Patient Recruitment While Safeguarding Data Integrity',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'category_color' => '#007E8A', // Teal Primary
                'date' => '03 Nov 2026',
                'iso_date' => '2026-11-03',
                'read_time' => '5 min read',
                'image' => 'image/blog/tf-port-grid-2.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Priya Nair',
                    'role' => 'Director of Clinical Operations',
                    'avatar' => 'image/avatar/box-agent-3.jpg'
                ],
                'excerpt' => 'Practical lessons in combining remote patient visits, direct-to-patient IMP shipments, and centralized statistical monitoring to shorten trial timelines by up to 30%.',
                'tags' => ['Clinical Operations', 'Decentralized Trials', 'Patient Recruitment', 'Centralized Monitoring'],
                'content' => [
                    'intro' => 'Decentralized Clinical Trials (DCTs) are transforming trial accessibility by bringing clinical research directly into patients\' daily lives. When implemented thoughtfully through a hybrid model, sponsors achieve faster enrollment, higher retention, and more diverse patient cohorts.',
                    'section1_title' => 'The Hybrid Advantage: Site Expertise Meets Patient Convenience',
                    'section1_body' => 'Rather than eliminating physical investigational sites, hybrid trial models empower experienced clinical investigator sites with remote capabilities—such as eConsent, telemedicine visits, and mobile nursing services—ensuring strong patient-physician rapport remains intact.',
                    'section2_title' => 'Managing Investigational Product (IP) Cold-Chain Direct to Patient',
                    'section2_body' => 'Direct-to-patient (DtP) shipment of investigational medicinal products requires temperature-controlled courier logistics, automated chain-of-custody tracking, and robust accountability verification upon delivery.',
                    'quote' => 'Patient-centricity in clinical research succeeds when technology simplifies participation without adding administrative friction to clinical sites or investigators.',
                    'section3_title' => 'Centralized Statistical Monitoring in Real-Time',
                    'section3_body' => 'Remote data collection necessitates continuous risk-based surveillance to detect reporting anomalies, data clustering, or protocol deviations across participating geographic regions.',
                    'takeaways' => [
                        'Hybrid models consistently achieve 30% faster enrollment compared to purely site-bound studies.',
                        'eConsent platforms improve patient comprehension and lower consent-related audit findings.',
                        'Validated direct-to-patient cold chains ensure IP integrity for temperature-sensitive biologics.',
                        'Centralized data monitoring flags outliers weeks before traditional onsite monitoring visits.'
                    ]
                ]
            ],
            [
                'id' => 4,
                'slug' => 'high-throughput-lc-msms-bioanalysis-clinical-trials',
                'title' => 'High-Throughput LC-MS/MS Bioanalysis: Overcoming Matrix Effects in PK/PD Studies',
                'category' => 'bioanalytics-pk',
                'category_name' => 'Bioanalytical & PK',
                'category_color' => '#6366F1', // Indigo
                'date' => '28 Oct 2026',
                'iso_date' => '2026-10-28',
                'read_time' => '6 min read',
                'image' => 'image/blog/tf-port-grid-3.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Dr. Amit Deshmukh',
                    'role' => 'Principal Scientist, Mass Spectrometry',
                    'avatar' => 'image/avatar/box-agent-4.jpg'
                ],
                'excerpt' => 'Ensuring assay ruggedness, lower limits of quantitation (LLOQ), and cross-validation across complex biological matrices compliant with ICH M10 guidance.',
                'tags' => ['LC-MS/MS', 'Bioanalysis', 'Mass Spectrometry', 'PK/PD', 'ICH M10'],
                'content' => [
                    'intro' => 'Quantitative determination of small molecule drug candidates and endogenous biomarkers in complex biological matrices (human plasma, serum, urine, and cerebrospinal fluid) demands state-of-the-art liquid chromatography-tandem mass spectrometry (LC-MS/MS) methodologies.',
                    'section1_title' => 'Diagnosing and Mitigating Ion Suppression and Matrix Effects',
                    'section1_body' => 'Co-eluting endogenous phospholipids and mobile phase additives frequently cause ion suppression or enhancement. Clineva employs solid-phase extraction (SPE) and stable-isotope-labeled internal standards (SIL-IS) to eliminate matrix bias across diverse patient samples.',
                    'section2_title' => 'Compliance with ICH M10 Bioanalytical Method Validation',
                    'section2_body' => 'With global harmonization under ICH M10, regulatory filings require standardized assessments for selectivity, carryover, benchtop stability, freeze-thaw cycles, and incurred sample reanalysis (ISR).',
                    'quote' => 'Bioanalytical data forms the quantitative backbone of every clinical regulatory submission; uncompromising analytical validation is non-negotiable.',
                    'section3_title' => 'High-Throughput Sample Processing for Large-Scale Trials',
                    'section3_body' => 'Automated 96-well plate handling systems coupled with ultra-high-performance liquid chromatography (UHPLC) allow our laboratory to process upwards of 1,200 clinical samples daily with seamless LIMS tracking.',
                    'takeaways' => [
                        'Rigorous pre-validation evaluation of matrix factors across at least 6 unique biological lots.',
                        'Utilization of deuterated or 13C-labeled internal standards to track ionization variations.',
                        'Comprehensive ISR program to confirm assay reproducibility on authentic in-study samples.',
                        'End-to-end 21 CFR Part 11 compliant audit trails in laboratory instrumentation.'
                    ]
                ]
            ],
            [
                'id' => 5,
                'slug' => 'strategic-clinical-protocol-design-preventing-amendments',
                'title' => 'Strategic Clinical Protocol Design: Preventing Costly Amendments in Phase II/III Studies',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'category_color' => '#007E8A', // Teal
                'date' => '22 Oct 2026',
                'iso_date' => '2026-10-22',
                'read_time' => '5 min read',
                'image' => 'image/blog/tf-port-grid-4.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Dr. Sunita Kulkarni',
                    'role' => 'VP, Clinical Regulatory Affairs',
                    'avatar' => 'image/avatar/box-agent-1.jpg'
                ],
                'excerpt' => 'How upfront statistical simulation, realistic eligibility criteria, and patient burden assessments eliminate mid-trial protocol amendments and budget escalations.',
                'tags' => ['Protocol Design', 'Phase II/III', 'Clinical Operations', 'Statistical Modeling'],
                'content' => [
                    'intro' => 'Industry data shows that over 65% of Phase II and Phase III clinical trials require at least one substantial protocol amendment—costing an average of $500,000 and delaying database lock by months. Proactive protocol engineering prevents these costly disruptions.',
                    'section1_title' => 'Root Causes of Protocol Amendments',
                    'section1_body' => 'Unrealistic inclusion/exclusion criteria, excessively burdensome assessment schedules, and ambiguity in endpoint definitions account for the vast majority of protocol amendments. Engaging investigative sites during the drafting phase resolves these issues before submission.',
                    'section2_title' => 'Statistical Simulation & Adaptive Design Flexibility',
                    'section2_body' => 'Pre-specifying sample size re-estimation or futility analyses within an adaptive protocol framework allows necessary trial modifications without triggering disruptive unplanned amendments.',
                    'quote' => 'A protocol should be designed with the clinic floor in mind, balancing scientific depth with operational realism.',
                    'section3_title' => 'Patient Burden Indexing',
                    'section3_body' => 'Evaluating patient visit duration, invasive sampling frequency, and transportation requirements ensures study protocols attract and retain willing participants throughout the study timeline.',
                    'takeaways' => [
                        'Benchmark eligibility criteria against real-world patient registry data.',
                        'Conduct mock investigator review sessions to identify operational bottlenecks.',
                        'Pre-specify adaptive rules to accommodate emerging trial data cleanly.',
                        'Streamline secondary exploratory endpoints that inflate site administrative workloads.'
                    ]
                ]
            ],
            [
                'id' => 6,
                'slug' => 'scientific-rigor-medico-marketing-publications',
                'title' => 'Translating Complex Clinical Study Data into High-Impact Medical Publications',
                'category' => 'medico-marketing',
                'category_name' => 'Medico-Marketing',
                'category_color' => '#8B5CF6', // Purple
                'date' => '15 Oct 2026',
                'iso_date' => '2026-10-15',
                'read_time' => '4 min read',
                'image' => 'image/blog/tf-port-grid-5.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Dr. Neha Verma',
                    'role' => 'Lead Medical Writer & Publication Strategist',
                    'avatar' => 'image/avatar/box-agent-5.jpg'
                ],
                'excerpt' => 'Best practices for ICMJE compliance, Good Publication Practice (GPP 2022), and developing clear manuscripts that withstand rigorous peer review.',
                'tags' => ['Medical Writing', 'Publications', 'ICMJE', 'Medico-Marketing', 'GPP 2022'],
                'content' => [
                    'intro' => 'A successful clinical development program culminates in the clear, transparent, and authoritative dissemination of scientific findings to the global medical community. Transforming raw Clinical Study Reports (CSRs) into high-impact peer-reviewed manuscripts requires nuanced scientific expertise.',
                    'section1_title' => 'Adhering to GPP 2022 and ICMJE Guidelines',
                    'section1_body' => 'Ethical medical publication requires strict observance of Good Publication Practice (GPP 2022) guidelines, transparent author contributions, and timely pre-registration of trial outcomes on ClinicalTrials.gov and clinical registries.',
                    'section2_title' => 'Effective Scientific Visualizations',
                    'section2_body' => 'Journal editors and clinicians prioritize intuitive graphical abstracts, forest plots, and Kaplan-Meier curves that convey primary safety and efficacy signals at a glance without statistical obfuscation.',
                    'quote' => 'Ethical, high-impact medical writing bridges the gap between raw statistical datasets and actionable clinical practice.',
                    'section3_title' => 'Target Journal Selection and Strategy',
                    'section3_body' => 'Matching study scope, novelty, and clinical impact with appropriate indexed medical journals optimizes acceptance rates and minimizes publication delays.',
                    'takeaways' => [
                        'Ensure complete alignment with ICMJE authorship criteria.',
                        'Develop compelling graphical abstracts to maximize manuscript engagement.',
                        'Disclose all sponsor funding, author contributions, and data availability statements.',
                        'Maintain consistent scientific messaging between CSRs and published articles.'
                    ]
                ]
            ],
            [
                'id' => 7,
                'slug' => 'pharmacovigilance-signal-detection-post-marketing',
                'title' => 'Modern Pharmacovigilance: Automated Signal Detection & Risk Management in Global Post-Marketing Surveillance',
                'category' => 'regulatory-gcp',
                'category_name' => 'Regulatory & GCP',
                'category_color' => '#059669', // Emerald
                'date' => '09 Oct 2026',
                'iso_date' => '2026-10-09',
                'read_time' => '6 min read',
                'image' => 'image/blog/tf-port-grid-6.jpg',
                'featured' => false,
                'author' => [
                    'name' => 'Dr. Ramesh Joshi',
                    'role' => 'Head of Bioanalytical Sciences',
                    'avatar' => 'image/avatar/box-agent-2.jpg'
                ],
                'excerpt' => 'Harnessing structured safety databases, disproportionality analysis, and CIOMS/PSUR reporting workflows to stay compliant with global regulatory safety mandates.',
                'tags' => ['Pharmacovigilance', 'Safety Surveillance', 'Signal Detection', 'GVP Modules'],
                'content' => [
                    'intro' => 'Post-marketing drug safety has transitioned from passive adverse event intake to proactive, data-driven signal detection. Sponsors must maintain vigilant safety oversight to comply with EMA GVP modules and USFDA post-approval requirements.',
                    'section1_title' => 'Statistical Disproportionality Scoring',
                    'section1_body' => 'Modern safety surveillance employs Proportional Reporting Ratio (PRR) and Bayesian Confidence Propagation Neural Network (BCPNN) algorithms to uncover subtle safety signals amidst millions of spontaneous adverse event reports.',
                    'section2_title' => 'Harmonized Periodic Safety Update Reports (PSUR/PBRER)',
                    'section2_body' => 'Synthesizing global risk-benefit evaluations requires seamless cross-functional alignment between clinical operations, biostatistics, and regulatory safety personnel.',
                    'quote' => 'Patient safety is an enduring lifecycle commitment that begins in early phase trials and deepens throughout commercial availability.',
                    'section3_title' => 'Risk Evaluation and Mitigation Strategies (REMS)',
                    'section3_body' => 'Designing workable risk management plans (RMPs) protects patients while preserving product access for appropriate clinical populations.',
                    'takeaways' => [
                        'Implement automated disproportionality alerts within safety databases.',
                        'Ensure strict compliance with 15-day expedited reporting windows for serious adverse events.',
                        'Align local safety affiliates with centralized Global Safety Officers (GSO).',
                        'Proactively monitor real-world evidence (RWE) registries for off-label safety trends.'
                    ]
                ]
            ]
        ];
    }

    /**
     * Get the featured article.
     */
    public static function featured(): array
    {
        $all = self::all();
        foreach ($all as $article) {
            if (!empty($article['featured'])) {
                return $article;
            }
        }
        return $all[0];
    }

    /**
     * Get recent articles.
     */
    public static function recent(int $limit = 3): array
    {
        return array_slice(self::all(), 0, $limit);
    }

    /**
     * Get articles filtered by category.
     */
    public static function getByCategory(string $category): array
    {
        if ($category === 'all' || empty($category)) {
            return self::all();
        }

        return array_values(array_filter(self::all(), function ($article) use ($category) {
            return $article['category'] === $category;
        }));
    }

    /**
     * Find article by slug.
     */
    public static function findBySlug(?string $slug): ?array
    {
        if (empty($slug)) {
            return null;
        }

        foreach (self::all() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }

        return null;
    }

    /**
     * Get related articles for an article.
     */
    public static function related(string $category, string $currentSlug, int $limit = 2): array
    {
        $articles = array_filter(self::all(), function ($article) use ($category, $currentSlug) {
            return $article['slug'] !== $currentSlug;
        });

        // First sort by matching category
        usort($articles, function ($a, $b) use ($category) {
            $aMatch = $a['category'] === $category ? 1 : 0;
            $bMatch = $b['category'] === $category ? 1 : 0;
            return $bMatch <=> $aMatch;
        });

        return array_slice(array_values($articles), 0, $limit);
    }

    /**
     * Get list of research categories with counts.
     */
    public static function categories(): array
    {
        $counts = [];
        foreach (self::all() as $article) {
            $cat = $article['category'];
            $counts[$cat] = ($counts[$cat] ?? 0) + 1;
        }

        return [
            [
                'slug' => 'all',
                'name' => 'All Insights',
                'count' => count(self::all())
            ],
            [
                'slug' => 'clinical-trials',
                'name' => 'Clinical Trials',
                'count' => $counts['clinical-trials'] ?? 0
            ],
            [
                'slug' => 'babe-services',
                'name' => 'BA/BE Studies',
                'count' => $counts['babe-services'] ?? 0
            ],
            [
                'slug' => 'regulatory-gcp',
                'name' => 'Regulatory & GCP',
                'count' => $counts['regulatory-gcp'] ?? 0
            ],
            [
                'slug' => 'bioanalytics-pk',
                'name' => 'Bioanalytical & PK',
                'count' => $counts['bioanalytics-pk'] ?? 0
            ],
            [
                'slug' => 'medico-marketing',
                'name' => 'Medico-Marketing',
                'count' => $counts['medico-marketing'] ?? 0
            ],
        ];
    }
}
