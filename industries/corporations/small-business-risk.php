<?php
/**
 * Small Business Risk Solutions Service Page - Corporations Industry
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Small Business Risk Solutions';
$meta_description = 'Small business risk management and assessment solutions for corporations. Evaluate small business credit, fraud risk, and operational viability with VettlyGlobal.';

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
                <span>Small Business Risk</span>
            </div>
            <h1 style="color: white; font-size: 2.8rem; margin-bottom: 25px; font-weight: 700; line-height: 1.2;">Small Business Risk Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.7; margin-bottom: 0;">
                Comprehensive small business risk assessment, credit evaluation, and fraud detection solutions to make informed decisions for small business lending and partnerships.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Specialized Small Business Risk Management</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                VettlyGlobal's small business risk solutions address unique challenges of small business assessment with comprehensive business intelligence, credit analysis, and fraud detection tailored for small business lending and risk evaluation.
            </p>
        </div>

        <div style="background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: 40px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Business Credit Analysis</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Evaluate business creditworthiness with comprehensive business credit reports, payment history, and financial profile assessment.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Business Intelligence</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Assess business viability with operational data, industry analysis, and market intelligence to understand business fundamentals and health.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Fraud & Owner Risk</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Detect small business fraud and assess owner risk with background screening, financial analysis, and behavioral patterns.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Financial Health Assessment</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Analyze financial statements, tax returns, and cash flow to assess business financial health and repayment capability.
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
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Advanced small business assessment and risk tools</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Business Credit & Payment History -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Business Credit & Payment History</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business credit reports and scoring
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Vendor and trade payment history
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Bank account verification and history
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Delinquency and payment trend analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Credit limit and facility analysis
                    </li>
                </ul>
            </div>

            <!-- Business Data & Intelligence -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Business Data & Intelligence</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business registration and licensing
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Industry classification and analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Years in business and stability
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Employee count and staffing levels
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Location and facility information
                    </li>
                </ul>
            </div>

            <!-- Financial Analysis -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Financial Analysis & Verification</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Tax return and income verification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Financial statement analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Cash flow and profitability analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Balance sheet and asset analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Debt-to-income and leverage ratios
                    </li>
                </ul>
            </div>

            <!-- Owner & Management Screening -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Owner & Management Screening</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Ownership structure and background
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Owner personal credit assessment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Criminal and litigation history
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Beneficial ownership identification
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Management experience and stability
                    </li>
                </ul>
            </div>

            <!-- Fraud & Anomaly Detection -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Fraud & Anomaly Detection</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business fraud and misrepresentation detection
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Financial statement integrity analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Unusual pattern and anomaly detection
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Application fraud screening
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Sanctions and adverse media screening
                    </li>
                </ul>
            </div>

            <!-- Risk Scoring & Decision Support -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Risk Scoring & Decision Support</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Small business credit risk scoring
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Business default probability models
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Fraud risk assessment and scoring
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Overall business viability assessment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Decisioning and recommendations
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
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Reduce Small Business Losses</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Minimize credit losses from small business defaults and fraud with comprehensive risk assessment and early warning systems.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Enable Growth</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Support small business lending programs with efficient risk assessment to expand your small business portfolio safely.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Decisioning</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Speed up small business loan decisions with comprehensive risk assessment and automated scoring to improve time-to-approval.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Detect Fraud</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify small business fraud and misrepresentation through financial analysis and anomaly detection before approving risky loans.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improve Portfolio</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Build healthier small business portfolios with better risk assessment, pricing optimization, and early warning systems.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Support Relationships</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Strengthen small business lending relationships with proactive monitoring and early intervention to prevent default.
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
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Banks & Credit Unions</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Support small business lending programs with comprehensive business credit assessment and risk evaluation.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Alternative & Online Lenders</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Scale small business lending with alternative data, real-time scoring, and automated decisioning for rapid loan approvals.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Equipment & Invoice Finance</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Assess small business creditworthiness for equipment leasing and invoice financing programs.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">SBA Lending Programs</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Support SBA lending with comprehensive business assessment and compliance verification for government-backed loans.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Vendor & Supplier Relationships</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Screen and monitor small business suppliers and vendors to assess credit and operational risk.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">B2B Marketplace</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Screen small business sellers and marketplace participants to ensure legitimacy and operational viability.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Manage Small Business Risk?</h2>
            <p>Discover how VettlyGlobal's small business risk solutions can help you make better lending decisions and reduce portfolio losses.</p>
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
