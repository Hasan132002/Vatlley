<?php
/**
 * Payer - Healthcare Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Payer Solutions | VettlyGlobal';
$meta_description = 'Improve member outcomes and reduce healthcare costs with advanced data analytics, risk assessment, and population health insights from VettlyGlobal.';

include '../../includes/header.php';
?>

<!-- Page Header / Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/healthcare'); ?>" style="color: white;">Healthcare</a>
                <span style="margin: 0 10px;">/</span>
                <span>Payer</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Payer Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Improve member outcomes and reduce healthcare costs with advanced data analytics, predictive insights, and clinical intelligence that drive better health and financial performance.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 20px;">Deliver Better Health at Lower Cost</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px; line-height: 1.8;">
                    Health plans face unprecedented challenges: rising medical costs, member retention pressures, and complex regulatory requirements. VettlyGlobal's comprehensive payer solutions provide the data intelligence you need to manage risk effectively, optimize utilization, and improve member health outcomes.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;">
                    From risk stratification and care management to provider network optimization and utilization review, our platform enables data-driven decision-making that improves health outcomes while controlling costs.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Advanced risk stratification
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Utilization optimization
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Care management capabilities
                    </li>
                </ul>
            </div>
            <div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fas fa-hospital" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Health Plan Excellence</h3>
                    <p style="color: var(--text-secondary);">
                        Manage risk, optimize utilization, and improve member health through data-driven insights that reduce costs while improving outcomes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Capabilities</h2>
            <p>Comprehensive payer data and analytics solutions</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Risk Stratification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify high-risk members using advanced predictive models that combine claims, clinical, and social determinants data for targeted interventions.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bar-chart" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Utilization Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Optimize healthcare utilization through evidence-based review, identify unnecessary services, and guide members toward appropriate care settings.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Member Engagement</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Drive engagement and behavior change through personalized programs informed by member preferences, health status, and engagement patterns.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-stethoscope" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Care Gap Identification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify evidence-based care gaps and connect members with preventive services, screenings, and chronic condition management programs.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-hospital-user" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Provider Network Analytics</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Optimize provider networks through performance analysis, identify efficient and high-quality providers, and guide members to better care.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bell" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Quality & Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Monitor quality metrics, track compliance with regulatory requirements, and generate evidence for quality reporting and accreditation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>How It Works</h2>
            <p>Our process enables continuous health plan optimization</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 50px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    1
                </div>
                <h3 style="margin-bottom: 15px;">Data Integration</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    We integrate your claims, clinical, pharmacy, and provider data to create a comprehensive member health view.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    2
                </div>
                <h3 style="margin-bottom: 15px;">Risk & Gap Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Our algorithms identify high-risk members, care gaps, and utilization optimization opportunities with pinpoint accuracy.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    3
                </div>
                <h3 style="margin-bottom: 15px;">Program Deployment</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Deploy targeted interventions, care management programs, and member engagement initiatives informed by data insights.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    4
                </div>
                <h3 style="margin-bottom: 15px;">Outcomes & ROI</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Measure clinical and financial outcomes, track ROI, and continuously optimize programs for improved health and reduced costs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Use Cases</h2>
            <p>Real-world applications for health plans</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">High-Cost Member Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Identify and manage high-cost members with advanced risk models, predictive analytics, and personalized care management programs.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Predictive modeling
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Care coordination programs
                    </li>
                </ul>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Chronic Disease Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Improve outcomes for chronic conditions with identified care gaps, evidence-based interventions, and continuous member engagement.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Gap identification
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Outcome measurement
                    </li>
                </ul>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Preventive Care Programs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Drive preventive screenings and immunizations through targeted outreach, incentives, and engagement programs focused on high-risk populations.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Screening analytics
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Population targeting
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white; padding: 60px 0;">
    <div class="container" style="text-align: center;">
        <h2 style="color: white; margin-bottom: 20px;">Optimize Your Health Plan Performance</h2>
        <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px; font-size: 1.1rem;">
            Let VettlyGlobal help you improve member health outcomes while reducing costs through data-driven insights and intelligence.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 30px; font-weight: 600;">
                Request a Demo <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 30px; font-weight: 600;">
                Contact Sales
            </a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
