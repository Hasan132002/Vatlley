<?php
/**
 * Resources - Hub Page
 * Links to all resource sections: Blog, Case Studies, Events, Webinars, Whitepapers
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Resources';
$meta_description = 'Explore VettlyGlobal resources including blog articles, case studies, events, webinars, and whitepapers on risk solutions and data intelligence.';
$meta_keywords = 'resources, blog, case studies, events, webinars, whitepapers, risk solutions, data intelligence';

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <span>Resources</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Resources</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Insights, research, and expert knowledge to help your organization stay ahead.
            </p>
        </div>
    </div>
</section>

<!-- Resource Categories -->
<section class="section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 50px;">
            <h2>Explore Our Resources</h2>
            <p style="color: var(--text-secondary); font-size: 1.1rem;">Access the latest thinking on risk management, fraud prevention, and data intelligence.</p>
        </div>

        <div class="resources-grid">
            <!-- Blog -->
            <a href="<?php echo url('resources/blog'); ?>" class="resource-card">
                <div class="resource-card-icon">
                    <i class="fas fa-blog"></i>
                </div>
                <h3>Blog & Insights</h3>
                <p>Stay informed with the latest trends, industry news, and expert commentary from our team.</p>
                <span class="resource-card-link">Browse Articles <i class="fas fa-arrow-right"></i></span>
            </a>

            <!-- Case Studies -->
            <a href="<?php echo url('resources/case-studies'); ?>" class="resource-card">
                <div class="resource-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3>Case Studies</h3>
                <p>See how organizations across industries have achieved measurable results with VettlyGlobal solutions.</p>
                <span class="resource-card-link">View Case Studies <i class="fas fa-arrow-right"></i></span>
            </a>

            <!-- Events -->
            <a href="<?php echo url('resources/events'); ?>" class="resource-card">
                <div class="resource-card-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Events</h3>
                <p>Join us at conferences, workshops, and industry events happening around the world.</p>
                <span class="resource-card-link">See Upcoming Events <i class="fas fa-arrow-right"></i></span>
            </a>

            <!-- Webinars -->
            <a href="<?php echo url('resources/webinars'); ?>" class="resource-card">
                <div class="resource-card-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Webinars</h3>
                <p>Browse on-demand webinars and upcoming live sessions with our experts.</p>
                <span class="resource-card-link">View Webinars <i class="fas fa-arrow-right"></i></span>
            </a>

            <!-- Whitepapers -->
            <a href="<?php echo url('resources/whitepapers'); ?>" class="resource-card">
                <div class="resource-card-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Whitepapers</h3>
                <p>Read in-depth research reports and technical whitepapers on key industry topics.</p>
                <span class="resource-card-link">View Whitepapers <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Need Help Finding the Right Resource?</h2>
            <p>Our team is here to help you find the information you need.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.resources-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.resource-card {
    background: white;
    border-radius: 12px;
    padding: 40px 30px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
}

.resource-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.resource-card-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}

.resource-card-icon i {
    font-size: 1.8rem;
    color: white;
}

.resource-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: var(--text-primary);
}

.resource-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 20px;
    flex: 1;
}

.resource-card-link {
    color: var(--primary-color);
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.resource-card:hover .resource-card-link {
    gap: 12px;
}

@media (max-width: 992px) {
    .resources-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .resources-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
