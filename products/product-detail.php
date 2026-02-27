<?php
/**
 * VettlyGlobal - Product Detail Page
 * Single product information with features, benefits, and CTA
 */

require_once '../config.php';
require_once '../includes/functions.php';
require_once 'products-data.php';

// Get product slug from URL
$slug = isset($_GET['slug']) ? clean($_GET['slug']) : '';

// Get product data
$product = get_product_by_slug($slug);

// Redirect if product not found
if (!$product) {
    redirect(url('products'));
    exit;
}

// Get related products
$related_products = get_related_products($product['id'], 3);

// Page meta data
$page_title = $product['name'];
$meta_description = $product['short_description'];
$meta_keywords = implode(', ', $product['industries']) . ', ' . $product['name'];

// Include header
include '../includes/header.php';
?>

<style>
/* Product Detail Styles */
.product-detail-hero {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 80px 0 60px;
    min-height: 300px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
}

.product-detail-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
    opacity: 0.3;
}

.breadcrumbs {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
    font-size: 0.9rem;
}

.breadcrumbs a {
    color: rgba(255,255,255,0.8);
    transition: all 0.3s ease;
}

.breadcrumbs a:hover {
    color: white;
}

.breadcrumbs span {
    color: rgba(255,255,255,0.6);
}

.product-detail-hero .container {
    position: relative;
    z-index: 2;
}

.product-header {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 30px;
    margin-top: 20px;
}

.product-icon-large {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: white;
    flex-shrink: 0;
}

.product-header-content h1 {
    color: white;
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.product-industries-header {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.industry-badge {
    padding: 6px 14px;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    border: 1px solid rgba(255,255,255,0.3);
}

/* Overview Section */
.product-overview {
    padding: 60px 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.2rem;
    color: var(--text-primary);
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 700px;
    margin: 0 auto;
}

.overview-content {
    max-width: 900px;
    margin: 0 auto;
}

.overview-text {
    font-size: 1.15rem;
    line-height: 1.9;
    color: var(--text-secondary);
    text-align: center;
}

/* Features Section */
.product-features {
    padding: 60px 0;
    background: var(--bg-lighter);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.feature-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: <?php echo $product['color']; ?>;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
}

.feature-text {
    flex: 1;
    color: var(--text-primary);
    font-weight: 500;
    line-height: 1.6;
}

/* Benefits Section */
.product-benefits {
    padding: 60px 0;
    background: white;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.benefit-card {
    padding: 30px;
    background: var(--bg-lighter);
    border-radius: 12px;
    border-left: 4px solid <?php echo $product['color']; ?>;
    transition: all 0.3s ease;
}

.benefit-card:hover {
    background: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transform: translateX(5px);
}

.benefit-icon {
    font-size: 2rem;
    color: <?php echo $product['color']; ?>;
    margin-bottom: 15px;
}

.benefit-text {
    color: var(--text-primary);
    font-weight: 600;
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Industries Section */
.product-industries-section {
    padding: 60px 0;
    background: var(--bg-lighter);
}

.industries-list {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    margin-top: 40px;
}

.industry-card {
    padding: 20px 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 12px;
    transition: all 0.3s ease;
}

.industry-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.12);
}

.industry-card i {
    font-size: 1.5rem;
    color: <?php echo $product['color']; ?>;
}

.industry-card span {
    font-weight: 600;
    color: var(--text-primary);
}

/* CTA Section */
.product-cta {
    padding: 80px 0;
    background: url('<?php echo ASSETS_URL; ?>/images/get-started.jpg') center center / cover no-repeat;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    background-attachment:fixed;
}

.product-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--primary-dark);
    opacity: 0.6;
    
}

.cta-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}

.cta-content h2 {
    color: white;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-content p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
    margin-bottom: 35px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-white {
    background: white;
    color: <?php echo $product['color']; ?>;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    color: <?php echo $product['color']; ?>;
}

.btn-outline-white {
    background: transparent;
    color: white;
    padding: 16px 40px;
    border: 2px solid white;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-outline-white:hover {
    background: white;
    color: <?php echo $product['color']; ?>;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Related Products */
.related-products {
    padding: 60px 0;
    background: white;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.related-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    overflow: hidden;
}

.related-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.15);
}

.related-card-header {
    padding: 25px;
    border-bottom: 1px solid var(--border-light);
}

.related-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
    font-size: 1.5rem;
    color: white;
}

.related-name {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.related-industries {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
}

.related-industries .industry-tag {
    padding: 3px 8px;
    background: var(--bg-lighter);
    border-radius: 4px;
    font-size: 0.7rem;
    font-weight: 600;
    color: var(--text-secondary);
}

.related-card-body {
    padding: 20px 25px;
}

.related-description {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 15px;
}

.related-link {
    color: var(--primary-color);
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.related-link:hover {
    gap: 12px;
}

/* Responsive */
@media (max-width: 768px) {
    .product-detail-hero {
        padding: 60px 0 50px;
        min-height: 250px;
    }

    .product-header {
        flex-direction: column;
        text-align: center;
    }

    .product-header-content h1 {
        font-size: 1.8rem;
    }

    .product-icon-large {
        width: 80px;
        height: 80px;
        font-size: 2.5rem;
    }

    .features-grid,
    .benefits-grid,
    .related-grid {
        grid-template-columns: 1fr;
    }

    .cta-content h2 {
        font-size: 1.8rem;
    }

    .cta-buttons {
        flex-direction: column;
    }

    .btn-white,
    .btn-outline-white {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php
// Helper function to adjust color brightness
function adjustBrightness($hex, $percent) {
    $hex = str_replace('#', '', $hex);
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));

    $r = (int) max(0, min(255, $r + ($r * $percent / 100)));
    $g = (int) max(0, min(255, $g + ($g * $percent / 100)));
    $b = (int) max(0, min(255, $b + ($b * $percent / 100)));

    return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
}
?>

<!-- Product Hero -->
<section class="product-detail-hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="<?php echo url(); ?>"><i class="fas fa-home"></i> Home</a>
            <span><i class="fas fa-chevron-right"></i></span>
            <a href="<?php echo url('products'); ?>">Products</a>
            <span><i class="fas fa-chevron-right"></i></span>
            <span><?php echo clean($product['name']); ?></span>
        </div>

        <!-- Product Header -->
        <div class="product-header">
            <div class="product-icon-large">
                <i class="fas <?php echo $product['icon']; ?>"></i>
            </div>
            <div class="product-header-content">
                <h1><?php echo clean($product['name']); ?></h1>
                <div class="product-industries-header">
                    <?php foreach ($product['industries'] as $industry): ?>
                        <span class="industry-badge"><?php echo clean($industry); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Overview -->
<section class="product-overview">
    <div class="container">
        <div class="section-header">
            <h2>Product Overview</h2>
        </div>
        <div class="overview-content">
            <p class="overview-text"><?php echo clean($product['full_description']); ?></p>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="product-features">
    <div class="container">
        <div class="section-header">
            <h2>Key Features</h2>
            <p>Powerful capabilities designed to meet your specific needs</p>
        </div>
        <div class="features-grid">
            <?php foreach ($product['features'] as $feature): ?>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="feature-text">
                        <?php echo clean($feature); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="product-benefits">
    <div class="container">
        <div class="section-header">
            <h2>Key Benefits</h2>
            <p>Transformative outcomes for your organization</p>
        </div>
        <div class="benefits-grid">
            <?php foreach ($product['benefits'] as $benefit): ?>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="benefit-text">
                        <?php echo clean($benefit); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Industries -->
<section class="product-industries-section">
    <div class="container">
        <div class="section-header">
            <h2>Ideal For These Industries</h2>
            <p>Tailored solutions for your specific industry needs</p>
        </div>
        <div class="industries-list">
            <?php
            $industry_icons = [
                'Healthcare' => 'fa-heartbeat',
                'Insurance' => 'fa-shield-alt',
                'Financial Services' => 'fa-chart-line',
                'Government' => 'fa-landmark',
                'Law Enforcement' => 'fa-user-shield',
                'Corporations' => 'fa-building',
                'Collections & Recovery' => 'fa-money-check-alt'
            ];
            foreach ($product['industries'] as $industry):
                $icon = isset($industry_icons[$industry]) ? $industry_icons[$industry] : 'fa-industry';
            ?>
                <div class="industry-card">
                    <i class="fas <?php echo $icon; ?>"></i>
                    <span><?php echo clean($industry); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="product-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>See how <?php echo clean($product['name']); ?> can transform your operations and deliver measurable results.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>?product=<?php echo urlencode($product['name']); ?>" class="btn-white">
                    <i class="fas fa-paper-plane"></i> Request Demo
                </a>
                <a href="<?php echo url('contact'); ?>?inquiry=sales&product=<?php echo urlencode($product['name']); ?>" class="btn-outline-white">
                    <i class="fas fa-comments"></i> Contact Sales
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<?php if (!empty($related_products)): ?>
<section class="related-products">
    <div class="container">
        <div class="section-header">
            <h2>Related Products</h2>
            <p>You might also be interested in these solutions</p>
        </div>
        <div class="related-grid">
            <?php foreach ($related_products as $related): ?>
                <div class="related-card">
                    <div class="related-card-header">
                        <div class="related-icon" style="background: <?php echo $related['color']; ?>;">
                            <i class="fas <?php echo $related['icon']; ?>"></i>
                        </div>
                        <h3 class="related-name"><?php echo clean($related['name']); ?></h3>
                        <div class="related-industries">
                            <?php foreach (array_slice($related['industries'], 0, 2) as $industry): ?>
                                <span class="industry-tag"><?php echo clean($industry); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="related-card-body">
                        <p class="related-description">
                            <?php echo clean(truncate($related['short_description'], 100)); ?>
                        </p>
                        <a href="<?php echo url('products/' . $related['slug']); ?>" class="related-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>
