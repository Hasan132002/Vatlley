<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Page Not Found';
$meta_description = 'The page you are looking for could not be found.';

http_response_code(404);
include __DIR__ . '/includes/header.php';
?>

<section style="padding: 120px 0 80px; text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-size: 5rem; color: var(--primary-color); margin-bottom: 10px;">404</h1>
            <h2 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--text-primary);">Page Not Found</h2>
            <p style="color: var(--text-secondary); margin-bottom: 30px; line-height: 1.6;">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <a href="<?php echo url(''); ?>" class="btn btn-primary" style="padding: 12px 30px;">
                <i class="fas fa-home"></i> Back to Home
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
