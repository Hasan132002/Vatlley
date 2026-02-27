<?php
/**
 * Collections & Recovery - Contact Strategies Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Contact Strategy Solutions for Collections';
$meta_description = 'Optimize contact strategies and improve right-party contact rates. Multi-channel outreach with timing analytics and personalized approaches.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9; font-size: 0.95rem;">
                <a href="<?php echo url(); ?>" style="color: white; text-decoration: none;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white; text-decoration: none;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/collections-recovery'); ?>" style="color: white; text-decoration: none;">Collections & Recovery</a>
                <span style="margin: 0 10px;">/</span>
                <span>Contact Strategies</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Contact Strategy Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Optimize contact strategies with AI-driven timing, multi-channel outreach, and personalized approaches to maximize right-party contact rates.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Contact Strategy Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Contact Strategy Features</h2>
            <p>Multi-channel outreach optimization</p>
        </div>

        <div class="cs-grid">
            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-clock"></i></div>
                <h3>Contact Timing Optimization</h3>
                <p>AI-powered timing recommendations to maximize answer rates and engagement.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> Day-of-week analysis</li>
                    <li><i class="fas fa-check"></i> Time-of-day patterns</li>
                    <li><i class="fas fa-check"></i> Seasonal adjustments</li>
                </ul>
            </div>

            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-share-alt"></i></div>
                <h3>Multi-Channel Outreach</h3>
                <p>Orchestrate contact across phone, SMS, email, and mail for comprehensive outreach.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> Phone optimization</li>
                    <li><i class="fas fa-check"></i> SMS campaigns</li>
                    <li><i class="fas fa-check"></i> Email integration</li>
                </ul>
            </div>

            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-user-check"></i></div>
                <h3>RPC Improvement</h3>
                <p>Targeted strategies to ensure you reach the actual debtor and verify identity.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> Identity verification</li>
                    <li><i class="fas fa-check"></i> Screen scripts</li>
                    <li><i class="fas fa-check"></i> Debtor authentication</li>
                </ul>
            </div>

            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-repeat"></i></div>
                <h3>Contact Frequency Management</h3>
                <p>Intelligent frequency capping to maintain compliance while maximizing effectiveness.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> Frequency capping</li>
                    <li><i class="fas fa-check"></i> Rest period management</li>
                    <li><i class="fas fa-check"></i> Contact sequencing</li>
                </ul>
            </div>

            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Personalized Messaging</h3>
                <p>Dynamic message personalization based on debtor profiles and communication history.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> Dynamic messaging</li>
                    <li><i class="fas fa-check"></i> Tone adaptation</li>
                    <li><i class="fas fa-check"></i> Language preferences</li>
                </ul>
            </div>

            <div class="cs-card">
                <div class="cs-card-icon"><i class="fas fa-chart-bar"></i></div>
                <h3>Strategy Analytics</h3>
                <p>Real-time performance analytics to optimize strategies and improve outcomes.</p>
                <ul class="cs-list">
                    <li><i class="fas fa-check"></i> RPC tracking</li>
                    <li><i class="fas fa-check"></i> Strategy comparison</li>
                    <li><i class="fas fa-check"></i> ROI calculations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Strategy Impact -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Contact Strategy Impact</h2>
            <p>Measurable improvements in collection outcomes</p>
        </div>

        <div class="cs-roi-grid">
            <div class="cs-roi-card">
                <div class="cs-roi-number">38%</div>
                <h3>Higher RPC Rates</h3>
                <p>Improved right-party contact with optimized strategies.</p>
            </div>
            <div class="cs-roi-card">
                <div class="cs-roi-number">45%</div>
                <h3>Faster Resolution</h3>
                <p>Reduced time-to-resolution with targeted outreach.</p>
            </div>
            <div class="cs-roi-card">
                <div class="cs-roi-number">32%</div>
                <h3>Better Engagement</h3>
                <p>Higher engagement and conversation rates.</p>
            </div>
            <div class="cs-roi-card">
                <div class="cs-roi-number">26%</div>
                <h3>Settlement Increase</h3>
                <p>More settlement agreements with better connections.</p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Risk Management</h2>
            <p>Built-in compliance safeguards</p>
        </div>

        <div class="cs-features-wrap">
            <div class="cs-features-grid">
                <div class="cs-feature">
                    <h3><i class="fas fa-balance-scale"></i> FDCPA Compliant</h3>
                    <p>Automatic enforcement of contact time restrictions and frequency limits.</p>
                </div>
                <div class="cs-feature">
                    <h3><i class="fas fa-phone-slash"></i> TCPA Safe</h3>
                    <p>DNC screening and consent management built into all contacts.</p>
                </div>
                <div class="cs-feature">
                    <h3><i class="fas fa-list-check"></i> Audit Ready</h3>
                    <p>Complete audit trails for all contacts and strategies.</p>
                </div>
                <div class="cs-feature">
                    <h3><i class="fas fa-exclamation-triangle"></i> Risk Alerts</h3>
                    <p>Real-time alerts for compliance violations and patterns.</p>
                </div>
                <div class="cs-feature">
                    <h3><i class="fas fa-graduation-cap"></i> Training</h3>
                    <p>Built-in compliance training for contact strategies.</p>
                </div>
                <div class="cs-feature">
                    <h3><i class="fas fa-shield-alt"></i> Data Security</h3>
                    <p>Enterprise security for all contact data and communications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROI Metrics -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>ROI Metrics</h2>
            <p>Financial impact of optimized strategies</p>
        </div>

        <div class="cs-impact-grid">
            <div class="cs-impact-card">
                <h3><i class="fas fa-dollar-sign"></i> Cost Efficiency</h3>
                <ul class="cs-stats-list">
                    <li><strong>35% reduction</strong> in contact attempts</li>
                    <li><strong>28% lower</strong> cost per contact</li>
                    <li><strong>40% improvement</strong> in contact productivity</li>
                    <li><strong>6 month</strong> payback period</li>
                </ul>
            </div>

            <div class="cs-impact-card">
                <h3><i class="fas fa-chart-line"></i> Revenue Impact</h3>
                <ul class="cs-stats-list">
                    <li><strong>38% higher</strong> RPC rates</li>
                    <li><strong>26% more</strong> settlements</li>
                    <li><strong>$1.5M+ annual</strong> additional recovery</li>
                    <li><strong>3:1 average</strong> ROI ratio</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Optimize Your Contact Strategy Now</h2>
            <p>Increase RPC rates and recovery amounts with intelligent contact strategies.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Section headers */
.section-header h2 {
    font-size: 2rem;
    margin-bottom: 12px;
}
.section-header p {
    font-size: 1.05rem;
    color: var(--text-secondary);
}

/* Features Grid */
.cs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.cs-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.cs-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.cs-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.cs-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.cs-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.cs-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.cs-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.cs-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* ROI Grid */
.cs-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.cs-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.cs-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.cs-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.cs-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Features Wrap */
.cs-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.cs-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.cs-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.cs-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* Impact Grid */
.cs-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.cs-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.cs-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.cs-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.cs-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.cs-stats-list li:last-child { border-bottom: none; }
.cs-stats-list li strong { color: var(--primary-color); }

/* Responsive */
@media (max-width: 768px) {
    .cs-impact-grid { grid-template-columns: 1fr; }
    .cs-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
