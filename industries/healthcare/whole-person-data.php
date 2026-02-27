<?php
/**
 * Whole-Person Data - Healthcare Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Whole-Person Data Solutions | VettlyGlobal';
$meta_description = 'Understand complete patient health profiles with comprehensive whole-person data that integrates medical, behavioral, and social information.';

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
                <span>Whole-Person Data</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Whole-Person Data Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Achieve truly integrated care by understanding complete patient health profiles that include medical, behavioral, and social information.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 20px;">Integrated Care Through Whole-Person Intelligence</h2>
                <p style="color: var(--text-secondary); margin-bottom: 15px; line-height: 1.8;">
                    Healthcare silos prevent truly integrated care. VettlyGlobal's whole-person data platform unifies medical, behavioral, social, and environmental information to create comprehensive patient health profiles.
                </p>
                <p style="color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;">
                    From behavioral health integration and social determinants analysis to chronic disease management and coordinated care, our platform enables truly person-centered care that improves outcomes and reduces costs.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Integrated medical-behavioral data
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Social determinants insights
                    </li>
                    <li style="padding: 10px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;"></i>
                        Person-centered care optimization
                    </li>
                </ul>
            </div>
            <div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 40px; text-align: center;">
                    <i class="fas fa-heart" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Whole-Person Health Management</h3>
                    <p style="color: var(--text-secondary);">
                        Integrate physical, behavioral, and social health information for truly coordinated, person-centered care.
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
            <p>Comprehensive whole-person data solutions</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-brain" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Integrated Behavioral Health</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Unify behavioral health and medical data to identify comorbidities and coordinate integrated treatment approaches.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-home" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Social Determinants Integration</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Incorporate social determinants, housing, food insecurity, and environmental factors into patient health profiles and care planning.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Care Coordination</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Enable seamless care coordination across providers, settings, and disciplines with shared whole-person data.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-list-check" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Chronic Disease Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Manage complex patients with multiple chronic conditions through integrated medical and behavioral insights.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-syringe" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Substance Use & Recovery</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Integrate substance use disorder treatment and recovery support with comprehensive medical care.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                <div style="width: 50px; height: 50px; background: rgba(80, 200, 120, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px; font-size: 1.2rem;">Outcomes Measurement</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Measure health, functional, and social outcomes across integrated care programs to demonstrate value.
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
            <p>Creating integrated whole-person health profiles</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-top: 50px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    1
                </div>
                <h3 style="margin-bottom: 15px;">Multi-Source Data Integration</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Integrate medical, behavioral, pharmacy, social, and environmental data from multiple sources into unified profiles.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    2
                </div>
                <h3 style="margin-bottom: 15px;">Whole-Person Analysis</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Analyze complex patient profiles to identify comorbidities, social drivers, and holistic treatment opportunities.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    3
                </div>
                <h3 style="margin-bottom: 15px;">Coordinated Care Planning</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Develop integrated care plans that address medical, behavioral, and social needs with coordinated interventions.
                </p>
            </div>

            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: white; font-size: 2rem; font-weight: bold;">
                    4
                </div>
                <h3 style="margin-bottom: 15px;">Outcomes & Continuous Improvement</h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Measure holistic outcomes across health, behavioral, social, and functional domains and optimize care continuously.
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
            <p>Real-world applications for integrated care</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Mental Health & Medical Integration</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Integrate mental health and substance use treatment with primary care to improve outcomes for patients with comorbidities.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Behavioral health integration
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Coordinated treatment
                    </li>
                </ul>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Social Determinants Interventions</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Address social determinants through integrated care programs that connect patients with housing, food, and transportation assistance.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Social support services
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Resource connection
                    </li>
                </ul>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
                <h3 style="margin-bottom: 15px; color: var(--primary-color);">Complex Patient Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">
                    Manage high-cost, high-need patients with multiple chronic conditions through whole-person care coordination.
                </p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Care coordination
                    </li>
                    <li style="padding: 5px 0; color: var(--text-secondary);">
                        <i class="fas fa-arrow-right" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Holistic care planning
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white; padding: 60px 0;">
    <div class="container" style="text-align: center;">
        <h2 style="color: white; margin-bottom: 20px;">Deliver Whole-Person Care</h2>
        <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px; font-size: 1.1rem;">
            Discover how VettlyGlobal's whole-person data solutions enable integrated care that improves outcomes and reduces costs.
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
