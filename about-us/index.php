<?php
/**
 * About Us - Overview Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'About VettlyGlobal';
$meta_description = 'Learn about VettlyGlobal - a leading provider of risk solutions, identity verification, and data intelligence serving industries worldwide.';

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <span>About Us</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">About VettlyGlobal</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Empowering organizations worldwide with data-driven risk solutions and intelligence.
            </p>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Who We Are</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    VettlyGlobal is a leading provider of comprehensive risk solutions, identity verification, fraud detection, and data intelligence services. We serve organizations across healthcare, financial services, insurance, government, and more.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Our mission is to help organizations mitigate risks, prevent fraud, ensure compliance, and make informed decisions through advanced data analytics and technology solutions.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8;">
                    With a commitment to innovation, security, and customer success, VettlyGlobal has become a trusted partner for thousands of organizations worldwide.
                </p>
            </div>
            <div>
                <div class="stats-box" style="background: var(--bg-light); padding: 50px 40px; border-radius: 12px;">
                    <div class="stat-item" style="margin-bottom: 30px;">
                        <div class="stat-value" style="font-size: 3rem; font-weight: 700; color: var(--primary-color); margin-bottom: 10px;">10M+</div>
                        <div style="color: var(--text-secondary); font-size: 1.1rem;">Identities Verified Annually</div>
                    </div>
                    <div class="stat-item" style="margin-bottom: 30px;">
                        <div class="stat-value" style="font-size: 3rem; font-weight: 700; color: var(--primary-color); margin-bottom: 10px;">500+</div>
                        <div style="color: var(--text-secondary); font-size: 1.1rem;">Enterprise Clients</div>
                    </div>
                    <div class="stat-item" style="margin-bottom: 30px;">
                        <div class="stat-value" style="font-size: 3rem; font-weight: 700; color: var(--primary-color); margin-bottom: 10px;">150+</div>
                        <div style="color: var(--text-secondary); font-size: 1.1rem;">Countries Covered</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" style="font-size: 3rem; font-weight: 700; color: var(--primary-color); margin-bottom: 10px;">99.9%</div>
                        <div style="color: var(--text-secondary); font-size: 1.1rem;">Uptime Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>

        <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
            <div class="value-item" style="text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Trust & Security</h3>
                <p style="color: var(--text-secondary);">
                    We prioritize data security and privacy, ensuring the highest standards of protection for our clients.
                </p>
            </div>

            <div class="value-item" style="text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Innovation</h3>
                <p style="color: var(--text-secondary);">
                    Continuous innovation drives our solutions, keeping pace with evolving risks and technologies.
                </p>
            </div>

            <div class="value-item" style="text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Excellence</h3>
                <p style="color: var(--text-secondary);">
                    We strive for excellence in every service, delivering accurate data and reliable insights.
                </p>
            </div>

            <div class="value-item" style="text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Partnership</h3>
                <p style="color: var(--text-secondary);">
                    We build long-term partnerships with our clients, understanding their unique needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Learn More About Us</h2>
        </div>

        <div class="quick-links-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <a href="<?php echo url('about-us/leadership'); ?>" class="quick-link-card">
                <div class="card" style="padding: 40px 30px; text-align: center; transition: var(--transition); height: 100%;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 style="margin-bottom: 15px;">Leadership Team</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">
                        Meet the executives leading VettlyGlobal's vision and strategy.
                    </p>
                    <span style="color: var(--primary-color); font-weight: 600;">
                        View Leadership <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </a>

            <a href="<?php echo url('about-us/careers'); ?>" class="quick-link-card">
                <div class="card" style="padding: 40px 30px; text-align: center; transition: var(--transition); height: 100%;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 style="margin-bottom: 15px;">Careers</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">
                        Join our team and help shape the future of risk solutions.
                    </p>
                    <span style="color: var(--primary-color); font-weight: 600;">
                        View Openings <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </a>

            <a href="<?php echo url('about-us/press-room'); ?>" class="quick-link-card">
                <div class="card" style="padding: 40px 30px; text-align: center; transition: var(--transition); height: 100%;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3 style="margin-bottom: 15px;">Press Room</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">
                        Latest news, press releases, and media resources.
                    </p>
                    <span style="color: var(--primary-color); font-weight: 600;">
                        Read News <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </a>

            <a href="<?php echo url('about-us/technology'); ?>" class="quick-link-card">
                <div class="card" style="padding: 40px 30px; text-align: center; transition: var(--transition); height: 100%;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3 style="margin-bottom: 15px;">Our Technology</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">
                        Advanced technology powering our risk solutions platform.
                    </p>
                    <span style="color: var(--primary-color); font-weight: 600;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Ready to Partner with Us?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Discover how VettlyGlobal can help your organization mitigate risks and drive growth.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Contact Us
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-book"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.quick-link-card {
    text-decoration: none;
    color: inherit;
    display: block;
}

.quick-link-card .card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.row {
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .row {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
