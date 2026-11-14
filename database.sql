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
DROP TABLE IF EXISTS `policy_pages`;
DROP TABLE IF EXISTS `settings`;
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
(9, '2026_11_14_000005_create_blog_categories_table', 2),
(10, '2026_11_14_000006_create_settings_table', 3),
(11, '2026_11_14_000007_create_policy_pages_table', 3);

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

-- --------------------------------------------------------
-- Table structure for table `blog_categories`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE `blog_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `color` varchar(30) NOT NULL DEFAULT '#0077C8',
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog_categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `settings`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `value` longtext DEFAULT NULL,
  `group` varchar(50) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Clineva Research Laboratories', 'general', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(2, 'contact_email', 'priti.gotpagar@clineva.in', 'contact', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(3, 'contact_phone', '+91 9870484499', 'contact', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(4, 'contact_address', 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705', 'contact', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(5, 'working_hours', 'Mon – Sat: 9:00 AM – 6:00 PM', 'contact', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(6, 'footer_description', 'Clineva Research Laboratories is a premier global Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, bioanalytical PK/PD investigations, and regulatory intelligence across global markets.', 'footer', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(7, 'copyright_text', '© 2026 Clineva Research Laboratories. All rights reserved.', 'footer', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(8, 'social_facebook', 'https://facebook.com', 'social', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(9, 'social_twitter', 'https://twitter.com', 'social', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(10, 'social_linkedin', 'https://linkedin.com', 'social', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(11, 'social_instagram', 'https://instagram.com', 'social', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(12, 'social_youtube', 'https://youtube.com', 'social', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(13, 'cta_title', 'Accelerate Your Clinical Studies with Clineva', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(14, 'cta_subtitle', 'Partner with our GCP-compliant CRO network for Phase I–IV trials, bioanalytical studies, BA/BE testing, and CDSCO regulatory intelligence.', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(15, 'cta_btn_text', 'Schedule Sponsor Consultation', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(16, 'cta_btn_url', '/contact', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(17, 'cta_secondary_btn_text', 'Call Our Scientists', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(18, 'cta_location_badge', 'Turbhe MIDC, Navi Mumbai, India', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(19, 'google_map_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8385078502014!2d73.01893427599026!3d19.070798952136015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c146e29788d7%3A0x6b44766ecad7f202!2sTurbhe%20MIDC%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(20, 'google_map_directions_url', 'https://maps.google.com/?q=D-318,+Phase+II,+Turbhe+MIDC,+TTC+Industrial+Area,+Navi+Mumbai,+Maharashtra+400705', 'cta', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(21, 'seo_home_title', 'Clineva Research Laboratories - Leading Global CRO & BA/BE Services', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(22, 'seo_home_description', 'Clineva Research Laboratories is an ISO 9001 & GCP compliant Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, and bioanalysis.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(23, 'seo_home_keywords', 'clinical research organization, CRO India, BA/BE studies, clinical trials, Phase I-IV trials, CDSCO regulatory, bioanalytical LC-MS/MS, Clineva', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(24, 'seo_about_title', 'About Us - Clineva Research Laboratories | Mission, Quality & Leadership', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(25, 'seo_about_description', 'Learn about Clineva Research Laboratories, our scientific leadership, global compliance standards (ICH-GCP, ISO 27001), and vision for clinical research excellence.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(26, 'seo_about_keywords', 'about Clineva, clinical leadership, CRO company India, ethical clinical research, GCP compliance', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(27, 'seo_services_title', 'Clinical Research & BA/BE Services - Clineva Research Laboratories', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(28, 'seo_services_description', 'Explore comprehensive CRO services: Clinical Trial Operations, Project Management, BA/BE CRO Selection, Medical Writing, and Regulatory Affairs.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(29, 'seo_services_keywords', 'clinical trial services, BA/BE study services, medical writing, regulatory submissions, bioanalytical PK/PD', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(30, 'seo_careers_title', 'Careers in Clinical Research - Join Clineva Research Laboratories', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(31, 'seo_careers_description', 'Discover rewarding career opportunities in clinical trial operations, biostatistics, medical writing, and quality assurance at Clineva.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(32, 'seo_careers_keywords', 'clinical research jobs, CRO careers India, clinical trial coordinator, medical writer vacancy, bioanalytical jobs', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(33, 'seo_blog_title', 'Clinical Research Insights & Regulatory Articles - Clineva Knowledge Hub', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(34, 'seo_blog_description', 'Authoritative scientific whitepapers, regulatory updates, ICH-GCP advisories, and BA/BE clinical trial insights from Clineva researchers.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(35, 'seo_blog_keywords', 'clinical research blog, CRO whitepapers, ICH-GCP updates, bioequivalence guidance, CDSCO regulatory news', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(36, 'seo_contact_title', 'Contact Us - Clineva Research Laboratories | Navi Mumbai Facility', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(37, 'seo_contact_description', 'Get in touch with Clineva Research Laboratories for study inquiries, trial feasibility discussions, or regulatory consultations in Navi Mumbai, India.', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(38, 'seo_contact_keywords', 'contact Clineva, clinical trial inquiry, CRO contact Navi Mumbai, sponsor consultation', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(39, 'seo_global_robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00'),
(40, 'seo_global_og_image', '/image/logo/logo-main.png', 'seo', '2026-11-14 00:00:00', '2026-11-14 00:00:00');

-- --------------------------------------------------------
-- Table structure for table `policy_pages`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `policy_pages`;
CREATE TABLE `policy_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `policy_pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
