<?php
/**
 * About Us - Careers Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Careers - VettlyGlobal';
$meta_description = 'Join the VettlyGlobal team. Explore career opportunities in technology, data science, sales, and more at a leading risk solutions provider.';

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
                <span>Careers</span>
            </div>
            <h1 style="color: white; font-size: 2rem; margin-bottom: 20px;">Build Your Career at VettlyGlobal</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.05rem; line-height: 1.7; margin-bottom: 25px;">
                Join a team of innovators shaping the future of risk solutions and data intelligence.
            </p>
            <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-white btn-lg">
                <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>
                Apply Now
            </a>
        </div>
    </div>
</section>

<!-- Why Work Here -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="margin-bottom: 25px;">Why Choose VettlyGlobal</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary); max-width: 800px; margin: 0 auto;">
                We're building the future of risk management and data intelligence. Join us and make a meaningful impact while growing your career.
            </p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 50px;">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Innovation First</h3>
                <p>Work with cutting-edge technologies and solve complex challenges that matter.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Collaborative Culture</h3>
                <p>Join a diverse team of talented professionals who support and learn from each other.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Career Growth</h3>
                <p>Access professional development opportunities, training, and clear career progression paths.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Work-Life Balance</h3>
                <p>Flexible work arrangements, remote options, and generous time-off policies.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Comprehensive Benefits</h3>
                <p>Competitive compensation, health insurance, retirement plans, and wellness programs.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h3>Global Impact</h3>
                <p>Your work helps organizations worldwide protect against fraud and manage risk effectively.</p>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Current Openings</h2>
            <p>Find your perfect role and join our growing team</p>
        </div>

        <div class="jobs-container" style="max-width: 1000px; margin: 0 auto;">
            <!-- Engineering Positions -->
            <div class="job-category">
                <h3 class="category-title">
                    <i class="fas fa-code"></i>
                    Engineering & Technology
                </h3>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Senior Software Engineer - Backend</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote / San Francisco, CA</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Build scalable backend systems processing millions of identity verification requests. Work with microservices, cloud infrastructure, and modern data pipelines.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Python</span>
                        <span class="tag">AWS</span>
                        <span class="tag">Microservices</span>
                        <span class="tag">PostgreSQL</span>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Frontend Engineer - React</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote / New York, NY</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Mid-Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Create intuitive, responsive user interfaces for our risk management platform. Join a team focused on exceptional user experience and modern frontend architecture.
                    </p>
                    <div class="job-tags">
                        <span class="tag">React</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Next.js</span>
                        <span class="tag">CSS</span>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>DevOps Engineer</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote / Austin, TX</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Own CI/CD pipelines, infrastructure automation, and platform reliability. Help scale our infrastructure to support millions of daily transactions.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Kubernetes</span>
                        <span class="tag">Docker</span>
                        <span class="tag">Terraform</span>
                        <span class="tag">AWS</span>
                    </div>
                </div>
            </div>

            <!-- Data Science Positions -->
            <div class="job-category">
                <h3 class="category-title">
                    <i class="fas fa-chart-bar"></i>
                    Data Science & Analytics
                </h3>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Data Scientist - Machine Learning</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> San Francisco, CA</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Develop ML models for fraud detection and risk assessment. Work with large datasets and cutting-edge techniques to improve our prediction accuracy.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Python</span>
                        <span class="tag">TensorFlow</span>
                        <span class="tag">ML</span>
                        <span class="tag">Statistics</span>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Data Engineer</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Mid-Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Build and maintain data pipelines, ETL processes, and data warehousing solutions that power our analytics and reporting systems.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Spark</span>
                        <span class="tag">SQL</span>
                        <span class="tag">Airflow</span>
                        <span class="tag">Python</span>
                    </div>
                </div>
            </div>

            <!-- Sales & Business Development -->
            <div class="job-category">
                <h3 class="category-title">
                    <i class="fas fa-handshake"></i>
                    Sales & Business Development
                </h3>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Enterprise Account Executive</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> New York, NY</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Drive new business revenue by selling our risk solutions to enterprise clients. Build relationships with C-level executives and close complex deals.
                    </p>
                    <div class="job-tags">
                        <span class="tag">B2B Sales</span>
                        <span class="tag">Enterprise</span>
                        <span class="tag">SaaS</span>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Customer Success Manager</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Mid Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Ensure client success through proactive engagement, onboarding support, and strategic guidance. Help customers maximize value from our platform.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Customer Success</span>
                        <span class="tag">SaaS</span>
                        <span class="tag">Relationship Management</span>
                    </div>
                </div>
            </div>

            <!-- Product & Design -->
            <div class="job-category">
                <h3 class="category-title">
                    <i class="fas fa-lightbulb"></i>
                    Product & Design
                </h3>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>Product Manager</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> San Francisco, CA</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Define product strategy and roadmap for our risk management solutions. Work cross-functionally to deliver innovative features that delight customers.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Product Strategy</span>
                        <span class="tag">Roadmap</span>
                        <span class="tag">B2B</span>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h4>UX/UI Designer</h4>
                            <div class="job-meta">
                                <span><i class="fas fa-map-marker-alt"></i> Remote</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-briefcase"></i> Mid-Senior Level</span>
                            </div>
                        </div>
                        <a href="<?php echo url('contact'); ?>?inquiry=careers" class="btn btn-primary">Apply Now</a>
                    </div>
                    <p class="job-description">
                        Design beautiful, intuitive interfaces for complex data systems. Conduct user research and create designs that simplify sophisticated workflows.
                    </p>
                    <div class="job-tags">
                        <span class="tag">Figma</span>
                        <span class="tag">UI/UX</span>
                        <span class="tag">Design Systems</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Life at VettlyGlobal</h2>
            <p>Our culture drives everything we do</p>
        </div>

        <div class="culture-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div class="culture-card">
                <div class="culture-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h4>Collaborative Environment</h4>
                <p>Work alongside talented individuals who value teamwork and knowledge sharing.</p>
            </div>

            <div class="culture-card">
                <div class="culture-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Recognition & Rewards</h4>
                <p>We celebrate achievements and recognize outstanding contributions.</p>
            </div>

            <div class="culture-card">
                <div class="culture-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4>Learning & Development</h4>
                <p>Access to training, conferences, certifications, and mentorship programs.</p>
            </div>

            <div class="culture-card">
                <div class="culture-icon">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h4>Diversity & Inclusion</h4>
                <p>We embrace diversity and foster an inclusive workplace for everyone.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Don't See the Right Role?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                We're always looking for talented individuals. Send us your resume and let us know how you can contribute to VettlyGlobal.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane"></i>
                    Submit Your Resume
                </a>
                <a href="<?php echo url('about-us/leadership'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-users"></i>
                    Meet Our Team
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.benefits-grid {
    margin-top: 50px;
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
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.benefit-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: white;
}

.benefit-card h3 {
    font-size: 1.35rem;
    margin-bottom: 15px;
}

.benefit-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.job-category {
    margin-bottom: 50px;
}

.category-title {
    font-size: 1.75rem;
    color: var(--text-primary);
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 3px solid var(--primary-color);
}

.category-title i {
    color: var(--primary-color);
    margin-right: 12px;
}

.job-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-bottom: 25px;
    transition: var(--transition);
}

.job-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-3px);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: start;
    gap: 20px;
    margin-bottom: 15px;
}

.job-header h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: var(--text-primary);
}

.job-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.job-meta span {
    display: flex;
    align-items: center;
    gap: 6px;
}

.job-meta i {
    color: var(--primary-color);
}

.job-description {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.job-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.tag {
    background: var(--bg-light);
    color: var(--primary-color);
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
}

.culture-card {
    text-align: center;
    padding: 30px;
}

.culture-icon {
    width: 80px;
    height: 80px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2.2rem;
    color: var(--primary-color);
}

.culture-card h4 {
    font-size: 1.25rem;
    margin-bottom: 12px;
}

.culture-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

@media (max-width: 768px) {
    .job-header {
        flex-direction: column;
    }

    .job-meta {
        flex-direction: column;
        gap: 8px;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
