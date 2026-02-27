<?php
/**
 * Government - Payment Processing Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Payment Processing for Government | VattleyGlobal';
$meta_description = 'Secure and efficient payment processing solutions for government agencies. Benefit payments, tax refunds, and government disbursements with fraud prevention.';

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
                <span>Payment Processing</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Secure Payment Processing</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Process government benefit payments, refunds, and disbursements securely with real-time fraud detection and compliance reporting.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Trusted Payment Solutions</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Government agencies process trillions of dollars in payments annually - from benefit disbursements and tax refunds to vendor payments. VettlyGlobal provides secure, compliant payment processing solutions that prevent fraud while ensuring timely delivery of funds.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    Our payment solutions integrate fraud detection, reconciliation, and compliance reporting to safeguard government funds and meet federal security and audit requirements.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary">Get Started</a>
                    <a href="<?php echo url('resources'); ?>" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div style="background: linear-gradient(135deg, var(--primary-dark), var(--primary-color)); padding: 60px 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 25px;">Key Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Secure transaction processing
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Real-time fraud detection
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Payment reconciliation
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Multi-method distribution
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Compliance reporting
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
            <h2>Payment Processing Features</h2>
            <p>Complete solutions for government disbursements</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Secure Transactions -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-lock" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Secure Transactions</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Military-grade encryption and security protocols protect all government payment transactions from fraud and unauthorized access.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        End-to-end encryption
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        PCI-DSS compliance
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Token management
                    </li>
                </ul>
            </div>

            <!-- Real-Time Fraud Detection -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Fraud Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Screen every transaction for fraud risk in real-time, preventing improper payments before funds are released.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Pre-payment screening
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Velocity detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Threshold controls
                    </li>
                </ul>
            </div>

            <!-- Payment Reconciliation -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-balance-scale" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Payment Reconciliation</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Automated reconciliation ensures all government payments are accounted for and matched to source systems.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Automated matching
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Exception handling
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Audit trails
                    </li>
                </ul>
            </div>

            <!-- Multi-Method Distribution -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-layer-group" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Multi-Method Distribution</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Deliver payments via check, ACH, direct deposit, prepaid card, or electronic wallet options.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        ACH processing
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Check printing
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Card services
                    </li>
                </ul>
            </div>

            <!-- Compliance Reporting -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Compliance Reporting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Complete audit trails and compliance reporting for federal requirements and government audits.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Audit logging
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Payment schedules
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Exception reports
                    </li>
                </ul>
            </div>

            <!-- Integration Support -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-plug" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">System Integration</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Seamless integration with government benefit systems, treasury systems, and financial institutions.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        API integration
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Legacy system support
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Custom connectors
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
            <p>Efficient and secure payment delivery</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary);">
                    Real-time fraud detection prevents millions in improper government payments and protects taxpayer dollars.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Operational Efficiency</h3>
                <p style="color: var(--text-secondary);">
                    Automated payment processing reduces manual work, accelerates payment delivery, and improves efficiency.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Regulatory Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Meet federal audit requirements, security standards, and financial reporting obligations.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Recipient Satisfaction</h3>
                <p style="color: var(--text-secondary);">
                    Faster, more reliable payment delivery improves citizen experience and agency reputation.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Cost Reduction</h3>
                <p style="color: var(--text-secondary);">
                    Reduce payment processing costs through automation, fraud prevention, and operational efficiency.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Visibility & Control</h3>
                <p style="color: var(--text-secondary);">
                    Real-time dashboards and reporting provide complete visibility and control over government payments.
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
            <p>Reliable deployment for government payment systems</p>
        </div>

        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 25px;">Deployment Models</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    VettlyGlobal supports on-premises, cloud, and hybrid deployment models to meet government infrastructure requirements and security standards.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Deployment Options</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>On-Premises:</strong> Full government control and security
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Cloud:</strong> FedRAMP-authorized cloud services
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Hybrid:</strong> Combined approach for flexibility
                    </li>
                </ul>
            </div>

            <div>
                <h3 style="margin-bottom: 25px;">Support & Training</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Dedicated support teams, comprehensive training, and ongoing optimization ensure government agencies maximize payment system effectiveness.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Support Services</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        24/7 technical support
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Staff training programs
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Ongoing optimization
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Secure Your Government Payments</h2>
            <p>Deploy advanced payment processing with real-time fraud detection to protect government funds and ensure secure disbursements.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('industries/government'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-arrow-left" style="margin-right: 8px;"></i>
                    Back to Government
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
