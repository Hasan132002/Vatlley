<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Telematics Solutions - Insurance';
$meta_description = 'Usage-based insurance and telematics solutions for auto insurers. Real-time driving data, risk assessment, and UBI program management.';

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
                <span>Telematics</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Telematics Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Drive profitability with usage-based insurance powered by real-time telematics data and behavioral analytics.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>UBI & Telematics Platform</h2>
            <p>Real-time driving insights for personalized insurance</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Intelligent Risk Assessment</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-car" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Driving Behavior Analysis</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Monitor speed, braking, acceleration, and driving patterns in real-time.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-chart-line" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Risk-Based Pricing</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Adjust premiums based on actual driving behavior and risk metrics.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-bell" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Real-Time Alerts</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Alert drivers to unsafe behaviors and provide coaching.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-mobile-alt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Multi-Device Support</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Smartphone apps, dedicated devices, and OBD-II integration.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">35%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Average UBI program discount</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">15%</div>
                    <p style="font-size: 1.1rem;">reduction in claim frequency</p>
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
            <p>Enhanced profitability and customer engagement</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Profitability Boost</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve margins through better risk selection</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">8-12% improvement</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in loss ratios</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Loss Reduction</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Encourage safer driving and reduce accidents</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">15-18% reduction</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in claim frequency</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Customer Engagement</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Increase program participation and retention</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">40%+ enrollment</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">with incentives</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-trophy" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Market Differentiation</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Stand out with innovative UBI offerings</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">35% discounts</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">for safe drivers</p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Details -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Seamless Integration</h2>
            <p>Multi-device telematics collection and analysis</p>
        </div>

        <div class="integration-content" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h3 style="margin-bottom: 20px;">Implementation Approach</h3>
                    <ol style="list-style: none; padding: 0; counter-reset: step-counter;">
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                            <strong>Device Provisioning</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Deploy telematics devices or apps to participants</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                            <strong>Data Collection</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Collect real-time driving data from vehicles</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                            <strong>Analytics & Scoring</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Process data and calculate risk scores</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                            <strong>Premium Application</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Apply personalized pricing and rewards</p>
                        </li>
                    </ol>
                </div>
                <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                    <h3 style="margin-bottom: 20px;">Device Support</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Dedicated Telematics Devices
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            OBD-II Adapter Integration
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Smartphone Apps (iOS/Android)
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Factory-Integrated Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Connected Vehicle APIs
                        </li>
                        <li style="padding: 12px 0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Hybrid Data Fusion
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>UBI Program Models</h2>
            <p>Flexible telematics solutions for diverse markets</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Per-Mile Programs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Charge drivers based on miles driven.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Mileage-based pricing</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Low-mileage discounts</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Fair pricing model</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Behavior-Based Programs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Reward safe driving with discounts.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Driving behavior scoring</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Real-time feedback</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Gamification elements</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Hybrid Models</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Combine mileage and behavior factors.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Multi-factor pricing</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Flexible incentives</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Maximum savings potential</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Launch Your UBI Program</h2>
            <p>Drive profitability with usage-based insurance powered by real-time telematics.</p>
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
.use-case-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.benefit-card,
.use-case-card {
    transition: var(--transition);
}
</style>

<?php include '../../includes/footer.php'; ?>
