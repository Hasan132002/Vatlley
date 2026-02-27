<?php
/**
 * Financial Services - Fraud Detection & Prevention Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Fraud Detection & Prevention Solutions';
$meta_description = 'Real-time fraud detection powered by AI and machine learning. Detect payment fraud, account takeover, and organized fraud schemes with advanced analytics.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/financial-services'); ?>" style="color: white;">Financial Services</a>
                <span style="margin: 0 10px;">/</span>
                <span>Fraud Detection</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Fraud Detection & Prevention</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Detect and prevent fraud in real-time with AI-powered analytics. Protect against payment fraud, account takeover, and organized fraud schemes across all channels.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Fraud Detection Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Fraud Detection platform uses advanced machine learning and behavioral analytics to identify suspicious activities in real-time. Our multi-channel fraud detection system protects against payment fraud, account takeover, synthetic identity fraud, and organized fraud rings.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                With adaptive algorithms that learn from your institution's specific fraud patterns, we deliver low false positive rates while catching genuine fraud attempts. Protect your customers and your bottom line with comprehensive fraud prevention.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Advanced fraud detection powered by AI and machine learning</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-robot" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Pattern Recognition</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Machine learning models that recognize fraud patterns and adapt continuously. Detect emerging fraud types and attack vectors without manual rule updates.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-map-marked-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Behavioral Analytics</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Profile customer behavior and detect deviations that indicate account compromise or fraud. Geographic anomalies, spending pattern changes, and device fingerprinting analysis.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-network-wired" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Network Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Identify fraud rings and organized fraud schemes through relationship analysis. Detect connections between customers, devices, and transactions that indicate coordinated fraud.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-double" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Multi-Factor Authentication</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Adaptive authentication based on risk assessment. Require additional verification for high-risk transactions while maintaining seamless experience for legitimate customers.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bell" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Alerts & Orchestration</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Instant alerts for suspicious transactions with configurable escalation paths. Automatic fraud response actions including transaction blocking, account freezing, and customer notification.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-sliders-h" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Customizable Rules & Models</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Configure fraud detection rules specific to your business. Combine pre-built rules with custom machine learning models for your unique fraud risks and customer base.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Benefits -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Regulatory Benefits</h2>
            <p>Comprehensive fraud prevention that meets regulatory expectations</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Regulatory Expectations</h3>
                <p style="color: var(--text-secondary);">
                    Meet regulatory expectations for fraud prevention and risk management. Demonstrate effective controls to regulators during examinations and audits.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">PCI DSS Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Support PCI DSS requirements for payment card fraud detection and prevention. Secure handling of card data with encryption and tokenization.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Consumer Protection</h3>
                <p style="color: var(--text-secondary);">
                    Protect consumers with rapid fraud detection and prevention. Reduce unauthorized transaction liability and customer dispute rates.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Audit Trails</h3>
                <p style="color: var(--text-secondary);">
                    Complete audit trails of all fraud detection decisions and responses. Document why transactions were flagged or blocked for regulatory review.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">GDPR Compliance</h3>
                <p style="color: var(--text-secondary);">
                    GDPR-compliant data processing and customer communication. Transparent fraud detection decisions with customer rights protection.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">International Standards</h3>
                <p style="color: var(--text-secondary);">
                    Support for international fraud prevention standards and best practices. Compliance with local requirements across multiple jurisdictions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Common Use Cases</h2>
            <p>How institutions prevent fraud with our solutions</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Payment Fraud Prevention</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Detect fraudulent payment card transactions, wire transfer fraud, and ACH fraud in real-time. Reduce false positives to prevent customer frustration while catching genuine fraud attempts.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Account Takeover Protection</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify compromised accounts through behavioral anomalies and unusual login patterns. Detect account takeover attempts before fraudsters gain full access to customer accounts.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Synthetic Identity Fraud</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Detect synthetic identity fraud where criminals create fake identities combining real and fake information. Identify patterns that indicate organized identity fabrication schemes.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Fraud Ring Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify organized fraud rings through network analysis. Detect connections between multiple fraudsters targeting your institution with coordinated schemes.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Mobile & Digital Channel Security</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Protect digital channels with device fingerprinting and fraud detection. Detect mobile app fraud, phishing attacks, and unauthorized access attempts.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Cross-Channel Fraud Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Correlate suspicious activities across all channels - ATM, branch, online, and mobile. Identify complex fraud schemes that span multiple touchpoints.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Protect Your Institution from Fraud</h2>
            <p>Deploy real-time fraud detection to protect your customers and reduce fraud losses. Advanced AI-powered analytics with minimal false positives.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.use-cases-grid > div:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.compliance-grid > div {
    transition: var(--transition);
}

.compliance-grid > div:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-lg);
}
</style>

<?php include '../../includes/footer.php'; ?>
