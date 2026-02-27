<?php
/**
 * About Us - Inclusion & Belonging Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Inclusion & Belonging - VettlyGlobal';
$meta_description = 'Explore VettlyGlobal\'s commitment to diversity, equity, and inclusion. Building a culture where every voice is heard and every person can thrive.';

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
                <span>Inclusion & Belonging</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Inclusion & Belonging</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Creating a workplace where everyone belongs, thrives, and can bring their authentic selves to work.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Diversity Makes Us Stronger</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                At VettlyGlobal, diversity, equity, and inclusion are not just values—they are fundamental to our success. We believe that diverse perspectives drive innovation, better decision-making, and stronger connections with the communities we serve. Our commitment is to create an environment where every person feels valued, respected, and empowered to contribute their unique talents.
            </p>
        </div>

        <div class="dei-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div class="stat-card">
                <div class="stat-value">48%</div>
                <div class="stat-label">Women in Workforce</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">65%</div>
                <div class="stat-label">Diverse Employees</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">42%</div>
                <div class="stat-label">Women in Leadership</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">35+</div>
                <div class="stat-label">Countries Represented</div>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitment -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our DEI Commitments</h2>
            <p>Building an inclusive culture through action</p>
        </div>

        <div class="commitments-grid">
            <div class="commitment-card">
                <div class="commitment-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-users"></i>
                </div>
                <div class="commitment-content">
                    <h3>Diverse Recruitment & Hiring</h3>
                    <p>
                        We actively recruit from diverse talent pools, partner with organizations supporting underrepresented groups, and ensure our hiring processes are fair and unbiased.
                    </p>
                    <ul class="commitment-features">
                        <li><i class="fas fa-check"></i> Blind resume screening</li>
                        <li><i class="fas fa-check"></i> Diverse interview panels</li>
                        <li><i class="fas fa-check"></i> Partnerships with HBCUs and diverse institutions</li>
                        <li><i class="fas fa-check"></i> Inclusive job descriptions</li>
                        <li><i class="fas fa-check"></i> Bias training for recruiters</li>
                    </ul>
                </div>
            </div>

            <div class="commitment-card">
                <div class="commitment-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="commitment-content">
                    <h3>Career Development & Advancement</h3>
                    <p>
                        We provide equitable access to growth opportunities, mentorship programs, and leadership development to ensure everyone can advance their careers.
                    </p>
                    <ul class="commitment-features">
                        <li><i class="fas fa-check"></i> Mentorship and sponsorship programs</li>
                        <li><i class="fas fa-check"></i> Leadership development for women and minorities</li>
                        <li><i class="fas fa-check"></i> Transparent promotion criteria</li>
                        <li><i class="fas fa-check"></i> Skills training and certifications</li>
                        <li><i class="fas fa-check"></i> Internal mobility opportunities</li>
                    </ul>
                </div>
            </div>

            <div class="commitment-card">
                <div class="commitment-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="commitment-content">
                    <h3>Pay Equity & Fair Compensation</h3>
                    <p>
                        We conduct regular pay equity audits and are committed to equal pay for equal work, regardless of gender, race, or background.
                    </p>
                    <ul class="commitment-features">
                        <li><i class="fas fa-check"></i> Annual pay equity analysis</li>
                        <li><i class="fas fa-check"></i> Transparent salary bands</li>
                        <li><i class="fas fa-check"></i> Proactive gap remediation</li>
                        <li><i class="fas fa-check"></i> Third-party audits</li>
                        <li><i class="fas fa-check"></i> 100% pay equity certified</li>
                    </ul>
                </div>
            </div>

            <div class="commitment-card">
                <div class="commitment-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="commitment-content">
                    <h3>Inclusive Culture & Belonging</h3>
                    <p>
                        We foster a culture where all voices are heard, perspectives are valued, and everyone feels they belong through Employee Resource Groups and inclusive policies.
                    </p>
                    <ul class="commitment-features">
                        <li><i class="fas fa-check"></i> 8 active Employee Resource Groups</li>
                        <li><i class="fas fa-check"></i> Inclusive language guidelines</li>
                        <li><i class="fas fa-check"></i> Flexible work arrangements</li>
                        <li><i class="fas fa-check"></i> Cultural celebrations and awareness events</li>
                        <li><i class="fas fa-check"></i> Anonymous feedback channels</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employee Resource Groups -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Employee Resource Groups</h2>
            <p>Communities supporting connection and belonging</p>
        </div>

        <div class="erg-grid">
            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-venus-mars"></i>
                </div>
                <h3>Women in Tech</h3>
                <p>Advancing women's careers in technology through mentorship, networking, and advocacy for gender equity.</p>
                <div class="erg-stats">
                    <span><strong>450+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-rainbow"></i>
                </div>
                <h3>LGBTQ+ Pride</h3>
                <p>Creating an affirming workplace for LGBTQ+ employees and allies through education and advocacy.</p>
                <div class="erg-stats">
                    <span><strong>320+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <h3>Black Excellence</h3>
                <p>Supporting Black employees through community building, professional development, and cultural celebration.</p>
                <div class="erg-stats">
                    <span><strong>280+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h3>LatinX Unidos</h3>
                <p>Empowering LatinX employees and celebrating Hispanic heritage, culture, and contributions.</p>
                <div class="erg-stats">
                    <span><strong>260+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-yin-yang"></i>
                </div>
                <h3>Asian Alliance</h3>
                <p>Building community among Asian and Pacific Islander employees and promoting cultural awareness.</p>
                <div class="erg-stats">
                    <span><strong>380+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-wheelchair"></i>
                </div>
                <h3>Abilities Network</h3>
                <p>Advocating for accessibility, supporting employees with disabilities, and fostering inclusive design.</p>
                <div class="erg-stats">
                    <span><strong>180+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h3>Veterans Alliance</h3>
                <p>Supporting veterans and military families in their transition to civilian careers and ongoing service.</p>
                <div class="erg-stats">
                    <span><strong>150+</strong> members</span>
                </div>
            </div>

            <div class="erg-card">
                <div class="erg-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Interfaith & Beliefs</h3>
                <p>Honoring diverse religious and spiritual traditions, promoting interfaith dialogue and understanding.</p>
                <div class="erg-stats">
                    <span><strong>220+</strong> members</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inclusive Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Inclusive Benefits & Policies</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Our comprehensive benefits package is designed to support the diverse needs of all employees and their families, promoting work-life balance and overall well-being.
                </p>

                <div class="benefits-list">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <div>
                            <strong>Parental Leave</strong>
                            <p>20 weeks paid leave for all new parents, regardless of gender</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div>
                            <strong>Healthcare for All</strong>
                            <p>Comprehensive medical, dental, vision including coverage for gender-affirming care</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div>
                            <strong>Mental Health Support</strong>
                            <p>Free counseling, therapy sessions, and mental wellness programs</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                        <div>
                            <strong>Flexible Work</strong>
                            <p>Remote work options, flexible schedules, and unlimited PTO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="highlights-box" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 50px; border-radius: 16px; color: white;">
                    <h3 style="color: white; margin-bottom: 30px;">Recognition & Awards</h3>
                    <ul class="awards-list">
                        <li><i class="fas fa-trophy"></i> Best Place to Work for LGBTQ+ Equality (HRC)</li>
                        <li><i class="fas fa-trophy"></i> Top 50 Employers for Women (Forbes)</li>
                        <li><i class="fas fa-trophy"></i> Best Companies for Diversity (Newsweek)</li>
                        <li><i class="fas fa-trophy"></i> Disability Equality Index Leader</li>
                        <li><i class="fas fa-trophy"></i> Military Friendly Employer Gold</li>
                        <li><i class="fas fa-trophy"></i> 100% Pay Equity Certified</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training & Education -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Training & Education</h2>
            <p>Building awareness and skills for inclusive leadership</p>
        </div>

        <div class="training-grid">
            <div class="training-card">
                <div class="training-number">01</div>
                <h3>Unconscious Bias Training</h3>
                <p>
                    Mandatory training for all employees to recognize and mitigate unconscious biases in decision-making, hiring, and daily interactions.
                </p>
            </div>

            <div class="training-card">
                <div class="training-number">02</div>
                <h3>Inclusive Leadership</h3>
                <p>
                    Leadership development program teaching managers how to build inclusive teams, facilitate difficult conversations, and create psychological safety.
                </p>
            </div>

            <div class="training-card">
                <div class="training-number">03</div>
                <h3>Allyship & Advocacy</h3>
                <p>
                    Training employees to be effective allies, speak up against discrimination, and support colleagues from underrepresented groups.
                </p>
            </div>

            <div class="training-card">
                <div class="training-number">04</div>
                <h3>Cultural Competency</h3>
                <p>
                    Regular workshops celebrating diverse cultures, perspectives, and experiences to build understanding and appreciation across differences.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Supplier Diversity -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Supplier Diversity Program</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                Our commitment to diversity extends beyond our workforce to our supply chain. We actively seek partnerships with businesses owned by women, minorities, veterans, LGBTQ+ individuals, and people with disabilities.
            </p>
        </div>

        <div class="supplier-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px; max-width: 900px; margin: 0 auto;">
            <div class="supplier-stat">
                <div class="supplier-value">$45M</div>
                <div class="supplier-label">Spent with Diverse Suppliers</div>
            </div>
            <div class="supplier-stat">
                <div class="supplier-value">200+</div>
                <div class="supplier-label">Diverse Vendor Partners</div>
            </div>
            <div class="supplier-stat">
                <div class="supplier-value">35%</div>
                <div class="supplier-label">Diverse Supplier Spend</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Join Our Inclusive Team</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Be part of a company that values diversity, champions equity, and celebrates what makes you unique.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('about-us/careers'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-briefcase"></i>
                    View Open Positions
                </a>
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact DEI Team
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

.commitments-grid {
    display: grid;
    gap: 40px;
    max-width: 1100px;
    margin: 0 auto;
}

.commitment-card {
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    overflow: hidden;
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 35px;
    padding: 40px;
    transition: var(--transition);
}

.commitment-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.commitment-icon {
    width: 80px;
    height: 80px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    color: white;
    flex-shrink: 0;
}

.commitment-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.commitment-content p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.commitment-features {
    list-style: none;
    padding: 0;
}

.commitment-features li {
    padding: 8px 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 12px;
}

.commitment-features i {
    color: var(--primary-color);
    font-size: 1rem;
}

.erg-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.erg-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.erg-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.erg-icon {
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

.erg-card h3 {
    font-size: 1.3rem;
    margin-bottom: 12px;
}

.erg-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 15px;
}

.erg-stats {
    padding-top: 15px;
    border-top: 2px solid var(--bg-light);
}

.erg-stats strong {
    color: var(--primary-color);
    font-size: 1.2rem;
}

.benefits-list {
    display: grid;
    gap: 25px;
    margin-top: 30px;
}

.benefit-item {
    display: flex;
    gap: 20px;
    align-items: start;
}

.benefit-icon {
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

.benefit-item strong {
    display: block;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.benefit-item p {
    color: var(--text-secondary);
    margin: 0;
}

.awards-list {
    list-style: none;
    padding: 0;
}

.awards-list li {
    padding: 15px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.05rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.awards-list li:last-child {
    border-bottom: none;
}

.awards-list i {
    font-size: 1.3rem;
    opacity: 0.9;
}

.training-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

.training-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.training-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.training-number {
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary-color);
    opacity: 0.2;
    margin-bottom: 15px;
}

.training-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.training-card p {
    color: var(--text-secondary);
    line-height: 1.8;
}

.supplier-stat {
    text-align: center;
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
}

.supplier-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.supplier-label {
    color: var(--text-secondary);
    font-size: 1rem;
}

@media (max-width: 768px) {
    .row {
        grid-template-columns: 1fr !important;
    }

    .commitment-card {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .commitment-icon {
        margin: 0 auto;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
