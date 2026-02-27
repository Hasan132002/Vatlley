<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Commercial Insurance Solutions - VattleyGlobal';
$meta_description = 'Commercial lines insurance solutions for SMB to enterprise. Risk assessment, underwriting, claims, and business intelligence.';

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
                <span>Commercial Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Commercial Insurance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Comprehensive solutions for commercial lines with business intelligence, risk assessment, and portfolio optimization.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Commercial Lines Platform</h2>
            <p>Risk assessment and management for business insurance</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Business Intelligence</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-building" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Business Risk Assessment</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Evaluate business credit, financials, and industry risk.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-chart-bar" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Loss History Analysis</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Analyze past claims and loss trends for better pricing.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-industry" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Industry-Specific Models</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Specialized underwriting models by industry vertical.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-hands-helping" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Safety & Loss Control</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Assess workplace safety and help reduce claims.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">2x</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Faster underwriting</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">20%</div>
                    <p style="font-size: 1.1rem;">Improvement in pricing accuracy</p>
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
            <p>Competitive advantage in commercial lines</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Risk Selection</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve underwriting decisions with business intelligence</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">18-25%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">loss ratio improvement</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-rocket" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Quotes</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Speed up underwriting and increase competitive positioning</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">2x faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">quote turnaround</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Premium Growth</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Win more competitive business with smarter pricing</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">15-20%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">premium increase</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-headset" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Agent Productivity</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Give agents tools to service customers faster</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">30% increase</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in agent productivity</p>
            </div>
        </div>
    </div>
</section>

<!-- Underwriting by Line -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Solutions by Commercial Line</h2>
            <p>Specialized models for different insurance products</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">General Liability</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Risk assessment for liability exposures.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Classification accuracy</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Loss modeling</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Property Insurance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Property risk and catastrophe assessment.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Cat modeling</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Building assessment</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Workers' Compensation</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Workforce and injury risk assessment.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Payroll analysis</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Claim prediction</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Cyber Liability</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Tech risk and cyber exposure assessment.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Tech assessment</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Breach prediction</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Optimize Commercial Lines Operations</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Accelerate underwriting and improve profitability with intelligent business intelligence and risk assessment.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-comments"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
                    View Brochure
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.benefit-card {
    transition: var(--transition);
}
</style>

<?php include '../../includes/footer.php'; ?>
