<?php
/**
 * Financial Services - Know Your Customer (KYC) Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Know Your Customer (KYC) Solutions';
$meta_description = 'Comprehensive KYC solutions for customer verification, identity validation, and due diligence. Enhanced due diligence and ongoing customer monitoring for financial institutions.';

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
                <span>Know Your Customer</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Know Your Customer Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Streamline customer onboarding with comprehensive identity verification and due diligence. Verify customers instantly while maintaining compliance with global KYC regulations.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our KYC Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Know Your Customer solutions enable financial institutions to verify customer identities quickly and securely while meeting stringent regulatory requirements. Our platform combines advanced document verification, liveness detection, and biometric matching with comprehensive background checks.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From initial customer verification to enhanced due diligence and ongoing monitoring, our solutions provide a complete customer lifecycle management system that reduces onboarding time while maximizing compliance confidence.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Complete customer verification and due diligence platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-fingerprint" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Digital Document Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Verify government-issued IDs with OCR and security feature detection. Automatically validate document authenticity, extract key information, and detect document fraud.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-face-smile" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Liveness Detection & Biometrics</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Advanced liveness detection prevents spoofing attacks. Match facial biometrics against government IDs to ensure the person presenting is the actual account owner.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-globe" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Global Database Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Validate customer information against global databases, public records, and regulatory registries. Verify address, employment, and beneficial ownership information instantly.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-info-circle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Enhanced Due Diligence (EDD)</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Comprehensive enhanced due diligence for high-risk customers, politically exposed persons, and complex corporate structures. Identify beneficial owners and assess reputational risk.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-refresh" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ongoing Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Continuous customer monitoring throughout the relationship lifecycle. Automatic alerts for address changes, news mentions, adverse information, and regulatory events.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-mobile-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Mobile-First Onboarding</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Complete customer verification flows optimized for mobile devices. Self-service onboarding reduces friction while maintaining security and compliance standards.
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
            <p>Meet KYC and AML requirements across all jurisdictions</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Bank Secrecy Act (BSA)</h3>
                <p style="color: var(--text-secondary);">
                    Complete BSA compliance through verified customer identification program (CIP) and customer information program (CIF) requirements.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">FATF Mutual Evaluations</h3>
                <p style="color: var(--text-secondary);">
                    Compliance with Financial Action Task Force recommendations for KYC, beneficial ownership verification, and customer due diligence.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">EU AMLD5/AMLD6</h3>
                <p style="color: var(--text-secondary);">
                    Full alignment with European Anti-Money Laundering Directives including beneficial owner identification and enhanced scrutiny for high-risk jurisdictions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">GDPR Data Protection</h3>
                <p style="color: var(--text-secondary);">
                    Secure customer data handling with GDPR compliance. Encrypted storage, access controls, and secure processing of sensitive personal information.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Beneficial Ownership Transparency</h3>
                <p style="color: var(--text-secondary);">
                    Comprehensive beneficial ownership identification and verification for corporate and legal entity structures across jurisdictions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">PEP Screening Integration</h3>
                <p style="color: var(--text-secondary);">
                    Automatic politically exposed person screening during onboarding and ongoing monitoring with international sanctions list integration.
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
            <p>How institutions leverage our KYC solutions</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Digital Account Opening</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Enable rapid digital account opening with complete identity verification in under 5 minutes. Support retail customers, SMEs, and high-net-worth individuals with appropriate verification levels.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Corporate Customer Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Verify corporate customers with comprehensive business registration checks, beneficial ownership identification, and compliance certifications verification.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Complex Beneficial Ownership</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Navigate complex corporate structures with multi-tiered ownership. Identify ultimate beneficial owners through chain-of-custody analysis and corporate registry verification.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">High-Risk Customer Onboarding</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Enhanced due diligence for high-risk customers including reputational risk assessment, source of wealth verification, and adverse media screening.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Cross-Border Account Opening</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Manage cross-border customer verification with jurisdiction-specific requirements. Support multiple languages, document types, and regulatory frameworks.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Periodic Re-certification</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Streamline periodic customer re-certification with automated update checks. Identify and manage changes in customer status, risk profile, and regulatory requirements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Accelerate Customer Onboarding</h2>
            <p>Reduce onboarding time while maintaining compliance. Verify customers instantly with comprehensive identity verification and due diligence.</p>
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
