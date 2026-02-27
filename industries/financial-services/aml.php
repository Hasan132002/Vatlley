<?php
/**
 * Financial Services - Anti-Money Laundering (AML) Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Anti-Money Laundering (AML) Solutions';
$meta_description = 'Advanced AML solutions for detecting and preventing financial crimes. Transaction monitoring, suspicious activity detection, and regulatory compliance for financial institutions.';

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
                <span>Anti-Money Laundering</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Anti-Money Laundering Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Protect your institution from financial crime with advanced AML solutions. Real-time transaction monitoring, suspicious activity detection, and comprehensive regulatory reporting.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our AML Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Anti-Money Laundering solutions are designed to meet the most stringent global regulatory requirements while protecting your institution and customers. Our comprehensive platform combines advanced analytics, machine learning, and expert compliance knowledge to detect suspicious activities before they become compliance violations.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From transaction monitoring to Suspicious Activity Report (SAR) generation, our solutions integrate seamlessly with your existing systems to provide real-time protection against financial crime.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Advanced AML toolset for comprehensive financial crime prevention</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-stream" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time Transaction Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Monitor all transactions in real-time to identify suspicious patterns and anomalies instantly. Our algorithms analyze transaction data against multiple rule sets and historical baselines.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-brain" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">AI-Powered Anomaly Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Machine learning algorithms that learn from your institution's patterns and continuously improve detection accuracy, reducing false positives while catching genuine threats.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-signature" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Automated SAR Generation</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Streamline Suspicious Activity Report filing with automated SAR generation that complies with FinCEN requirements and reduces manual reporting time by up to 80%.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Risk Scoring & Profiling</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Assign risk scores to customers and transactions based on comprehensive behavioral analysis, network analysis, and geographic risk assessment.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-search-plus" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Advanced Typology Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Detect known and emerging money laundering typologies and suspicious patterns. Our system recognizes structuring, trade-based laundering, and layering techniques.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-history" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Historical Case Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Maintain comprehensive audit trails and case history for regulatory examinations. Track investigations, decisions, and outcomes with complete documentation.
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
            <p>Meet global AML regulatory requirements with confidence</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Bank Secrecy Act (BSA) Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Full compliance with US BSA requirements including transaction reporting, currency transaction record (CTR) filing, and suspicious activity monitoring.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">FinCEN Reporting</h3>
                <p style="color: var(--text-secondary);">
                    Accurate Suspicious Activity Report (SAR) generation and filing meeting all FinCEN requirements and deadlines without manual errors.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">FATF Recommendations</h3>
                <p style="color: var(--text-secondary);">
                    Alignment with Financial Action Task Force (FATF) recommendations for AML/CFT controls and international best practices.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">EU AMLD5/AMLD6 Standards</h3>
                <p style="color: var(--text-secondary);">
                    Full compliance with European Anti-Money Laundering Directives including beneficial ownership verification and enhanced due diligence.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Regulatory Examination Ready</h3>
                <p style="color: var(--text-secondary);">
                    Complete audit trails and documentation to support regulatory examinations. Demonstrate effective AML program design and execution.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Cross-Border Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Support for international AML regulations across multiple jurisdictions with configurable thresholds and reporting requirements.
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
            <p>How institutions use our AML solutions</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Structuring Detection</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify and prevent structuring activities (smurfing) where customers make multiple deposits below reporting thresholds to avoid detection. Our algorithms recognize patterns across multiple accounts and customers.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Trade-Based Laundering</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Detect over/under invoicing of international trade transactions, including mismatches between shipment values and payment amounts that indicate money laundering.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Layering Prevention</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Track complex transaction chains and network analysis to identify layering schemes where illicit funds are moved through multiple accounts and institutions.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Correspondent Banking</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor correspondent banking relationships for suspicious activities and ensure AML compliance across international fund transfers and wire movements.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">High-Risk Customer Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Enhanced monitoring for politically exposed persons (PEPs), high-risk jurisdictions, and high-risk customer segments with specialized alert thresholds.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Source of Funds Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Verify the source of large deposits and fund transfers to ensure they align with customer profile and business activities. Flag misalignments automatically.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="color: white; margin-bottom: 20px;">Strengthen Your AML Compliance Program</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Deploy advanced AML solutions designed for modern financial institutions. Reduce false positives, accelerate investigations, and ensure regulatory compliance.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); font-weight: 600; padding: 12px 32px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-calendar"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; border: 2px solid white; color: white; font-weight: 600; padding: 10px 30px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
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
