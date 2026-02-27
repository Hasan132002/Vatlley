<?php
/**
 * Customer Acquisition Service Page - Corporations Industry
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Customer Acquisition Solutions';
$meta_description = 'Data-driven customer acquisition and market targeting solutions for corporations. Identify, reach, and convert high-value customers with VettlyGlobal.';

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
                <span>Customer Acquisition</span>
            </div>
            <h1 style="color: white; font-size: 2.8rem; margin-bottom: 25px; font-weight: 700; line-height: 1.2;">Customer Acquisition Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.7; margin-bottom: 0;">
                Data-driven customer acquisition strategies, advanced market segmentation, and targeted outreach to identify, reach, and convert high-value customers efficiently.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Strategic Customer Acquisition</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                VettlyGlobal's customer acquisition solutions leverage comprehensive data, advanced analytics, and market intelligence to identify high-quality prospects and drive profitable customer growth across all channels.
            </p>
        </div>

        <div style="background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: 40px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Market Segmentation</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Identify and segment high-value customer prospects with advanced analytics, demographic profiling, and behavioral targeting to maximize acquisition ROI.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-target"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Lead Generation</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Generate high-quality leads and prospects using data enrichment, audience targeting, and predictive analytics to fuel your sales pipeline.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Customer Profiling</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Build comprehensive customer profiles with behavioral, financial, and demographic insights to enable targeted marketing and personalized outreach strategies.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Predictive Analytics</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Predict customer likelihood to purchase, churn risk, and lifetime value with machine learning models to optimize acquisition spend and targeting.
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
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Advanced tools for customer acquisition and growth</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Data & Intelligence -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Data & Intelligence</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Comprehensive data enrichment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Demographic and psychographic profiling
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Financial profile assessment
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Credit and behavioral indicators
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Real-time data updates and monitoring
                    </li>
                </ul>
            </div>

            <!-- Segmentation & Targeting -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Segmentation & Targeting</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Behavioral segmentation models
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        RFM analysis and customer value scoring
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Look-alike and lookalike modeling
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Multi-dimensional segmentation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Custom segment creation and management
                    </li>
                </ul>
            </div>

            <!-- Predictive Modeling -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Predictive Modeling</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Propensity to purchase modeling
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Customer lifetime value prediction
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Response probability and ROI forecasting
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Churn and attrition prediction
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Machine learning model optimization
                    </li>
                </ul>
            </div>

            <!-- List Management -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">List Management & Delivery</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Lead list generation and delivery
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Multi-format delivery (email, direct mail, digital)
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Audience matching and activation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Compliance and suppression list management
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Data quality and append services
                    </li>
                </ul>
            </div>

            <!-- Campaign & Measurement -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Campaign & Performance Analytics</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Campaign execution and orchestration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Response tracking and attribution
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        ROI measurement and optimization
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Real-time performance dashboards
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        A/B testing and experimentation
                    </li>
                </ul>
            </div>

            <!-- Integration & Technology -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Integration & Technology</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        CRM and marketing automation integration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Data warehouse and platform connectivity
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        API and workflow automation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Data governance and compliance
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Custom implementations and consulting
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
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Increase Conversion Rates</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Target high-probability prospects with greater accuracy, reducing wasted marketing spend and improving conversion rates and customer quality.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-percent"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improve Marketing ROI</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Optimize acquisition spend with predictive targeting and performance analytics, achieving higher returns on marketing investments and lower customer acquisition costs.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Accelerate Growth</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify and reach more high-value customers quickly with data-driven acquisition strategies, fueling rapid business growth and market expansion.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Customer Quality</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Attract customers with higher lifetime value, better creditworthiness, and lower churn risk through predictive customer profiling and targeting.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data-Driven Decisions</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Make informed acquisition strategy decisions with comprehensive analytics, predictive insights, and real-time performance measurement dashboards.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ensure Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Maintain compliance with regulatory and data privacy requirements through proper data governance, suppression list management, and audit trails.
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
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Financial Services & Banking</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify and acquire high-quality customers for credit cards, checking accounts, loans, and investment products through targeted marketing campaigns.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Insurance</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify prospects with high insurance needs and purchase propensity for auto, home, life, and health insurance products through predictive targeting.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">B2B & Enterprise Sales</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Target high-value business prospects with decision-making authority and relevant business needs for B2B products and services.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Retail & E-commerce</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify customers with high purchase propensity and relevant interests for targeted retail marketing, promotions, and loyalty programs.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Telecommunications</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Target customers for mobile, broadband, and telecom services with propensity modeling and look-alike audience targeting.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Media & Publishing</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify and acquire subscribers and members with high lifetime value and engagement potential for subscription and membership programs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Drive Profitable Customer Growth?</h2>
            <p>Discover how VettlyGlobal's customer acquisition solutions can help you identify, reach, and convert high-value customers more efficiently.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Consultation
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
