<?php
/**
 * Identity Verification - Healthcare Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Identity Verification for Healthcare | VettlyGlobal';
$meta_description = 'Secure patient and provider identity verification with fraud prevention and HIPAA compliance solutions from VettlyGlobal.';

include '../../includes/header.php';
?>

<!-- Page Header / Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/healthcare'); ?>" style="color: white;">Healthcare</a>
                <span style="margin: 0 10px;">/</span>
                <span>Identity Verification</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Identity Verification Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Secure patient and provider identity with advanced verification, fraud prevention, and HIPAA-compliant solutions that protect your organization.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 20px;">Secure Identity Management for Healthcare</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px; line-height: 1.8;">
                    Healthcare fraud and identity theft cost billions annually. VettlyGlobal's comprehensive identity verification solutions provide secure, HIPAA-compliant verification of patients and providers, detecting and preventing fraud while enabling legitimate access.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;">
                    From document verification and multi-factor authentication to real-time fraud detection and continuous monitoring, our platform protects your organization, members, and providers.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Multi-factor authentication
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Fraud detection & prevention
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        HIPAA-compliant solutions
                    </li>
                </ul>
            </div>
            <div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fas fa-id-card" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Secure Identity & Fraud Prevention</h3>
                    <p style="color: var(--text-secondary);">
                        Protect your organization with comprehensive identity verification and fraud detection that ensures secure, compliant access.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Capabilities</h2>
            <p>Comprehensive identity verification solutions</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-check" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Document Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Verify identity documents with advanced image analysis, liveness detection, and document authenticity validation.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Multi-Factor Authentication</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Enable secure access with knowledge-based, biometric, and device-based authentication factors that prevent unauthorized access.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-satellite-dish" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Real-Time Fraud Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Detect fraudulent activity in real-time with AI-powered risk assessment that identifies suspicious patterns and behaviors.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-user-secret" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Provider Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Verify provider credentials, licenses, and identities with comprehensive background and sanctions screening.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-history" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Continuous Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Monitor identities continuously for new fraud indicators, sanctions matches, and credential changes.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-lock" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">HIPAA Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Maintain HIPAA compliance with secure, encrypted identity verification processes and comprehensive audit trails.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>How It Works</h2>
            <p>Seamless identity verification process</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 50px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    1
                </div>
                <h3 style="margin-bottom: 15px;">Identity Submission</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Users submit identity information, documents, and biometric data through secure, user-friendly interfaces.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    2
                </div>
                <h3 style="margin-bottom: 15px;">Verification & Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Our system verifies documents, checks fraud indicators, and performs background screening in real-time.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    3
                </div>
                <h3 style="margin-bottom: 15px;">Decision & Authentication</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Provide immediate verification decision with multi-factor authentication for secure access.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    4
                </div>
                <h3 style="margin-bottom: 15px;">Continuous Protection</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Monitor verified identities continuously for new fraud indicators and suspicious activity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Use Cases</h2>
            <p>Real-world applications for healthcare security</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Member Enrollment & Access</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Verify member identity during enrollment and at point of care to prevent fraud, reduce claim denials, and ensure accurate billing.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Enrollment verification
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Fraud prevention
                    </li>
                </ul>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Provider Credentialing</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Verify provider identity, credentials, and legitimacy with comprehensive background screening and sanctions matching.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Credential verification
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Sanctions screening
                    </li>
                </ul>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Digital Health & Telehealth Access</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Secure telehealth platform access with strong identity verification and biometric authentication.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Biometric authentication
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Account security
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white; padding: 60px 0;">
    <div class="container" style="text-align: center;">
        <h2 style="color: white; margin-bottom: 20px;">Secure Your Healthcare Organization</h2>
        <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px; font-size: 1.1rem;">
            Learn how VettlyGlobal's identity verification solutions protect your organization from fraud while ensuring HIPAA compliance.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 30px; font-weight: 600;">
                Request a Demo <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 30px; font-weight: 600;">
                Contact Sales
            </a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
