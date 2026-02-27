<?php
/**
 * Partnerships - Government Technology Partnerships
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Government Partnerships - VettlyGlobal';
$meta_description = 'VettlyGlobal\'s government technology partnerships. Providing secure, compliant risk management and identity verification solutions for public sector organizations.';

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
                <span>Government</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Government Technology Partnerships</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Trusted partner to federal, state, and local government agencies delivering secure, compliant risk solutions.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Serving the Public Sector</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal is proud to serve government agencies at all levels with mission-critical identity verification, fraud detection, and risk management solutions. Our government-grade security, compliance certifications, and deep understanding of public sector requirements make us a trusted technology partner for agencies protecting citizens and national interests.
            </p>
        </div>

        <div class="gov-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="stat-value">50+</div>
                <div class="stat-label">Federal Agencies</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-flag-usa"></i>
                </div>
                <div class="stat-value">35</div>
                <div class="stat-label">State Governments</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-city"></i>
                </div>
                <div class="stat-value">200+</div>
                <div class="stat-label">Local Agencies</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="stat-value">100%</div>
                <div class="stat-label">FedRAMP Compliance</div>
            </div>
        </div>
    </div>
</section>

<!-- Government Solutions -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Government Solutions</h2>
            <p>Purpose-built for public sector missions</p>
        </div>

        <div class="solutions-grid">
            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>Citizen Identity Verification</h3>
                <p>
                    Verify citizen identities for benefits programs, licensing, permits, and government services. Prevent identity fraud while ensuring legitimate citizens receive timely access to services.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Multi-factor authentication</li>
                    <li><i class="fas fa-check"></i> Document verification</li>
                    <li><i class="fas fa-check"></i> Biometric matching</li>
                    <li><i class="fas fa-check"></i> Real-time validation</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Benefits Fraud Prevention</h3>
                <p>
                    Protect government benefits programs from fraud, waste, and abuse. Detect synthetic identities, duplicate applications, and improper payments before funds are distributed.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Duplicate detection</li>
                    <li><i class="fas fa-check"></i> Synthetic ID identification</li>
                    <li><i class="fas fa-check"></i> Cross-program matching</li>
                    <li><i class="fas fa-check"></i> Eligibility verification</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Contractor & Vendor Screening</h3>
                <p>
                    Comprehensive background checks and ongoing monitoring for government contractors, vendors, and service providers. Ensure integrity and reduce supply chain risks.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Criminal background checks</li>
                    <li><i class="fas fa-check"></i> Financial risk assessment</li>
                    <li><i class="fas fa-check"></i> Sanctions screening</li>
                    <li><i class="fas fa-check"></i> Continuous monitoring</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-id-badge"></i>
                </div>
                <h3>Employee & Clearance Verification</h3>
                <p>
                    Support security clearance processes, employee background investigations, and insider threat programs with comprehensive identity and risk intelligence.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Employment verification</li>
                    <li><i class="fas fa-check"></i> Education validation</li>
                    <li><i class="fas fa-check"></i> Credit & financial checks</li>
                    <li><i class="fas fa-check"></i> International coverage</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3>Emergency Response & Disaster Relief</h3>
                <p>
                    Rapidly verify identities and prevent fraud during emergency response and disaster relief operations when timely assistance is critical.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Rapid verification</li>
                    <li><i class="fas fa-check"></i> Duplicate prevention</li>
                    <li><i class="fas fa-check"></i> 24/7 availability</li>
                    <li><i class="fas fa-check"></i> Scalable capacity</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Law Enforcement Intelligence</h3>
                <p>
                    Advanced data intelligence and investigation support for law enforcement agencies. CJIS-compliant tools for criminal investigations and public safety missions.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Criminal record access</li>
                    <li><i class="fas fa-check"></i> Link analysis</li>
                    <li><i class="fas fa-check"></i> Location intelligence</li>
                    <li><i class="fas fa-check"></i> CJIS compliance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Certifications -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Government Compliance & Certifications</h2>
            <p>Meeting the highest standards for public sector technology</p>
        </div>

        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>FedRAMP Authorized</h3>
                <p>FedRAMP Moderate authorization enables federal agencies to securely leverage our cloud-based solutions with confidence.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>CJIS Compliance</h3>
                <p>Full compliance with Criminal Justice Information Services Security Policy for law enforcement data access.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-flag-usa"></i>
                </div>
                <h3>NIST 800-53 Controls</h3>
                <p>Implementation of NIST security controls ensuring data protection and system security for sensitive operations.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>StateRAMP Certified</h3>
                <p>StateRAMP certification for state and local government cloud service requirements and security standards.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <h3>PIV/CAC Integration</h3>
                <p>Support for Personal Identity Verification (PIV) and Common Access Card (CAC) authentication systems.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-wheelchair"></i>
                </div>
                <h3>Section 508 Accessible</h3>
                <p>Full accessibility compliance ensuring all citizens can access government services regardless of ability.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contract Vehicles -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Contract Vehicles & Procurement</h2>
            <p>Streamlined procurement for government agencies</p>
        </div>

        <div class="contracts-list">
            <div class="contract-card">
                <div class="contract-header">
                    <div class="contract-badge">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <div>
                        <h3>GSA Schedule 70</h3>
                        <div class="contract-number">Contract #: GS-35F-0123X</div>
                    </div>
                </div>
                <p>Information Technology Services Schedule for federal agency procurement. Streamlined ordering process with pre-negotiated pricing.</p>
                <div class="contract-categories">
                    <span class="category-tag">IT Services</span>
                    <span class="category-tag">Cloud Solutions</span>
                    <span class="category-tag">Security Services</span>
                </div>
            </div>

            <div class="contract-card">
                <div class="contract-header">
                    <div class="contract-badge">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <h3>DHS EAGLE II</h3>
                        <div class="contract-number">Department of Homeland Security</div>
                    </div>
                </div>
                <p>Enterprise Acquisition Gateway for Leading-Edge Solutions II contract holder providing IT services to DHS components.</p>
                <div class="contract-categories">
                    <span class="category-tag">Cybersecurity</span>
                    <span class="category-tag">Data Analytics</span>
                    <span class="category-tag">Identity Management</span>
                </div>
            </div>

            <div class="contract-card">
                <div class="contract-header">
                    <div class="contract-badge">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h3>State & Local Cooperative Contracts</h3>
                        <div class="contract-number">Multiple Jurisdictions</div>
                    </div>
                </div>
                <p>Participating vendor on NASPO ValuePoint, Sourcewell, and other cooperative purchasing agreements for state and local procurement.</p>
                <div class="contract-categories">
                    <span class="category-tag">NASPO</span>
                    <span class="category-tag">Sourcewell</span>
                    <span class="category-tag">E&I Cooperative</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Government Success Stories</h2>
        </div>

        <div class="success-grid">
            <div class="success-card">
                <div class="success-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>State Benefits Agency</h3>
                <p>
                    Prevented $150M in fraudulent unemployment benefits claims during pandemic response while reducing legitimate claim processing time by 60%.
                </p>
                <div class="success-metrics">
                    <div class="metric">
                        <strong>$150M</strong>
                        <span>Fraud Prevented</span>
                    </div>
                    <div class="metric">
                        <strong>60%</strong>
                        <span>Faster Processing</span>
                    </div>
                </div>
            </div>

            <div class="success-card">
                <div class="success-icon">
                    <i class="fas fa-city"></i>
                </div>
                <h3>Major Metropolitan City</h3>
                <p>
                    Implemented citywide identity verification for business licensing, permits, and contractor registration, eliminating duplicate accounts and improving compliance.
                </p>
                <div class="success-metrics">
                    <div class="metric">
                        <strong>85%</strong>
                        <span>Duplicate Reduction</span>
                    </div>
                    <div class="metric">
                        <strong>50K+</strong>
                        <span>Verified Entities</span>
                    </div>
                </div>
            </div>

            <div class="success-card">
                <div class="success-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Federal Law Enforcement Agency</h3>
                <p>
                    Provided real-time intelligence and identity verification supporting criminal investigations, leading to increased case closure rates and faster response times.
                </p>
                <div class="success-metrics">
                    <div class="metric">
                        <strong>40%</strong>
                        <span>Higher Closure Rate</span>
                    </div>
                    <div class="metric">
                        <strong>2,500+</strong>
                        <span>Cases Supported</span>
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
            <h2>Partner With VettlyGlobal</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Learn how VettlyGlobal can support your agency's mission with secure, compliant risk management and identity verification solutions.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact Government Team
                </a>
                <a href="<?php echo url('industries/government'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-landmark"></i>
                    View Government Solutions
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

.stat-icon {
    width: 60px;
    height: 60px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 1.8rem;
    color: var(--primary-color);
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

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.solution-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.solution-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.solution-icon {
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

.solution-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.solution-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.solution-features {
    list-style: none;
    padding: 0;
}

.solution-features li {
    padding: 8px 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    gap: 12px;
}

.solution-features i {
    color: var(--primary-color);
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    max-width: 1100px;
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

.compliance-icon {
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

.compliance-card h3 {
    font-size: 1.25rem;
    margin-bottom: 12px;
}

.compliance-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.contracts-list {
    display: grid;
    gap: 35px;
    max-width: 900px;
    margin: 0 auto;
}

.contract-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.contract-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.contract-header {
    display: flex;
    gap: 20px;
    align-items: center;
    margin-bottom: 20px;
}

.contract-badge {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: white;
    flex-shrink: 0;
}

.contract-header h3 {
    font-size: 1.4rem;
    margin-bottom: 5px;
}

.contract-number {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.contract-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.contract-categories {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.category-tag {
    background: var(--bg-light);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--primary-color);
}

.success-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    max-width: 1100px;
    margin: 0 auto;
}

.success-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.success-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.success-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 2.5rem;
    color: white;
}

.success-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.success-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 25px;
}

.success-metrics {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    padding-top: 25px;
    border-top: 2px solid var(--bg-light);
}

.success-metrics .metric {
    text-align: center;
}

.success-metrics .metric strong {
    display: block;
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.success-metrics .metric span {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .contract-header {
        flex-direction: column;
        text-align: center;
    }

    .success-metrics {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
