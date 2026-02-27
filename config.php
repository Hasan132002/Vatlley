<?php
/**
 * VettlyGlobal - Configuration File
 * All site-wide settings and constants
 */

// Error Reporting
// Development: E_ALL with display_errors = 1
// Production:  0 with display_errors = 0
error_reporting(0);
ini_set('display_errors', 0);

// Timezone
date_default_timezone_set('America/New_York');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'vettlyuser');
define('DB_PASS', 'StrongPassword123!');
define('DB_NAME', 'vettlyglobal');

// === DEPLOYMENT SETTINGS ===
// SITE_PATH: Change based on your deployment
//   Local (XAMPP):      '/VattleyGlobal'
//   Live (root domain): ''
define('SITE_PATH', '/');

// Site Configuration
define('SITE_NAME', 'VettlyGlobal');
define('SITE_TAGLINE', 'Risk Solutions & Intelligence');

// Auto-detect BASE_URL from server
$_protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
define('BASE_URL', $_protocol . '://' . $_host . SITE_PATH);
define('ASSETS_URL', BASE_URL . '/assets');

// Contact Information
define('COMPANY_EMAIL', 'info@vettlyglobal.com');
define('COMPANY_PHONE', '+1 (800) 123-4567');
define('COMPANY_ADDRESS', '123 Business Avenue, New York, NY 10001');

// Social Media Links (disabled - set to empty)
define('SOCIAL_LINKEDIN', '');
define('SOCIAL_TWITTER', '');
define('SOCIAL_FACEBOOK', '');

// Email Configuration (for contact forms)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com');
define('SMTP_PASS', 'your-password');
define('SMTP_FROM_EMAIL', 'info@vettlyglobal.com');
define('SMTP_FROM_NAME', 'VettlyGlobal');

// Security
define('CSRF_TOKEN_NAME', 'csrf_token');
session_start();

// Generate CSRF Token if not exists
if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
    $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
}

// Site Status
define('SITE_MAINTENANCE', false);

// SEO Defaults
define('DEFAULT_META_TITLE', 'VettlyGlobal - Risk Solutions & Intelligence');
define('DEFAULT_META_DESCRIPTION', 'VettlyGlobal provides comprehensive risk solutions, identity verification, fraud detection, and data intelligence across healthcare, financial services, insurance, government, and more.');
define('DEFAULT_META_KEYWORDS', 'risk solutions, identity verification, fraud detection, healthcare data, insurance analytics, financial compliance');

// Pagination
define('POSTS_PER_PAGE', 12);

// File Upload Settings
define('MAX_FILE_SIZE', 5242880); // 5MB
define('ALLOWED_IMAGE_TYPES', ['image/jpeg', 'image/png', 'image/gif', 'image/webp']);

// DEPLOYMENT: Replace with your actual GA tracking ID (e.g., 'G-XXXXXXXXXX')
define('GOOGLE_ANALYTICS_ID', '');

// reCAPTCHA (Add your keys if using)
define('RECAPTCHA_SITE_KEY', '');
define('RECAPTCHA_SECRET_KEY', '');
