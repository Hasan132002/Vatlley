<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Home Insurance Solutions - VattleyGlobal';
$meta_description = 'Homeowners insurance solutions with property risk assessment, claims processing, fraud detection, and data-driven underwriting.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/insurance'); ?>" style="color: white;">Insurance</a>
                <span style="margin: 0 10px;">/</span>
                <span>Home Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Home Insurance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Comprehensive property insurance solutions with intelligent risk assessment, faster claims, and fraud prevention.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Property Insurance Platform</h2>
            <p>From risk assessment to claims resolution</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Smart Property Intelligence</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-home" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Property Risk Assessment</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Evaluate property risk using comprehensive data sources.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-satellite-dish" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Aerial Imagery Analysis</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Satellite and aerial data for property condition assessment.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-camera" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Damage Assessment</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">AI-powered image analysis for rapid damage evaluation.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-flood" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Catastrophe Modeling</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Better understand exposure to natural disasters.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">3x</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Faster property assessment</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">40%</div>
                    <p style="font-size: 1.1rem;">Reduction in claim costs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROI Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h3>Key Benefits for Home Insurers</h3>
            <p>Improve underwriting accuracy and claims efficiency</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Risk Selection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce losses through accurate property assessment</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">15-20%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">loss ratio improvement</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-clock" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Rapid damage assessment and settlement resolution</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">3x faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">claims processing</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Detect arson and inflated damage claims</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">25-30%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">fraud reduction</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-smile" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Customer Satisfaction</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Quick approvals and fast claims resolution</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">90%+ CSAT</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">satisfaction scores</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Capabilities -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Integrated Capabilities</h2>
            <p>Complete solutions for homeowners insurance</p>
        </div>

        <div class="capabilities-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Risk Underwriting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Automated risk assessment with property data integration.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Property condition analysis</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Exposure assessment</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Instant pricing</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Claims Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Streamlined claims intake and damage assessment.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Photo-based assessment</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Fast estimation</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Contractor networks</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Fraud Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Identify suspicious claims and fraud patterns.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Arson detection</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Claim pattern analysis</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Network analysis</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Analytics & Insights</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Data-driven decisions for portfolio management.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Catastrophe modeling</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Pricing optimization</li>
                    <li style="padding: 4px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Loss forecasting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Modernize Your Home Insurance Operations</h2>
            <p>Improve underwriting, accelerate claims, and reduce fraud with intelligent property insurance solutions.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
                    View Case Study
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.benefit-card:hover,
.capabilities-grid > div:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.benefit-card,
.capabilities-grid > div {
    transition: var(--transition);
}
</style>

<?php include '../../includes/footer.php'; ?>
