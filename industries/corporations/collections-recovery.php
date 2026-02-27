<?php
/**
 * Collections & Recovery Service Page - Corporations Industry
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Collections & Recovery Solutions';
$meta_description = 'Intelligent collections and debt recovery solutions for corporations. Improve collection rates, reduce operational costs, and maximize recovery with advanced analytics.';

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
                <span>Collections & Recovery</span>
            </div>
            <h1 style="color: white; font-size: 2.8rem; margin-bottom: 25px; font-weight: 700; line-height: 1.2;">Collections & Recovery Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.7; margin-bottom: 0;">
                Advanced collections management, debt recovery, and skip tracing solutions to improve collection rates, reduce operational costs, and maximize recovery performance.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Intelligent Collections Management</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; margin: 0 auto;">
                VettlyGlobal's collections solutions combine advanced analytics, location intelligence, and compliance management to optimize debt recovery, improve customer contact rates, and ensure regulatory compliance throughout the collections process.
            </p>
        </div>

        <div style="background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: 40px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Skip Tracing & Location</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Locate debtors with advanced skip tracing, phone verification, and address intelligence to increase contact rates and successful recovery outcomes.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Collections Analytics</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Optimize collections strategy with predictive analytics, segmentation models, and performance dashboards to maximize recovery rates and efficiency.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Compliance Management</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Ensure FDCPA compliance with built-in rules, do-not-call monitoring, and audit trails to protect your organization from regulatory violations.
                    </p>
                </div>

                <div class="overview-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Recovery Optimization</h3>
                    <p style="color: var(--text-secondary); line-height: 1.6;">
                        Maximize recovery dollars with payment processing, settlement negotiation support, and workflow automation to streamline collections operations.
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
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Advanced tools for collections and recovery</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-top: 50px;">
            <!-- Skip Tracing & Location -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Skip Tracing & Location Intelligence</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Advanced skip tracing capabilities
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Current and historical address data
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Phone number verification and validation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Employment information and workplace location
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Associate and family member tracking
                    </li>
                </ul>
            </div>

            <!-- Predictive Analytics -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Predictive Analytics & Scoring</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Recovery probability modeling
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Expected recovery amount prediction
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Contact probability scoring
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Response likelihood analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Best contact time and channel prediction
                    </li>
                </ul>
            </div>

            <!-- Collections Management -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Collections Case Management</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Account assignment and work distribution
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Contact history and note tracking
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Payment and settlement recording
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Workflow automation and task management
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Queue management and prioritization
                    </li>
                </ul>
            </div>

            <!-- Compliance & Monitoring -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Compliance & Monitoring</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        FDCPA compliance rules engine
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Do-not-call list monitoring and enforcement
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Contact time restrictions
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Call recording and audit trails
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Regulatory reporting and documentation
                    </li>
                </ul>
            </div>

            <!-- Analytics & Reporting -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Analytics & Reporting</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Collections metrics and KPI dashboards
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Portfolio performance analysis
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Collector performance evaluation
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Real-time collections reporting
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Custom analytics and business intelligence
                    </li>
                </ul>
            </div>

            <!-- Integration & Technology -->
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 20px; font-size: 1.3rem;">Integration & Technology</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Core system integration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Dialer and telephony integration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Payment processing integration
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary); border-bottom: 1px solid #f0f0f0;">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        Multi-channel deployment options
                    </li>
                    <li style="padding: 12px 0; color: var(--text-secondary);">
                        <i class="fas fa-check" style="color: var(--primary-color); margin-right: 12px; font-weight: bold;"></i>
                        APIs and workflow automation
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
                <h3 style="margin-bottom: 15px;">Increase Collections</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Improve collection rates and recovery amounts through better debtor location, optimized contact strategies, and predictive analytics.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Reduce Costs</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Lower operational costs with automation, efficient case routing, and workflow optimization that reduces manual effort and labor expenses.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improve Contact Rates</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Achieve higher debtor contact rates with advanced skip tracing, phone verification, and optimized contact time recommendations.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ensure Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Maintain FDCPA and regulatory compliance with built-in rules, audit trails, and monitoring to reduce compliance risk and penalties.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Optimize Strategy</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Make data-driven decisions with advanced analytics, predictive models, and performance dashboards to optimize collections strategy.
                </p>
            </div>

            <div style="background: #f8f9fb; padding: 40px; border-radius: 12px;">
                <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Empower Your Team</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Equip your collectors with intelligent tools, analytics, and customer data to improve productivity and collection performance.
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
                    Collect on credit card, personal loan, and mortgage delinquencies with efficient skip tracing and optimized collection strategies.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Debt Buyers & Agencies</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Maximize recovery from purchased debt portfolios with predictive analytics, debtor location, and compliance-focused collections management.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Utilities & Telecom</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Recover unpaid utility and telecom bills with efficient billing dispute resolution and payment arrangement capabilities.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Healthcare & Medical</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Collect on medical bills and insurance copayments with sensitive, compliant collection approaches for healthcare providers.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Government Agencies</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Recover government loans, tax debt, and benefit overpayments with specialized collection and compliance capabilities.
                </p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.1rem;">Retail & E-commerce</h4>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Collect on customer payment plans and installment purchases with flexible collection management and payment processing.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 80px 0; color: white;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="font-size: 2.2rem; margin-bottom: 25px;">Ready to Optimize Your Collections?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 40px; opacity: 0.95;">
                Discover how VettlyGlobal's collections solutions can help you improve recovery rates, reduce costs, and ensure regulatory compliance.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg" style="background: white; color: var(--primary-color); border: none;">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Consultation
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-secondary btn-lg" style="background: transparent; border: 2px solid white; color: white;">
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

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(74, 144, 226, 0.3);
}

.btn-secondary:hover {
    background: rgba(74, 144, 226, 0.1);
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
