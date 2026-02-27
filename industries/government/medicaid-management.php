<?php
/**
 * Government - Medicaid Management Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Medicaid Management Solutions | VattleyGlobal';
$meta_description = 'Medicaid fraud prevention, eligibility verification, and program management solutions for state health agencies.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/government'); ?>" style="color: white;">Government</a>
                <span style="margin: 0 10px;">/</span>
                <span>Medicaid Management</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Medicaid Management</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Prevent fraud, ensure eligibility compliance, and optimize Medicaid program operations across your state.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Comprehensive Medicaid Solutions</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    States manage complex Medicaid programs serving millions of recipients. VettlyGlobal provides comprehensive solutions to prevent fraud, verify eligibility, and optimize program delivery while ensuring beneficiaries receive proper care.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    From eligibility verification to fraud detection and provider credentialing, our solutions help states reduce fraud losses and improve program integrity.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary">Get Started</a>
                    <a href="<?php echo url('resources'); ?>" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 25px;">Key Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Eligibility verification
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Fraud detection
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Provider credentialing
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Claims analysis
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Program analytics
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Medicaid Solutions</h2>
            <p>Advanced tools for program management and fraud prevention</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Eligibility Verification -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-circle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Eligibility Verification</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Verify Medicaid beneficiary eligibility in real-time using income, citizenship, and residency data.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Income verification
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Citizenship checks
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Asset verification
                    </li>
                </ul>
            </div>

            <!-- Fraud Detection -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Fraud Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Identify fraudulent claims, ineligible recipients, and provider fraud using advanced analytics.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Duplicate detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Claim analysis
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Pattern detection
                    </li>
                </ul>
            </div>

            <!-- Provider Credentialing -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-id-badge" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Provider Credentialing</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Verify provider credentials, licenses, and qualifications to ensure program integrity and quality care.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        License verification
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Background checks
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Sanction screening
                    </li>
                </ul>
            </div>

            <!-- Claims Analysis -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-invoice-dollar" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Claims Analysis</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Analyze claims patterns to identify potential fraud and inappropriate billing practices.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Utilization review
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Outlier detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Provider benchmarking
                    </li>
                </ul>
            </div>

            <!-- Beneficiary Analytics -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Beneficiary Analytics</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Analyze beneficiary health outcomes and program utilization to improve care delivery.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Health trending
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Cost analysis
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Outcomes tracking
                    </li>
                </ul>
            </div>

            <!-- Compliance Reporting -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-clipboard-list" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Compliance Reporting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Generate comprehensive reports for federal compliance, audits, and state agency requirements.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        CMS reporting
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Audit trails
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Custom reports
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Agency Benefits -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Benefits for State Health Agencies</h2>
            <p>Improved program management and fraud prevention</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary);">
                    Identify and prevent Medicaid fraud, reducing improper payments and protecting state funds.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Cost Reduction</h3>
                <p style="color: var(--text-secondary);">
                    Lower program costs through fraud prevention, eligibility verification, and operational efficiency.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Program Integrity</h3>
                <p style="color: var(--text-secondary);">
                    Maintain program integrity and ensure benefits reach eligible individuals who need care.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Improved Quality</h3>
                <p style="color: var(--text-secondary);">
                    Verify provider credentials and monitor quality metrics to improve beneficiary care outcomes.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Regulatory Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Meet CMS requirements and federal regulations with comprehensive reporting and audit trails.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Better Analytics</h3>
                <p style="color: var(--text-secondary);">
                    Gain insights into beneficiary health trends and program performance to inform policy decisions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Details -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Implementation & Integration</h2>
            <p>Seamless Medicaid program integration</p>
        </div>

        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 25px;">System Integration</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    We integrate with your Medicaid Management Information System (MMIS) and other state systems for seamless data exchange and operations.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Integration Points</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        Eligibility systems
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        Claims processing
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        Provider directories
                    </li>
                </ul>
            </div>

            <div>
                <h3 style="margin-bottom: 25px;">Deployment Support</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Dedicated project management and ongoing support throughout implementation and operations.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Support Services</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Project management
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Staff training
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        24/7 support
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Optimize Your Medicaid Program</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Deploy comprehensive Medicaid management solutions to prevent fraud, verify eligibility, and improve program operations.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('industries/government'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-arrow-left"></i>
                    Back to Government
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
