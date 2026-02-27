<?php
/**
 * About Us - Corporate Responsibility Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Corporate Responsibility - VettlyGlobal';
$meta_description = 'Discover VettlyGlobal\'s commitment to corporate social responsibility, community programs, sustainability initiatives, and making a positive impact on society.';

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
                <span>Corporate Responsibility</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Corporate Responsibility</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Building a better future through responsible business practices, community engagement, and environmental stewardship.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Our Commitment to Responsible Business</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                At VettlyGlobal, corporate responsibility is at the heart of everything we do. We believe that business success goes hand-in-hand with positive social impact, environmental sustainability, and ethical governance. Our commitment extends beyond our products and services to the communities we serve and the world we share.
            </p>
        </div>
    </div>
</section>

<!-- Core Pillars -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Responsibility Pillars</h2>
            <p>Four foundational areas guiding our social impact</p>
        </div>

        <div class="pillars-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
            <div class="pillar-card">
                <div class="pillar-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Community Impact</h3>
                <p>
                    Investing in local communities through education programs, volunteer initiatives, and strategic partnerships with nonprofit organizations to create lasting positive change.
                </p>
                <ul class="pillar-features">
                    <li><i class="fas fa-check"></i> Youth education programs</li>
                    <li><i class="fas fa-check"></i> Employee volunteer matching</li>
                    <li><i class="fas fa-check"></i> Nonprofit partnerships</li>
                    <li><i class="fas fa-check"></i> Local community grants</li>
                </ul>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Environmental Sustainability</h3>
                <p>
                    Committed to reducing our environmental footprint through sustainable operations, renewable energy adoption, and carbon neutrality initiatives.
                </p>
                <ul class="pillar-features">
                    <li><i class="fas fa-check"></i> Carbon neutral operations</li>
                    <li><i class="fas fa-check"></i> Renewable energy usage</li>
                    <li><i class="fas fa-check"></i> Waste reduction programs</li>
                    <li><i class="fas fa-check"></i> Green building practices</li>
                </ul>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Ethical Governance</h3>
                <p>
                    Maintaining the highest standards of business ethics, transparency, and accountability in all our operations and stakeholder relationships.
                </p>
                <ul class="pillar-features">
                    <li><i class="fas fa-check"></i> Transparent reporting</li>
                    <li><i class="fas fa-check"></i> Anti-corruption policies</li>
                    <li><i class="fas fa-check"></i> Data privacy protection</li>
                    <li><i class="fas fa-check"></i> Ethical AI principles</li>
                </ul>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Social Equity</h3>
                <p>
                    Promoting diversity, equity, and inclusion both within our organization and through our technology solutions that serve diverse communities.
                </p>
                <ul class="pillar-features">
                    <li><i class="fas fa-check"></i> Diverse supplier program</li>
                    <li><i class="fas fa-check"></i> Fair hiring practices</li>
                    <li><i class="fas fa-check"></i> Pay equity commitment</li>
                    <li><i class="fas fa-check"></i> Inclusive product design</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Community Programs -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Community Programs</h2>
            <p>Making a difference through active engagement</p>
        </div>

        <div class="programs-list">
            <div class="program-item">
                <div class="program-content">
                    <div class="program-badge">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h3>Education & STEM Initiatives</h3>
                        <p>
                            We partner with schools and educational institutions to provide technology education, scholarships, and mentorship programs. Our STEM initiative has reached over 10,000 students, providing hands-on learning experiences in data science, cybersecurity, and software development.
                        </p>
                        <div class="program-stats">
                            <div class="stat">
                                <strong>10,000+</strong>
                                <span>Students Reached</span>
                            </div>
                            <div class="stat">
                                <strong>$2M</strong>
                                <span>Scholarships Awarded</span>
                            </div>
                            <div class="stat">
                                <strong>50+</strong>
                                <span>School Partnerships</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="program-item">
                <div class="program-content">
                    <div class="program-badge">
                        <i class="fas fa-child"></i>
                    </div>
                    <div>
                        <h3>ADAM Program for Missing Children</h3>
                        <p>
                            Our flagship social responsibility program dedicated to helping locate missing children and reuniting families. Through advanced technology and partnerships with law enforcement agencies, we provide critical identity verification and data analysis services at no cost to support recovery efforts.
                        </p>
                        <a href="<?php echo url('about-us/adam-program'); ?>" class="btn btn-primary" style="margin-top: 15px;">
                            <i class="fas fa-arrow-right"></i> Learn More About ADAM Program
                        </a>
                    </div>
                </div>
            </div>

            <div class="program-item">
                <div class="program-content">
                    <div class="program-badge">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h3>Employee Volunteer Program</h3>
                        <p>
                            Every VettlyGlobal employee receives 40 hours of paid volunteer time annually. We match employee donations dollar-for-dollar up to $5,000 per employee. In 2025, our team contributed over 15,000 volunteer hours to causes they're passionate about.
                        </p>
                        <div class="program-stats">
                            <div class="stat">
                                <strong>15,000+</strong>
                                <span>Volunteer Hours</span>
                            </div>
                            <div class="stat">
                                <strong>$500K</strong>
                                <span>Donation Matching</span>
                            </div>
                            <div class="stat">
                                <strong>200+</strong>
                                <span>Organizations Supported</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="program-item">
                <div class="program-content">
                    <div class="program-badge">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div>
                        <h3>Technology for Good</h3>
                        <p>
                            We provide free or discounted services to qualified nonprofits, NGOs, and social enterprises. Our Technology for Good program has helped over 500 organizations leverage data intelligence to amplify their social impact.
                        </p>
                        <div class="program-stats">
                            <div class="stat">
                                <strong>500+</strong>
                                <span>Nonprofits Served</span>
                            </div>
                            <div class="stat">
                                <strong>$10M</strong>
                                <span>In-Kind Donations</span>
                            </div>
                            <div class="stat">
                                <strong>95%</strong>
                                <span>Client Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environmental Sustainability -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Environmental Commitment</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    We're committed to achieving carbon neutrality by 2027 and have implemented comprehensive environmental initiatives across all our operations.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Our data centers are powered by 100% renewable energy, and we've reduced our carbon footprint by 45% since 2020 through energy efficiency improvements and sustainable practices.
                </p>

                <div class="environmental-goals">
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div>
                            <strong>100% Renewable Energy</strong>
                            <p>All data centers powered by renewable sources</p>
                        </div>
                    </div>
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <div>
                            <strong>Zero Waste to Landfill</strong>
                            <p>90% waste diversion rate achieved in 2025</p>
                        </div>
                    </div>
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div>
                            <strong>Carbon Neutral by 2027</strong>
                            <p>Committed to net-zero carbon emissions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="impact-box" style="background: white; padding: 50px; border-radius: 16px; box-shadow: var(--shadow-lg);">
                    <h3 style="margin-bottom: 30px; text-align: center;">2025 Environmental Impact</h3>
                    <div class="impact-stats">
                        <div class="impact-stat">
                            <div class="impact-value" style="color: var(--primary-color);">45%</div>
                            <div class="impact-label">Carbon Reduction</div>
                        </div>
                        <div class="impact-stat">
                            <div class="impact-value" style="color: var(--primary-color);">100%</div>
                            <div class="impact-label">Renewable Energy</div>
                        </div>
                        <div class="impact-stat">
                            <div class="impact-value" style="color: var(--primary-color);">2.5M</div>
                            <div class="impact-label">kWh Saved</div>
                        </div>
                        <div class="impact-stat">
                            <div class="impact-value" style="color: var(--primary-color);">90%</div>
                            <div class="impact-label">Waste Diverted</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Responsible AI & Ethics -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Responsible AI & Data Ethics</h2>
            <p>Building trustworthy technology with integrity</p>
        </div>

        <div class="ethics-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 35px;">
            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>Privacy by Design</h3>
                <p>
                    Privacy protection is built into every product from the ground up. We collect only essential data and give users full control over their information.
                </p>
            </div>

            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Transparency</h3>
                <p>
                    We provide clear explanations of how our AI systems work, what data we use, and how decisions are made to build trust with our customers.
                </p>
            </div>

            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Fairness & Bias Prevention</h3>
                <p>
                    Our AI models are regularly audited for bias. We use diverse training data and employ fairness metrics to ensure equitable outcomes.
                </p>
            </div>

            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Data Security</h3>
                <p>
                    Bank-grade encryption, multi-factor authentication, and continuous security monitoring protect sensitive data from unauthorized access.
                </p>
            </div>

            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Accountability</h3>
                <p>
                    We maintain clear lines of responsibility for AI system outcomes and provide mechanisms for appeal and recourse when needed.
                </p>
            </div>

            <div class="ethics-card">
                <div class="ethics-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Human Oversight</h3>
                <p>
                    Critical decisions always involve human review. Our technology augments human judgment rather than replacing it entirely.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Recognition & Awards -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Recognition & Certifications</h2>
            <p>Industry recognition for our commitment to responsibility</p>
        </div>

        <div class="awards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">
            <div class="award-card">
                <div class="award-badge">
                    <i class="fas fa-award"></i>
                </div>
                <h4>Best Corporate Citizen</h4>
                <p>Business Ethics Magazine 2025</p>
            </div>

            <div class="award-card">
                <div class="award-badge">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Sustainability Leader</h4>
                <p>Tech Industry Awards 2025</p>
            </div>

            <div class="award-card">
                <div class="award-badge">
                    <i class="fas fa-certificate"></i>
                </div>
                <h4>B Corp Certified</h4>
                <p>Meeting highest social and environmental standards</p>
            </div>

            <div class="award-card">
                <div class="award-badge">
                    <i class="fas fa-medal"></i>
                </div>
                <h4>Top Workplace for Good</h4>
                <p>Fortune Magazine 2025</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Join Us in Making an Impact</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Learn more about our corporate responsibility initiatives and how we're building a more sustainable, equitable future.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('about-us/careers'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-briefcase"></i>
                    Join Our Team
                </a>
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Partner With Us
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.pillars-grid {
    max-width: 1200px;
    margin: 0 auto;
}

.pillar-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.pillar-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.pillar-icon {
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

.pillar-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.pillar-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 25px;
}

.pillar-features {
    list-style: none;
    padding: 0;
}

.pillar-features li {
    padding: 8px 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 12px;
}

.pillar-features i {
    color: var(--primary-color);
    font-size: 1rem;
}

.programs-list {
    max-width: 1000px;
    margin: 0 auto;
    display: grid;
    gap: 40px;
}

.program-item {
    background: white;
    padding: 50px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}

.program-content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 30px;
}

.program-badge {
    width: 70px;
    height: 70px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    flex-shrink: 0;
}

.program-item h3 {
    font-size: 1.6rem;
    margin-bottom: 15px;
}

.program-item p {
    color: var(--text-secondary);
    line-height: 1.8;
    font-size: 1.05rem;
    margin-bottom: 20px;
}

.program-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.program-stats .stat {
    text-align: center;
}

.program-stats .stat strong {
    display: block;
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.program-stats .stat span {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.environmental-goals {
    margin-top: 30px;
    display: grid;
    gap: 25px;
}

.goal-item {
    display: flex;
    gap: 20px;
    align-items: start;
}

.goal-icon {
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

.goal-item strong {
    display: block;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.goal-item p {
    color: var(--text-secondary);
    margin: 0;
}

.impact-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.impact-stat {
    text-align: center;
}

.impact-value {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.impact-label {
    color: var(--text-secondary);
    font-size: 1rem;
}

.ethics-grid {
    max-width: 1100px;
    margin: 0 auto;
}

.ethics-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.ethics-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.ethics-icon {
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

.ethics-card h3 {
    font-size: 1.25rem;
    margin-bottom: 15px;
}

.ethics-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.awards-grid {
}

.award-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.award-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.award-badge {
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

.award-card h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.award-card p {
    color: var(--text-secondary);
    font-size: 0.95rem;
}

@media (max-width: 768px) {
    .row {
        grid-template-columns: 1fr !important;
    }

    .program-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .program-badge {
        margin: 0 auto;
    }

    .impact-stats {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
