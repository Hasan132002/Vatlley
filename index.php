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
    <div class="container">
        <div class="hero-content">
            <h1>Empowering Organizations with Data-Driven Risk Solutions</h1>
            <p>Transform complexity into opportunity with VettlyGlobal's comprehensive suite of risk intelligence, identity verification, and fraud prevention solutions across industries worldwide.</p>
            <div class="hero-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary">
                    Get Started
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="<?php echo url('about-us'); ?>" class="btn btn-outline">
                    Learn More
                    <i class="fas fa-info-circle"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="section industries-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Industries We Serve</h2>
            <p>Delivering tailored risk solutions across multiple sectors</p>
        </div>

        <div class="industries-grid">
            <?php foreach($industries as $industry): ?>
            <div class="industry-card card">
                <a href="<?php echo url('industries/' . $industry['slug']); ?>">
                    <div class="card-icon">
                        <i class="fas fa-<?php echo $industry['icon']; ?>"></i>
                    </div>
                    <h3 class="card-title"><?php echo clean($industry['title']); ?></h3>
                    <p class="card-text"><?php echo clean($industry['description']); ?></p>
                    <div class="card-link">
                        Explore Solutions
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section features-section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Why Choose VettlyGlobal?</h2>
            <p>Comprehensive solutions powered by advanced data intelligence</p>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Comprehensive Data</h3>
                <p>Access to extensive data sources providing deep insights for informed decision-making across all risk categories.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Advanced Security</h3>
                <p>Enterprise-grade security with GDPR, HIPAA compliance ensuring your data remains protected at all times.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Predictive Analytics</h3>
                <p>Leverage AI-powered analytics to predict risks, detect fraud, and make proactive business decisions.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Identity Verification</h3>
                <p>Multi-layered identity verification solutions to prevent fraud and ensure compliance across platforms.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Real-Time Processing</h3>
                <p>Instant data processing and decision-making capabilities for time-sensitive risk assessments.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Dedicated support team available around the clock to assist with implementation and troubleshooting.</p>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Overview -->
<section class="section solutions-overview">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Core Solutions</h2>
            <p>Comprehensive risk management capabilities</p>
        </div>

        <div class="solutions-grid">
            <div class="solution-box">
                <div class="solution-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>Identity Verification</h3>
                <ul>
                    <li>Multi-factor authentication</li>
                    <li>Document verification</li>
                    <li>Biometric validation</li>
                    <li>Real-time identity checks</li>
                </ul>
            </div>

            <div class="solution-box">
                <div class="solution-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3>Fraud Detection</h3>
                <ul>
                    <li>Transaction monitoring</li>
                    <li>Pattern recognition</li>
                    <li>Anomaly detection</li>
                    <li>Behavioral analytics</li>
                </ul>
            </div>

            <div class="solution-box">
                <div class="solution-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Compliance Management</h3>
                <ul>
                    <li>AML/KYC compliance</li>
                    <li>Regulatory reporting</li>
                    <li>Risk assessments</li>
                    <li>Audit trails</li>
                </ul>
            </div>

            <div class="solution-box">
                <div class="solution-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3>Risk Analytics</h3>
                <ul>
                    <li>Credit risk scoring</li>
                    <li>Predictive modeling</li>
                    <li>Portfolio analysis</li>
                    <li>Custom reporting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section stats-section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); color: white;">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">10M+</div>
                <div class="stat-label">Identities Verified</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Enterprise Clients</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">Uptime Guarantee</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">150+</div>
                <div class="stat-label">Countries Covered</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section last-section">
    <div class="container">
        <div class="cta-box">
            <h2>Ready to Transform Your Risk Management?</h2>
            <p>Connect with our experts to discover how VettlyGlobal can help your organization mitigate risks, prevent fraud, and unlock new opportunities.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('about-us'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-book"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for Homepage -->
<style>
/* Industries Grid */
.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.industry-card {
    padding: 40px 30px;
    text-align: center;
    transition: var(--transition);
}

.industry-card a {
    color: inherit;
    text-decoration: none;
}

.industry-card:hover {
    transform: translateY(-10px);
}

.card-link {
    margin-top: 20px;
    color: var(--primary-color);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

/* Features Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 40px;
}

.feature-item {
    text-align: center;
}

.feature-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.feature-item h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
}

/* Solutions Grid */
.solutions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.solution-box {
    background: var(--bg-white);
    padding: 40px 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.solution-box:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.solution-icon {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.solution-box h3 {
    margin-bottom: 20px;
}

.solution-box ul {
    list-style: none;
    padding: 0;
}

.solution-box ul li {
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
    color: var(--text-secondary);
}

.solution-box ul li:before {
    content: "\f00c";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--secondary-color);
}

/* Stats Section */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    text-align: center;
}

.stat-number {
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: white;
}

.stat-label {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.9);
}

/* CTA Section */
.cta-box {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.cta-box h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.cta-box p {
    font-size: 1.15rem;
    margin-bottom: 35px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-lg {
    padding: 16px 40px;
    font-size: 1.1rem;
}

/* Section Header */
.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.15rem;
    color: var(--text-secondary);
}

/* Responsive */
@media (max-width: 768px) {
    .industries-grid,
    .features-grid,
    .solutions-grid {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .cta-buttons {
        flex-direction: column;
    }

    .cta-buttons .btn {
        width: 100%;
    }
}
</style>

<?php include 'includes/footer.php'; ?>