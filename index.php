<?php
/**
 * VettlyGlobal - Homepage
 */

// Include configuration
require_once 'config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Page variables
$page_title = 'Risk Solutions & Intelligence';
$meta_description = 'VettlyGlobal provides comprehensive risk solutions, identity verification, fraud detection, and data intelligence across healthcare, financial services, insurance, government, and more.';

// Get industries
$industries = get_industries();

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge"><i class="fas fa-shield-alt"></i> Trusted by 500+ Enterprises</span>
            <h1>Data-Driven Risk Intelligence for Modern Enterprises</h1>
            <p>Comprehensive identity verification, fraud prevention, and compliance solutions that protect your organization and accelerate growth.</p>
            <div class="hero-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-hero-primary">
                    <i class="fas fa-calendar-check"></i>
                    Request a Demo
                </a>
                <a href="<?php echo url('products'); ?>" class="btn btn-hero-outline">
                    <i class="fas fa-th-large"></i>
                    Explore Solutions
                </a>
            </div>
            <div class="hero-trust">
                <span class="trust-label">Compliance:</span>
                <span class="trust-badge"><i class="fas fa-check-circle"></i> SOC 2</span>
                <span class="trust-badge"><i class="fas fa-check-circle"></i> GDPR</span>
                <span class="trust-badge"><i class="fas fa-check-circle"></i> HIPAA</span>
                <span class="trust-badge"><i class="fas fa-check-circle"></i> PCI DSS</span>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-bar-grid">
            <div class="stats-bar-item">
                <div class="stat-number">10M+</div>
                <div class="stat-label">Identities Verified</div>
            </div>
            <div class="stats-bar-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Enterprise Clients</div>
            </div>
            <div class="stats-bar-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">Uptime Guarantee</div>
            </div>
            <div class="stats-bar-item">
                <div class="stat-number">150+</div>
                <div class="stat-label">Countries Covered</div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="section industries-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Industries</span>
            <h2>Solutions Tailored to Your Industry</h2>
            <p>Delivering specialized risk intelligence across multiple sectors</p>
        </div>

        <div class="industries-grid">
            <?php foreach($industries as $industry): ?>
            <a href="<?php echo url('industries/' . $industry['slug']); ?>" class="industry-card-v2">
                <div class="industry-card-icon">
                    <i class="fas fa-<?php echo $industry['icon']; ?>"></i>
                </div>
                <div class="industry-card-content">
                    <h3><?php echo clean($industry['title']); ?></h3>
                    <p><?php echo clean($industry['description']); ?></p>
                </div>
                <div class="industry-card-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Core Solutions -->
<section class="section solutions-section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Solutions</span>
            <h2>Core Capabilities</h2>
            <p>End-to-end risk management powered by advanced data intelligence</p>
        </div>

        <div class="solutions-grid-v2">
            <div class="solution-card-v2">
                <div class="solution-card-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>Identity Verification</h3>
                <ul>
                    <li>Multi-factor authentication</li>
                    <li>Document verification</li>
                    <li>Biometric validation</li>
                    <li>Real-time identity checks</li>
                </ul>
                <a href="<?php echo url('products'); ?>" class="solution-link">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="solution-card-v2">
                <div class="solution-card-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3>Fraud Detection</h3>
                <ul>
                    <li>Transaction monitoring</li>
                    <li>Pattern recognition</li>
                    <li>Anomaly detection</li>
                    <li>Behavioral analytics</li>
                </ul>
                <a href="<?php echo url('products'); ?>" class="solution-link">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="solution-card-v2">
                <div class="solution-card-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Compliance Management</h3>
                <ul>
                    <li>AML/KYC compliance</li>
                    <li>Regulatory reporting</li>
                    <li>Risk assessments</li>
                    <li>Audit trails</li>
                </ul>
                <a href="<?php echo url('products'); ?>" class="solution-link">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="solution-card-v2">
                <div class="solution-card-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3>Risk Analytics</h3>
                <ul>
                    <li>Credit risk scoring</li>
                    <li>Predictive modeling</li>
                    <li>Portfolio analysis</li>
                    <li>Custom reporting</li>
                </ul>
                <a href="<?php echo url('products'); ?>" class="solution-link">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section why-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Why VettlyGlobal</span>
            <h2>Built for Enterprise Scale</h2>
            <p>Trusted by leading organizations worldwide</p>
        </div>

        <div class="why-grid">
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h4>Comprehensive Data</h4>
                <p>Access extensive data sources for deep insights across all risk categories.</p>
            </div>

            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Enterprise Security</h4>
                <p>GDPR, HIPAA, SOC 2 compliant with enterprise-grade protection.</p>
            </div>

            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4>AI-Powered Analytics</h4>
                <p>Predict risks and detect fraud with machine learning models.</p>
            </div>

            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h4>Real-Time Processing</h4>
                <p>Instant decision-making for time-sensitive risk assessments.</p>
            </div>

            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h4>Global Coverage</h4>
                <p>Verify identities and assess risk across 150+ countries.</p>
            </div>

            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h4>24/7 Support</h4>
                <p>Dedicated support team available around the clock.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section-v2 last-section">
    <div class="container">
        <div class="cta-content-v2">
            <div class="cta-text">
                <h2>Ready to Strengthen Your Risk Management?</h2>
                <p>Connect with our experts to discover how VettlyGlobal can help your organization mitigate risks, prevent fraud, and drive growth.</p>
            </div>
            <div class="cta-actions">
                <a href="<?php echo url('contact'); ?>" class="btn btn-hero-primary">
                    <i class="fas fa-calendar-check"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-hero-outline">
                    <i class="fas fa-book-open"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Homepage Styles -->
<style>
/* Hero Section - Dark & Authoritative */
.hero-section {
    background: url('<?php echo ASSETS_URL; ?>/images/hero-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 130px 0 100px;
    position: relative;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(15, 32, 56, 0.92) 0%, rgba(30, 60, 100, 0.85) 100%);
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

.hero-content {
    max-width: 680px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.2);
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 500;
    color: rgba(255,255,255,0.95);
    margin-bottom: 24px;
    backdrop-filter: blur(4px);
}

.hero-badge i {
    color: #4ADE80;
}

.hero-content h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 20px;
    line-height: 1.15;
    font-weight: 700;
}

.hero-content p {
    color: rgba(255,255,255,0.85);
    font-size: 1.15rem;
    margin-bottom: 32px;
    line-height: 1.7;
}

.hero-buttons {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 36px;
}

.btn-hero-primary {
    background: var(--primary-color);
    color: white;
    padding: 15px 34px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
    border: 2px solid var(--primary-color);
    text-decoration: none;
}

.btn-hero-primary:hover {
    background: white;
    border-color: white;
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255,255,255,0.25);
}

.btn-hero-outline {
    background: transparent;
    color: white;
    padding: 15px 34px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
    border: 2px solid rgba(255,255,255,0.4);
    text-decoration: none;
}

.btn-hero-outline:hover {
    background: rgba(255,255,255,0.15);
    border-color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255,255,255,0.15);
    color: white;
}

.hero-trust {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.trust-label {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.5);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}

.trust-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 0.82rem;
    color: rgba(255,255,255,0.75);
    font-weight: 500;
}

.trust-badge i {
    color: #4ADE80;
    font-size: 0.75rem;
}

/* Stats Bar */
.stats-bar {
    background: white;
    padding: 0;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    position: relative;
    z-index: 3;
    margin-top: -40px;
    margin-left: auto;
    margin-right: auto;
    max-width: 1100px;
    border-radius: 12px;
}

.stats-bar .container {
    max-width: 100%;
    padding: 0;
}

.stats-bar-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    text-align: center;
}

.stats-bar-item {
    padding: 30px 20px;
    border-right: 1px solid var(--border-light);
}

.stats-bar-item:last-child {
    border-right: none;
}

.stats-bar-item .stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 4px;
    font-family: var(--font-heading);
}

.stats-bar-item .stat-label {
    font-size: 0.85rem;
    color: var(--text-secondary);
    font-weight: 500;
}

/* Section Tag */
.section-tag {
    display: inline-block;
    background: rgba(5, 130, 189, 0.1);
    color: var(--primary-color);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.82rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 16px;
}

.section-header {
    margin-bottom: 45px;
}

.section-header h2 {
    font-size: 2.2rem;
    margin-bottom: 12px;
}

.section-header p {
    font-size: 1.05rem;
    color: var(--text-secondary);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* Industries Grid V2 - 2 columns */
.industries-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.industry-card-v2 {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 22px 24px;
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 10px;
    text-decoration: none;
    color: inherit;
    transition: var(--transition);
}

.industry-card-v2:hover {
    border-color: var(--primary-color);
    box-shadow: 0 4px 15px rgba(5,130,189,0.12);
    transform: translateY(-3px);
}

.industry-card-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    background: rgba(5,130,189,0.08);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    color: var(--primary-color);
    transition: var(--transition);
}

.industry-card-v2:hover .industry-card-icon {
    background: var(--primary-color);
    color: white;
}

.industry-card-content {
    flex: 1;
    min-width: 0;
}

.industry-card-content h3 {
    font-size: 1.05rem;
    margin-bottom: 4px;
    color: var(--text-primary);
}

.industry-card-content p {
    font-size: 0.85rem;
    color: var(--text-secondary);
    margin: 0;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.industry-card-arrow {
    color: var(--text-light);
    font-size: 0.9rem;
    transition: var(--transition);
}

.industry-card-v2:hover .industry-card-arrow {
    color: var(--primary-color);
    transform: translateX(4px);
}

/* Solutions Grid V2 */
.solutions-grid-v2 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 24px;
}

.solution-card-v2 {
    background: white;
    padding: 32px 28px;
    border-radius: 10px;
    border: 1px solid var(--border-color);
    transition: var(--transition);
}

.solution-card-v2:hover {
    border-color: var(--primary-color);
    box-shadow: 0 6px 20px rgba(5,130,189,0.1);
    transform: translateY(-3px);
}

.solution-card-icon {
    width: 52px;
    height: 52px;
    background: rgba(5,130,189,0.08);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: var(--primary-color);
    margin-bottom: 20px;
    transition: var(--transition);
}

.solution-card-v2:hover .solution-card-icon {
    background: var(--primary-color);
    color: white;
}

.solution-card-v2 h3 {
    font-size: 1.15rem;
    margin-bottom: 16px;
}

.solution-card-v2 ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.solution-card-v2 ul li {
    padding: 7px 0;
    padding-left: 22px;
    position: relative;
    color: var(--text-secondary);
    font-size: 0.92rem;
}

.solution-card-v2 ul li:before {
    content: "\f00c";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    color: #27ae60;
    font-size: 0.8rem;
}

.solution-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--primary-color);
    transition: var(--transition);
}

.solution-link:hover {
    gap: 10px;
    color: var(--primary-dark);
}

/* Why Section - 2 columns */
.why-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
}

.why-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.why-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    background: rgba(5,130,189,0.08);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: var(--primary-color);
}

.why-item h4 {
    font-size: 1.05rem;
    margin-bottom: 6px;
}

.why-item p {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
    line-height: 1.6;
}

/* CTA Section V2 */
.cta-section-v2 {
    background: linear-gradient(135deg, #0D2B4E 0%, #143D65 50%, #0582BD 100%);
    padding: 80px 0;
}

.cta-content-v2 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
}

.cta-text {
    flex: 1;
}

.cta-text h2 {
    color: white;
    font-size: 2rem;
    margin-bottom: 12px;
}

.cta-text p {
    color: rgba(255,255,255,0.75);
    font-size: 1.05rem;
    margin: 0;
    max-width: 500px;
    line-height: 1.7;
}

.cta-actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex-shrink: 0;
}

/* Responsive */
@media (max-width: 992px) {
    .stats-bar {
        margin-top: -30px;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 10px;
    }

    .stats-bar-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stats-bar-item:nth-child(2) {
        border-right: none;
    }

    .stats-bar-item:nth-child(1),
    .stats-bar-item:nth-child(2) {
        border-bottom: 1px solid var(--border-light);
    }

    .cta-content-v2 {
        flex-direction: column;
        text-align: center;
    }

    .cta-text p {
        max-width: 100%;
    }

    .cta-actions {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .hero-section {
        padding: 80px 0 70px;
    }

    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }

    .hero-buttons {
        flex-direction: column;
    }

    .hero-buttons .btn-hero-primary,
    .hero-buttons .btn-hero-outline {
        width: 100%;
        justify-content: center;
    }

    .hero-trust {
        justify-content: center;
    }

    .stats-bar {
        margin-top: -25px;
        margin-left: 15px;
        margin-right: 15px;
    }

    .stats-bar-item {
        padding: 20px 15px;
    }

    .stats-bar-item .stat-number {
        font-size: 1.6rem;
    }

    .industries-grid {
        grid-template-columns: 1fr;
    }

    .solutions-grid-v2 {
        grid-template-columns: 1fr;
    }

    .why-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }

    .section-header h2 {
        font-size: 1.6rem;
    }

    .cta-text h2 {
        font-size: 1.5rem;
    }

    .cta-actions {
        flex-direction: column;
        width: 100%;
    }

    .cta-actions .btn-hero-primary,
    .cta-actions .btn-hero-outline {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
