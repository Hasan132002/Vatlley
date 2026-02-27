<?php
/**
 * Insurance - Fraud Detection Solutions
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Fraud Detection Solutions - Insurance';
$meta_description = 'Advanced fraud detection solutions for insurance. Prevent claims fraud, application fraud, and network fraud with AI-powered analytics.';

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
                <span>Fraud Detection</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Fraud Detection Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Detect and prevent insurance fraud across all touchpoints with advanced AI analytics and network analysis.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Comprehensive Fraud Detection</h2>
            <p>Protect your organization with intelligent fraud prevention technology</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Multi-Layer Fraud Detection</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-shield-alt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Claims Fraud Detection</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Identify suspicious claims patterns and detect organized fraud rings.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-user-shield" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Application Fraud Prevention</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Catch misrepresentation and identity fraud at underwriting stage.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-network-wired" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Network Analysis</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Uncover connections between suspicious claimants and providers.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-brain" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>AI-Powered Analytics</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Machine learning models that adapt to emerging fraud patterns.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">92%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Fraud detection accuracy with our AI-powered solution</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">$2.3M</div>
                    <p style="font-size: 1.1rem;">Average annual fraud savings per insurance carrier</p>
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
            <p>Measurable impact on your bottom line</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Reduce Loss Ratios</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Eliminate fraudulent claims before they impact your loss ratio</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">25-35% reduction</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in fraud-related claims</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tachometer-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Processing</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Accelerate legitimate claims while flagging suspicious ones</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">40% faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">claims processing time</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improved Profitability</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Increase margins through better fraud prevention</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">18-22% increase</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in underwriting profit</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-circle" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Compliance & Control</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Meet regulatory requirements with comprehensive audit trails</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">100% compliant</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">with industry standards</p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Details -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Seamless Integration</h2>
            <p>Easy implementation with your existing systems</p>
        </div>

        <div class="integration-content" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h3 style="margin-bottom: 20px;">How It Works</h3>
                    <ol style="list-style: none; padding: 0; counter-reset: step-counter;">
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                            <strong>Data Integration</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Connect your claims and policy data to our platform</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                            <strong>Model Training</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Our AI trains on your historical data to identify patterns</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                            <strong>Real-Time Scoring</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Incoming claims are scored for fraud risk instantly</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                            <strong>Continuous Learning</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Models improve continuously as new fraud patterns emerge</p>
                        </li>
                    </ol>
                </div>
                <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                    <h3 style="margin-bottom: 20px;">Integration Points</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Claims Management Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Policy Administration Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Underwriting Platforms
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            BI & Analytics Tools
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Third-Party Data Sources
                        </li>
                        <li style="padding: 12px 0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            REST APIs & Webhooks
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
            <h2>Real-World Applications</h2>
            <p>Fraud detection across insurance lines</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Auto Insurance Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Detect staged accidents, inflated medical claims, and collision fraud rings.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Staged accident detection</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medical provider networks</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Repair shop collusion</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Home Insurance Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Prevent arson, inflated damage claims, and inventory fraud.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Arson detection</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Damage claim analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Inventory verification</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Life Insurance Underwriting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Catch misrepresentation and identity fraud in applications.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Identity verification</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Health misrepresentation</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Applicant networks</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Reduce Fraud, Improve Profitability</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Get started with our fraud detection solution and see measurable results in your loss ratios within 90 days.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-comments"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
                    View Resources
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
