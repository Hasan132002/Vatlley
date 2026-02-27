<?php
/**
 * About Us - Industry Experts & Thought Leaders Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Industry Experts - VettlyGlobal';
$meta_description = 'Meet VettlyGlobal\'s industry experts and thought leaders. Leading voices in risk management, fraud detection, identity verification, and data intelligence.';

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
                <span>Industry Experts</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Industry Experts & Thought Leaders</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Leading voices shaping the future of risk management, fraud prevention, and data intelligence.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Expertise That Drives Innovation</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal's team includes some of the industry's most respected experts in risk management, cybersecurity, fraud detection, identity verification, and data science. Our thought leaders regularly speak at major industry conferences, contribute to leading publications, and collaborate with regulatory bodies to advance best practices.
            </p>
        </div>

        <div class="expertise-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-value">150+</div>
                <div class="stat-label">Industry Publications</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">75+</div>
                <div class="stat-label">Conference Presentations</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">20+</div>
                <div class="stat-label">Industry Awards</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">500+</div>
                <div class="stat-label">Years Combined Experience</div>
            </div>
        </div>
    </div>
</section>

<!-- Expert Profiles -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Meet Our Experts</h2>
            <p>Industry-recognized specialists in their fields</p>
        </div>

        <div class="experts-grid">
            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="expert-content">
                    <h3>Dr. Rachel Morrison</h3>
                    <div class="expert-title">Chief Risk Officer & VP of Research</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Risk Management</span>
                        <span class="specialty-badge">Regulatory Compliance</span>
                    </div>
                    <p>
                        With over 20 years in financial services risk management, Dr. Morrison leads VettlyGlobal's risk strategy and research initiatives. Former advisor to the Federal Reserve, she holds a Ph.D. in Economics from MIT and has published extensively on systemic risk and financial fraud.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-award"></i> Top 10 Risk Management Leaders (2025)</div>
                        <div class="highlight"><i class="fas fa-book"></i> Author of 3 industry textbooks</div>
                        <div class="highlight"><i class="fas fa-graduation-cap"></i> Ph.D. Economics, MIT</div>
                    </div>
                </div>
            </div>

            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="expert-content">
                    <h3>Marcus Chen</h3>
                    <div class="expert-title">Chief Security Officer</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Cybersecurity</span>
                        <span class="specialty-badge">Data Protection</span>
                    </div>
                    <p>
                        Marcus brings 18 years of cybersecurity expertise from Fortune 500 companies and government agencies. A Certified Information Security Systems Professional (CISSP), he specializes in threat intelligence, security architecture, and incident response.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-certificate"></i> CISSP, CISM, CEH Certified</div>
                        <div class="highlight"><i class="fas fa-microphone"></i> 50+ conference keynotes</div>
                        <div class="highlight"><i class="fas fa-shield-alt"></i> Former NSA Consultant</div>
                    </div>
                </div>
            </div>

            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-user-check"></i>
                </div>
                <div class="expert-content">
                    <h3>Jennifer Patel</h3>
                    <div class="expert-title">VP of Identity Solutions</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Identity Verification</span>
                        <span class="specialty-badge">Biometrics</span>
                    </div>
                    <p>
                        Jennifer is a pioneer in digital identity and biometric authentication with 15 years of experience. She holds 12 patents in identity verification technology and serves on the board of the International Association for Identity Verification.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-lightbulb"></i> 12 patents in identity tech</div>
                        <div class="highlight"><i class="fas fa-trophy"></i> Identity Innovation Award 2024</div>
                        <div class="highlight"><i class="fas fa-users"></i> IAIV Board Member</div>
                    </div>
                </div>
            </div>

            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="expert-content">
                    <h3>Dr. Ahmed Hassan</h3>
                    <div class="expert-title">Chief Data Scientist</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Machine Learning</span>
                        <span class="specialty-badge">AI Ethics</span>
                    </div>
                    <p>
                        Dr. Hassan leads VettlyGlobal's AI and machine learning research. With a Ph.D. in Computer Science from Stanford, he specializes in fraud detection algorithms, neural networks, and responsible AI development. Published in top-tier AI journals.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-graduation-cap"></i> Ph.D. Computer Science, Stanford</div>
                        <div class="highlight"><i class="fas fa-file-alt"></i> 40+ peer-reviewed papers</div>
                        <div class="highlight"><i class="fas fa-award"></i> AI Excellence Award 2025</div>
                    </div>
                </div>
            </div>

            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-search-dollar"></i>
                </div>
                <div class="expert-content">
                    <h3>Sarah Thompson</h3>
                    <div class="expert-title">Director of Fraud Prevention</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Fraud Detection</span>
                        <span class="specialty-badge">Financial Crime</span>
                    </div>
                    <p>
                        Sarah is a Certified Fraud Examiner with 22 years of experience in fraud prevention and investigation. She previously led fraud operations at major financial institutions and has helped organizations prevent over $2 billion in fraud losses.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-certificate"></i> Certified Fraud Examiner (CFE)</div>
                        <div class="highlight"><i class="fas fa-dollar-sign"></i> $2B+ fraud prevented</div>
                        <div class="highlight"><i class="fas fa-award"></i> Fraud Fighter of the Year 2024</div>
                    </div>
                </div>
            </div>

            <div class="expert-card">
                <div class="expert-image" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="expert-content">
                    <h3>Michael Rodriguez</h3>
                    <div class="expert-title">Chief Compliance Officer</div>
                    <div class="expert-specialties">
                        <span class="specialty-badge">Compliance</span>
                        <span class="specialty-badge">Privacy Law</span>
                    </div>
                    <p>
                        Michael brings 16 years of legal and compliance expertise in data privacy, GDPR, CCPA, and financial regulations. J.D. from Harvard Law, he advises on regulatory strategy and serves as an expert witness in data privacy cases.
                    </p>
                    <div class="expert-highlights">
                        <div class="highlight"><i class="fas fa-graduation-cap"></i> J.D., Harvard Law School</div>
                        <div class="highlight"><i class="fas fa-gavel"></i> Expert witness testimony</div>
                        <div class="highlight"><i class="fas fa-globe"></i> Global privacy expert</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Areas of Expertise -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Areas of Expertise</h2>
            <p>Deep domain knowledge across multiple specializations</p>
        </div>

        <div class="expertise-areas">
            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Risk Management & Mitigation</h3>
                <p>Strategic risk assessment, enterprise risk management, credit risk, operational risk, and regulatory compliance frameworks.</p>
            </div>

            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-user-secret"></i>
                </div>
                <h3>Fraud Detection & Prevention</h3>
                <p>Payment fraud, identity theft, synthetic fraud, account takeover, transaction monitoring, and fraud analytics.</p>
            </div>

            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <h3>Identity Verification & Authentication</h3>
                <p>Digital identity, biometric authentication, document verification, KYC/AML compliance, and identity proofing.</p>
            </div>

            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Artificial Intelligence & Machine Learning</h3>
                <p>Predictive modeling, deep learning, neural networks, anomaly detection, natural language processing, and AI ethics.</p>
            </div>

            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Cybersecurity & Data Protection</h3>
                <p>Information security, threat intelligence, security architecture, penetration testing, incident response, and encryption.</p>
            </div>

            <div class="expertise-area">
                <div class="area-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Data Science & Analytics</h3>
                <p>Big data architecture, statistical modeling, data mining, predictive analytics, visualization, and business intelligence.</p>
            </div>
        </div>
    </div>
</section>

<!-- Thought Leadership -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Thought Leadership</h2>
            <p>Sharing knowledge and insights with the industry</p>
        </div>

        <div class="thought-leadership-grid">
            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3>Industry Publications</h3>
                <p>
                    Our experts regularly contribute to leading industry publications including Risk Management Magazine, Fraud Magazine, Security Today, and Data Science Journal.
                </p>
                <div class="tl-stat">150+ articles published</div>
            </div>

            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-microphone-alt"></i>
                </div>
                <h3>Conference Speaking</h3>
                <p>
                    Keynote presentations and panel discussions at major conferences including RSA Conference, ACFE Global Conference, Money20/20, and AI Summit.
                </p>
                <div class="tl-stat">75+ speaking engagements</div>
            </div>

            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-podcast"></i>
                </div>
                <h3>Webinars & Podcasts</h3>
                <p>
                    Host the "Risk Intelligence Podcast" and conduct monthly webinars on emerging threats, regulatory changes, and best practices in risk management.
                </p>
                <div class="tl-stat">50+ episodes published</div>
            </div>

            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Research & Whitepapers</h3>
                <p>
                    Publish original research, industry reports, and whitepapers on fraud trends, AI applications in risk management, and emerging technologies.
                </p>
                <div class="tl-stat">25+ research papers</div>
            </div>

            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Training & Education</h3>
                <p>
                    Develop certification programs and training courses for industry professionals. Partner with universities on curriculum development.
                </p>
                <div class="tl-stat">10,000+ students trained</div>
            </div>

            <div class="tl-card">
                <div class="tl-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Industry Collaboration</h3>
                <p>
                    Active participation in industry working groups, standards committees, and regulatory advisory boards to shape best practices and policy.
                </p>
                <div class="tl-stat">15+ board memberships</div>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advisory Board</h2>
            <p>Distinguished advisors guiding our strategic direction</p>
        </div>

        <div class="advisory-grid">
            <div class="advisor-card">
                <h4>Dr. Elizabeth Barnes</h4>
                <div class="advisor-role">Former Federal Reserve Board Member</div>
                <p>Economic policy expert with 30+ years in financial regulation and monetary policy.</p>
            </div>

            <div class="advisor-card">
                <h4>General Robert Mitchell (Ret.)</h4>
                <div class="advisor-role">Former Director, NSA Cybersecurity</div>
                <p>Leading authority on national security and cyber defense strategies.</p>
            </div>

            <div class="advisor-card">
                <h4>Dr. Lisa Wong</h4>
                <div class="advisor-role">Professor of Computer Science, MIT</div>
                <p>AI researcher specializing in machine learning ethics and explainable AI.</p>
            </div>

            <div class="advisor-card">
                <h4>James Sullivan</h4>
                <div class="advisor-role">Former FBI Fraud Division Chief</div>
                <p>Expert in financial crimes investigation and fraud prevention strategies.</p>
            </div>

            <div class="advisor-card">
                <h4>Maria Garcia</h4>
                <div class="advisor-role">Former GDPR Task Force Lead, EU</div>
                <p>Data privacy and international regulatory compliance specialist.</p>
            </div>

            <div class="advisor-card">
                <h4>Dr. Raj Patel</h4>
                <div class="advisor-role">Chief Data Scientist (Ret.), Google</div>
                <p>Pioneer in big data analytics and distributed computing systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Connect With Our Experts</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Interested in speaking opportunities, collaborations, or consulting services? Get in touch with our team of industry experts.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact Our Experts
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-book"></i>
                    View Publications
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

.experts-grid {
    display: grid;
    gap: 40px;
    max-width: 1100px;
    margin: 0 auto;
}

.expert-card {
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

.expert-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.expert-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.5rem;
    color: white;
    flex-shrink: 0;
}

.expert-content h3 {
    font-size: 1.6rem;
    margin-bottom: 8px;
}

.expert-title {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 1.05rem;
    margin-bottom: 15px;
}

.expert-specialties {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 15px;
}

.specialty-badge {
    background: var(--bg-light);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-primary);
}

.expert-content p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.expert-highlights {
    display: grid;
    gap: 10px;
}

.highlight {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.highlight i {
    color: var(--primary-color);
    font-size: 1rem;
}

.expertise-areas {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.expertise-area {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.expertise-area:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.area-icon {
    width: 80px;
    height: 80px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 2.5rem;
    color: var(--primary-color);
}

.expertise-area h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.expertise-area p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.thought-leadership-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.tl-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.tl-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.tl-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: white;
}

.tl-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.tl-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 20px;
}

.tl-stat {
    font-weight: 700;
    color: var(--primary-color);
    font-size: 1.1rem;
    padding-top: 15px;
    border-top: 2px solid var(--bg-light);
}

.advisory-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

.advisor-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.advisor-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.advisor-card h4 {
    font-size: 1.3rem;
    margin-bottom: 8px;
}

.advisor-role {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.95rem;
    margin-bottom: 12px;
}

.advisor-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    font-size: 0.95rem;
}

@media (max-width: 768px) {
    .expert-card {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .expert-image {
        margin: 0 auto;
    }

    .expert-specialties {
        justify-content: center;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
