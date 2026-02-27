<?php
/**
 * Collections & Recovery - Analytics Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Collections Analytics & Reporting Solutions';
$meta_description = 'Comprehensive analytics and reporting for collections operations. Performance dashboards, recovery metrics, and custom reporting for data-driven decisions.';

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
                <span>Analytics & Reporting</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Collections Analytics & Reporting</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Drive data-driven decisions with comprehensive analytics, real-time dashboards, and custom reporting for collection performance optimization.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Analytics Solutions -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Analytics Solutions</h2>
            <p>Comprehensive reporting and performance insights</p>
        </div>

        <div class="an-grid">
            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-chart-bar"></i></div>
                <h3>Performance Dashboards</h3>
                <p>Real-time dashboards showing key metrics and collection performance indicators.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> KPI dashboards</li>
                    <li><i class="fas fa-check"></i> Real-time updates</li>
                    <li><i class="fas fa-check"></i> Custom widgets</li>
                </ul>
            </div>

            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Recovery Metrics</h3>
                <p>Detailed metrics on collection rates, recovery amounts, and effectiveness.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> Collection rates</li>
                    <li><i class="fas fa-check"></i> Recovery amounts</li>
                    <li><i class="fas fa-check"></i> RPC tracking</li>
                </ul>
            </div>

            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Custom Reporting</h3>
                <p>Flexible report builder to create custom reports for any analysis need.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> Drag-and-drop builder</li>
                    <li><i class="fas fa-check"></i> Scheduled reports</li>
                    <li><i class="fas fa-check"></i> Export options</li>
                </ul>
            </div>

            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-users"></i></div>
                <h3>Agent Performance</h3>
                <p>Track individual and team performance with detailed agent analytics.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> Individual metrics</li>
                    <li><i class="fas fa-check"></i> Team benchmarking</li>
                    <li><i class="fas fa-check"></i> Performance rankings</li>
                </ul>
            </div>

            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-gavel"></i></div>
                <h3>Compliance Reporting</h3>
                <p>Regulatory and compliance reports for audit and oversight purposes.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> FDCPA compliance</li>
                    <li><i class="fas fa-check"></i> Audit trails</li>
                    <li><i class="fas fa-check"></i> Risk reports</li>
                </ul>
            </div>

            <div class="an-card">
                <div class="an-card-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Portfolio Analysis</h3>
                <p>Deep analysis of portfolio health, segmentation, and performance trends.</p>
                <ul class="an-list">
                    <li><i class="fas fa-check"></i> Portfolio health</li>
                    <li><i class="fas fa-check"></i> Segment analysis</li>
                    <li><i class="fas fa-check"></i> Trend analysis</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Impact -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Analytics Impact</h2>
            <p>Measurable improvements from data-driven insights</p>
        </div>

        <div class="an-roi-grid">
            <div class="an-roi-card">
                <div class="an-roi-number">28%</div>
                <h3>Better Decision Making</h3>
                <p>Improved outcomes through data insights.</p>
            </div>
            <div class="an-roi-card">
                <div class="an-roi-number">42%</div>
                <h3>Higher Productivity</h3>
                <p>Optimized workflows and resource allocation.</p>
            </div>
            <div class="an-roi-card">
                <div class="an-roi-number">35%</div>
                <h3>Faster Analysis</h3>
                <p>Real-time insights vs. manual reporting.</p>
            </div>
            <div class="an-roi-card">
                <div class="an-roi-number">24%</div>
                <h3>Recovery Increase</h3>
                <p>Combined with strategy optimization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Capabilities -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Analytics Capabilities</h2>
            <p>Comprehensive analytics framework</p>
        </div>

        <div class="an-features-wrap">
            <div class="an-features-grid">
                <div class="an-feature">
                    <h3><i class="fas fa-sync"></i> Real-Time Data</h3>
                    <p>Live updates from collection systems with automatic data synchronization.</p>
                </div>
                <div class="an-feature">
                    <h3><i class="fas fa-brain"></i> Predictive Analytics</h3>
                    <p>AI-driven forecasting for recovery trends and performance prediction.</p>
                </div>
                <div class="an-feature">
                    <h3><i class="fas fa-cube"></i> Drill-Down Analysis</h3>
                    <p>Dive deep into data with multi-level filtering and analysis.</p>
                </div>
                <div class="an-feature">
                    <h3><i class="fas fa-mobile-alt"></i> Mobile Access</h3>
                    <p>Access dashboards and reports from any device, anytime.</p>
                </div>
                <div class="an-feature">
                    <h3><i class="fas fa-exchange-alt"></i> Data Export</h3>
                    <p>Export reports and data in multiple formats for further analysis.</p>
                </div>
                <div class="an-feature">
                    <h3><i class="fas fa-bell"></i> Alerts & Triggers</h3>
                    <p>Automated alerts for KPI thresholds and anomalies.</p>
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
            <p>Financial impact of analytics implementation</p>
        </div>

        <div class="an-impact-grid">
            <div class="an-impact-card">
                <h3><i class="fas fa-tachometer-alt"></i> Efficiency Gains</h3>
                <ul class="an-stats-list">
                    <li><strong>35% reduction</strong> in reporting time</li>
                    <li><strong>42% boost</strong> in staff productivity</li>
                    <li><strong>25 hours/month</strong> time saved per manager</li>
                    <li><strong>$150K+ annual</strong> in labor savings</li>
                </ul>
            </div>

            <div class="an-impact-card">
                <h3><i class="fas fa-chart-line"></i> Performance Impact</h3>
                <ul class="an-stats-list">
                    <li><strong>24% increase</strong> in collection rates</li>
                    <li><strong>$1.8M+ annual</strong> additional recovery</li>
                    <li><strong>28% better</strong> decision making</li>
                    <li><strong>6 month</strong> payback period</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Transform Your Collections with Data</h2>
            <p>Drive better decisions with VettlyGlobal's comprehensive analytics and reporting platform.</p>
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
.an-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.an-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.an-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.an-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.an-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.an-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.an-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.an-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.an-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* ROI Grid */
.an-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.an-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.an-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.an-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.an-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Features Wrap */
.an-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.an-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.an-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.an-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* Impact Grid */
.an-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.an-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.an-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.an-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.an-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.an-stats-list li:last-child { border-bottom: none; }
.an-stats-list li strong { color: var(--primary-color); }

/* Responsive */
@media (max-width: 768px) {
    .an-impact-grid { grid-template-columns: 1fr; }
    .an-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
