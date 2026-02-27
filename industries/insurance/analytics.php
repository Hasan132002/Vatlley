<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Data Analytics & Modeling - Insurance';
$meta_description = 'Advanced analytics and predictive modeling solutions for insurance carriers. Improve underwriting, claims, and pricing with data-driven insights.';

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
                <span>Data Analytics</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Data Analytics & Modeling</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Unlock insights with advanced analytics and machine learning models tailored for insurance operations.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Intelligence-Driven Insurance</h2>
            <p>Advanced analytics for every business decision</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Comprehensive Analytics</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-chart-bar" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Predictive Analytics</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Forecast losses, claims, and customer behavior accurately.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-project-diagram" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Loss Forecasting</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Predict future losses for better reserving and pricing.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-brain" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Machine Learning Models</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Deploy AI models for risk assessment and optimization.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-sliders-h" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Portfolio Optimization</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Optimize portfolio mix for improved returns.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">45%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Reduction in forecast error</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">20%</div>
                    <p style="font-size: 1.1rem;">Improvement in decision accuracy</p>
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
            <p>Data-driven decision making delivers results</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-bullseye" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Better Forecasting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Improve reserve accuracy and financial planning</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">45% improvement</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in forecast accuracy</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Enhanced Profitability</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Optimize pricing and portfolio management</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">8-15% increase</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in underwriting profit</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tachometer-alt" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Faster Insights</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Real-time dashboards and automated reporting</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">80% faster</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reporting and analysis</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Risk Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Better understand and mitigate enterprise risks</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">20% risk</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">reduction</p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Details -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Enterprise Integration</h2>
            <p>Seamless connection to your data infrastructure</p>
        </div>

        <div class="integration-content" style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h3 style="margin-bottom: 20px;">Implementation Path</h3>
                    <ol style="list-style: none; padding: 0; counter-reset: step-counter;">
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                            <strong>Data Integration</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Connect to data warehouses and operational systems</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                            <strong>Model Development</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Build and train models on your data</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                            <strong>Analytics Platform</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Deploy dashboards and reporting tools</p>
                        </li>
                        <li style="padding: 20px 0; padding-left: 50px; position: relative; counter-increment: step-counter;">
                            <span style="position: absolute; left: 0; top: 20px; width: 40px; height: 40px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                            <strong>Optimization & Scaling</strong>
                            <p style="margin-top: 5px; color: var(--text-secondary);">Continuous improvement and expansion</p>
                        </li>
                    </ol>
                </div>
                <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                    <h3 style="margin-bottom: 20px;">Technology Stack</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Data Warehouses (Snowflake, BigQuery)
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            ML Frameworks (TensorFlow, PyTorch)
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            BI Tools (Tableau, Power BI)
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Cloud Infrastructure (AWS, Azure, GCP)
                        </li>
                        <li style="padding: 12px 0; border-bottom: 1px solid #e0e0e0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Real-Time Streaming Platforms
                        </li>
                        <li style="padding: 12px 0; color: var(--text-secondary);">
                            <i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i>
                            Custom API Development
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
            <h2>Analytics Applications</h2>
            <p>Industry-specific models and dashboards</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Pricing & Reserving</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Optimize premiums and reserves with predictive models.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Pricing optimization models</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Loss development analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Reserve adequacy testing</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Risk Assessment</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Score and evaluate risk with machine learning.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Risk scoring models</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Mortality prediction</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Claims propensity</li>
                </ul>
            </div>

            <div class="use-case-card" style="background: white; padding: 30px; border-radius: 12px; border-left: 5px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Portfolio Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">Optimize portfolio performance and growth.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Portfolio optimization</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Market trend analysis</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Segment profitability</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Harness the Power of Data</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Transform your insurance business with advanced analytics and machine learning.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); padding: 12px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-comments"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 10px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
                    View White Paper
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
