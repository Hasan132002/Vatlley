<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Life Insurance Solutions - VattleyGlobal';
$meta_description = 'Life insurance solutions including underwriting, fraud detection, medical records analysis, and non-medical underwriting for life insurers.';

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
                <span>Life Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Life Insurance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Streamline life insurance operations with accelerated underwriting, fraud prevention, and risk assessment.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Life Insurance Platform</h2>
            <p>Fast underwriting with rigorous risk assessment</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Intelligent Underwriting</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check-double" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Medical Records Analysis</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Automated analysis of medical records and lab results.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-user-check" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Identity Verification</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Verify applicant identity and prevent fraud.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-heart" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Risk Assessment</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Accurate mortality risk assessment and pricing.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-bolt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Accelerated Underwriting</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Non-medical underwriting for approved risk profiles.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">70%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">of applications non-med eligible</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">5x</div>
                    <p style="font-size: 1.1rem;">Faster underwriting time</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROI Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Benefits & ROI</h2>
            <p>Faster approvals with better accuracy</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-rocket" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Issuance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Dramatically reduce underwriting turnaround time</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">5x faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">policy issuance</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Lower Costs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce underwriting staff and medical exam costs</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">40% cost</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reduction</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Fraud Prevention</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Detect misrepresentation and underwriting fraud</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">90%+ detection</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">rate for fraud</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Risk Selection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve accuracy of mortality predictions</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">15-20%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">prediction accuracy</p>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Core Capabilities</h2>
            <p>Comprehensive underwriting solutions</p>
        </div>

        <div class="capabilities-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px;"><i class="fas fa-file-medical" style="color: var(--primary-color); margin-right: 10px;"></i>Medical Underwriting</h3>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medical records analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Lab result interpretation</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>MIB integration</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medication analysis</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px;"><i class="fas fa-bolt" style="color: var(--primary-color); margin-right: 10px;"></i>Accelerated Programs</h3>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Non-medical underwriting</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Simplified issue products</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Automated approvals</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Express underwriting</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px;"><i class="fas fa-shield-alt" style="color: var(--primary-color); margin-right: 10px;"></i>Fraud Detection</h3>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Identity verification</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Misrepresentation detection</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Network analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Claims correlation</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px;"><i class="fas fa-chart-bar" style="color: var(--primary-color); margin-right: 10px;"></i>Mortality Modeling</h3>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Risk scoring</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Pricing optimization</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Predictive analytics</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Portfolio profitability</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Accelerate Life Insurance Operations</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Reduce underwriting time from weeks to days with intelligent automation and fraud detection.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-comments"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
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
