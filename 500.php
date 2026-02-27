<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Server Error';
$meta_description = 'An internal server error occurred.';

http_response_code(500);
include __DIR__ . '/includes/header.php';
?>

<section style="padding: 120px 0 80px; text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-size: 5rem; color: var(--primary-color); margin-bottom: 10px;">500</h1>
            <h2 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--text-primary);">Internal Server Error</h2>
            <p style="color: var(--text-secondary); margin-bottom: 30px; line-height: 1.6;">
                Something went wrong on our end. Please try again later or return to the homepage.
            </p>
            <a href="<?php echo url(''); ?>" class="btn btn-primary" style="padding: 12px 30px;">
                <i class="fas fa-home"></i> Back to Home
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
