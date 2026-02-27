<?php
/**
 * Government - Fraud Detection Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Fraud Detection & Prevention for Government | VettlyGlobal';
$meta_description = 'Advanced fraud detection and prevention solutions for government agencies. Real-time monitoring, pattern analysis, and benefit fraud prevention to protect taxpayer dollars.';

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
                <span>Fraud Detection</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Fraud Detection & Prevention</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Protect public resources with advanced fraud detection technology that identifies suspicious patterns, prevents improper payments, and safeguards taxpayer dollars.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Real-Time Fraud Prevention</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Government agencies lose billions annually to fraud across benefit programs, unemployment insurance, Medicaid, and other services. VettlyGlobal's fraud detection platform uses advanced analytics and machine learning to identify suspicious activity before payments are made.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Our solutions detect benefit fraud, identity fraud, duplicate payments, and organized fraud rings in real-time, enabling agencies to prevent losses and protect program integrity.
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
                        Real-time pattern detection
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Duplicate benefit detection
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Network analysis
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        AI-driven scoring
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Organized fraud detection
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
            <h2>Advanced Detection Technology</h2>
            <p>AI-powered fraud prevention for government programs</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Benefit Fraud Detection -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Benefit Fraud Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Identify fraudulent benefit claims, ineligible recipients, and false applications across government programs.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Eligibility verification
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Employment status checking
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Asset verification
                    </li>
                </ul>
            </div>

            <!-- Pattern Analysis -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-area" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Pattern Analysis</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Detect suspicious behavioral patterns, anomalies, and indicators of fraud rings across agency systems.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Anomaly detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Cluster analysis
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Timeline analysis
                    </li>
                </ul>
            </div>

            <!-- Duplicate Detection -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-copy" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Duplicate Benefit Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Prevent double-dipping and identify recipients receiving benefits from multiple agencies or programs.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Cross-agency matching
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Concurrent benefits
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Death master file checks
                    </li>
                </ul>
            </div>

            <!-- Real-Time Monitoring -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-eye" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Monitoring</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Continuous monitoring of benefit payments, claims, and recipient activity for early fraud detection.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Transaction monitoring
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Alert generation
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Dashboard reporting
                    </li>
                </ul>
            </div>

            <!-- Network Analysis -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-project-diagram" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Network Analysis</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Identify connections between suspects to uncover organized fraud rings and coordinated schemes.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Link analysis
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Address/phone matching
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Ring identification
                    </li>
                </ul>
            </div>

            <!-- Compliance & Reporting -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-contract" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Investigation Tools</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Investigation workflow tools and case management for fraud examination and prosecution support.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Case management
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Evidence documentation
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Report generation
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
            <h2>Benefits for Government Agencies</h2>
            <p>Significant fraud reduction and cost savings</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Massive Fraud Reduction</h3>
                <p style="color: var(--text-secondary);">
                    Identify and prevent fraudulent claims before payments are issued, reducing fraud losses by up to 30%.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Cost Savings</h3>
                <p style="color: var(--text-secondary);">
                    Every dollar spent on fraud prevention saves $5-10 in prevented fraud losses and recovery efforts.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Program Integrity</h3>
                <p style="color: var(--text-secondary);">
                    Maintain public trust and program integrity by ensuring benefits reach legitimate recipients.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Investigation Support</h3>
                <p style="color: var(--text-secondary);">
                    Provide investigators and prosecutors with evidence and case documentation for criminal prosecution.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Operational Efficiency</h3>
                <p style="color: var(--text-secondary);">
                    Prioritize investigation resources on high-risk cases and reduce time spent on false positives.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Regulatory Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Meet federal requirements for fraud detection and reporting in government benefit programs.
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
            <p>Quick deployment with minimal disruption</p>
        </div>

        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 25px;">Integration Approach</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    VettlyGlobal integrates with existing benefit administration systems through batch processing, real-time APIs, or both. We support legacy systems and modern cloud platforms.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Integration Methods</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Real-time APIs:</strong> Immediate fraud detection at application
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Batch Processing:</strong> Daily/weekly fraud analysis
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>File Exchange:</strong> FTP/SFTP data exchange
                    </li>
                </ul>
            </div>

            <div>
                <h3 style="margin-bottom: 25px;">Deployment Timeline</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Most government agencies go live within 8-12 weeks, with ongoing optimization and tuning based on agency feedback and fraud patterns.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Typical Timeline</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Weeks 1-2: Assessment and data setup
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Weeks 3-6: Model development and testing
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Weeks 7-10: Pilot and integration
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Weeks 11-12: Full rollout and training
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
            <h2>Protect Your Agency from Fraud</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Deploy advanced fraud detection to identify suspicious activity, prevent improper payments, and save millions in fraud losses.
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
