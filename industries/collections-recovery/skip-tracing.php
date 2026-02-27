<?php
/**
 * Collections & Recovery - Skip Tracing Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Skip Tracing Solutions for Collections';
$meta_description = 'Advanced skip tracing software to locate hard-to-find debtors quickly and efficiently. Verify addresses, find phone numbers, and access employment information.';

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
                <span>Skip Tracing</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Skip Tracing Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Locate hard-to-find debtors quickly with advanced skip tracing technology. Access verified contact information and employment data to accelerate your debt recovery process.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Skip Tracing Features</h2>
            <p>Comprehensive debtor location and identification</p>
        </div>

        <div class="st-grid">
            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Address Verification & Updates</h3>
                <p>Verify current addresses, identify previous addresses, and validate location data in real-time.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> Real-time address validation</li>
                    <li><i class="fas fa-check"></i> Relocations and updates</li>
                    <li><i class="fas fa-check"></i> Forward/reverse address lookup</li>
                </ul>
            </div>

            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-phone"></i></div>
                <h3>Phone Number Discovery</h3>
                <p>Find active phone numbers including landlines, cell phones, and VoIP contacts with accuracy.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> Multi-channel phone lookup</li>
                    <li><i class="fas fa-check"></i> Phone type identification</li>
                    <li><i class="fas fa-check"></i> Do-not-call screening</li>
                </ul>
            </div>

            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Employment Information</h3>
                <p>Access current and historical employment data to identify income sources and contact options.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> Current employer verification</li>
                    <li><i class="fas fa-check"></i> Job title and tenure</li>
                    <li><i class="fas fa-check"></i> Employer contact details</li>
                </ul>
            </div>

            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-users"></i></div>
                <h3>Social Profile Links</h3>
                <p>Identify social media profiles and online presence for additional contact opportunities.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> Social media discovery</li>
                    <li><i class="fas fa-check"></i> Online profile verification</li>
                    <li><i class="fas fa-check"></i> Email address identification</li>
                </ul>
            </div>

            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-sitemap"></i></div>
                <h3>Relationship Mapping</h3>
                <p>Identify connections to family members and associates who may have contact information.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> Family connections</li>
                    <li><i class="fas fa-check"></i> Associate networks</li>
                    <li><i class="fas fa-check"></i> Contact relationship scoring</li>
                </ul>
            </div>

            <div class="st-card">
                <div class="st-card-icon"><i class="fas fa-code"></i></div>
                <h3>Seamless Integration</h3>
                <p>Integrate skip tracing directly into your collection workflows via API or batch processing.</p>
                <ul class="st-list">
                    <li><i class="fas fa-check"></i> REST API and webhooks</li>
                    <li><i class="fas fa-check"></i> Batch processing</li>
                    <li><i class="fas fa-check"></i> Systems integration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Rate Improvements -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Recovery Rate Improvements</h2>
            <p>Data-driven results that impact your bottom line</p>
        </div>

        <div class="st-roi-grid">
            <div class="st-roi-card">
                <div class="st-roi-number">35%</div>
                <h3>Faster Debtor Location</h3>
                <p>Reduce time to contact with automated skip tracing.</p>
            </div>
            <div class="st-roi-card">
                <div class="st-roi-number">28%</div>
                <h3>Higher Contact Rates</h3>
                <p>Achieve right-party contact with verified information.</p>
            </div>
            <div class="st-roi-card">
                <div class="st-roi-number">42%</div>
                <h3>Improved Recovery Amounts</h3>
                <p>Locate debtors with better financial capacity.</p>
            </div>
            <div class="st-roi-card">
                <div class="st-roi-number">50%</div>
                <h3>Cost Reduction</h3>
                <p>Eliminate wasted collection efforts on bad data.</p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Security -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Data Security</h2>
            <p>Enterprise-grade security and regulatory compliance</p>
        </div>

        <div class="st-features-wrap">
            <div class="st-features-grid">
                <div class="st-feature">
                    <h3><i class="fas fa-shield-alt"></i> FCRA Compliance</h3>
                    <p>Full compliance with Fair Credit Reporting Act requirements for skip tracing operations.</p>
                </div>
                <div class="st-feature">
                    <h3><i class="fas fa-lock"></i> Data Encryption</h3>
                    <p>End-to-end encryption for all data transmission and storage at rest.</p>
                </div>
                <div class="st-feature">
                    <h3><i class="fas fa-user-shield"></i> Access Controls</h3>
                    <p>Role-based access control with audit trails for all data access.</p>
                </div>
                <div class="st-feature">
                    <h3><i class="fas fa-certificate"></i> SOC 2 Certified</h3>
                    <p>Type II SOC 2 certified for security, availability, and confidentiality.</p>
                </div>
                <div class="st-feature">
                    <h3><i class="fas fa-file-contract"></i> GDPR Compliant</h3>
                    <p>Full GDPR compliance for international operations and data handling.</p>
                </div>
                <div class="st-feature">
                    <h3><i class="fas fa-search"></i> Regular Audits</h3>
                    <p>Quarterly security audits and penetration testing.</p>
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
            <p>Measurable business outcomes</p>
        </div>

        <div class="st-impact-grid">
            <div class="st-impact-card">
                <h3><i class="fas fa-dollar-sign"></i> Cost Savings</h3>
                <ul class="st-stats-list">
                    <li><strong>50% reduction</strong> in manual skip tracing hours</li>
                    <li><strong>30% lower</strong> overall collection costs</li>
                    <li><strong>25% reduction</strong> in skip tracing database subscriptions</li>
                    <li><strong>Immediate ROI</strong> within 3 months</li>
                </ul>
            </div>

            <div class="st-impact-card">
                <h3><i class="fas fa-chart-line"></i> Revenue Impact</h3>
                <ul class="st-stats-list">
                    <li><strong>28% improvement</strong> in contact rates</li>
                    <li><strong>22% increase</strong> in overall collection amounts</li>
                    <li><strong>35% faster</strong> time to recovery</li>
                    <li><strong>$2M+ annual</strong> revenue increase (avg client)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Accelerate Your Collections?</h2>
            <p>Transform your skip tracing operations with VettlyGlobal's advanced debtor location solutions.</p>
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
.st-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.st-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.st-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.st-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.st-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.st-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.st-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.st-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.st-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* ROI Grid */
.st-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.st-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.st-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.st-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.st-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Features Wrap */
.st-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.st-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.st-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.st-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* Impact Grid */
.st-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.st-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.st-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.st-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.st-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.st-stats-list li:last-child { border-bottom: none; }
.st-stats-list li strong { color: var(--primary-color); }

/* Responsive */
@media (max-width: 768px) {
    .st-impact-grid { grid-template-columns: 1fr; }
    .st-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
