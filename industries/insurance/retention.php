<?php
require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Retention & Loyalty Solutions - Insurance';
$meta_description = 'Insurance customer retention solutions. Predict churn, identify at-risk customers, and deploy targeted retention campaigns.';

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
                <span>Retention</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Customer Retention Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Maximize lifetime value by predicting and preventing customer churn with data-driven retention strategies.
            </p>
        </div>
    </div>
</section>

<!-- Solution Overview -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Intelligent Retention Platform</h2>
            <p>Keep more customers and maximize their lifetime value</p>
        </div>

        <div class="solution-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Retention Capabilities</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-crystal-ball" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Churn Prediction</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Identify at-risk customers before they leave.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-bullseye" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Targeted Campaigns</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Deploy personalized retention campaigns.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-users" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Win-Back Programs</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Reactivate lapsed and cancelled customers.</p>
                    </li>
                    <li style="padding: 15px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-heart" style="position: absolute; left: 0; color: var(--primary-color); font-size: 1.2rem;"></i>
                        <strong>Loyalty Programs</strong>
                        <p style="margin-top: 5px; font-size: 0.95rem;">Reward and engage long-term customers.</p>
                    </li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">85%</div>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">Churn prediction accuracy</p>
                    <hr style="margin: 30px 0;">
                    <div style="font-size: 2.5rem; color: var(--primary-color); font-weight: bold; margin-bottom: 15px;">22%</div>
                    <p style="font-size: 1.1rem;">Increase in retention rate</p>
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
            <p>Direct impact on revenue and profitability</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Higher Retention</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Keep more customers year over year</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">22% improvement</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in retention rate</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-dollar-sign" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Higher Lifetime Value</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Maximize revenue from each customer</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">31% increase</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in customer LTV</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-trending-up" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Premium Growth</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Grow premium without acquisition spend</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">18-25%</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">premium increase</p>
            </div>

            <div class="benefit-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: #E3F2FD; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tags" style="font-size: 1.8rem; color: var(--primary-color);"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Cross-Sell Success</h3>
                <p style="color: var(--text-secondary); margin-bottom: 15px;">Increase wallet share with existing customers</p>
                <div style="font-size: 1.3rem; font-weight: bold; color: var(--primary-color);">18% uplift</div>
                <p style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 8px;">in cross-sell rates</p>
            </div>
        </div>
    </div>
</section>

<!-- Retention Strategies -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Retention Strategies</h2>
            <p>Multi-pronged approach to maximize customer value</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Churn Prevention</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Proactively prevent customer defection.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Risk scoring</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Targeted offers</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Loyalty rewards</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Win-Back Campaigns</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Reactivate lapsed customers.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Reactivation modeling</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Special offers</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Personalized outreach</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Cross-Sell Growth</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Grow wallet share with existing customers.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Propensity modeling</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Product recommendations</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Bundling strategies</li>
                </ul>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 12px;">Engagement Programs</h3>
                <p style="color: var(--text-secondary); margin-bottom: 12px; font-size: 0.95rem;">Deepen customer relationships and loyalty.</p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary); font-size: 0.9rem;">
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Personalized communications</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>Education programs</li>
                    <li><i class="fas fa-check" style="color: var(--primary-color); margin-right: 8px;"></i>VIP management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Reduce Churn, Grow Revenue</h2>
            <p>Identify at-risk customers and deploy targeted retention campaigns to grow customer lifetime value.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
                    View ROI Report
                </a>
            </div>
        </div>
    </div>
</section>

<style>
</style>

<?php include '../../includes/footer.php'; ?>
