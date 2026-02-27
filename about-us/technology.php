<?php
/**
 * About Us - Our Technology Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Our Technology - VettlyGlobal';
$meta_description = 'Discover the cutting-edge technology powering VettlyGlobal\'s risk solutions platform. Advanced AI, machine learning, and secure data infrastructure.';

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('about-us'); ?>" style="color: white;">About Us</a>
                <span style="margin: 0 10px;">/</span>
                <span>Technology</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Our Technology</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Advanced technology infrastructure powering intelligent risk solutions at scale.
            </p>
        </div>
    </div>
</section>

<!-- Technology Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Built for Scale, Security, and Performance</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal's technology platform processes millions of transactions daily with industry-leading accuracy and speed. Our infrastructure combines artificial intelligence, machine learning, and advanced data analytics to deliver real-time insights and proactive risk management.
            </p>
        </div>

        <div class="tech-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-value">99.99%</div>
                <div class="stat-label">Platform Uptime</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">100ms</div>
                <div class="stat-label">Average Response Time</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">10M+</div>
                <div class="stat-label">Daily Transactions</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">150+</div>
                <div class="stat-label">Data Sources</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Technologies -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Core Technology Capabilities</h2>
        </div>

        <div class="tech-grid">
            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Artificial Intelligence & Machine Learning</h3>
                <p>
                    Our proprietary AI models analyze billions of data points to detect patterns, predict risks, and identify anomalies with exceptional accuracy. Continuously learning and adapting to emerging threats.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> Deep learning neural networks</li>
                    <li><i class="fas fa-check"></i> Natural language processing</li>
                    <li><i class="fas fa-check"></i> Behavioral pattern analysis</li>
                    <li><i class="fas fa-check"></i> Predictive risk modeling</li>
                </ul>
            </div>

            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Big Data Infrastructure</h3>
                <p>
                    Scalable data architecture processes and analyzes massive datasets in real-time. Our distributed systems handle petabytes of data with lightning-fast query performance.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> Distributed data processing</li>
                    <li><i class="fas fa-check"></i> Real-time data streaming</li>
                    <li><i class="fas fa-check"></i> Advanced data warehousing</li>
                    <li><i class="fas fa-check"></i> Multi-source data integration</li>
                </ul>
            </div>

            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Enterprise Security</h3>
                <p>
                    Bank-grade security infrastructure protects sensitive data with multiple layers of encryption, access controls, and continuous monitoring. Compliant with global security standards.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> End-to-end encryption</li>
                    <li><i class="fas fa-check"></i> Multi-factor authentication</li>
                    <li><i class="fas fa-check"></i> SOC 2 Type II certified</li>
                    <li><i class="fas fa-check"></i> GDPR & CCPA compliant</li>
                </ul>
            </div>

            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3>Cloud-Native Architecture</h3>
                <p>
                    Built on modern cloud infrastructure for unlimited scalability and global reach. Auto-scaling systems ensure consistent performance during peak demand periods.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> Microservices architecture</li>
                    <li><i class="fas fa-check"></i> Auto-scaling infrastructure</li>
                    <li><i class="fas fa-check"></i> Multi-region deployment</li>
                    <li><i class="fas fa-check"></i> Container orchestration</li>
                </ul>
            </div>

            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>API-First Platform</h3>
                <p>
                    RESTful APIs and SDKs enable seamless integration with existing systems. Comprehensive documentation and developer tools accelerate implementation timelines.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> RESTful API architecture</li>
                    <li><i class="fas fa-check"></i> Webhooks & real-time events</li>
                    <li><i class="fas fa-check"></i> SDKs for major languages</li>
                    <li><i class="fas fa-check"></i> Comprehensive documentation</li>
                </ul>
            </div>

            <div class="tech-card">
                <div class="tech-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Advanced Analytics</h3>
                <p>
                    Powerful analytics engine delivers actionable insights through customizable dashboards, reports, and visualizations. Real-time monitoring and historical trend analysis.
                </p>
                <ul class="tech-features">
                    <li><i class="fas fa-check"></i> Real-time dashboards</li>
                    <li><i class="fas fa-check"></i> Custom report builder</li>
                    <li><i class="fas fa-check"></i> Predictive analytics</li>
                    <li><i class="fas fa-check"></i> Data visualization tools</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Technology Stack</h2>
            <p>Built with industry-leading technologies</p>
        </div>

        <div class="stack-categories">
            <div class="stack-category">
                <h3><i class="fas fa-layer-group"></i> Backend & Infrastructure</h3>
                <div class="tech-badges">
                    <span class="tech-badge">Python</span>
                    <span class="tech-badge">Node.js</span>
                    <span class="tech-badge">Java</span>
                    <span class="tech-badge">Go</span>
                    <span class="tech-badge">Kubernetes</span>
                    <span class="tech-badge">Docker</span>
                    <span class="tech-badge">AWS</span>
                    <span class="tech-badge">GCP</span>
                </div>
            </div>

            <div class="stack-category">
                <h3><i class="fas fa-database"></i> Data & Analytics</h3>
                <div class="tech-badges">
                    <span class="tech-badge">PostgreSQL</span>
                    <span class="tech-badge">MongoDB</span>
                    <span class="tech-badge">Redis</span>
                    <span class="tech-badge">Elasticsearch</span>
                    <span class="tech-badge">Apache Spark</span>
                    <span class="tech-badge">Apache Kafka</span>
                    <span class="tech-badge">Snowflake</span>
                </div>
            </div>

            <div class="stack-category">
                <h3><i class="fas fa-brain"></i> Machine Learning & AI</h3>
                <div class="tech-badges">
                    <span class="tech-badge">TensorFlow</span>
                    <span class="tech-badge">PyTorch</span>
                    <span class="tech-badge">scikit-learn</span>
                    <span class="tech-badge">XGBoost</span>
                    <span class="tech-badge">Keras</span>
                    <span class="tech-badge">MLflow</span>
                </div>
            </div>

            <div class="stack-category">
                <h3><i class="fas fa-desktop"></i> Frontend & User Experience</h3>
                <div class="tech-badges">
                    <span class="tech-badge">React</span>
                    <span class="tech-badge">TypeScript</span>
                    <span class="tech-badge">Next.js</span>
                    <span class="tech-badge">Vue.js</span>
                    <span class="tech-badge">Tailwind CSS</span>
                    <span class="tech-badge">D3.js</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Innovation & Research -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Continuous Innovation</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Our dedicated research and development team continuously explores emerging technologies and methodologies to stay ahead of evolving threats and challenges.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    We invest heavily in innovation, working with leading academic institutions and participating in industry research initiatives to advance the field of risk management and data intelligence.
                </p>

                <div class="innovation-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div>
                            <strong>R&D Investment</strong>
                            <p>20% of revenue invested in research and development</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <strong>Patents & IP</strong>
                            <p>50+ patents in fraud detection and identity verification</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <strong>Academic Partnerships</strong>
                            <p>Collaborations with top universities worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="innovation-box" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 50px; border-radius: 16px; color: white;">
                    <h3 style="color: white; margin-bottom: 25px;">Areas of Focus</h3>
                    <ul class="focus-list">
                        <li><i class="fas fa-check-circle"></i> Advanced behavioral biometrics</li>
                        <li><i class="fas fa-check-circle"></i> Quantum-resistant encryption</li>
                        <li><i class="fas fa-check-circle"></i> Federated learning models</li>
                        <li><i class="fas fa-check-circle"></i> Blockchain-based verification</li>
                        <li><i class="fas fa-check-circle"></i> Edge computing for real-time decisions</li>
                        <li><i class="fas fa-check-circle"></i> Privacy-preserving machine learning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security & Compliance -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Security & Compliance</h2>
            <p>Your data security is our top priority</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-certificate"></i>
                </div>
                <h4>SOC 2 Type II</h4>
                <p>Independently audited and certified for security, availability, and confidentiality.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>ISO 27001</h4>
                <p>International standard for information security management systems.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-lock"></i>
                </div>
                <h4>GDPR Compliant</h4>
                <p>Full compliance with European data protection regulations.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h4>CCPA Compliant</h4>
                <p>Adherence to California Consumer Privacy Act requirements.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4>HIPAA Compliant</h4>
                <p>Protected health information handling for healthcare clients.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-badge">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h4>PCI DSS</h4>
                <p>Payment card industry data security standards certified.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Experience Our Technology</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                See how VettlyGlobal's advanced technology can transform your risk management and fraud prevention capabilities.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('resources/whitepapers'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-book"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.stat-card {
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}

.stat-value {
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 1.1rem;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
}

.tech-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.tech-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.tech-icon {
    width: 80px;
    height: 80px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    margin-bottom: 25px;
}

.tech-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.tech-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 25px;
}

.tech-features {
    list-style: none;
    padding: 0;
}

.tech-features li {
    padding: 10px 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 12px;
}

.tech-features i {
    color: var(--primary-color);
    font-size: 1.1rem;
}

.stack-categories {
    display: grid;
    gap: 40px;
    /* max-width: 1000px; */
    margin: 0 auto;
}

.stack-category h3 {
    font-size: 1.4rem;
    margin-bottom: 20px;
    color: var(--text-primary);
}

.stack-category h3 i {
    color: var(--primary-color);
    margin-right: 10px;
}

.tech-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.tech-badge {
    background: white;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    color: var(--text-primary);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border: 2px solid;
}

.tech-badge:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-3px);
}

.innovation-highlights {
    margin-top: 30px;
    display: grid;
    gap: 25px;
}

.highlight-item {
    display: flex;
    gap: 20px;
    align-items: start;
}

.highlight-icon {
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    flex-shrink: 0;
}

.highlight-item strong {
    display: block;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.highlight-item p {
    color: var(--text-secondary);
    margin: 0;
}

.focus-list {
    list-style: none;
    padding: 0;
}

.focus-list li {
    padding: 12px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.1rem;
}

.focus-list i {
    font-size: 1.2rem;
    opacity: 0.9;
}

.compliance-grid {
    max-width: 1000px;
    margin: 0 auto;
}

.compliance-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.compliance-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.compliance-badge {
    width: 70px;
    height: 70px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: var(--primary-color);
}

.compliance-card h4 {
    font-size: 1.25rem;
    margin-bottom: 12px;
}

.compliance-card p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .row {
        grid-template-columns: 1fr !important;
    }

    .tech-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
