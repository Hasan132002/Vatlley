<?php
/**
 * Helper Functions
 */

/**
 * Sanitize output to prevent XSS
 */
function clean($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate URL
 */
function url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}

/**
 * Get asset URL
 */
function asset($path) {
    $url = ASSETS_URL . '/' . ltrim($path, '/');
    $file = $_SERVER['DOCUMENT_ROOT'] . SITE_PATH . '/assets/' . ltrim($path, '/');
    if (file_exists($file)) {
        $url .= '?v=' . filemtime($file);
    }
    return $url;
}

/**
 * Check if current page is active
 */
function is_active($page) {
    $current = $_SERVER['REQUEST_URI'];
    return strpos($current, $page) !== false ? 'active' : '';
}

/**
 * Get current page URL
 */
function current_url() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
           "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

/**
 * Redirect to another page
 */
function redirect($url) {
    header("Location: " . $url);
    exit;
}

/**
 * Generate page title
 */
function page_title($title = '') {
    if (!empty($title)) {
        return clean($title) . ' - ' . SITE_NAME;
    }
    return DEFAULT_META_TITLE;
}

/**
 * Truncate text
 */
function truncate($text, $length = 150, $suffix = '...') {
    if (strlen($text) > $length) {
        return substr($text, 0, $length) . $suffix;
    }
    return $text;
}

/**
 * Format date
 */
function format_date($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

/**
 * Generate slug from string
 */
function create_slug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return trim($string, '-');
}

/**
 * Validate email
 */
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Validate phone
 */
function is_valid_phone($phone) {
    return preg_match('/^[\d\s\-\+\(\)]+$/', $phone);
}

/**
 * Generate CSRF token field
 */
function csrf_field() {
    return '<input type="hidden" name="' . CSRF_TOKEN_NAME . '" value="' . $_SESSION[CSRF_TOKEN_NAME] . '">';
}

/**
 * Verify CSRF token
 */
function verify_csrf() {
    if (!isset($_POST[CSRF_TOKEN_NAME]) || $_POST[CSRF_TOKEN_NAME] !== $_SESSION[CSRF_TOKEN_NAME]) {
        return false;
    }
    return true;
}

/**
 * Flash message
 */
function set_flash($message, $type = 'success') {
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_type'] = $type;
}

/**
 * Get and clear flash message
 */
function get_flash() {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        $type = $_SESSION['flash_type'];
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_type']);
        return ['message' => $message, 'type' => $type];
    }
    return null;
}

/**
 * Get industry data (placeholder - will be from DB later)
 */
function get_industries() {
    return [
        [
            'slug' => 'corporations',
            'title' => 'Corporations',
            'description' => 'Identity verification and authentication, credit risk assessment, fraud prevention, investigations, due diligence solutions to increase revenue and efficiencies.',
            'icon' => 'building'
        ],
        [
            'slug' => 'financial-services',
            'title' => 'Financial Services',
            'description' => 'Fraud prevention, identity verification, due diligence, compliance, PEP and watchlist screening, credit risk assessment, know your customer, big data solutions.',
            'icon' => 'chart-line'
        ],
        [
            'slug' => 'government',
            'title' => 'Government',
            'description' => 'Draw clear, actionable insights to achieve your agency\'s mission by leveraging VettlyGlobal data, identity intelligence and linking technology.',
            'icon' => 'landmark'
        ],
        [
            'slug' => 'healthcare',
            'title' => 'Healthcare',
            'description' => 'When the right data meets the right technologies, healthcare organizations can transform complexity into opportunity and deliver better health for all.',
            'icon' => 'heartbeat'
        ],
        [
            'slug' => 'insurance',
            'title' => 'Insurance',
            'description' => 'Insurance risk solutions that strengthen customer relationships, gain operational efficiencies & future-proof your organization using data & advanced analytics.',
            'icon' => 'shield-alt'
        ],
        [
            'slug' => 'law-enforcement',
            'title' => 'Law Enforcement',
            'description' => 'Predict, analyze and effectively respond to crime using actionable intelligence derived from law enforcement data analytics and technology.',
            'icon' => 'user-shield'
        ],
        [
            'slug' => 'collections-recovery',
            'title' => 'Collections & Recovery',
            'description' => 'Insight and tools that lead debt collectors to the right parties, efficiently and compliantly. Streamline skip tracing efforts and boost profitability.',
            'icon' => 'money-check-alt'
        ]
    ];
}

/**
 * Send email (basic - can be enhanced with PHPMailer)
 */
function send_email($to, $subject, $message, $from = COMPANY_EMAIL) {
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    return mail($to, $subject, $message, $headers);
}
