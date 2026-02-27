<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Compliance & Regulatory Solutions - Insurance';
$meta_description = 'Insurance compliance and regulatory solutions. Fair lending compliance, anti-discrimination, audit trails, and regulatory reporting.';

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
                <span>Compliance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Compliance & Regulatory Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Stay compliant with comprehensive regulatory and fair lending solutions for insurance operations.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Enterprise Compliance Platform</h2>
            <p>Automated compliance monitoring and regulatory reporting</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Comprehensive Coverage</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Fair Lending Compliance</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Monitor pricing and underwriting for discrimination.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-file-audit" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Audit Trails</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Complete records of all decisions and data access.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-book" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Regulatory Reporting</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Automated reports for regulators and compliance teams.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-graduation-cap" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Compliance Training</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Educate teams on evolving regulations.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <h3 style="margin-bottom: 20px;">Regulations Covered</h3>
                    <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.95rem;">
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Fair Lending Laws (ECOA, FHA)</li>
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>GDPR & Privacy Laws</li>
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>State Insurance Regulations</li>
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>HIPAA Compliance</li>
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Sarbanes-Oxley</li>
                        <li style="padding: 8px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Anti-Money Laundering</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Benefits</h2>
            <p>Reduce compliance risk and operational burden</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Risk Reduction</h3>
                <p style="color: var(--text-secondary);">Minimize compliance violations and regulatory fines</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-cog" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Automation</h3>
                <p style="color: var(--text-secondary);">Automate compliance checks and audit processes</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-laptop" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Visibility</h3>
                <p style="color: var(--text-secondary);">Real-time dashboards and reporting</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Cost Savings</h3>
                <p style="color: var(--text-secondary);">Reduce compliance operations costs</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ensure Regulatory Compliance</h2>
            <p>Stay ahead of regulatory requirements with automated compliance monitoring.</p>
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
