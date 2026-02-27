<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Underwriting Solutions - Insurance';
$meta_description = 'Data-driven underwriting solutions with AI-powered risk assessment, automated workflows, and predictive modeling for insurance carriers.';

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
                <span>Underwriting</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Underwriting Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Make smarter underwriting decisions with data-driven risk assessment and automated decision engines.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Intelligent Underwriting Platform</h2>
            <p>Data-driven decisions from application to policy issuance</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Smart Risk Assessment</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-calculator" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Risk Scoring</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Automated risk assessment using comprehensive data models.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-magic" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Automated Decisions</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Instant approvals for low-risk applications.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-chart-line" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Predictive Models</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Machine learning models for accurate loss prediction.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-list-check" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Compliance Rules Engine</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Built-in compliance and regulatory rule management.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">60%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">of applications auto-approved</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">5x</div>
                    <p style="font-size: 1.1rem;">faster underwriting turnaround</p>
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
            <p>Operational and financial improvements</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-rocket" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Underwriting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce underwriting cycle time significantly</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">80% faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">decision turnaround</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Lower Costs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Reduce underwriting labor and manual reviews</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">35% cost</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reduction in operations</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Risk Selection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve portfolio quality and loss ratios</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">8-12% improvement</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in loss ratios</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-trophy" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Competitive Edge</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Win more business with faster turnarounds</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">25% increase</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in policy issued</p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Details -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Seamless Integration</h2>
            <p>Integrates with your policy administration systems</p>
        </div>

        <div class="integration-content" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h3 style="margin-bottom: 20px;">Implementation Approach</h3>
                    <ol style="list-style: none; padding: 0; counter-reset: step-counter;">
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                            <strong>Policy System Integration</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Connect with your policy administration system</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                            <strong>Rules Configuration</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Define underwriting rules and appetite</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                            <strong>Data Import</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Import historical underwriting data</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                            <strong>Model Training & Launch</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Train models and go live</p>
                        </li>
                    </ol>
                </div>
                <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                    <h3 style="margin-bottom: 20px;">System Integration</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Guidewire PolicyCenter
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Sapiens Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Insurity Platform
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Legacy Core Systems
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Data Warehouse Solutions
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
            <h2>Underwriting by Line</h2>
            <p>Specialized solutions for your insurance products</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Personal Lines</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Streamline auto and home underwriting with instant decisions.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Instant approvals for standard risks</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Telematics data integration</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Property valuation models</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Commercial Lines</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Complex risk assessment for small and mid-size businesses.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Business intelligence scoring</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Loss history analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Industry-specific models</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Life Insurance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Medical underwriting with streamlined approval processes.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Medical records analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>MIB integration</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Non-medical underwriting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Modernize Your Underwriting</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Faster decisions, better risks, lower costs. Transform your underwriting with AI-powered intelligence.
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
