<?php
/**
 * Partnerships - Healthcare Partnerships
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Healthcare Partnerships - VettlyGlobal';
$meta_description = 'VettlyGlobal\'s healthcare partnerships. Delivering HIPAA-compliant identity verification, fraud prevention, and risk management solutions for healthcare organizations.';

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
                <span>Healthcare</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Healthcare Partnerships</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Trusted technology partner to healthcare organizations protecting patients, preventing fraud, and ensuring compliance.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Securing Healthcare Operations</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal partners with healthcare providers, payers, pharmaceutical companies, and health tech organizations to combat healthcare fraud, verify provider credentials, authenticate patient identities, and protect sensitive health information. Our HIPAA-compliant solutions help healthcare organizations reduce fraud losses, improve patient safety, and streamline operations.
            </p>
        </div>

        <div class="healthcare-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-value">500+</div>
                <div class="stat-label">Healthcare Partners</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">$1.2B</div>
                <div class="stat-label">Fraud Prevented Annually</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">50M+</div>
                <div class="stat-label">Patient Verifications</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">100%</div>
                <div class="stat-label">HIPAA Compliant</div>
            </div>
        </div>
    </div>
</section>

<!-- Healthcare Solutions -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Healthcare Solutions</h2>
            <p>Comprehensive solutions for the healthcare ecosystem</p>
        </div>

        <div class="solutions-grid">
            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Provider Credentialing & Verification</h3>
                <p>
                    Streamline provider credentialing with comprehensive verification of medical licenses, board certifications, education, malpractice history, and DEA registrations. Ongoing monitoring ensures continuous compliance.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Medical license verification</li>
                    <li><i class="fas fa-check"></i> Board certification checks</li>
                    <li><i class="fas fa-check"></i> Malpractice claims history</li>
                    <li><i class="fas fa-check"></i> Continuous monitoring</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-id-card"></i>
                </div>
                <h3>Patient Identity Verification</h3>
                <p>
                    Accurately verify patient identities at registration and admission to prevent medical identity theft, reduce duplicate records, and ensure patient safety throughout the care continuum.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Real-time identity verification</li>
                    <li><i class="fas fa-check"></i> Duplicate record prevention</li>
                    <li><i class="fas fa-check"></i> Medical ID theft detection</li>
                    <li><i class="fas fa-check"></i> Biometric authentication</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-shield-virus"></i>
                </div>
                <h3>Healthcare Fraud Detection</h3>
                <p>
                    Advanced AI-powered fraud detection identifies billing fraud, phantom billing, upcoding, unbundling, and other fraudulent schemes before claims are paid, saving millions in improper payments.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Claims fraud detection</li>
                    <li><i class="fas fa-check"></i> Billing pattern analysis</li>
                    <li><i class="fas fa-check"></i> Provider network fraud</li>
                    <li><i class="fas fa-check"></i> Real-time alerts</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-pills"></i>
                </div>
                <h3>Prescription & Pharmacy Verification</h3>
                <p>
                    Combat prescription fraud and drug diversion with verification of prescribers, pharmacies, and patients. Monitor controlled substance patterns and identify potential abuse.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Prescriber DEA verification</li>
                    <li><i class="fas fa-check"></i> Pharmacy license checks</li>
                    <li><i class="fas fa-check"></i> Patient identity matching</li>
                    <li><i class="fas fa-check"></i> Controlled substance monitoring</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3>Facility & Equipment Screening</h3>
                <p>
                    Verify healthcare facilities, medical device manufacturers, and equipment suppliers. Ensure regulatory compliance and prevent counterfeit medical products from entering the supply chain.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Facility accreditation checks</li>
                    <li><i class="fas fa-check"></i> Supplier due diligence</li>
                    <li><i class="fas fa-check"></i> Product authenticity verification</li>
                    <li><i class="fas fa-check"></i> Regulatory compliance</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>Employee Background Screening</h3>
                <p>
                    Comprehensive background checks for healthcare employees with verification of professional licenses, education, criminal history, and exclusion list screening to protect patients.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Criminal background checks</li>
                    <li><i class="fas fa-check"></i> OIG/LEIE exclusion screening</li>
                    <li><i class="fas fa-check"></i> License verification</li>
                    <li><i class="fas fa-check"></i> Drug testing coordination</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Industry Partners -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Healthcare Industry Partners</h2>
            <p>Serving every sector of the healthcare ecosystem</p>
        </div>

        <div class="partners-grid">
            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-hospital-alt"></i>
                </div>
                <h3>Health Systems & Hospitals</h3>
                <p>
                    Partner with leading hospital systems and academic medical centers to prevent fraud, verify providers, and protect patient safety. From small community hospitals to large integrated delivery networks.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>Academic Medical Centers</span>
                    <span>Community Hospitals</span>
                    <span>Specialty Facilities</span>
                </div>
            </div>

            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-file-medical"></i>
                </div>
                <h3>Health Insurance Payers</h3>
                <p>
                    Collaborate with health plans, Medicare/Medicaid programs, and managed care organizations to detect claims fraud, verify eligibility, and reduce improper payments.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>Commercial Insurers</span>
                    <span>Medicare Advantage</span>
                    <span>Medicaid MCOs</span>
                </div>
            </div>

            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-capsules"></i>
                </div>
                <h3>Pharmaceutical Companies</h3>
                <p>
                    Work with pharma manufacturers, PBMs, and specialty pharmacies to prevent diversion, verify prescribers, and ensure patient program eligibility while maintaining compliance.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>Drug Manufacturers</span>
                    <span>PBMs</span>
                    <span>Specialty Pharmacies</span>
                </div>
            </div>

            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <h3>Health Technology Companies</h3>
                <p>
                    Integrate with EHR systems, practice management platforms, and digital health companies to embed identity verification and fraud prevention into healthcare workflows.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>EHR Vendors</span>
                    <span>Telehealth Platforms</span>
                    <span>Health Apps</span>
                </div>
            </div>

            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-briefcase-medical"></i>
                </div>
                <h3>Medical Staffing Agencies</h3>
                <p>
                    Enable staffing agencies to quickly verify credentials and backgrounds for locum tenens, travel nurses, and temporary healthcare professionals while maintaining compliance.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>Physician Staffing</span>
                    <span>Nurse Staffing</span>
                    <span>Allied Health</span>
                </div>
            </div>

            <div class="partner-card">
                <div class="partner-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>Healthcare Services Organizations</h3>
                <p>
                    Support revenue cycle management companies, medical billing services, and healthcare BPOs with fraud detection and verification solutions.
                </p>
                <div class="partner-examples">
                    <strong>Partner Types:</strong>
                    <span>RCM Companies</span>
                    <span>Billing Services</span>
                    <span>Healthcare BPOs</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Security -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Healthcare Compliance & Security</h2>
            <p>Meeting the strictest healthcare regulations</p>
        </div>

        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>HIPAA Compliant</h3>
                <p>Full compliance with HIPAA Privacy and Security Rules. Business Associate Agreements (BAAs) in place with all healthcare partners.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>HITRUST Certified</h3>
                <p>HITRUST CSF certification demonstrates the highest level of security for handling protected health information.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>CAQH Participant</h3>
                <p>Active participant in Council for Affordable Quality Healthcare credentialing data exchange network.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>NCQA Certified</h3>
                <p>National Committee for Quality Assurance certification for credentialing verification organization (CVO) services.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>SOC 2 Type II</h3>
                <p>Independent audit of security, availability, and confidentiality controls protecting healthcare data.</p>
            </div>

            <div class="compliance-card">
                <div class="compliance-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>International Standards</h3>
                <p>Compliance with GDPR, PIPEDA, and other international healthcare data protection regulations.</p>
            </div>
        </div>
    </div>
</section>

<!-- ROI & Impact -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Healthcare Partner Impact</h2>
            <p>Measurable results for healthcare organizations</p>
        </div>

        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3>Fraud Loss Reduction</h3>
                <p>Healthcare partners reduce fraud losses by an average of 70% within the first year of implementation.</p>
                <div class="impact-stat">70% Average Reduction</div>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Faster Credentialing</h3>
                <p>Automated credentialing reduces provider onboarding time from 90+ days to under 30 days on average.</p>
                <div class="impact-stat">60+ Days Faster</div>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Improved Patient Safety</h3>
                <p>85% reduction in medical identity theft incidents and duplicate medical records for partner organizations.</p>
                <div class="impact-stat">85% Fewer Incidents</div>
            </div>

            <div class="impact-card">
                <div class="impact-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>Higher Accuracy</h3>
                <p>99.7% accuracy in provider credential verification and patient identity matching processes.</p>
                <div class="impact-stat">99.7% Accuracy</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Partner With VettlyGlobal Healthcare</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Discover how VettlyGlobal's healthcare solutions can reduce fraud, streamline operations, and improve patient safety for your organization.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Contact Healthcare Team
                </a>
                <a href="<?php echo url('industries/healthcare'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-heartbeat"></i>
                    View Healthcare Solutions
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

.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.partner-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.partner-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.partner-icon {
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

.partner-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    text-align: center;
}

.partner-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: center;
}

.partner-examples {
    text-align: center;
    padding-top: 20px;
    border-top: 2px solid var(--bg-light);
}

.partner-examples strong {
    display: block;
    margin-bottom: 12px;
    color: var(--text-primary);
}

.partner-examples span {
    display: inline-block;
    background: var(--bg-light);
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.85rem;
    margin: 4px;
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

.impact-grid {
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
    box-shadow: var(--shadow-xl);
}

.impact-icon {
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

.impact-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.impact-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.impact-stat {
    font-weight: 700;
    color: var(--primary-color);
    font-size: 1.3rem;
    padding-top: 15px;
    border-top: 2px solid var(--bg-light);
}
</style>

<?php include '../../includes/footer.php'; ?>
