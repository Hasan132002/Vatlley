<?php
/**
 * Financial Services - Credit Risk Assessment Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Credit Risk Assessment Solutions';
$meta_description = 'Advanced credit risk assessment and scoring solutions. Portfolio risk analysis, default prediction, and lending decision support for financial institutions.';

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
                <span>Credit Risk</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Credit Risk Assessment</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Make better lending decisions with advanced credit risk assessment. Comprehensive credit scoring, portfolio analysis, and default prediction powered by machine learning.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Credit Risk Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Credit Risk Assessment platform combines traditional credit scoring with advanced machine learning to accurately predict borrower default risk. Our comprehensive solution supports lending decisions across consumer, SME, and corporate portfolios while helping institutions comply with regulatory capital requirements.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From initial credit decisioning to ongoing portfolio monitoring and stress testing, our platform provides the insights needed to manage credit risk effectively and profitably.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Comprehensive credit risk management and decisioning platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-calculator" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Advanced Credit Scoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Proprietary credit scoring models developed using extensive historical data and machine learning. Improve accuracy over traditional FICO scores with alternative data incorporation.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-area" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Portfolio Risk Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Analyze portfolio composition and risk concentration. Identify concentration risk in sectors, geographies, and borrower segments. Monitor portfolio deterioration trends.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-exclamation-circle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Default Probability Prediction</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Accurate prediction of borrower default probability using multiple models and techniques. Early warning indicators to identify at-risk loans before deterioration.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-percent" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Loss Given Default (LGD)</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Estimate recovery rates and loss severity by collateral type and borrower segment. Optimize loan structure and pricing based on recovery potential.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Stress Testing & Scenario Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Evaluate portfolio resilience under adverse economic scenarios. Regulatory stress testing support including CCAR/DFAST compliance for large institutions.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-pie" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Loan-Level Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Continuous monitoring of loan performance metrics and risk indicators. Automatic alerts for loans crossing risk thresholds. Collections optimization scoring.
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
            <p>Meet capital requirements and regulatory expectations</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Basel III/IV Capital Requirements</h3>
                <p style="color: var(--text-secondary);">
                    Support for credit risk weighted asset calculation under standardized and internal ratings-based (IRB) approaches. Compliance with capital adequacy ratios.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">IFRS 9 Impairment</h3>
                <p style="color: var(--text-secondary);">
                    Accurate expected credit loss (ECL) calculation for IFRS 9 compliance. Stage classification and impairment provisioning aligned with accounting standards.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">ASC 326 Compliance</h3>
                <p style="color: var(--text-secondary);">
                    US GAAP current expected credit loss (CECL) model compliance. Expected loss calculation and impairment reserve determination for financial reporting.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">CCAR/DFAST Stress Testing</h3>
                <p style="color: var(--text-secondary);">
                    Comprehensive stress testing framework for Federal Reserve annual assessment. Multi-scenario analysis and capital planning support for large institutions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Model Validation</h3>
                <p style="color: var(--text-secondary);">
                    Regulatory model validation and monitoring. Backtesting, benchmarking, and performance tracking against regulatory requirements and internal standards.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Fair Lending Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Adverse impact analysis and fair lending testing. Ensure credit decisions are non-discriminatory and compliant with ECOA and FHA requirements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5;">
            <h2>Common Use Cases</h2>
            <p>How institutions optimize lending with our solutions</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Consumer Lending Decisioning</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Automated credit decisions for personal loans, mortgages, and credit cards. Rapid approval decisions while maintaining portfolio quality and regulatory compliance.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">SME Credit Assessment</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Specialized credit models for small and medium enterprises. Alternative data incorporation for thin-file businesses. Rapid credit assessment with limited financial data.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Commercial Loan Pricing</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Optimize loan pricing based on risk rating and recovery probability. Ensure pricing adequately reflects risk and supports profitability targets.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Portfolio Risk Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Continuous portfolio performance monitoring and risk measurement. Early warning systems for portfolio deterioration and concentration risk buildup.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Collections Prioritization</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Prioritize collections efforts with default prediction models. Identify at-risk loans early for proactive borrower outreach and loss mitigation.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Economic Capital Calculation</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Internal economic capital calculation for risk-based capital allocation. Portfolio-level risk measurement supporting strategic planning and pricing decisions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="color: white; margin-bottom: 20px;">Optimize Your Credit Risk Management</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Make better lending decisions with advanced credit risk assessment. Reduce losses while growing your loan portfolio profitably and safely.
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
