<?php
/**
 * Financial Services - Collections & Recovery Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Collections & Recovery Solutions';
$meta_description = 'Advanced collections and debt recovery solutions. Collections prioritization, skip tracing, payment prediction, and recovery optimization for financial institutions.';

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
                <span>Collections & Recovery</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Collections & Recovery Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Optimize collections effectiveness with intelligent prioritization and recovery strategies. Maximize recovery rates while managing compliance with debt collection regulations.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Collections Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Collections & Recovery platform helps financial institutions optimize debt collection effectiveness while ensuring compliance with FDCPA and international debt collection regulations. Our platform combines advanced analytics with skip tracing and payment prediction to identify high-recovery prospects and optimize collection strategies.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From early stage delinquency prevention to mature collections management, our solutions help maximize recoveries, reduce costs, and improve customer relationships throughout the collections lifecycle.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Comprehensive collections and recovery management platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-sort-amount-down" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Collections Prioritization</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Intelligent scoring that prioritizes accounts for maximum recovery potential. Allocate collections resources to highest-probability recovery accounts first.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-map-pin" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Skip Tracing & Locating</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Advanced skip tracing to locate difficult-to-find customers. Comprehensive data sources to update contact information and verify current addresses and phone numbers.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-money-check-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Payment Prediction & Scoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Predict likelihood of payment response. Score customers for optimal contact strategy, settlement offer levels, and timing for maximum recovery response.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-handshake" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Settlement Optimization</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Optimize settlement offer strategies and payment terms. Recommend settlement amounts that maximize recovery while remaining attractive to debtors.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-line-chart" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Portfolio Management & Analytics</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Comprehensive portfolio analysis and collections funnel monitoring. Identify bottlenecks and optimize collections workflow for maximum effectiveness.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-gavel" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Compliance Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    FDCPA compliance automation and monitoring. Track collection attempts, prevent harassment, and maintain audit trails for regulatory compliance.
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
            <p>Collections that respect consumer rights and regulatory requirements</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">FDCPA Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Fair Debt Collection Practices Act compliance automation. Prevent harassment, respect consumer rights, and maintain FDCPA-compliant collections practices.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">State Collection Laws</h3>
                <p style="color: var(--text-secondary);">
                    Compliance with state-specific debt collection regulations and licensing requirements. Support for multistate operations with regulatory variability.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Bankruptcy Law Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Automatic identification of bankruptcy filings and compliance with automatic stay requirements. Prevent illegal collection activities against bankrupt customers.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Contact Frequency Limits</h3>
                <p style="color: var(--text-secondary);">
                    Automatic tracking of contact attempts to prevent excessive contact. Maintain consumer call limits and contact preferences with full documentation.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Debt Validation</h3>
                <p style="color: var(--text-secondary);">
                    Support for debt validation requests and requirements. Maintain complete documentation supporting debt amounts and consumer obligations.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Audit Trail & Documentation</h3>
                <p style="color: var(--text-secondary);">
                    Complete audit trails of all collections activities. Maintain documentation supporting compliance with collections regulations for potential disputes.
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
            <p>How institutions improve collections effectiveness</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Early Delinquency Prevention</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify customers at risk of delinquency and intervene early. Proactive outreach to prevent accounts from moving into serious delinquency status.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Delinquent Account Prioritization</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Prioritize delinquent accounts for collections efforts based on recovery potential. Focus collections resources on highest-value recovery opportunities.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Skip Tracing & Location Services</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Locate hard-to-reach customers with advanced skip tracing. Update customer contact information to enable effective collection communications.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Settlement & Payment Arrangements</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Optimize settlement offers based on payment likelihood and customer capacity. Recommend payment terms that maximize recovery and customer satisfaction.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Collections Team Performance Optimization</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Optimize collections team allocation and performance. Measure individual collector effectiveness and identify coaching opportunities.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Litigation Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Support litigation decisions with predictive analytics. Identify accounts suitable for legal action and estimate recovery likelihood and costs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Optimize Your Collections Performance</h2>
            <p>Maximize recovery rates while maintaining compliance and improving customer relationships. Intelligent collections solutions that deliver measurable results.</p>
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
