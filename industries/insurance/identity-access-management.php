<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Identity & Access Management - Insurance';
$meta_description = 'Identity verification and access management solutions for insurance. Prevent fraud and ensure secure authentication across operations.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/insurance'); ?>" style="color: white;">Insurance</a>
                <span style="margin: 0 10px;">/</span>
                <span>Identity & Access Management</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Identity & Access Management</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Prevent fraud and secure operations with comprehensive identity verification and access control solutions.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Identity & Security Platform</h2>
            <p>Verify identities and secure access across your insurance operations</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Comprehensive Solutions</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-id-card" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Identity Verification</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Real-time verification of customer identities.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-binoculars" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Document Verification</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Validate government-issued IDs and documents.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-user-lock" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Access Control</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Role-based access and multi-factor authentication.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-bug" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Fraud Prevention</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Detect synthetic identity and account takeover attempts.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">99.5%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Verification accuracy</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">< 1s</div>
                    <p style="font-size: 1.1rem;">Verification time</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Benefits</h2>
            <p>Security and fraud prevention for insurance operations</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Prevent identity fraud and account takeover</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">85%+ reduction</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in identity fraud</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-circle" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Regulatory Compliance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Meet KYC/AML and identity requirements</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">100% compliant</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">with regulations</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-rocket" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Instant Verification</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Verify customers in seconds, not days</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">Sub-second</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">response times</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-user-tie" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Experience</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Seamless authentication for customers and staff</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">90%+ satisfaction</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">with process</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Secure Your Insurance Operations</h2>
            <p>Verify identities and prevent fraud with comprehensive identity and access management.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.benefit-card {
    transition: var(--transition);
}
</style>

<?php include '../../includes/footer.php'; ?>
