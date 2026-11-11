<?php

namespace App\Data;

class ServicesCatalog
{
    public static function categories(): array
    {
        return [
            'clinical-trials' => [
                'id' => 'clinical-trials',
                'name' => 'Clinical Trials',
                'tagline' => 'Integrated Phase I–IV Clinical Research Solutions',
                'description' => 'End-to-end clinical research operations, monitoring, quality assurance, medical writing, eTMF, regulatory affairs, and biostatistics ensuring data integrity and the shortest route to market.',
                'icon' => 'icon-stethoscope',
            ],
            'babe-services' => [
                'id' => 'babe-services',
                'name' => 'BA/BE Services',
                'tagline' => 'Bioavailability & Bioequivalence Oversight',
                'description' => 'Comprehensive CRO qualification, BA/BE medical writing, independent study monitoring, regulatory guidance, and GCP/GLP auditing across global facilities.',
                'icon' => 'icon-atom-simple',
            ],
            'medico-marketing' => [
                'id' => 'medico-marketing',
                'name' => 'Medical Affairs & Medico-Marketing',
                'tagline' => 'Scientific Communications & Brand Enablement',
                'description' => 'Strategic product launch campaigns, advisory board content, e-detailing, 2D/3D medical animations, and global scientific conference support.',
                'icon' => 'icon-globe',
            ],
        ];
    }

    public static function all(): array
    {
        return [
            'clinical-operations' => [
                'slug' => 'clinical-operations',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Clinical Operations',
                'subtitle' => 'End-to-End Integrated Clinical Trial Execution',
                'icon' => 'icon-stethoscope',
                'image' => 'image/section/img-services-details-1.jpg',
                'short_desc' => 'Professional management of all clinical trial aspects with quality and data integrity at the forefront.',
                'paragraphs' => [
                    "Clineva's dedicated team can help manage your most important clinical trials. From start to finish, we'll ensure that all aspects of your trial are professionally handled with quality and integrity of data always at the forefront while establishing the shortest route to market for your product.",
                ],
                'deliverables_title' => 'Take a look at our integrated clinical research services:',
                'deliverables' => [
                    'Early Phase Clinical Studies',
                    'Late Phase Clinical Studies',
                    'Epidemiological Studies',
                    'Real World Evidence Studies',
                    'PMS Studies',
                    'Short Surveys',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Full Lifecycle Oversight', 'desc' => 'Seamless coordination from study startup through closeout and final reporting.'],
                    ['title' => 'Data Integrity Focus', 'desc' => 'Rigorous quality controls embedded at every operational touchpoint.'],
                    ['title' => 'Accelerated Market Route', 'desc' => 'Streamlined site execution and timeline management for faster product milestones.'],
                ],
            ],

            'project-management' => [
                'slug' => 'project-management',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Project Management',
                'subtitle' => 'On-Time Delivery Within Budget & Highest Quality',
                'icon' => 'icon-suitcase',
                'image' => 'image/section/img-section-lab-h1.jpg',
                'short_desc' => 'Meticulous trial management ensuring on-time delivery within budgets and highest quality output.',
                'paragraphs' => [
                    'Project Management is our major competence. Our team works effectively and meticulously to manage all critical aspects of the trial to ensure on-time delivery of results, within reasonable budgets and with the highest quality output.',
                ],
                'deliverables_title' => 'Our Clinical Trial Management Services include:',
                'deliverables' => [
                    'Clinical Study Contracts, Budgets and Project Timelines',
                    'Work Directly with IRBs and Competent Authorities on behalf of Sponsor',
                    'On-site Monitoring Management',
                    'Training for CRAs and site personnel on study-related procedures',
                    'Inspection & Audit Readiness',
                    'CAPA, Risk Assessment and Mitigation Plans',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Milestone Discipline', 'desc' => 'Proactive tracking of contracts, budgets, and critical study timelines.'],
                    ['title' => 'Sponsor Representation', 'desc' => 'Direct coordination with Ethics Committees, IRBs, and regulatory bodies.'],
                    ['title' => 'Risk Mitigation & CAPA', 'desc' => 'Continuous inspection readiness backed by structured risk management plans.'],
                ],
            ],

            'clinical-trial-monitoring' => [
                'slug' => 'clinical-trial-monitoring',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Clinical Trial Monitoring',
                'subtitle' => 'Protecting Patient Safety, Rights & Data Integrity',
                'icon' => 'icon-diagnostic',
                'image' => 'image/section/img-services-details-2.jpg',
                'short_desc' => 'Therapeutically aligned, skilled monitors ensuring complete site control and GCP compliance.',
                'paragraphs' => [
                    "Clineva's team ensures complete control of the monitoring services at clinical sites. Our monitors are highly skilled, therapeutically aligned, trained, and committed to excellence in every study with the highest standards of focus towards protecting patient safety, well-being, rights and data integrity.",
                ],
                'deliverables_title' => 'Our monitoring services include:',
                'deliverables' => [
                    'Site Feasibility, Qualification & Selection Support',
                    'Initiation, Routine Monitoring & Closeout Visits',
                    'Source Documentation Review & Data Verification',
                    'Risk-Based Monitoring Services',
                    'Participation & Presentation at Investigator Sites',
                    'Study Supply Inventory',
                    'Reporting of Adverse Events & Serious Adverse Events',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Therapeutically Aligned CRAs', 'desc' => 'Monitors matched to your therapeutic indication and protocol complexity.'],
                    ['title' => 'Risk-Based Monitoring', 'desc' => 'Targeted SDV and centralized data review to spot site trends early.'],
                    ['title' => 'Subject Safety Priority', 'desc' => 'Strict oversight of informed consent, AE/SAE reporting, and GCP adherence.'],
                ],
            ],

            'medical-monitoring' => [
                'slug' => 'medical-monitoring',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Medical Monitoring',
                'subtitle' => 'Dedicated Medical & Safety Oversight Across Study Phases',
                'icon' => 'icon-safety',
                'image' => 'image/section/img-services-details-3.jpg',
                'short_desc' => 'Medical development planning, safety management, SEC presentations, and MedDRA/ATC coding.',
                'paragraphs' => [
                    'Clineva provides experienced medical monitors who work closely with sponsors, investigators, and regulatory authorities to oversee clinical development strategy, evaluate emerging safety and efficacy trends, and protect trial participants.',
                ],
                'deliverables_title' => 'Our Medical Monitoring scope includes:',
                'deliverables' => [
                    'Preparation and review of clinical development plan of molecules',
                    'Assist and review clinical study design for different phases of study',
                    'Preparation of Medical Monitoring (MM) and Safety Management (SM) plans of clinical studies',
                    'Review/analyze safety/efficacy trends for data generated',
                    'Prepare/advise regulatory Subject Expert Committee (SEC) presentations and other documents',
                    'Review clinical study documents – IB, ICF, PIS, CSR etc.',
                    'Assist in safety reporting of adverse events',
                    'Providing protocol and therapeutic area trainings to all stakeholders',
                    'Professional communications with regulatory, ethics committee and site queries',
                    'Support MedDRA/ATC codings',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Clinical & Safety Plans', 'desc' => 'Structured MM and SM frameworks tailored to every phase of development.'],
                    ['title' => 'SEC & Query Support', 'desc' => 'Expert medical guidance for regulatory SEC reviews and ethics committee queries.'],
                    ['title' => 'Medical Coding Precision', 'desc' => 'Standardized MedDRA and ATC coding aligned with pharmacovigilance workflows.'],
                ],
            ],

            'quality-assurance' => [
                'slug' => 'quality-assurance',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Quality Assurance',
                'subtitle' => 'Ongoing Compliance Assessments & GCP Audits',
                'icon' => 'icon-lock',
                'image' => 'image/section/img-section-why-p-about.jpg',
                'short_desc' => 'Independent internal, project, vendor, and pre-inspection audits ensuring GCP compliance.',
                'paragraphs' => [
                    'We have quality assurance auditors who are engaged in ongoing quality and compliance assessments of all the services we offer for your clinical studies. In particular, we regularly conduct internal process audits to ensure compliance with applicable good clinical practices, standard operating procedures, vendor qualifications, and commitments to clients – all of these are for the purpose of consistently ensuring the quality of our services remains at the highest level.',
                ],
                'deliverables_title' => 'Our Quality Assurance and Compliance Services focus on:',
                'deliverables' => [
                    'Project Audits: Investigator files/site audits, Trial Master File (TMF) audits, Database audits, Statistical report audits, Clinical Study Report audits, and Regulatory submission audits',
                    'Process Audits',
                    'Vendor Audits',
                    'Pre-inspection Support',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'End-to-End Audit Coverage', 'desc' => 'From investigator sites and TMFs to databases and final regulatory submissions.'],
                    ['title' => 'SOP & GCP Adherence', 'desc' => 'Continuous verification against ICH-GCP and global regulatory standards.'],
                    ['title' => 'Pre-Inspection Readiness', 'desc' => 'Mock inspections and remediation guidance to keep sponsors inspection-ready.'],
                ],
            ],

            'medical-writing' => [
                'slug' => 'medical-writing',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Medical Writing',
                'subtitle' => 'Regulatory-Ready Scientific & Clinical Documentation',
                'icon' => 'icon-file-word',
                'image' => 'image/section/img-services-details-1.jpg',
                'short_desc' => 'Protocols, ICF/CRF/PIS, CSRs, Briefing Books, eCTD clinical summaries, and safety narratives.',
                'paragraphs' => [
                    'Medical Writing Services at Clineva is uniquely qualified to help you compile, organize, write, edit, and produce a wide range of medical and scientific documentation required to support your clinical development programs.',
                ],
                'deliverables_title' => 'Our Medical Writing Services include:',
                'deliverables' => [
                    'Protocol Development',
                    'Informed Consent Forms (ICF), Case Report Forms (CRF), Patient Information Sheet (PIS)',
                    'Clinical Study Reports (CSR)',
                    'Briefing Books, Direct Healthcare Professional Communications (DHPC)',
                    'Clinical Summary and Clinical Overview documents for eCTD submissions',
                    'Patient Safety Narratives',
                    'Literature Search Submissions',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'eCTD Submission Ready', 'desc' => 'ICH-compliant Clinical Summaries, Overviews, and Briefing Books.'],
                    ['title' => 'Rigorous QC Review', 'desc' => 'Multi-level scientific, statistical, and editorial verification before delivery.'],
                    ['title' => 'Therapeutic Clarity', 'desc' => 'Clear, accurate narratives translating complex trial findings for regulators.'],
                ],
            ],

            'etmf-management' => [
                'slug' => 'etmf-management',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'eTMF Management',
                'subtitle' => 'Electronic Trial Master File, e-Archiving & Data Storage Solutions',
                'icon' => 'icon-file-pdf',
                'image' => 'image/section/img-section-lab-h1.jpg',
                'short_desc' => 'Inspection-ready eTMF solutions covering scanning, electronic processing, remapping, and archiving.',
                'paragraphs' => [
                    'Clineva is a specialist provider of electronic trial master file (eTMF) solutions and other support services to the global clinical research market; we offer a unique combination of technology, quality and services that deliver a range of flexible, targeted solutions to the clinical research industry. The company promotes TMF excellence by focusing on efficient management of clinical trial documents, both paper and electronic documents.',
                    'Clineva will create and maintain an inspection-ready eTMF that you can count on. By working with large and small organisations on a global level, the team here at Clineva has gained a detailed understanding of accurate and complete TMF, enabling the evaluation of a clinical trial.',
                ],
                'deliverables_title' => '',
                'deliverables' => [],
                'subsections' => [
                    [
                        'title' => 'Scanning & Paper Processing',
                        'desc' => 'Clineva has a highly precise and efficient end-to-end process for scanning, indexing, and remapping clinical research documentation that incorporates thorough quality control and compliance checks at every step. Leveraging experienced trial document administrators and advanced technologies, our proven process offers you fast and accurate scanning, with full audit trail and traceability.',
                    ],
                    [
                        'title' => 'Electronic Document Processing',
                        'desc' => 'Clineva has established the industry benchmark for the efficient and accurate processing of electronic trial documentation. Regardless of your source and destination systems or TMF/file structures, we at Clineva resolve inconsistent or missing metadata as well as corrupted, missing, or encrypted documents. Built-in quality control, expert remapping, and experienced indexing further help ensure the quality and completeness of your TMF.',
                    ],
                    [
                        'title' => 'Expert Remapping & Indexing',
                        'desc' => 'A key component of Clineva document processing services is our unmatched experience in the remapping and indexing of TMF documents. Whether consolidating multiple sources, structures, and file formats to a single TMF utilizing the TMF Reference Model, converting paper documents to a compliant eTMF, or adding additional filing structures and indexing metadata for greater search granularity, Clineva has the expertise you need.',
                    ],
                    [
                        'title' => 'Storage & Archiving',
                        'desc' => 'Regardless of your records retention needs, Clineva provides highly secure and reliable options compliant with the latest regulatory mandates. Obtain ready access to secure short-term records, and enjoy the certainty that long-term TMF archives can be retrieved according to applicable regional directives. We at Clineva can also help you ease the burden of document management and archiving for your investigator sites, allowing them to focus more time and effort on your study and GCP—while preserving data integrity.',
                    ],
                ],
                'highlights' => [
                    ['title' => 'TMF Reference Model', 'desc' => 'Standardized indexing and metadata mapping for effortless inspection navigation.'],
                    ['title' => 'Full Audit Traceability', 'desc' => 'Built-in QC checks across paper digitization and electronic document workflows.'],
                    ['title' => 'Compliant Retention', 'desc' => 'Secure short-term access and long-term regulatory archiving for sites and sponsors.'],
                ],
            ],

            'regulatory-affairs' => [
                'slug' => 'regulatory-affairs',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Regulatory Affairs',
                'subtitle' => 'Navigating DCGI, FDA, EMA & Global Regulatory Requirements',
                'icon' => 'icon-globe',
                'image' => 'image/section/img-services-details-2.jpg',
                'short_desc' => 'Comprehensive regulatory dossier compilation, authority communication, and IP import/export management.',
                'paragraphs' => [
                    'Clineva Regulatory team provides comprehensive support for our Sponsors/Clients to overcome the hurdles linked with the requirements of the DCGI, FDA, EMA and Other Regulatory Bodies.',
                    'We have a remarkable track record of getting on-time approvals for clinical trials from different regulatory jurisdictions. We help our Sponsors/Clients understand the requirements of respective Regulatory Authorities and assist them appropriately to avoid any delay in approval.',
                ],
                'deliverables_title' => '',
                'deliverables' => [],
                'subsections' => [
                    [
                        'title' => 'Compilation of Regulatory Packages',
                        'desc' => 'Preparing regulatory packages for Regulatory Authorities. Coordinating and submitting Protocol or Protocol Amendments. Submitting interim and annual reports.',
                    ],
                    [
                        'title' => 'Communication with Regulatory Authority',
                        'desc' => 'Communication and follow up with competent authorities including DCGI, FDA and EMA. Study and Investigator submissions to Ethics Committees and IRBs. Study Registration on respective registries and other trial databases.',
                    ],
                    [
                        'title' => 'Import/Export Management',
                        'desc' => 'Organization of any required import/export activities for Investigational Products (IP) and other study materials and samples. Management of regulated products. Procurement and import of difficult-to-find reference products.',
                    ],
                ],
                'highlights' => [
                    ['title' => 'On-Time Approvals', 'desc' => 'Proven track record with DCGI, FDA, EMA, and Ethics Committees worldwide.'],
                    ['title' => 'Complete Submissions', 'desc' => 'From initial regulatory packages and amendments to clinical trial registry filings.'],
                    ['title' => 'Logistics & IP Supply', 'desc' => 'Seamless import/export clearance for study supplies, samples, and reference products.'],
                ],
            ],

            'statistical-services' => [
                'slug' => 'statistical-services',
                'category' => 'clinical-trials',
                'category_name' => 'Clinical Trials',
                'title' => 'Statistical Services',
                'subtitle' => 'Biostatistical Analysis, SAP & Regulatory Reporting',
                'icon' => 'icon-advance',
                'image' => 'image/section/img-services-details-3.jpg',
                'short_desc' => 'Expert preparation and review of SAPs, TLFs, and statistical significance analysis for trials.',
                'paragraphs' => [
                    'Clineva provides dedicated biostatistical services for clinical trials, transforming complex clinical datasets into scientifically rigorous, audit-ready insights that support regulatory submissions and clinical decision-making.',
                ],
                'deliverables_title' => 'Our Statistical Services include:',
                'deliverables' => [
                    'Preparation / review of Statistical Analysis Plans (SAP)',
                    'Preparation / review of Tables, Listings, and Figures (TLFs)',
                    'Statistical data analysis for understanding significance',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Methodological Rigor', 'desc' => 'Detailed Statistical Analysis Plans aligned with study endpoints and hypotheses.'],
                    ['title' => 'Submission-Ready TLFs', 'desc' => 'Accurate, clearly structured Tables, Listings, and Figures for CSR integration.'],
                    ['title' => 'Actionable Insights', 'desc' => 'Comprehensive statistical evaluation to establish efficacy and safety significance.'],
                ],
            ],

            'cro-selection' => [
                'slug' => 'cro-selection',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Services',
                'title' => 'CRO Selection',
                'subtitle' => 'GCP & GLP Qualification Audits for BA/BE Partners',
                'icon' => 'icon-cutting-edge',
                'image' => 'image/section/img-section-lab-h1.jpg',
                'short_desc' => 'Independent CRO qualification audits per GCP, GLP, and global regulatory mandates.',
                'paragraphs' => [
                    'We offer CRO Qualification services which help clients across the globe select dependable bioequivalence partners. Our qualified, trained, and experienced Auditors perform Qualification Audits as per GCP, GLP and other regulatory requirements. Our team is fully capable of qualifying CROs for BA/BE Services.',
                ],
                'deliverables_title' => 'Our CRO Selection & Qualification scope includes:',
                'deliverables' => [
                    'Pre-selection GCP and GLP Facility Qualification Audits',
                    'Evaluation of Clinical Ward, Bioanalytical Lab & Archival Systems',
                    'Assessment of SOPs, Quality Management Systems & Regulatory Track Records',
                    'Comprehensive Audit Reports & Vendor Qualification Recommendations',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Global Audit Expertise', 'desc' => 'Experienced auditors evaluating BA/BE centers against international standards.'],
                    ['title' => 'Risk Reduction', 'desc' => 'Verify infrastructure, analytical capability, and compliance before study award.'],
                    ['title' => 'Objective Benchmarking', 'desc' => 'Unbiased vendor comparison to identify the right partner for your molecule.'],
                ],
            ],

            'babe-medical-writing' => [
                'slug' => 'babe-medical-writing',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Services',
                'title' => 'BA/BE Medical Writing',
                'subtitle' => 'Fine-Quality Documentation Delivered Ahead of Timelines',
                'icon' => 'icon-file-word',
                'image' => 'image/section/img-services-details-1.jpg',
                'short_desc' => 'BA/BE protocols, IBs, CRFs, ICFs, SOPs, WPDs, and CSRs with rigorous quality review.',
                'paragraphs' => [
                    'Medical writing is an integral part of our work. Clineva offers medical writing services for bioavailability/bioequivalence (BA/BE) studies which includes study protocol, investigator brochure, CRF, ICF, SOPs, work-practice documents (WPDs) and Clinical Study Report.',
                    'The review process of all documents is very rigorous to deliver the finest quality of documentation. We also make sure the delivery of documents before the timeline.',
                ],
                'deliverables_title' => 'BA/BE Documents Covered:',
                'deliverables' => [
                    'BA/BE Study Protocols',
                    'Investigator Brochures (IB)',
                    'Case Report Forms (CRF) & Informed Consent Forms (ICF)',
                    'Standard Operating Procedures (SOPs) & Work-Practice Documents (WPDs)',
                    'Bioavailability / Bioequivalence Clinical Study Reports (CSR)',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Rigorous QC Review', 'desc' => 'Every protocol, SOP, and CSR undergoes multi-stage scientific and quality checks.'],
                    ['title' => 'Ahead-of-Schedule Delivery', 'desc' => 'Disciplined turnaround workflows ensuring documentation is delivered before deadline.'],
                    ['title' => 'Submission Precision', 'desc' => 'Aligned with bioequivalence guidelines of USFDA, EMA, and DCGI.'],
                ],
            ],

            'study-monitoring' => [
                'slug' => 'study-monitoring',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Services',
                'title' => 'Study Monitoring',
                'subtitle' => 'Independent BA/BE Oversight for Subject Safety & Valid Data',
                'icon' => 'icon-eye',
                'image' => 'image/section/img-services-details-2.jpg',
                'short_desc' => 'Qualified monitors overseeing BA/BE clinical & bioanalytical execution worldwide.',
                'paragraphs' => [
                    'We offer various clinical study monitoring services which help clients across the globe maintain strict oversight over their bioavailability and bioequivalence trials. Our qualified, trained, and experienced monitors conduct dedicated clinical study monitoring for Bioavailability/Bioequivalence (BA/BE) studies.',
                ],
                'deliverables_title' => 'Clineva monitors ensure:',
                'deliverables' => [
                    'Integrity of the Study across Clinical & Bioanalytical Phases',
                    'Strict Adherence to Protocol',
                    'Quality of Pharmacokinetic & Clinical Measurements',
                    'Safety and Well-being of Study Subjects',
                    'Collection of Valid, Verifiable Data',
                    'Compliance with Applicable Regulatory Requirements',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Dosing & Sampling Oversight', 'desc' => 'On-site verification of confinement, dosing accuracy, and PK sampling schedules.'],
                    ['title' => 'Subject Protection', 'desc' => 'Continuous monitoring of screening, consent, and adverse event documentation.'],
                    ['title' => 'Bioanalytical Integrity', 'desc' => 'Reviewing sample handling, chain of custody, and analytical run validation.'],
                ],
            ],

            'babe-regulatory-affairs' => [
                'slug' => 'babe-regulatory-affairs',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Services',
                'title' => 'BA/BE Regulatory Affairs',
                'subtitle' => 'Timely BA/BE Approvals & Import/Export Management',
                'icon' => 'icon-globe',
                'image' => 'image/section/img-services-details-3.jpg',
                'short_desc' => 'Regulatory packages, DCGI/FDA/EMA follow-ups, Ethics Committee filings, and IP logistics for BA/BE.',
                'paragraphs' => [
                    'Clineva Regulatory team provides specialized support for Bioavailability and Bioequivalence (BA/BE) Sponsors to navigate DCGI, FDA, EMA, and international regulatory pathways without approval delays.',
                ],
                'deliverables_title' => 'BA/BE Regulatory Support Includes:',
                'deliverables' => [
                    'Compilation and submission of BA/BE regulatory dossiers and protocol amendments',
                    'Direct communication and follow-up with DCGI, FDA, EMA, and Ethics Committees',
                    'Clinical trial registry filings and compliance reporting',
                    'Import/Export permits for Investigational Products, reference listed drugs, and biological samples',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Rapid NOC & Approvals', 'desc' => 'Prevent bottlenecks in generic and NDA BA/BE study regulatory clearance.'],
                    ['title' => 'RLD & Sample Logistics', 'desc' => 'Compliant procurement and import/export handling of reference products and IP.'],
                    ['title' => 'Authority Coordination', 'desc' => 'Clear, prompt responses to regulatory and ethics committee review queries.'],
                ],
            ],

            'gcp-glp-audit' => [
                'slug' => 'gcp-glp-audit',
                'category' => 'babe-services',
                'category_name' => 'BA/BE Services',
                'title' => 'GCP and GLP Audit',
                'subtitle' => 'Root-Cause Risk Assessment & Regulatory Audit Excellence',
                'icon' => 'icon-safety',
                'image' => 'image/section/img-section-why-p-about.jpg',
                'short_desc' => 'System, Facility, GAP, For-Cause, and Regulatory Compliance Audits across CROs and pharma.',
                'paragraphs' => [
                    'We offer a wide range of audit services which help contract research organizations, clinical research organizations, and the pharmaceutical industry achieve stronger commitment with quality output.',
                    'Our expert team analyzes high-risk areas and crucial processes where chances of errors are high and identifies problems/errors which led to failure. Following a complete assessment of risks and errors, we apply systemic techniques to determine the root cause and design a refined, stable way forward to prevent recurring issues. Clineva Auditors have extensive experience in their respective subject matter to accomplish the objective of every audit.',
                ],
                'deliverables_title' => 'Our GCP & GLP Audit Services include:',
                'deliverables' => [
                    'System & Facility Audit',
                    'GAP Audit',
                    'For-cause Investigation',
                    'Regulatory Compliance Audit',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'High-Risk Process Focus', 'desc' => 'Pinpointing operational vulnerabilities in clinical wards and bioanalytical labs.'],
                    ['title' => 'Systemic Root-Cause Analysis', 'desc' => 'Structured investigation and CAPA design to eliminate recurring compliance gaps.'],
                    ['title' => 'Subject-Matter Auditors', 'desc' => 'Audits executed by seasoned GCP/GLP specialists aligned to global standards.'],
                ],
            ],

            'medical-affairs-medico-marketing' => [
                'slug' => 'medical-affairs-medico-marketing',
                'category' => 'medico-marketing',
                'category_name' => 'Medical Affairs & Medico-Marketing',
                'title' => 'Medico-Marketing Services',
                'subtitle' => 'Scientific Communications, Brand Activations & Global Launch Assets',
                'icon' => 'icon-rocket-launch',
                'image' => 'image/section/img-services-details-1.jpg',
                'short_desc' => 'Launch campaigns, advisory boards, monographs, e-detailing, 2D/3D animations, and conference stalls.',
                'paragraphs' => [
                    'Our medical affairs team here at Clineva delivers your marketing teams core essentials—right from conceptualizing product launch campaigns and brand activations to scientific content development and complete conference execution across the globe.',
                ],
                'deliverables_title' => 'Our Medico-Marketing Capabilities Include:',
                'deliverables' => [
                    'Product Launch Campaigns & Brand Activations',
                    'Advisory Board Presentations',
                    'Scientific Content Development & Monographs',
                    'Newsletters & Targeted Emailers',
                    'Digital e-Detailing Tools',
                    '2D / 3D Medical Animations',
                    'Global Conference & Exhibition Stall Setups',
                ],
                'subsections' => [],
                'highlights' => [
                    ['title' => 'Scientifically Accurate Creative', 'desc' => 'Bridging clinical evidence with compelling visual storytelling for healthcare audiences.'],
                    ['title' => 'Digital & Omnichannel Assets', 'desc' => 'Interactive e-detailing, 2D/3D mechanism animations, and targeted email campaigns.'],
                    ['title' => 'Global Conference Execution', 'desc' => 'End-to-end advisory board decks, scientific monographs, and exhibition stall setup.'],
                ],
            ],
        ];
    }

    public static function getByCategory(string $category): array
    {
        return array_filter(self::all(), fn ($item) => $item['category'] === $category);
    }

    public static function find(?string $slug): array
    {
        $all = self::all();
        if ($slug && isset($all[$slug])) {
            return $all[$slug];
        }
        return $all['clinical-operations'];
    }
}
