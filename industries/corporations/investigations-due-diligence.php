<?php
/**
 * Investigations & Due Diligence Service Page - Corporations Industry
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Investigations & Due Diligence Solutions';
$meta_description = 'Comprehensive investigations and due diligence solutions for corporations. Conduct thorough background checks, KYC, and compliance investigations with VettlyGlobal.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 120px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 25px; opacity: 0.9; font-size: 0.95rem;">
                <a href="<?php echo url(); ?>" style="color: white; text-decoration: none;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white; text-decoration: none;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/corporations'); ?>" style="color: white; text-decoration: none;">Corporations</a>
                <span style="margin: 0 10px;">/</span>
                <span>Investigations & Due Diligence</span>
            </div>
            <h1 style="color: white; font-size: 2.8rem; margin-bottom: 25px; font-weight: 700; line-height: 1.2;">Investigations & Due Diligence Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.7; margin-bottom: 0;">
                Comprehensive investigations, background checks, and due diligence solutions to verify identities, assess risk, and ensure compliance across your organization.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Thorough Investigations & Compliance</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                VettlyGlobal's investigations and due diligence solutions combine public records research, background screening, and compliance verification to help you make informed decisions and manage risk throughout the customer relationship lifecycle.
            </p>
        </div>

        <div style="background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: 40px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Background Screening</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Conduct comprehensive background checks including criminal records, civil history, employment verification, and educational credentials verification.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Public Records Research</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Access comprehensive public records including property, UCC filings, corporate records, and litigation history for individuals and entities.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Business Due Diligence</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Perform thorough due diligence on business partners, vendors, and counterparties to verify legitimacy and assess associated risks.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Compliance Verification</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Verify compliance with regulatory requirements, license verification, and professional certification to ensure legitimacy and qualifications.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Capabilities -->
<section class="section" style="background: var(--bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Key Capabilities</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Advanced investigation and research tools</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Criminal & Civil Screening -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Criminal & Civil Screening</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Criminal record screening (county & federal)
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Sex offender registry checks
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Civil litigation history
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Bankruptcy records and credit history
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        FCRA-compliant screening procedures
                    </li>
                </ul>
            </div>

            <!-- Employment & Education Verification -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Employment & Education Verification</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Employment history verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Educational credential verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Professional license verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Reference checks and interviews
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Third-party verification services
                    </li>
                </ul>
            </div>

            <!-- Public Records Research -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Public Records Research</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Property and real estate records
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        UCC and lien filings
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Corporate and business records
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Judgment and lien records
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        News and media research
                    </li>
                </ul>
            </div>

            <!-- Business Due Diligence -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Business Due Diligence</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business legitimacy verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Beneficial ownership identification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Director and officer screening
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Financial stability assessment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Compliance and regulatory review
                    </li>
                </ul>
            </div>

            <!-- Compliance & Regulatory -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Compliance & Regulatory Verification</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        License and certification verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Regulatory compliance status
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Sanctions and watchlist screening
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Enforcement actions and violations
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Regulatory history research
                    </li>
                </ul>
            </div>

            <!-- Investigation & Research -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Investigation & Research Services</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Fraud investigation support
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Legal and compliance research
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Asset and financial investigation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Risk assessment and profiling
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Custom investigation projects
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Strategic Benefits</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">How VettlyGlobal's solutions drive business value</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Reduce Risk & Liability</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Minimize business risk through thorough due diligence and comprehensive background screening to identify potential issues before they become problems.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ensure Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Meet regulatory and legal obligations with comprehensive investigations and FCRA-compliant background screening procedures and documentation.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-search"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Uncover Hidden Information</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Discover relevant background information through comprehensive public records research and investigation to make informed decisions.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Accelerate Due Diligence</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Speed up due diligence processes with automated screening, comprehensive data sources, and efficient investigation workflows.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improve Decision Making</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Make better business decisions with comprehensive insights from thorough investigations and risk assessments of partners and customers.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Protect Your Organization</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Safeguard your organization from reputational damage, fraud, and legal liability through comprehensive due diligence and risk assessment.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industry Applications -->
<section class="section" style="background: var(--bg-light); padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Industry Applications</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">How corporations across sectors leverage our solutions</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 50px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Financial Services</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Conduct KYC, AML due diligence, and customer screening for compliance with financial regulations and sanctions requirements.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">HR & Employment Screening</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Verify employment history, education credentials, and conduct background checks for hiring and contractor screening.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">M&A & Due Diligence</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Conduct thorough due diligence on target companies, management teams, and beneficial owners for acquisition and investment decisions.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Vendor & Partner Screening</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Screen vendors, suppliers, and business partners to assess risk and ensure compliance with regulatory and internal policies.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Insurance & Underwriting</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Conduct background investigations and risk assessment for insurance underwriting and claims validation.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Legal & Compliance</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Support legal investigations, compliance programs, and regulatory due diligence with comprehensive research and screening services.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Comprehensive Due Diligence?</h2>
            <p>Discover how VettlyGlobal's investigations and due diligence solutions can help you manage risk and make better business decisions.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Contact Us
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
.page-hero {
    color: white;
}

.section-header h2 {
    color: var(--text-primary);
    font-weight: 700;
}

.section-header p {
    font-weight: 500;
}

.btn-lg {
    padding: 14px 32px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

@media (max-width: 768px) {
    .page-hero {
        padding: 80px 0;
    }

    .page-hero h1 {
        font-size: 2rem;
    }

    .section-header h2 {
        font-size: 1.8rem;
    }

    .hero-content {
        max-width: 100%;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
