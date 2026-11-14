-- ==============================================================
-- Clineva Research Laboratories - MySQL Database Schema & Seed Dump
-- Target DBMS: MySQL / MariaDB (>= 5.7 / 8.0)
-- Character Set: utf8mb4 / utf8mb4_unicode_ci
-- Generated Date: 2026-11-14
-- ==============================================================

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------------
-- Safe pre-drop: child tables with foreign keys dropped first
-- --------------------------------------------------------------
DROP TABLE IF EXISTS `job_applications`;
DROP TABLE IF EXISTS `job_postings`;
DROP TABLE IF EXISTS `blog_posts`;
DROP TABLE IF EXISTS `blog_categories`;
DROP TABLE IF EXISTS `contacts`;
DROP TABLE IF EXISTS `appointments`;
DROP TABLE IF EXISTS `subscribers`;
DROP TABLE IF EXISTS `admins`;
DROP TABLE IF EXISTS `sessions`;
DROP TABLE IF EXISTS `password_reset_tokens`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `cache_locks`;
DROP TABLE IF EXISTS `cache`;
DROP TABLE IF EXISTS `failed_jobs`;
DROP TABLE IF EXISTS `job_batches`;
DROP TABLE IF EXISTS `jobs`;
DROP TABLE IF EXISTS `migrations`;

-- --------------------------------------------------------
-- Table structure for table `migrations`
-- --------------------------------------------------------
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_11_14_000000_create_admins_table', 2),
(5, '2026_11_14_000001_create_job_postings_table', 2),
(6, '2026_11_14_000002_create_job_applications_table', 2),
(7, '2026_11_14_000003_create_contacts_table', 2),
(8, '2026_11_14_000004_create_blog_posts_table', 2),
(9, '2026_11_14_000005_create_blog_categories_table', 2);

-- --------------------------------------------------------
-- Table structure for table `admins`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Admin default credentials:
-- Email: admin@clineva.in | Password: admin123
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@clineva.in', NULL, '$2y$12$ytSYH7DLWcqdzudO7Z2sGO2XzAtFCcJx3UmjNiolXCR2UQuuqtmLe', NULL, '2026-11-14 04:58:43', '2026-11-14 04:58:43');

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@clineva.in', NULL, '$2y$12$94KW2WfIuT5TSRSBNWM7eO.wkswSTYKa//2.PWAWRjVfyjEHMYYGC', NULL, '2026-11-14 04:32:44', '2026-11-14 04:32:44');

-- --------------------------------------------------------
-- Table structure for table `password_reset_tokens`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `sessions`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `cache`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `cache_locks`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `jobs`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `job_batches`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `failed_jobs`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `contacts`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unread',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `appointments`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `appointment_date` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `subscribers`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `job_postings`
-- --------------------------------------------------------
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `job_applications`;
DROP TABLE IF EXISTS `job_postings`;
CREATE TABLE `job_postings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(150) NOT NULL DEFAULT 'Clinical Operations',
  `job_type` varchar(100) NOT NULL DEFAULT 'Full-Time',
  `location` varchar(150) NOT NULL DEFAULT 'Mumbai, Maharashtra',
  `experience` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `requirements` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `job_postings_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `job_postings` (`id`, `title`, `slug`, `category`, `job_type`, `location`, `experience`, `description`, `requirements`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Clinical Research Associate (CRA)', 'clinical-research-associate-cra', 'Clinical Operations', 'Full-Time', 'Mumbai, Maharashtra', '2–4 Years', 'Manage site feasibility, initiation, routine monitoring, SDV, and protocol compliance across Phase I–IV and BA/BE trials.', 'B.Pharm / M.Pharm / MBBS / Life Sciences with ICH-GCP certification.', 1, '2026-11-14 05:00:00', '2026-11-14 05:00:00'),
(2, 'Medical Writer', 'medical-writer', 'Medical Writing', 'Full-Time', 'Mumbai, Maharashtra / Hybrid', '1–3 Years', 'Author protocols, ICFs, CRFs, investigator brochures, eCTD clinical summaries, and BA/BE Clinical Study Reports (CSRs).', 'Life sciences or medical degree with strong medical synthesis and writing capabilities.', 1, '2026-11-14 05:00:00', '2026-11-14 05:00:00'),
(3, 'Quality Assurance & GCP/GLP Auditor', 'quality-assurance-gcp-glp-auditor', 'Quality & Audit', 'Full-Time', 'Mumbai, Maharashtra', '3–5 Years', 'Conduct site, TMF, vendor, and BA/BE facility audits to maintain strict ICH-GCP/GLP compliance and inspection readiness.', 'Experienced GCP auditor with deep familiarity with CDSCO, FDA, and EMA clinical guidelines.', 1, '2026-11-14 05:00:00', '2026-11-14 05:00:00');

-- --------------------------------------------------------
-- Table structure for table `job_applications`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `job_applications`;
CREATE TABLE `job_applications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_posting_id` bigint(20) unsigned DEFAULT NULL,
  `role_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `resume_original_name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_applications_job_posting_id_foreign` (`job_posting_id`),
  CONSTRAINT `job_applications_job_posting_id_foreign` FOREIGN KEY (`job_posting_id`) REFERENCES `job_postings` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `blog_posts`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE `blog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT 'clinical-trials',
  `category_name` varchar(150) NOT NULL DEFAULT 'Clinical Trials',
  `featured_image` varchar(500) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `content` longtext DEFAULT NULL,
  `key_takeaways` text DEFAULT NULL,
  `quote_text` text DEFAULT NULL,
  `section1_title` varchar(255) DEFAULT NULL,
  `section1_body` text DEFAULT NULL,
  `section2_title` varchar(255) DEFAULT NULL,
  `section2_body` text DEFAULT NULL,
  `section3_title` varchar(255) DEFAULT NULL,
  `section3_body` text DEFAULT NULL,
  `read_time` varchar(50) NOT NULL DEFAULT '5 min read',
  `views_count` bigint(20) unsigned NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `focus_keyword` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `canonical_url` varchar(500) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(500) DEFAULT NULL,
  `twitter_title` varchar(255) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `schema_type` varchar(100) NOT NULL DEFAULT 'MedicalScholarlyArticle',
  `robots` varchar(100) NOT NULL DEFAULT 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog_posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blog_posts` (`id`, `title`, `slug`, `category`, `category_name`, `featured_image`, `excerpt`, `key_takeaways`, `quote_text`, `section1_title`, `section1_body`, `section2_title`, `section2_body`, `section3_title`, `section3_body`, `read_time`, `views_count`, `is_published`, `is_featured`, `published_at`, `focus_keyword`, `meta_title`, `meta_description`, `meta_keywords`, `canonical_url`, `og_title`, `og_description`, `schema_type`, `robots`, `created_at`, `updated_at`) VALUES
(1, 'ICH GCP E6 (R3) Modernization: How Global Sponsors Are Structuring Agile, Risk-Based Clinical Trials in 2026', 'ich-gcp-e6-r3-modernization-clinical-trials', 'regulatory-gcp', 'Regulatory & GCP', 'image/blog/tf-post-absolute-1.jpg', 'An executive breakdown of the ICH GCP E6 (R3) draft principles, focusing on risk-based monitoring (RBM), electronic source data verification (eSource), decentralized trial governance, and investigator oversight obligations.', 'Mandatory identification of Critical-to-Quality (CtQ) factors during protocol authoring.\nTransition from 100% Source Data Verification (SDV) to targeted, centralized statistical monitoring.\nFormalized governance models for hybrid and decentralized clinical trial operations.\nHeightened auditability requirements for electronic systems, DHTs, and digital endpoints.', 'ICH GCP E6 (R3) is not merely an updated compliance document—it is a modern operational blueprint that enables clinical sponsors to run faster, safer, and more patient-centric trials globally.', 'From Retrospective Auditing to Quality-by-Design (QbD)', 'Under ICH GCP E6 (R3), clinical study protocols must embed Quality-by-Design (QbD) principles from inception. Sponsors and CROs are expected to prospectively identify Critical to Quality factors and focus monitoring where risks genuinely lie.', 'Decentralized Elements & Investigator Oversight', 'A pivotal enhancement in R3 is the explicit regulatory framework for remote trial conduct, digital health technologies, and decentralized governance under PI oversight.', 'Electronic Source Records (eSource) and Data Lineage', 'Mandating clear audit trails, robust data provenance, and validated cloud systems that ensure ALCOA++ standards are preserved end-to-end.', '7 min read', 124, 1, 1, '2026-11-12 10:00:00', 'ICH GCP E6 R3', 'ICH GCP E6 (R3) Modernization | Clineva Clinical Intelligence', 'Executive regulatory analysis of ICH GCP E6 (R3) principles, Risk-Based Monitoring, and decentralized trial governance.', 'ICH GCP E6 R3, Clinical Trials, Risk-Based Monitoring, CRO, CDSCO', NULL, 'ICH GCP E6 (R3) Modernization | Clineva Research Laboratories', 'Executive regulatory analysis of ICH GCP E6 (R3) principles, Risk-Based Monitoring, and decentralized trial governance.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-11-12 10:00:00', '2026-11-14 06:00:00'),
(2, 'Navigating USFDA & EMA Bioequivalence Guidelines for Complex Injectable & Oral Generics', 'navigating-usfda-ema-bioequivalence-complex-generics', 'babe-services', 'BA/BE Studies', 'image/blog/tf-port-grid-1.jpg', 'Strategic bioequivalence study designs to satisfy stringent regulatory expectations for highly variable drugs (HVDs), narrow therapeutic index compounds, and weight-of-evidence dossiers.', 'Deploy replicated crossover designs for compounds with intra-subject CV > 30%.\nValidate LC-MS/MS assays with strict adherence to ICH M10 bioanalytical guidance.\nAccount for non-fasting conditions and fed-state pharmacokinetics early in development.\nPrepare comprehensive In Vitro - In Vivo Correlation (IVIVC) data packages where applicable.', 'Bioequivalence for complex dosage forms is no longer a simple pharmacokinetic exercise; it demands an integrated understanding of biopharmaceutics, formulation release kinetics, and statistical scaling.', 'Study Design Considerations for Highly Variable Drugs', 'For drugs with intra-subject variability exceeding 30%, partial or fully replicated crossover designs (e.g. 3-period or 4-period) allow reference-scaled average bioequivalence methodologies.', 'Bioanalytical Precision and Analyte Selection', 'Regulators increasingly scrutinize parent drug versus active metabolite quantification using validated LC-MS/MS methods capable of sub-picogram sensitivity.', 'Overcoming Common Filing Deficiencies', 'Common regulatory Complete Response Letters cite inadequate statistical power, inappropriate washout durations, and unaddressed food-effect interactions.', '6 min read', 98, 1, 0, '2026-11-08 09:30:00', 'Bioequivalence Guidelines', 'USFDA & EMA Bioequivalence Guidelines for Generics | Clineva', 'Strategic study designs for highly variable drugs, narrow therapeutic index compounds, and bioequivalence submissions.', 'Bioequivalence, BA/BE, USFDA, EMA, Generic Drugs, Pharmacokinetics', NULL, 'USFDA & EMA Bioequivalence Guidelines for Generics | Clineva', 'Strategic study designs for highly variable drugs, narrow therapeutic index compounds, and bioequivalence submissions.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-11-08 09:30:00', '2026-11-14 06:00:00'),
(3, 'Hybrid & Decentralized Clinical Trials: Accelerating Patient Recruitment While Safeguarding Data Integrity', 'decentralized-clinical-trials-hybrid-monitoring', 'clinical-trials', 'Clinical Trials', 'image/blog/tf-port-grid-2.jpg', 'Practical lessons in combining remote patient visits, direct-to-patient IMP shipments, and centralized statistical monitoring to shorten trial timelines by up to 30%.', 'Hybrid models consistently achieve 30% faster enrollment compared to purely site-bound studies.\neConsent platforms improve patient comprehension and lower consent-related audit findings.\nValidated direct-to-patient cold chains ensure IP integrity for temperature-sensitive biologics.\nCentralized data monitoring flags outliers weeks before traditional onsite monitoring visits.', 'Patient-centricity in clinical research succeeds when technology simplifies participation without adding administrative friction to clinical sites or investigators.', 'The Hybrid Advantage: Site Expertise Meets Patient Convenience', 'Rather than eliminating physical investigational sites, hybrid trial models empower experienced clinical investigator sites with remote capabilities such as eConsent and telemedicine.', 'Managing Investigational Product (IP) Cold-Chain Direct to Patient', 'Direct-to-patient shipment of investigational medicinal products requires temperature-controlled courier logistics and automated chain-of-custody tracking.', 'Centralized Statistical Monitoring in Real-Time', 'Remote data collection necessitates continuous risk-based surveillance to detect reporting anomalies or protocol deviations across participating regions.', '5 min read', 115, 1, 0, '2026-11-03 11:15:00', 'Decentralized Clinical Trials', 'Hybrid & Decentralized Clinical Trials Guide | Clineva CRO', 'How decentralized and hybrid trial operations shorten recruitment timelines and safeguard data integrity under GCP.', 'Decentralized Clinical Trials, DCT, Patient Recruitment, Centralized Monitoring', NULL, 'Hybrid & Decentralized Clinical Trials Guide | Clineva CRO', 'How decentralized and hybrid trial operations shorten recruitment timelines and safeguard data integrity under GCP.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-11-03 11:15:00', '2026-11-14 06:00:00'),
(4, 'High-Throughput LC-MS/MS Bioanalysis: Overcoming Matrix Effects in PK/PD Studies', 'high-throughput-lc-msms-bioanalysis-clinical-trials', 'bioanalytics-pk', 'Bioanalytical & PK', 'image/blog/tf-port-grid-3.jpg', 'Ensuring assay ruggedness, lower limits of quantitation (LLOQ), and cross-validation across complex biological matrices compliant with ICH M10 guidance.', 'Rigorous pre-validation evaluation of matrix factors across at least 6 unique biological lots.\nUtilization of deuterated or 13C-labeled internal standards to track ionization variations.\nComprehensive ISR program to confirm assay reproducibility on authentic in-study samples.\nEnd-to-end 21 CFR Part 11 compliant audit trails in laboratory instrumentation.', 'Bioanalytical data forms the quantitative backbone of every clinical regulatory submission; uncompromising analytical validation is non-negotiable.', 'Diagnosing and Mitigating Ion Suppression and Matrix Effects', 'Co-eluting endogenous phospholipids and mobile phase additives frequently cause ion suppression or enhancement, resolved through solid-phase extraction and SIL-IS.', 'Compliance with ICH M10 Bioanalytical Method Validation', 'Global harmonization under ICH M10 requires standardized assessments for selectivity, carryover, benchtop stability, and incurred sample reanalysis.', 'High-Throughput Sample Processing for Large-Scale Trials', 'Automated 96-well plate handling systems coupled with UHPLC allow processing upwards of 1,200 clinical samples daily with LIMS tracking.', '6 min read', 76, 1, 0, '2026-10-28 08:45:00', 'LC-MS/MS Bioanalysis', 'High-Throughput LC-MS/MS Bioanalysis in PK Studies | Clineva', 'Strategies to eliminate matrix effects and ensure sub-picogram bioanalytical sensitivity under ICH M10.', 'LC-MS/MS, Bioanalysis, Pharmacokinetics, Mass Spectrometry, ICH M10', NULL, 'High-Throughput LC-MS/MS Bioanalysis in PK Studies | Clineva', 'Strategies to eliminate matrix effects and ensure sub-picogram bioanalytical sensitivity under ICH M10.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-10-28 08:45:00', '2026-11-14 06:00:00'),
(5, 'Strategic Clinical Protocol Design: Preventing Costly Amendments in Phase II/III Studies', 'strategic-clinical-protocol-design-preventing-amendments', 'clinical-trials', 'Clinical Trials', 'image/blog/tf-port-grid-4.jpg', 'How upfront statistical simulation, realistic eligibility criteria, and patient burden assessments eliminate mid-trial protocol amendments and budget escalations.', 'Benchmark eligibility criteria against real-world patient registry data.\nConduct mock investigator review sessions to identify operational bottlenecks.\nPre-specify adaptive rules to accommodate emerging trial data cleanly.\nStreamline secondary exploratory endpoints that inflate site administrative workloads.', 'A protocol should be designed with the clinic floor in mind, balancing scientific depth with operational realism.', 'Root Causes of Protocol Amendments', 'Unrealistic eligibility criteria and excessively burdensome assessment schedules account for the vast majority of costly protocol amendments.', 'Statistical Simulation & Adaptive Design Flexibility', 'Pre-specifying sample size re-estimation or futility analyses within an adaptive framework allows necessary trial modifications cleanly.', 'Patient Burden Indexing', 'Evaluating patient visit duration and invasive sampling frequency ensures protocols attract and retain participants throughout the study.', '5 min read', 62, 1, 0, '2026-10-22 14:00:00', 'Protocol Design Clinical Trials', 'Strategic Clinical Protocol Design | Clineva Research', 'Eliminate mid-trial protocol amendments through predictive statistical modeling and patient burden assessments.', 'Clinical Protocol Design, Phase II, Phase III, Clinical Operations, Trial Amendments', NULL, 'Strategic Clinical Protocol Design | Clineva Research', 'Eliminate mid-trial protocol amendments through predictive statistical modeling and patient burden assessments.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-10-22 14:00:00', '2026-11-14 06:00:00'),
(6, 'Translating Complex Clinical Study Data into High-Impact Medical Publications', 'scientific-rigor-medico-marketing-publications', 'medico-marketing', 'Medico-Marketing', 'image/blog/tf-port-grid-5.jpg', 'Best practices for ICMJE compliance, Good Publication Practice (GPP 2022), and developing clear manuscripts that withstand rigorous peer review.', 'Ensure complete alignment with ICMJE authorship criteria.\nDevelop compelling graphical abstracts to maximize manuscript engagement.\nDisclose all sponsor funding, author contributions, and data availability statements.\nMaintain consistent scientific messaging between CSRs and published articles.', 'Ethical, high-impact medical writing bridges the gap between raw statistical datasets and actionable clinical practice.', 'Adhering to GPP 2022 and ICMJE Guidelines', 'Ethical medical publication requires strict observance of GPP 2022 guidelines, transparent author contributions, and trial registry pre-registration.', 'Effective Scientific Visualizations', 'Journal editors and clinicians prioritize intuitive graphical abstracts, forest plots, and Kaplan-Meier curves that convey primary safety signals clearly.', 'Target Journal Selection and Strategy', 'Matching study scope, novelty, and clinical impact with appropriate indexed medical journals optimizes acceptance rates and minimizes publication delays.', '4 min read', 54, 1, 0, '2026-10-15 16:30:00', 'Medical Publications Writing', 'High-Impact Medical Publications Writing | Clineva', 'Expert strategies for ICMJE and GPP 2022 compliant clinical trial manuscripts and scientific publications.', 'Medical Writing, ICMJE, Clinical Study Reports, GPP 2022, Medico-Marketing', NULL, 'High-Impact Medical Publications Writing | Clineva', 'Expert strategies for ICMJE and GPP 2022 compliant clinical trial manuscripts and scientific publications.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-10-15 16:30:00', '2026-11-14 06:00:00'),
(7, 'Modern Pharmacovigilance: Automated Signal Detection & Risk Management in Global Post-Marketing Surveillance', 'pharmacovigilance-signal-detection-post-marketing', 'regulatory-gcp', 'Regulatory & GCP', 'image/blog/tf-port-grid-6.jpg', 'Harnessing structured safety databases, disproportionality analysis, and CIOMS/PSUR reporting workflows to stay compliant with global regulatory safety mandates.', 'Implement automated disproportionality alerts within safety databases.\nEnsure strict compliance with 15-day expedited reporting windows for serious adverse events.\nAlign local safety affiliates with centralized Global Safety Officers.\nProactively monitor real-world evidence registries for off-label safety trends.', 'Patient safety is an enduring lifecycle commitment that begins in early phase trials and deepens throughout commercial availability.', 'Statistical Disproportionality Scoring', 'Modern safety surveillance employs PRR and BCPNN algorithms to uncover subtle safety signals amidst millions of spontaneous adverse event reports.', 'Harmonized Periodic Safety Update Reports (PSUR/PBRER)', 'Synthesizing global risk-benefit evaluations requires seamless cross-functional alignment between operations, biostatistics, and safety personnel.', 'Risk Evaluation and Mitigation Strategies (REMS)', 'Designing workable risk management plans protects patients while preserving product access for appropriate clinical populations.', '6 min read', 71, 1, 0, '2026-10-09 10:20:00', 'Pharmacovigilance Signal Detection', 'Modern Pharmacovigilance & Signal Detection | Clineva', 'Proactive safety surveillance, PSUR reporting, and automated disproportionality algorithms for global sponsors.', 'Pharmacovigilance, Drug Safety, Signal Detection, PSUR, Regulatory Submissions', NULL, 'Modern Pharmacovigilance & Signal Detection | Clineva', 'Proactive safety surveillance, PSUR reporting, and automated disproportionality algorithms for global sponsors.', 'MedicalScholarlyArticle', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', '2026-10-09 10:20:00', '2026-11-14 06:00:00');

-- --------------------------------------------------------
-- Table structure for table `blog_categories`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `color` varchar(30) NOT NULL DEFAULT '#007E8A',
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog_categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `color`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Clinical Trials', 'clinical-trials', '#007E8A', 'Phase I-IV clinical trial operations, patient recruitment, protocol design, and decentralized monitoring.', 1, '2026-11-14 06:00:00', '2026-11-14 06:00:00'),
(2, 'BA/BE Studies', 'babe-services', '#0284C7', 'Bioavailability and Bioequivalence protocols, pharmacokinetic modeling, and complex generic dossiers.', 1, '2026-11-14 06:00:00', '2026-11-14 06:00:00'),
(3, 'Regulatory & GCP', 'regulatory-gcp', '#059669', 'ICH GCP compliance, CDSCO, USFDA, and EMA regulatory intelligence, audits, and pharmacovigilance.', 1, '2026-11-14 06:00:00', '2026-11-14 06:00:00'),
(4, 'Bioanalytical & PK', 'bioanalytics-pk', '#6366F1', 'High-throughput LC-MS/MS method development, matrix effects mitigation, and pharmacokinetic analysis.', 1, '2026-11-14 06:00:00', '2026-11-14 06:00:00'),
(5, 'Medico-Marketing', 'medico-marketing', '#8B5CF6', 'Scientific medical writing, ICMJE-compliant publications, clinical study reports, and visual abstracts.', 1, '2026-11-14 06:00:00', '2026-11-14 06:00:00');

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
