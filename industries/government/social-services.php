<?php
/**
 * Government - Social Services Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Social Services Solutions | VattleyGlobal';
$meta_description = 'SNAP, TANF, and social services fraud prevention and eligibility verification solutions for human services agencies.';

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
                <span>Social Services</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Social Services Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Improve program integrity and service delivery for SNAP, TANF, and other human services programs.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Comprehensive Social Services Solutions</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Social services programs like SNAP and TANF serve millions of recipients and require rigorous eligibility verification and fraud prevention. VettlyGlobal provides comprehensive solutions to improve program integrity while ensuring eligible individuals receive needed assistance.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    From eligibility verification to fraud detection and performance measurement, our solutions help human services agencies deliver programs effectively and efficiently.
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
                        Case management
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Benefit calculation
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
            <h2>Social Services Features</h2>
            <p>Comprehensive tools for human services programs</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Eligibility Verification -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-circle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Eligibility Verification</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Verify income, household composition, and citizenship to determine program eligibility accurately.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Income verification
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Household checks
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Citizenship validation
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
                    Identify ineligible applicants and fraudulent benefit claims using advanced analytics.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Duplicate detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Pattern detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Network analysis
                    </li>
                </ul>
            </div>

            <!-- Case Management -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tasks" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Case Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Manage beneficiary cases from application through recertification with integrated workflows.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Application workflow
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Recertification management
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Document tracking
                    </li>
                </ul>
            </div>

            <!-- Benefit Calculation -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-calculator" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Benefit Calculation</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Accurate benefit calculation based on income, household size, and program rules.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Automated calculations
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Rule engine
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Deduction tracking
                    </li>
                </ul>
            </div>

            <!-- Program Analytics -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Program Analytics</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Track program metrics, caseloads, and performance indicators to optimize delivery.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Caseload tracking
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Performance metrics
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Trend analysis
                    </li>
                </ul>
            </div>

            <!-- Interagency Coordination -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-handshake" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Interagency Coordination</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Coordinate with other agencies and programs to verify eligibility across benefit programs.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Multi-program integration
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Data sharing
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Cross-agency matching
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
            <h2>Benefits for Social Services Agencies</h2>
            <p>Improved program integrity and service delivery</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary);">
                    Prevent fraudulent applications and benefit claims, protecting program resources.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Efficiency Gains</h3>
                <p style="color: var(--text-secondary);">
                    Automate verification and processing to reduce administrative burden on case workers.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Accurate Benefits</h3>
                <p style="color: var(--text-secondary);">
                    Ensure eligible applicants receive correct benefits while preventing overpayments.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Program Integrity</h3>
                <p style="color: var(--text-secondary);">
                    Maintain public trust through rigorous verification and fraud prevention.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Performance Improvement</h3>
                <p style="color: var(--text-secondary);">
                    Track and improve program metrics, processing times, and service delivery quality.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Meet federal requirements and audit standards with comprehensive documentation.
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
            <p>Seamless integration with social services systems</p>
        </div>

        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 25px;">System Integration</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    We integrate with your human services management systems, benefit calculation engines, and data warehouses.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Integration Capabilities</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        SNAP/TANF systems
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        Agency databases
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        Federal systems
                    </li>
                </ul>
            </div>

            <div>
                <h3 style="margin-bottom: 25px;">Change Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Dedicated support including staff training, documentation, and ongoing assistance.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Support Services</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Implementation planning
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
            <h2>Improve Social Services Delivery</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Deploy comprehensive social services solutions to improve program integrity, prevent fraud, and enhance service delivery.
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
