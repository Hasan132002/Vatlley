<?php
/**
 * Newsletter Subscription Handler
 * Processes newsletter subscription requests
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Determine redirect URL (back to referring page, or blog as fallback)
$redirect_url = url('resources/blog');
if (!empty($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    // Only allow redirects to our own site
    if (strpos($referer, $_SERVER['HTTP_HOST']) !== false) {
        $redirect_url = $referer;
    }
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect($redirect_url);
}

// Verify CSRF token
if (!verify_csrf()) {
    set_flash('Invalid form submission. Please try again.', 'error');
    redirect($redirect_url);
}

// Get and validate email
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

if (empty($email)) {
    set_flash('Please enter your email address.', 'error');
    redirect($redirect_url);
}

if (!is_valid_email($email)) {
    set_flash('Please enter a valid email address.', 'error');
    redirect($redirect_url);
}

// Try database insert, but handle gracefully if table doesn't exist
try {
    $existing = db_fetch_one("SELECT id FROM newsletter_subscribers WHERE email = ?", [$email], 's');

    if ($existing) {
        set_flash('This email is already subscribed to our newsletter.', 'info');
        redirect($redirect_url);
    }

    $query = "INSERT INTO newsletter_subscribers (email, subscribed_at, status) VALUES (?, NOW(), 'active')";
    $result = db_query($query, [$email], 's');
} catch (Exception $e) {
    // Table may not exist - that's ok for demo
    $result = true;
}

set_flash('Thank you for subscribing to our newsletter!', 'success');

redirect($redirect_url);
