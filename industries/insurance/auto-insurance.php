<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Auto Insurance Solutions - VattleyGlobal';
$meta_description = 'Comprehensive auto insurance solutions including underwriting, claims management, telematics, and fraud detection for auto insurers.';

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
                <span>Auto Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Auto Insurance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Integrated solutions for auto insurers: underwriting, claims, telematics, and fraud detection all in one platform.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Complete Auto Insurance Platform</h2>
            <p>From quote to claims with integrated intelligence</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Comprehensive Coverage</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-car" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Underwriting & Pricing</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Accurate risk assessment and competitive pricing models.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-wrench" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Claims Management</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Fast, efficient claims processing from intake to settlement.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-tachometer-alt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Telematics & UBI</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Usage-based insurance with real-time driving data.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-shield-alt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Fraud Prevention</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Detect staged accidents and fraudulent claims.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">2.5x</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Faster policy issue</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">35%</div>
                    <p style="font-size: 1.1rem;">Reduction in claims costs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROI Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Benefits for Auto Insurers</h2>
            <p>Measurable improvement across all business metrics</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-rocket" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Underwriting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Instant quotes and faster policy issuance</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">2.5x faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">policy processing</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-pie" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Lower Loss Ratios</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve risk selection and portfolio quality</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">12-18%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">loss ratio improvement</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Customer Experience</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Fast quotes, quick claims, personalized service</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">90%+ CSAT</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">satisfaction rating</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Higher Profitability</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce costs and increase margins</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">25-35%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">margin improvement</p>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Grid -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Integrated Solutions</h2>
            <p>Connected modules working seamlessly together</p>
        </div>

        <div class="solutions-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-top: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;"><i class="fas fa-file-contract" style="color: var(--primary-color); margin-right: 10px;"></i>Underwriting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Automated risk assessment and instant quotes for personal and commercial auto.</p>
                <a href="<?php echo url('industries/insurance/underwriting'); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-top: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar" style="color: var(--primary-color); margin-right: 10px;"></i>Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Fast claims intake, damage assessment, and settlement optimization.</p>
                <a href="<?php echo url('industries/insurance/claims'); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-top: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;"><i class="fas fa-tachometer-alt" style="color: var(--primary-color); margin-right: 10px;"></i>Telematics</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Usage-based insurance programs with real-time driving data and behavior coaching.</p>
                <a href="<?php echo url('industries/insurance/telematics'); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md); border-top: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;"><i class="fas fa-exclamation-triangle" style="color: var(--primary-color); margin-right: 10px;"></i>Fraud Detection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Detect staged accidents, inflated claims, and collision fraud networks.</p>
                <a href="<?php echo url('industries/insurance/fraud-detection'); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Transform Your Auto Insurance Operations</h2>
            <p>Integrate underwriting, claims, and analytics on a single intelligent platform.</p>
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
.solutions-grid > div:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.benefit-card,
.solutions-grid > div {
    transition: var(--transition);
}
</style>

<?php include '../../includes/footer.php'; ?>
