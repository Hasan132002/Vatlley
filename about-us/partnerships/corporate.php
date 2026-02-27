<?php
/**
 * Partnerships - Corporate Partnerships & Alliances
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Corporate Partnerships - VettlyGlobal';
$meta_description = 'Explore VettlyGlobal\'s corporate partnerships and strategic alliances. Collaborate with us to deliver comprehensive risk solutions across industries.';

include '../../includes/header.php';
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
                <a href="<?php echo url('about-us/partnerships'); ?>" style="color: white;">Partnerships</a>
                <span style="margin: 0 10px;">/</span>
                <span>Corporate</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Corporate Partnerships & Alliances</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Strategic collaborations that amplify innovation, expand capabilities, and deliver exceptional value to customers.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Stronger Together</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal's corporate partnerships bring together industry-leading organizations to create comprehensive solutions that address complex business challenges. Through strategic alliances with technology providers, data partners, and industry specialists, we deliver integrated solutions that exceed what any single organization could achieve alone.
            </p>
        </div>

        <div class="partnership-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-value">100+</div>
                <div class="stat-label">Strategic Partners</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">25+</div>
                <div class="stat-label">Technology Integrations</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">150+</div>
                <div class="stat-label">Joint Customers</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">$500M+</div>
                <div class="stat-label">Combined Value Created</div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Types -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Partnership Models</h2>
            <p>Multiple ways to collaborate and create value</p>
        </div>

        <div class="models-grid">
            <div class="model-card">
                <div class="model-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Technology Integration Partners</h3>
                <p>
                    Seamlessly integrate VettlyGlobal's risk intelligence into your platforms, products, and services. Our flexible APIs and comprehensive SDKs enable deep technical integrations that enhance your offerings.
                </p>
                <ul class="model-features">
                    <li><i class="fas fa-check"></i> RESTful API access</li>
                    <li><i class="fas fa-check"></i> Dedicated technical support</li>
                    <li><i class="fas fa-check"></i> Co-marketing opportunities</li>
                    <li><i class="fas fa-check"></i> Revenue sharing models</li>
                </ul>
            </div>

            <div class="model-card">
                <div class="model-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Reseller & Distribution Partners</h3>
                <p>
                    Expand your solution portfolio by reselling VettlyGlobal's risk management and identity verification services to your customer base. Comprehensive training and sales enablement included.
                </p>
                <ul class="model-features">
                    <li><i class="fas fa-check"></i> Competitive margins</li>
                    <li><i class="fas fa-check"></i> Sales training & certification</li>
                    <li><i class="fas fa-check"></i> Marketing collateral & support</li>
                    <li><i class="fas fa-check"></i> Deal registration program</li>
                </ul>
            </div>

            <div class="model-card">
                <div class="model-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Strategic Alliance Partners</h3>
                <p>
                    Long-term strategic partnerships focused on joint product development, go-to-market strategies, and shared innovation initiatives that benefit both organizations and customers.
                </p>
                <ul class="model-features">
                    <li><i class="fas fa-check"></i> Joint solution development</li>
                    <li><i class="fas fa-check"></i> Co-branded offerings</li>
                    <li><i class="fas fa-check"></i> Executive alignment</li>
                    <li><i class="fas fa-check"></i> Shared roadmap planning</li>
                </ul>
            </div>

            <div class="model-card">
                <div class="model-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3>Consulting & System Integrators</h3>
                <p>
                    Consulting firms and SIs can leverage VettlyGlobal's solutions in client engagements, receiving specialized training, presales support, and implementation assistance.
                </p>
                <ul class="model-features">
                    <li><i class="fas fa-check"></i> Practice development support</li>
                    <li><i class="fas fa-check"></i> Presales engineering assistance</li>
                    <li><i class="fas fa-check"></i> Implementation services</li>
                    <li><i class="fas fa-check"></i> Professional services margin</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Featured Partners -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Featured Corporate Partners</h2>
            <p>Leading organizations we're proud to collaborate with</p>
        </div>

        <div class="partners-showcase">
            <div class="showcase-card">
                <div class="partner-logo" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-building"></i>
                </div>
                <div class="showcase-content">
                    <h3>Enterprise Software Leaders</h3>
                    <p>
                        Partnerships with major CRM, ERP, and business software providers to embed risk intelligence directly into enterprise workflows. Our integrations with Salesforce, Microsoft Dynamics, and SAP enable seamless risk assessments within existing business processes.
                    </p>
                    <div class="showcase-benefits">
                        <span class="benefit-badge">Native Integrations</span>
                        <span class="benefit-badge">Single Sign-On</span>
                        <span class="benefit-badge">Real-time Updates</span>
                    </div>
                </div>
            </div>

            <div class="showcase-card">
                <div class="partner-logo" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="showcase-content">
                    <h3>Cloud & Infrastructure Partners</h3>
                    <p>
                        Strategic relationships with AWS, Microsoft Azure, and Google Cloud Platform ensure our solutions are optimized for cloud deployment, leverage cutting-edge cloud technologies, and meet the highest security standards.
                    </p>
                    <div class="showcase-benefits">
                        <span class="benefit-badge">Cloud Native</span>
                        <span class="benefit-badge">Auto-Scaling</span>
                        <span class="benefit-badge">Global Distribution</span>
                    </div>
                </div>
            </div>

            <div class="showcase-card">
                <div class="partner-logo" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-database"></i>
                </div>
                <div class="showcase-content">
                    <h3>Data & Analytics Partners</h3>
                    <p>
                        Collaborations with leading data providers, credit bureaus, and analytics platforms expand our data coverage and enhance the accuracy of our risk assessments. Combined datasets deliver unparalleled insights.
                    </p>
                    <div class="showcase-benefits">
                        <span class="benefit-badge">Expanded Coverage</span>
                        <span class="benefit-badge">Enhanced Accuracy</span>
                        <span class="benefit-badge">Global Data</span>
                    </div>
                </div>
            </div>

            <div class="showcase-card">
                <div class="partner-logo" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="showcase-content">
                    <h3>Cybersecurity Partners</h3>
                    <p>
                        Partnerships with cybersecurity leaders enable comprehensive threat detection, combining identity verification with advanced security monitoring, threat intelligence, and incident response capabilities.
                    </p>
                    <div class="showcase-benefits">
                        <span class="benefit-badge">Threat Intelligence</span>
                        <span class="benefit-badge">Security Operations</span>
                        <span class="benefit-badge">Compliance Tools</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Partner Benefits</h2>
            <p>What you gain from partnering with VettlyGlobal</p>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Revenue Growth</h3>
                <p>Expand your offerings and create new revenue streams through competitive margins, revenue sharing, and upsell opportunities.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Innovation Access</h3>
                <p>Early access to new features, beta programs, and cutting-edge technologies that keep you ahead of market trends.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Dedicated Support</h3>
                <p>Assigned partner success manager, technical resources, and priority support to ensure your success.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Training & Certification</h3>
                <p>Comprehensive training programs, certifications, and ongoing education to build expertise in our solutions.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Marketing Support</h3>
                <p>Co-marketing campaigns, event sponsorships, case studies, and marketing development funds to drive demand.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Deal Registration</h3>
                <p>Protected deals, special pricing, and additional incentives for registered opportunities in your pipeline.</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Partnership Success Stories</h2>
        </div>

        <div class="success-stories">
            <div class="story-card">
                <div class="story-header">
                    <div class="story-logo">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div>
                        <h4>Global Analytics Platform</h4>
                        <div class="story-type">Technology Integration Partner</div>
                    </div>
                </div>
                <p>
                    Integrated VettlyGlobal's fraud detection APIs into their analytics dashboard, enabling 500+ joint customers to access real-time risk intelligence alongside their business metrics. Partnership generated $50M in combined revenue.
                </p>
                <div class="story-metrics">
                    <div class="metric">
                        <strong>500+</strong>
                        <span>Joint Customers</span>
                    </div>
                    <div class="metric">
                        <strong>$50M</strong>
                        <span>Revenue Generated</span>
                    </div>
                    <div class="metric">
                        <strong>95%</strong>
                        <span>Customer Satisfaction</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-header">
                    <div class="story-logo">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div>
                        <h4>Enterprise Software Reseller</h4>
                        <div class="story-type">Reseller Partnership</div>
                    </div>
                </div>
                <p>
                    Added VettlyGlobal's identity verification to their product portfolio, creating a new practice area that grew to 200 employees and became their fastest-growing business unit with 300% year-over-year growth.
                </p>
                <div class="story-metrics">
                    <div class="metric">
                        <strong>200</strong>
                        <span>Team Members</span>
                    </div>
                    <div class="metric">
                        <strong>300%</strong>
                        <span>YoY Growth</span>
                    </div>
                    <div class="metric">
                        <strong>#1</strong>
                        <span>Growth Business Unit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Become a VettlyGlobal Partner</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Join our growing partner ecosystem and unlock new opportunities for growth, innovation, and customer success.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-handshake"></i>
                    Apply to Partner
                </a>
                <a href="<?php echo url('products'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-th-large"></i>
                    Explore Our Solutions
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

.models-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.model-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.model-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.model-icon {
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

.model-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.model-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.model-features {
    list-style: none;
    padding: 0;
}

.model-features li {
    padding: 8px 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 12px;
}

.model-features i {
    color: var(--primary-color);
}

.partners-showcase {
    display: grid;
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;
}

.showcase-card {
    background: white;
    padding: 45px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 35px;
    transition: var(--transition);
}

.showcase-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.partner-logo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: white;
    flex-shrink: 0;
}

.showcase-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.showcase-content p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.showcase-benefits {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.benefit-badge {
    background: var(--bg-light);
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-primary);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
    max-width: 1100px;
    margin: 0 auto;
}

.benefit-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.benefit-icon {
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

.benefit-card h3 {
    font-size: 1.3rem;
    margin-bottom: 12px;
}

.benefit-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.success-stories {
    display: grid;
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}

.story-card {
    background: white;
    padding: 45px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}

.story-header {
    display: flex;
    gap: 20px;
    align-items: center;
    margin-bottom: 20px;
}

.story-logo {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: white;
    flex-shrink: 0;
}

.story-header h4 {
    font-size: 1.4rem;
    margin-bottom: 5px;
}

.story-type {
    color: var(--primary-color);
    font-size: 0.95rem;
    font-weight: 600;
}

.story-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 25px;
}

.story-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 25px;
    padding-top: 25px;
    border-top: 2px solid var(--bg-light);
}

.story-metrics .metric {
    text-align: center;
}

.story-metrics .metric strong {
    display: block;
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.story-metrics .metric span {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .showcase-card {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .partner-logo {
        margin: 0 auto;
    }

    .showcase-benefits {
        justify-content: center;
    }

    .story-header {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
