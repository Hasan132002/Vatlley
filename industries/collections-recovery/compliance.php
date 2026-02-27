<?php
/**
 * Collections & Recovery - Compliance Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Collections Compliance Solutions';
$meta_description = 'Ensure compliance with FDCPA, TCPA, and state collections regulations. Simplify compliance workflows with automated monitoring and audit trails.';

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
                <span>Compliance</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 18px; font-weight: 700;">Collections Compliance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7; margin-bottom: 25px;">Comply with FDCPA, TCPA, and state regulations with automated monitoring, audit trails, and compliance workflows. Reduce risk while maintaining collection effectiveness.</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Compliance Solutions -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance Solutions</h2>
            <p>Comprehensive regulatory framework and enforcement</p>
        </div>

        <div class="comp-grid">
            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-gavel"></i></div>
                <h3>FDCPA Compliance</h3>
                <p>Automated monitoring and enforcement of Fair Debt Collection Practices Act requirements.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> Contact time restrictions</li>
                    <li><i class="fas fa-check"></i> Cease communication tracking</li>
                    <li><i class="fas fa-check"></i> Debt validation procedures</li>
                </ul>
            </div>

            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-phone-slash"></i></div>
                <h3>TCPA Verification</h3>
                <p>Telephone Consumer Protection Act compliance with DNC list verification and consent tracking.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> National DNC list screening</li>
                    <li><i class="fas fa-check"></i> Do-not-call enforcement</li>
                    <li><i class="fas fa-check"></i> Consent management</li>
                </ul>
            </div>

            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-map"></i></div>
                <h3>State Regulations</h3>
                <p>Coverage of 50+ state-specific collection and debt handling laws and requirements.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> State-specific rules</li>
                    <li><i class="fas fa-check"></i> Licensing requirements</li>
                    <li><i class="fas fa-check"></i> Rate cap monitoring</li>
                </ul>
            </div>

            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-list-check"></i></div>
                <h3>Complete Audit Trails</h3>
                <p>Comprehensive logging of all collection actions for regulatory review and dispute resolution.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> Call recording logs</li>
                    <li><i class="fas fa-check"></i> Communication history</li>
                    <li><i class="fas fa-check"></i> User activity tracking</li>
                </ul>
            </div>

            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-clipboard-list"></i></div>
                <h3>Policy Management</h3>
                <p>Centralized policy configuration and enforcement for all collection operations.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> Rule configuration</li>
                    <li><i class="fas fa-check"></i> Automated enforcement</li>
                    <li><i class="fas fa-check"></i> Team training</li>
                </ul>
            </div>

            <div class="comp-card">
                <div class="comp-card-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Compliance Reporting</h3>
                <p>Advanced reporting to demonstrate compliance and identify risk areas.</p>
                <ul class="comp-list">
                    <li><i class="fas fa-check"></i> Compliance dashboards</li>
                    <li><i class="fas fa-check"></i> Regulatory reporting</li>
                    <li><i class="fas fa-check"></i> Risk assessment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Rate & Compliance Impact -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance Impact on Recovery</h2>
            <p>Balance compliance with collection effectiveness</p>
        </div>

        <div class="comp-impact-grid">
            <div class="comp-impact-card">
                <h3><i class="fas fa-shield-alt"></i> Risk Reduction</h3>
                <ul class="comp-stats-list">
                    <li><strong>99.7% compliance</strong> with FDCPA/TCPA</li>
                    <li><strong>85% reduction</strong> in complaints</li>
                    <li><strong>90% fewer</strong> regulatory violations</li>
                    <li><strong>$0 fines</strong> (compliant clients)</li>
                </ul>
            </div>

            <div class="comp-impact-card">
                <h3><i class="fas fa-chart-bar"></i> Operational Benefits</h3>
                <ul class="comp-stats-list">
                    <li><strong>18% increase</strong> in collection effectiveness</li>
                    <li><strong>40% less time</strong> on compliance management</li>
                    <li><strong>60% improvement</strong> in audit readiness</li>
                    <li><strong>100% visibility</strong> into operations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Compliance Features</h2>
            <p>Regulatory framework and monitoring</p>
        </div>

        <div class="comp-features-wrap">
            <div class="comp-features-grid">
                <div class="comp-feature">
                    <h3><i class="fas fa-clock"></i> Contact Restrictions</h3>
                    <p>Automated enforcement of contact time restrictions, frequency limits, and contact method rules.</p>
                </div>
                <div class="comp-feature">
                    <h3><i class="fas fa-ban"></i> DNC Screening</h3>
                    <p>Real-time do-not-call list checking with automated dialing suppression.</p>
                </div>
                <div class="comp-feature">
                    <h3><i class="fas fa-file-pdf"></i> Documentation</h3>
                    <p>Automated documentation of all interactions for regulatory review and dispute handling.</p>
                </div>
                <div class="comp-feature">
                    <h3><i class="fas fa-exclamation-triangle"></i> Risk Alerts</h3>
                    <p>Real-time alerts for potential compliance issues and violation patterns.</p>
                </div>
                <div class="comp-feature">
                    <h3><i class="fas fa-graduation-cap"></i> Training Modules</h3>
                    <p>Compliance training materials and certification programs for all team members.</p>
                </div>
                <div class="comp-feature">
                    <h3><i class="fas fa-microscope"></i> Auditing</h3>
                    <p>Quarterly compliance audits with detailed findings and improvement recommendations.</p>
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
            <p>Financial impact of compliance</p>
        </div>

        <div class="comp-roi-grid">
            <div class="comp-roi-card">
                <div class="comp-roi-number">$150K+</div>
                <h3>Avoided Fines</h3>
                <p>Average annual fine reduction through compliance.</p>
            </div>
            <div class="comp-roi-card">
                <div class="comp-roi-number">65%</div>
                <h3>Legal Cost Reduction</h3>
                <p>Fewer disputes and legal challenges with compliance.</p>
            </div>
            <div class="comp-roi-card">
                <div class="comp-roi-number">18%</div>
                <h3>Better Recovery</h3>
                <p>Improved collection effectiveness through trust.</p>
            </div>
            <div class="comp-roi-card">
                <div class="comp-roi-number">8 mo</div>
                <h3>Payback Period</h3>
                <p>Average ROI timeline for compliance investments.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ensure Compliance Today</h2>
            <p>Transform your collections compliance with VettlyGlobal's comprehensive solutions.</p>
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

/* Solutions Grid */
.comp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
}
.comp-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    border-left: 4px solid var(--primary-color);
    transition: var(--transition);
}
.comp-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}
.comp-card-icon {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}
.comp-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}
.comp-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-bottom: 12px;
    line-height: 1.6;
}
.comp-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.comp-list li {
    padding: 6px 0;
    color: var(--text-secondary);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.comp-list li i {
    color: var(--primary-color);
    font-size: 0.75rem;
}

/* Impact Grid */
.comp-impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 900px;
    margin: 0 auto;
}
.comp-impact-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.comp-impact-card h3 {
    color: var(--primary-color);
    margin-bottom: 18px;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    gap: 10px;
}
.comp-stats-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.comp-stats-list li {
    padding: 10px 0;
    border-bottom: 1px solid var(--bg-light);
    color: var(--text-secondary);
    font-size: 0.95rem;
}
.comp-stats-list li:last-child { border-bottom: none; }
.comp-stats-list li strong { color: var(--primary-color); }

/* Features */
.comp-features-wrap {
    max-width: 950px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}
.comp-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}
.comp-feature h3 {
    color: var(--primary-color);
    margin-bottom: 10px;
    font-size: 1.05rem;
    display: flex;
    align-items: center;
    gap: 8px;
}
.comp-feature p {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.92rem;
}

/* ROI */
.comp-roi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}
.comp-roi-card {
    background: white;
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
}
.comp-roi-number {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 8px;
}
.comp-roi-card h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}
.comp-roi-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

/* Responsive */
@media (max-width: 768px) {
    .comp-impact-grid { grid-template-columns: 1fr; }
    .comp-features-wrap { padding: 25px; }
}
</style>

<?php include '../../includes/footer.php'; ?>
