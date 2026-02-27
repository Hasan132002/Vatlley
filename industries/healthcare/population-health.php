<?php
/**
 * Population Health - Healthcare Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Population Health Analytics | VettlyGlobal';
$meta_description = 'Analyze population health trends and improve outcomes with advanced analytics and insights from VettlyGlobal.';

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
                <span>Population Health</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Population Health Analytics</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Analyze population health trends, identify high-risk groups, and improve health outcomes with advanced analytics and targeted interventions.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 20px;">Improve Population Health with Data-Driven Insights</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px; line-height: 1.8;">
                    Population health management requires understanding patterns across diverse groups to improve outcomes and control costs. VettlyGlobal's population health analytics platform provides comprehensive analysis of population-level health trends, risk factors, and outcomes.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;">
                    From risk stratification and disease prevalence tracking to social determinants analysis and outcome measurement, our platform enables data-driven population health management that improves health equity and drives value-based care.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Risk stratification models
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Care gap identification
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Predictive analytics
                    </li>
                </ul>
            </div>
            <div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fas fa-users" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Population Health Excellence</h3>
                    <p style="color: var(--text-secondary);">
                        Improve health outcomes and control costs through data-driven population health management and targeted interventions.
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
            <p>Comprehensive population health analytics solutions</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Risk Stratification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify high-risk populations using advanced algorithms that analyze claims, clinical, and social determinants data.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-stethoscope" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Care Gap Identification</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Identify evidence-based care gaps and connect patients with preventive services and chronic condition management programs.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-brain" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Predictive Analytics</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Predict health outcomes and hospitalizations to enable proactive interventions before costly acute events.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-disease" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Disease Prevalence Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Analyze disease prevalence and burden across populations to inform program development and resource allocation.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-home" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Social Determinants Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Understand social determinants of health and their impact on outcomes to address health equity and disparities.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Outcomes Measurement</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Measure health outcomes and program impact across diverse populations to demonstrate value and inform improvements.
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
            <p>Population health analytics in action</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 50px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    1
                </div>
                <h3 style="margin-bottom: 15px;">Population Data Aggregation</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Aggregate claims, clinical, and social data across your population to create a comprehensive health profile.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    2
                </div>
                <h3 style="margin-bottom: 15px;">Analytics & Segmentation</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Analyze health trends, segment populations, and identify high-risk groups requiring targeted interventions.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    3
                </div>
                <h3 style="margin-bottom: 15px;">Program Development</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Develop targeted interventions and programs informed by population health insights and evidence-based best practices.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    4
                </div>
                <h3 style="margin-bottom: 15px;">Outcomes & ROI Measurement</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Measure program outcomes, track ROI, and continuously optimize population health strategies.
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
            <p>Real-world applications for population health</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Medicare & Medicaid Risk Assessment</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Stratify at-risk populations, identify care gaps, and develop targeted interventions for vulnerable populations.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Risk stratification
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Gap identification
                    </li>
                </ul>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Public Health Surveillance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Track population health trends, disease surveillance, and health equity metrics at population, regional, and national levels.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Disease tracking
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Trend analysis
                    </li>
                </ul>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Health Equity Initiatives</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Identify and address health disparities through analysis of outcomes across demographic groups and social determinants.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Disparity analysis
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Equity metrics
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white; padding: 60px 0;">
    <div class="container" style="text-align: center;">
        <h2 style="color: white; margin-bottom: 20px;">Transform Population Health with Data Intelligence</h2>
        <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px; font-size: 1.1rem;">
            Learn how VettlyGlobal's population health analytics can improve outcomes, control costs, and advance health equity.
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
