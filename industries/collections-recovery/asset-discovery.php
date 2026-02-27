<?php
/**
 * Collections & Recovery - Asset Discovery Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Asset Discovery Solutions for Collections';
$meta_description = 'Identify debtor assets to maximize recovery potential. Access property ownership, vehicle registration, and financial account data.';

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
                <span>Asset Discovery</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Asset Discovery Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Identify debtor assets across multiple jurisdictions. Access property, vehicle, and financial data to maximize collection and recovery potential.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-light btn-lg" style="display: inline-flex; align-items: center; gap: 8px; background: white; color: var(--primary-color); font-weight: 600;">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Asset Discovery Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Asset Discovery Features</h2>
            <p>Comprehensive asset identification across all categories</p>
        </div>

        <div class="ad-grid">
            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-home"></i></div>
                <h3>Real Property Discovery</h3>
                <p>Identify residential and commercial property ownership across all states.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> Property deed records</li>
                    <li><i class="fas fa-check"></i> Mortgage lien data</li>
                    <li><i class="fas fa-check"></i> Property valuation</li>
                </ul>
            </div>

            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-car"></i></div>
                <h3>Vehicle Registration</h3>
                <p>Access vehicle registration and lien information from DMV records nationwide.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> Vehicle ownership</li>
                    <li><i class="fas fa-check"></i> Lien and loan information</li>
                    <li><i class="fas fa-check"></i> Fleet discovery</li>
                </ul>
            </div>

            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-university"></i></div>
                <h3>Financial Accounts</h3>
                <p>Locate bank accounts, savings, and financial institution information.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> Bank routing data</li>
                    <li><i class="fas fa-check"></i> Institution identification</li>
                    <li><i class="fas fa-check"></i> Account verification</li>
                </ul>
            </div>

            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-certificate"></i></div>
                <h3>Professional Licenses</h3>
                <p>Identify professional licenses indicating income and business ownership.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> License records</li>
                    <li><i class="fas fa-check"></i> Renewal status</li>
                    <li><i class="fas fa-check"></i> Business ownership</li>
                </ul>
            </div>

            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Business Entity Search</h3>
                <p>Locate businesses owned or operated by debtors with asset details.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> Business records</li>
                    <li><i class="fas fa-check"></i> UCC filings</li>
                    <li><i class="fas fa-check"></i> Corporate assets</li>
                </ul>
            </div>

            <div class="ad-card">
                <div class="ad-card-icon"><i class="fas fa-gavel"></i></div>
                <h3>Court Records</h3>
                <p>Access judgment and court data revealing debtor financial situation.</p>
                <ul class="ad-list">
                    <li><i class="fas fa-check"></i> Judgment records</li>
                    <li><i class="fas fa-check"></i> Lien information</li>
                    <li><i class="fas fa-check"></i> Bankruptcy status</li>
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
            <p>Asset discovery impact on collections</p>
        </div>

        <div class="ad-roi-grid">
            <div class="ad-roi-card">
                <div class="ad-roi-number">52%</div>
                <h3>More Recoverable Accounts</h3>
                <p>Identify previously uncollectible debtors with assets.</p>
            </div>
            <div class="ad-roi-card">
                <div class="ad-roi-number">38%</div>
                <h3>Higher Recovery Rates</h3>
                <p>Access to asset information drives better outcomes.</p>
            </div>
            <div class="ad-roi-card">
                <div class="ad-roi-number">$3.2M+</div>
                <h3>Additional Recovery</h3>
                <p>Average annual increase for mid-size agency.</p>
            </div>
            <div class="ad-roi-card">
                <div class="ad-roi-number">31%</div>
                <h3>Higher Settlements</h3>
                <p>Better leverage in negotiations with asset visibility.</p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Legal -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Legal Framework</h2>
            <p>Lawful asset discovery and use</p>
        </div>

        <div class="ad-features-wrap">
            <div class="ad-features-grid">
                <div class="ad-feature">
                    <h3><i class="fas fa-gavel"></i> FDCPA Compliant</h3>
                    <p>Use of public records and proper investigation methods compliant with FDCPA.</p>
                </div>
                <div class="ad-feature">
                    <h3><i class="fas fa-balance-scale"></i> Public Records</h3>
                    <p>Verified access to public records from government sources.</p>
                </div>
                <div class="ad-feature">
                    <h3><i class="fas fa-map"></i> State Laws</h3>
                    <p>Compliance with state-specific asset discovery rules and regulations.</p>
                </div>
                <div class="ad-feature">
                    <h3><i class="fas fa-list-check"></i> Audit Trails</h3>
                    <p>Complete documentation of all asset discovery activities.</p>
                </div>
                <div class="ad-feature">
                    <h3><i class="fas fa-graduation-cap"></i> Training</h3>
                    <p>Comprehensive compliance training for asset discovery teams.</p>
                </div>
                <div class="ad-feature">
                    <h3><i class="fas fa-shield-alt"></i> Data Security</h3>
                    <p>Secure handling of sensitive asset and debtor information.</p>
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
            <p>Financial impact of asset discovery</p>
        </div>

        <div class="ad-impact-grid">
            <div class="ad-impact-card">
                <h3><i class="fas fa-chart-line"></i> Recovery Growth</h3>
                <ul class="ad-stats-list">
                    <li><strong>38% increase</strong> in overall recovery rates</li>
                    <li><strong>$3.2M+ annual</strong> additional recovery</li>
                    <li><strong>52% more</strong> previously uncollectible accounts</li>
                    <li><strong>3 month</strong> payback period</li>
                </ul>
            </div>

            <div class="ad-impact-card">
                <h3><i class="fas fa-dollar-sign"></i> Cost Efficiency</h3>
                <ul class="ad-stats-list">
                    <li><strong>45% reduction</strong> in investigation costs</li>
                    <li><strong>60% faster</strong> asset location</li>
                    <li><strong>40% improvement</strong> in staff productivity</li>
                    <li><strong>5:1 average</strong> ROI ratio</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/cyber-security-img.jpg') center center / cover no-repeat fixed; position: relative;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.6);"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="color: white; font-size: 1.8rem; margin-bottom: 15px;">Uncover Hidden Asset Potential</h2>
            <p style="font-size: 1.05rem; margin-bottom: 25px; color: rgba(255,255,255,0.95);">Maximize recovery with comprehensive asset discovery for your collection portfolio.</p>
            <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); font-weight: 600; padding: 12px 32px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
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
.ad-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.ad-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.ad-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.ad-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.ad-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.ad-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.ad-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.ad-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.ad-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* ROI Grid */
.ad-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.ad-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.ad-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.ad-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.ad-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Features Wrap */
.ad-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.ad-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.ad-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.ad-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* Impact Grid */
.ad-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.ad-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.ad-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.ad-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.ad-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.ad-stats-list li:last-child { border-bottom: none; }
.ad-stats-list li strong { color: var(--primary-color); }

/* Responsive */
@media (max-width: 768px) {
    .ad-impact-grid { grid-template-columns: 1fr; }
    .ad-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
