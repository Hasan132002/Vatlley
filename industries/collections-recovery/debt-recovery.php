<?php
/**
 * Collections & Recovery - Debt Recovery Assessment Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Debt Recovery Assessment Solutions';
$meta_description = 'Assess collectability with advanced scoring models. Prioritize accounts, segment portfolios, and model recovery outcomes for maximum efficiency.';

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
                <span>Debt Recovery Assessment</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Debt Recovery Assessment</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Assess collectability and prioritize accounts with advanced scoring models. Optimize portfolio performance through data-driven recovery predictions.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Assessment Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Assessment Solutions</h2>
            <p>Advanced scoring and portfolio analysis</p>
        </div>

        <div class="dr-grid">
            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-star"></i></div>
                <h3>Collectability Scoring</h3>
                <p>Proprietary models predict likelihood and amount of recovery for each account.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Predictive scoring models</li>
                    <li><i class="fas fa-check"></i> Recovery probability</li>
                    <li><i class="fas fa-check"></i> Amount predictions</li>
                </ul>
            </div>

            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-sliders-h"></i></div>
                <h3>Portfolio Segmentation</h3>
                <p>Automatically segment portfolios by collectability, risk, and recovery potential.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Dynamic segmentation</li>
                    <li><i class="fas fa-check"></i> Risk-based tiers</li>
                    <li><i class="fas fa-check"></i> Automated routing</li>
                </ul>
            </div>

            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Recovery Modeling</h3>
                <p>Model different strategies and predict outcomes to optimize collection approach.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Scenario analysis</li>
                    <li><i class="fas fa-check"></i> Strategy comparison</li>
                    <li><i class="fas fa-check"></i> Outcome prediction</li>
                </ul>
            </div>

            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-arrow-up"></i></div>
                <h3>Account Prioritization</h3>
                <p>Automatically prioritize high-value and high-collectability accounts for immediate action.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Value-based ranking</li>
                    <li><i class="fas fa-check"></i> ROI optimization</li>
                    <li><i class="fas fa-check"></i> Resource allocation</li>
                </ul>
            </div>

            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-microscope"></i></div>
                <h3>Debt Profile Analysis</h3>
                <p>Analyze debt characteristics to identify patterns and predict repayment behavior.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Debt type analysis</li>
                    <li><i class="fas fa-check"></i> Age assessment</li>
                    <li><i class="fas fa-check"></i> Behavior patterns</li>
                </ul>
            </div>

            <div class="dr-card">
                <div class="dr-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Assessment Dashboards</h3>
                <p>Real-time dashboards for portfolio health, recovery projections, and strategy performance.</p>
                <ul class="dr-list">
                    <li><i class="fas fa-check"></i> Portfolio dashboards</li>
                    <li><i class="fas fa-check"></i> Recovery projections</li>
                    <li><i class="fas fa-check"></i> Custom reporting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Improvements -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Recovery Improvements</h2>
            <p>Data-driven optimization results</p>
        </div>

        <div class="dr-roi-grid">
            <div class="dr-roi-card">
                <div class="dr-roi-number">33%</div>
                <h3>Higher Recovery Rates</h3>
                <p>Through optimized account prioritization.</p>
            </div>
            <div class="dr-roi-card">
                <div class="dr-roi-number">41%</div>
                <h3>Faster Collections</h3>
                <p>Reduced time-to-payment with smart routing.</p>
            </div>
            <div class="dr-roi-card">
                <div class="dr-roi-number">37%</div>
                <h3>Cost Savings</h3>
                <p>Eliminate efforts on unlikely accounts.</p>
            </div>
            <div class="dr-roi-card">
                <div class="dr-roi-number">29%</div>
                <h3>Higher Settlements</h3>
                <p>Better account selection improves outcomes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Assessment Capabilities -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Assessment Capabilities</h2>
            <p>Comprehensive analysis framework</p>
        </div>

        <div class="dr-features-wrap">
            <div class="dr-features-grid">
                <div class="dr-feature">
                    <h3><i class="fas fa-database"></i> Multi-Source Data</h3>
                    <p>Integrate credit bureau data, payment history, public records, and behavioral signals.</p>
                </div>
                <div class="dr-feature">
                    <h3><i class="fas fa-brain"></i> AI-Powered Models</h3>
                    <p>Machine learning algorithms trained on millions of collection outcomes.</p>
                </div>
                <div class="dr-feature">
                    <h3><i class="fas fa-sync"></i> Real-Time Updates</h3>
                    <p>Assessments update as new data becomes available and outcomes are realized.</p>
                </div>
                <div class="dr-feature">
                    <h3><i class="fas fa-puzzle-piece"></i> Custom Models</h3>
                    <p>Develop organization-specific models based on your unique data and outcomes.</p>
                </div>
                <div class="dr-feature">
                    <h3><i class="fas fa-code"></i> API Integration</h3>
                    <p>Seamless API integration with existing collection systems and workflows.</p>
                </div>
                <div class="dr-feature">
                    <h3><i class="fas fa-file-contract"></i> Explainability</h3>
                    <p>Transparent scoring with detailed explanations for each account assessment.</p>
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
            <p>Measurable business impact</p>
        </div>

        <div class="dr-impact-grid">
            <div class="dr-impact-card">
                <h3><i class="fas fa-dollar-sign"></i> Cost Optimization</h3>
                <ul class="dr-stats-list">
                    <li><strong>37% reduction</strong> in collection costs</li>
                    <li><strong>50% less time</strong> on low-value accounts</li>
                    <li><strong>45% improvement</strong> in resource utilization</li>
                    <li><strong>5 month</strong> payback period</li>
                </ul>
            </div>

            <div class="dr-impact-card">
                <h3><i class="fas fa-chart-line"></i> Recovery Growth</h3>
                <ul class="dr-stats-list">
                    <li><strong>33% increase</strong> in recovery rates</li>
                    <li><strong>$2.8M+ annual</strong> additional recovery</li>
                    <li><strong>41% faster</strong> time-to-recovery</li>
                    <li><strong>4:1 average</strong> ROI ratio</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Get Your Portfolio Assessment Today</h2>
            <p>Unlock hidden recovery potential with intelligent debt assessment.</p>
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
.dr-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.dr-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.dr-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.dr-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.dr-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.dr-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.dr-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.dr-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.dr-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* ROI Grid */
.dr-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.dr-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.dr-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.dr-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.dr-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Features Wrap */
.dr-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.dr-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.dr-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.dr-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* Impact Grid */
.dr-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.dr-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.dr-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.dr-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.dr-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.dr-stats-list li:last-child { border-bottom: none; }
.dr-stats-list li strong { color: var(--primary-color); }

/* Responsive */
@media (max-width: 768px) {
    .dr-impact-grid { grid-template-columns: 1fr; }
    .dr-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
