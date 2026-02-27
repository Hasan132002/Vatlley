<?php
/**
 * Insurance - Claims Management Solutions
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Claims Management Solutions - Insurance';
$meta_description = 'Streamline insurance claims processing with automation, intelligent routing, and analytics. Reduce processing time and improve customer satisfaction.';

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
                <span>Claims Management</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Claims Management Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Accelerate claims processing and improve outcomes with intelligent automation and data-driven decision making.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>End-to-End Claims Processing</h2>
            <p>From intake to settlement with intelligent automation</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Smart Claims Lifecycle</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-file-alt" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Automated Intake</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Capture and digitize claim information from any channel.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-project-diagram" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Intelligent Routing</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Route claims to appropriate handlers based on complexity and expertise.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-camera" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Damage Assessment</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">AI-powered image analysis for rapid damage evaluation.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-handshake" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Settlement Optimization</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Data-driven settlement recommendations to minimize loss.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">45%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Reduction in processing time</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">8x</div>
                    <p style="font-size: 1.1rem;">Faster claims resolution</p>
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
            <p>Quantifiable improvements across operations</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-clock" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Processing</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce time from intake to resolution</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">45% faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">claims processing</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Improved Efficiency</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce manual work with intelligent automation</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">30% cost</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reduction in labor</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-smile" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Experience</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Faster resolution increases customer satisfaction</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">85%+ CSAT</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">customer satisfaction</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-pie" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Outcomes</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Optimize settlements and minimize reserve inadequacy</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">12-18%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reduction in claim costs</p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Details -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Seamless Integration</h2>
            <p>Works with your existing claims systems</p>
        </div>

        <div class="integration-content" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h3 style="margin-bottom: 20px;">Implementation Process</h3>
                    <ol style="list-style: none; padding: 0; counter-reset: step-counter;">
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                            <strong>System Connection</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Connect to your claims management system</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                            <strong>Workflow Configuration</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Customize workflows to match your processes</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                            <strong>Team Training</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Complete training for claims teams</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                            <strong>Go Live & Optimization</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Launch with continuous optimization</p>
                        </li>
                    </ol>
                </div>
                <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                    <h3 style="margin-bottom: 20px;">Supported Systems</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Guidewire ClaimCenter
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Verisk Underwriting
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Sapiens Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Custom Legacy Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Third-Party Data Sources
                        </li>
                        <li style="padding: 12px 0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Multiple Data Formats
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
            <h2>Claims Processing by Line</h2>
            <p>Specialized solutions for different insurance types</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Property Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Accelerate property and fire claim resolution.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Image-based damage assessment</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Contractor network integration</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Rapid settlement options</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Auto Claims</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Streamline auto damage and liability claims.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Repair shop connections</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medical provider networks</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>liability reserve optimization</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Workers' Compensation</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Manage complex workers' comp claims efficiently.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medical case management</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Return-to-work tracking</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Fraud detection integration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Transform Your Claims Operations</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Join leading insurers who have improved claims processing speed and customer satisfaction.
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
