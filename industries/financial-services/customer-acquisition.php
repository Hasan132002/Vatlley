<?php
/**
 * Financial Services - Customer Acquisition Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Customer Acquisition Solutions';
$meta_description = 'Advanced customer acquisition solutions for financial institutions. Lead scoring, predictive analytics, and customer targeting to grow your business profitably.';

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
                <span>Customer Acquisition</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Customer Acquisition Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Grow your customer base profitably with advanced targeting and lead scoring. Identify high-value prospects and optimize acquisition campaigns for maximum ROI.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Customer Acquisition Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Customer Acquisition platform helps financial institutions identify, target, and acquire high-value customers efficiently. Combining advanced analytics, predictive modeling, and comprehensive data sources, our platform enables you to grow your customer base while maintaining profitability and managing risk.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From lead generation and scoring to campaign optimization and customer lifecycle management, our solutions support profitable growth across consumer and commercial banking channels.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Comprehensive customer acquisition and growth platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Advanced Lead Scoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Predictive lead scoring that identifies highest-probability prospects. Score leads based on likelihood of conversion, profitability, and lifetime value potential.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bullseye" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Targeted Prospect Lists</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Precision targeting of prospects matching your ideal customer profile. Access comprehensive data sources for accurate targeting and minimal false positives.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Lifetime Value Prediction</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Estimate customer lifetime value to optimize acquisition spending. Focus on prospects likely to generate long-term profitable relationships.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-digital-tachograph" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Campaign Performance Optimization</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Optimize campaign offers, timing, and messaging for maximum response. Real-time analytics to test variations and improve acquisition metrics.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-sitemap" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Cross-Sell & Upsell Opportunities</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Identify cross-sell and upsell opportunities within existing customer base. Expand customer relationships with additional products and services.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">ROI & Attribution Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Track acquisition ROI across channels and campaigns. Attribution modeling to understand which marketing efforts drive highest-value customer acquisition.
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
            <p>Responsible growth with fair lending and consumer protection compliance</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Fair Lending Compliance</h3>
                <p style="color: var(--text-secondary);">
                    ECOA and FHA compliant acquisition strategies. Ensure non-discriminatory targeting and offer practices across all protected classes.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Adverse Action Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Proper adverse action notification for denied applications. Fair Credit Reporting Act compliance and dispute management processes.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Truth in Lending</h3>
                <p style="color: var(--text-secondary);">
                    TILA disclosure accuracy and compliance. Ensure clear and accurate APR, terms, and rate information in all marketing materials.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Marketing Practices Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Compliant marketing practices that respect consumer preferences and regulations. Do-not-call compliance and preference management.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Data Privacy</h3>
                <p style="color: var(--text-secondary);">
                    GLBA and GDPR compliant data handling for prospect targeting. Secure data processing and compliance with privacy regulations.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Risk Assessment</h3>
                <p style="color: var(--text-secondary);">
                    Integrated risk scoring to ensure profitable acquisition. Regulatory and fraud risk assessment built into targeting and decisioning.
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
            <p>How institutions grow profitably and responsibly</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Consumer Credit Card Acquisition</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Target creditworthy consumers for credit card acquisition. Optimize approval rates and credit limits based on risk profile and profitability projections.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Mortgage Origination Targeting</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify mortgage prospects in target markets. Lead generation and targeting for home purchase and refinance opportunities.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">SME Business Banking Growth</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Target small and medium enterprises for business banking and credit products. Identify high-growth businesses with strong financial profiles.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Retail Deposit Growth</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Acquire customers for checking, savings, and deposit accounts. Build customer base for profitable deposit funding and relationship expansion.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Cross-Sell to Existing Customers</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify cross-sell and upsell opportunities within existing customer base. Expand wallet share through targeted product offers and promotions.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Attrition Prevention</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify customers at risk of attrition and at-risk relationships. Proactive retention strategies for high-value customers and relationships.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="color: white; margin-bottom: 20px;">Grow Your Customer Base Profitably</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Acquire high-value customers while maintaining compliance and managing risk. Advanced analytics for profitable, sustainable growth.
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
