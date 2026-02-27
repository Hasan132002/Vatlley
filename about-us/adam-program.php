<?php
/**
 * About Us - ADAM Program for Missing Children
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'ADAM Program - VettlyGlobal';
$meta_description = 'Learn about VettlyGlobal\'s ADAM Program - our commitment to helping locate missing children and reunite families through advanced technology and data intelligence.';

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
                <span>ADAM Program</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">ADAM Program for Missing Children</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Using our technology to help bring missing children home and reunite families.
            </p>
        </div>
    </div>
</section>

<!-- Program Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">A Mission That Matters</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                The ADAM Program represents VettlyGlobal's deepest commitment to social responsibility. Named in honor of Adam Walsh, whose tragic story inspired the National Center for Missing & Exploited Children, our program leverages advanced technology, data intelligence, and identity verification capabilities to support law enforcement agencies in locating missing children and reuniting families.
            </p>
        </div>

        <div class="mission-box" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 50px; border-radius: 16px; color: white; margin-top: 50px;">
            <div style="text-align: center; max-width: 700px; margin: 0 auto;">
                <div style="font-size: 2.5rem; margin-bottom: 20px;">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px;">Every Child Deserves to Come Home</h3>
                <p style="font-size: 1.05rem; line-height: 1.8; color: white;">
                    Since 2018, the ADAM Program has assisted in recovering over 500 missing children and has provided critical support to more than 1,000 investigations. Our services are provided completely free of charge to law enforcement agencies and qualified nonprofit organizations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>How the ADAM Program Works</h2>
            <p>Technology-driven support for child recovery efforts</p>
        </div>

        <div class="process-grid">
            <div class="process-step">
                <div class="step-number">01</div>
                <div class="step-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Rapid Response Activation</h3>
                <p>
                    Law enforcement contacts our 24/7 ADAM hotline. Our dedicated team immediately mobilizes resources and assigns case specialists within minutes of notification.
                </p>
            </div>

            <div class="process-step">
                <div class="step-number">02</div>
                <div class="step-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Data Intelligence Analysis</h3>
                <p>
                    We conduct comprehensive database searches across multiple data sources, analyzing billions of records to identify potential leads, connections, and location intelligence.
                </p>
            </div>

            <div class="process-step">
                <div class="step-number">03</div>
                <div class="step-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <h3>Identity Verification Support</h3>
                <p>
                    Advanced biometric and identity verification technology helps confirm identities, validate leads, and eliminate false positives to focus investigative efforts.
                </p>
            </div>

            <div class="process-step">
                <div class="step-number">04</div>
                <div class="step-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>Location Intelligence</h3>
                <p>
                    Our geospatial analysis tools provide location tracking capabilities, analyze movement patterns, and identify potential whereabouts to guide search efforts.
                </p>
            </div>

            <div class="process-step">
                <div class="step-number">05</div>
                <div class="step-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Network Analysis</h3>
                <p>
                    We analyze social networks, relationships, and connections to identify individuals of interest, potential accomplices, or helpful contacts in the investigation.
                </p>
            </div>

            <div class="process-step">
                <div class="step-number">06</div>
                <div class="step-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Ongoing Support</h3>
                <p>
                    Continuous case monitoring, regular updates to investigators, and sustained support until the child is recovered or the case is resolved.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Technology -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Technology Deployed for Child Recovery</h2>
            <p>Advanced tools dedicated to finding missing children</p>
        </div>

        <div class="technology-grid">
            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Multi-Source Data Search</h3>
                <p>
                    Access to hundreds of data sources including public records, social media intelligence, financial data, and proprietary databases to generate leads.
                </p>
            </div>

            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Facial Recognition Technology</h3>
                <p>
                    AI-powered facial recognition helps identify children from photos and videos, age-progressed images, and potential sightings.
                </p>
            </div>

            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Link Analysis</h3>
                <p>
                    Visualize complex relationships, track connections, and identify patterns that may lead to breakthrough discoveries in investigations.
                </p>
            </div>

            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-bell"></i>
                </div>
                <h3>Real-Time Alerts</h3>
                <p>
                    Automated monitoring and instant notifications when relevant information surfaces, enabling rapid response to new leads.
                </p>
            </div>

            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Secure Case Management</h3>
                <p>
                    Encrypted, CJIS-compliant platform for secure collaboration between law enforcement agencies while protecting sensitive information.
                </p>
            </div>

            <div class="tech-feature">
                <div class="tech-feature-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Predictive Analytics</h3>
                <p>
                    Machine learning algorithms analyze case data to predict likely locations, identify high-probability leads, and optimize search strategies.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Impact & Results -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Impact</h2>
            <p>Lives changed through technology and dedication</p>
        </div>

        <div class="impact-stats-grid">
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-child"></i>
                </div>
                <div class="impact-number">500+</div>
                <div class="impact-label">Children Recovered</div>
                <p>Successfully assisted in recovering and reuniting children with their families</p>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <div class="impact-number">1,000+</div>
                <div class="impact-label">Cases Supported</div>
                <p>Provided data intelligence and technical support to active investigations</p>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="impact-number">200+</div>
                <div class="impact-label">Law Enforcement Partners</div>
                <p>Collaborating agencies across federal, state, and local jurisdictions</p>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="impact-number">24/7</div>
                <div class="impact-label">Availability</div>
                <p>Round-the-clock support team ready to respond to emergency cases</p>
            </div>
        </div>

        <div class="testimonial-box" style="max-width: 900px; margin: 60px auto 0; background: white; padding: 50px; border-radius: 12px; box-shadow: var(--shadow-lg);">
            <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px; text-align: center;">
                <i class="fas fa-quote-left"></i>
            </div>
            <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-secondary); text-align: center; font-style: italic; margin-bottom: 25px;">
                "The ADAM Program's technology and rapid response were instrumental in recovering our missing teenager. The data intelligence they provided gave us leads we wouldn't have found otherwise. Within 48 hours, we brought her home safely."
            </p>
            <div style="text-align: center;">
                <strong>Detective Sarah Martinez</strong>
                <div style="color: var(--text-secondary);">Missing Persons Unit, Metropolitan Police Department</div>
            </div>
        </div>
    </div>
</section>

<!-- Partnerships -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Partners</h2>
            <p>Collaborating with organizations dedicated to child safety</p>
        </div>

        <div class="partners-grid">
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-landmark"></i>
                </div>
                <h4>National Center for Missing & Exploited Children</h4>
                <p>Strategic partnership providing technology support and data intelligence</p>
            </div>

            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>FBI Violent Crimes Against Children</h4>
                <p>Collaborative support for federal investigations and task forces</p>
            </div>

            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h4>U.S. Marshals Service</h4>
                <p>Technical assistance for fugitive investigations involving endangered children</p>
            </div>

            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h4>Amber Alert Network</h4>
                <p>Enhanced distribution and analytical support for time-critical alerts</p>
            </div>

            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h4>International Centre for Missing Children</h4>
                <p>Cross-border case support and global data intelligence sharing</p>
            </div>

            <div class="partner-card">
                <div class="partner-logo">
                    <i class="fas fa-home"></i>
                </div>
                <h4>National Runaway Safeline</h4>
                <p>Support for runaway and homeless youth recovery efforts</p>
            </div>
        </div>
    </div>
</section>

<!-- Get Involved -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Get Involved</h2>
            <p>Support our mission to bring children home</p>
        </div>

        <div class="involvement-grid">
            <div class="involvement-card">
                <div class="involvement-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>For Law Enforcement</h3>
                <p>
                    If you're a law enforcement professional working on a missing child case, contact our ADAM Program hotline for immediate assistance.
                </p>
                <a href="tel:1-800-ADAM-HELP" class="btn btn-primary">
                    <i class="fas fa-phone"></i> Call ADAM Hotline
                </a>
            </div>

            <div class="involvement-card">
                <div class="involvement-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>For Organizations</h3>
                <p>
                    Nonprofits and organizations supporting missing children can apply for partnership and access to our technology resources.
                </p>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-handshake"></i> Apply for Partnership
                </a>
            </div>

            <div class="involvement-card">
                <div class="involvement-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Spread Awareness</h3>
                <p>
                    Help us raise awareness about missing children issues, share resources, and educate communities about child safety.
                </p>
                <a href="<?php echo url('resources'); ?>" class="btn btn-primary">
                    <i class="fas fa-book"></i> Access Resources
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Learn More About the ADAM Program</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                For more information about our child recovery technology, partnership opportunities, or to request assistance with a case, contact our dedicated ADAM Program team.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact ADAM Program
                </a>
                <a href="<?php echo url('about-us/corporate-responsibility'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-heart"></i>
                    Our Social Impact
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.mission-box {
    box-shadow: var(--shadow-xl);
}

.process-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.process-step {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    position: relative;
    transition: var(--transition);
}

.process-step:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.step-number {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    opacity: 0.2;
}

.step-icon {
    width: 65px;
    height: 65px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 1.5rem;
    color: white;
}

.process-step h3 {
    font-size: 1.25rem;
    margin-bottom: 15px;
}

.process-step p {
    color: var(--text-secondary);
    line-height: 1.8;
}

.technology-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.tech-feature {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.tech-feature:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.tech-feature-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: white;
}

.tech-feature h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.tech-feature p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.impact-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 35px;
    max-width: 1100px;
    margin: 0 auto;
}

.impact-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.impact-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.impact-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: white;
}

.impact-number {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.impact-label {
    font-size: 1.05rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--text-primary);
}

.impact-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    font-size: 0.95rem;
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

.partner-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.partner-logo {
    width: 60px;
    height: 60px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: var(--primary-color);
}

.partner-card h4 {
    font-size: 1.05rem;
    margin-bottom: 12px;
}

.partner-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    font-size: 0.95rem;
}

.involvement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    max-width: 1100px;
    margin: 0 auto;
}

.involvement-card {
    background: white;
    padding: 45px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.involvement-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.involvement-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 1.5rem;
    color: white;
}

.involvement-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.involvement-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 25px;
}

.involvement-card .btn {
    width: 100%;
}

@media (max-width: 768px) {
    .mission-box {
        padding: 40px 30px;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
