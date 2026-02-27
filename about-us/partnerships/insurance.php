<?php
/**
 * Partnerships - Insurance Industry Alliances
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Insurance Partnerships - VettlyGlobal';
$meta_description = 'VettlyGlobal\'s insurance industry partnerships. Advanced fraud detection, risk assessment, and claims intelligence solutions for insurers.';

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
                <span>Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Insurance Industry Alliances</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Empowering insurers with advanced fraud detection, risk intelligence, and claims verification solutions.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Transforming Insurance Operations</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                VettlyGlobal partners with property & casualty insurers, life insurance companies, health insurers, and insurance technology providers to combat fraud, assess risks accurately, and streamline underwriting and claims processes. Our data intelligence solutions help insurers reduce loss ratios, improve profitability, and enhance customer experiences.
            </p>
        </div>

        <div class="insurance-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-value">300+</div>
                <div class="stat-label">Insurance Partners</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">$2.5B</div>
                <div class="stat-label">Fraud Prevented</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">100M+</div>
                <div class="stat-label">Policies Screened</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">40%</div>
                <div class="stat-label">Avg Loss Ratio Improvement</div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Solutions -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Insurance Solutions</h2>
            <p>Comprehensive solutions across the insurance value chain</p>
        </div>

        <div class="solutions-grid">
            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Application & Underwriting Fraud Detection</h3>
                <p>
                    Identify misrepresentation, omissions, and fraud during the application process. Verify applicant information, detect synthetic identities, and assess risk indicators before binding coverage.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Identity verification</li>
                    <li><i class="fas fa-check"></i> Application anomaly detection</li>
                    <li><i class="fas fa-check"></i> Synthetic ID identification</li>
                    <li><i class="fas fa-check"></i> Risk scoring</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <h3>Claims Fraud Prevention</h3>
                <p>
                    Advanced AI algorithms analyze claims for fraud indicators including staged accidents, inflated losses, phantom claimants, and organized fraud rings. Real-time scoring at submission.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Staged accident detection</li>
                    <li><i class="fas fa-check"></i> Claimant verification</li>
                    <li><i class="fas fa-check"></i> Fraud ring identification</li>
                    <li><i class="fas fa-check"></i> Pattern recognition</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3>Risk Assessment & Pricing</h3>
                <p>
                    Enhanced risk intelligence for more accurate underwriting decisions and pricing. Access comprehensive data on individuals, properties, businesses, and driving records.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Comprehensive background data</li>
                    <li><i class="fas fa-check"></i> Property risk intelligence</li>
                    <li><i class="fas fa-check"></i> Driving history verification</li>
                    <li><i class="fas fa-check"></i> Predictive risk modeling</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-car-crash"></i>
                </div>
                <h3>Auto Insurance Intelligence</h3>
                <p>
                    Specialized solutions for auto insurers including MVR monitoring, vehicle history reports, accident reconstruction data, and driver risk assessment for accurate pricing and fraud prevention.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> MVR monitoring</li>
                    <li><i class="fas fa-check"></i> Vehicle history reports</li>
                    <li><i class="fas fa-check"></i> Telematics integration</li>
                    <li><i class="fas fa-check"></i> Collision analysis</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Property Insurance Verification</h3>
                <p>
                    Validate property details, occupancy, ownership, and condition. Detect inflated valuations, prior claims history, and natural disaster risks for accurate underwriting.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Property ownership verification</li>
                    <li><i class="fas fa-check"></i> Occupancy validation</li>
                    <li><i class="fas fa-check"></i> Natural hazard assessment</li>
                    <li><i class="fas fa-check"></i> Claims history</li>
                </ul>
            </div>

            <div class="solution-card">
                <div class="solution-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Life & Health Insurance Screening</h3>
                <p>
                    Medical underwriting support with prescription history, medical claims data, and health risk indicators. Verify beneficiary information and detect policy churning.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Prescription history (Rx)</li>
                    <li><i class="fas fa-check"></i> Medical claims analysis</li>
                    <li><i class="fas fa-check"></i> Mortality risk assessment</li>
                    <li><i class="fas fa-check"></i> Beneficiary verification</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Segments -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Insurance Industry Segments</h2>
            <p>Serving all insurance lines of business</p>
        </div>

        <div class="segments-grid">
            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3>Personal Auto Insurance</h3>
                <p>
                    Combat fraud in personal auto insurance with driver verification, MVR monitoring, accident validation, and medical claims verification for bodily injury claims.
                </p>
                <div class="segment-solutions">
                    <span>Driver Verification</span>
                    <span>Claims Fraud Detection</span>
                    <span>MVR Monitoring</span>
                    <span>Injury Validation</span>
                </div>
            </div>

            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-house-user"></i>
                </div>
                <h3>Homeowners & Property</h3>
                <p>
                    Verify property details, assess natural disaster risks, detect prior claims, and identify inflated or fraudulent loss claims for residential and commercial properties.
                </p>
                <div class="segment-solutions">
                    <span>Property Verification</span>
                    <span>Risk Assessment</span>
                    <span>Claims History</span>
                    <span>Loss Validation</span>
                </div>
            </div>

            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Life Insurance</h3>
                <p>
                    Comprehensive underwriting intelligence including medical history, prescription data, financial background, and beneficiary verification for life insurance policies.
                </p>
                <div class="segment-solutions">
                    <span>Medical Underwriting</span>
                    <span>Financial Verification</span>
                    <span>Mortality Risk</span>
                    <span>Beneficiary Checks</span>
                </div>
            </div>

            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Commercial Insurance</h3>
                <p>
                    Business verification, workers' compensation fraud detection, commercial auto intelligence, and liability risk assessment for commercial insurance programs.
                </p>
                <div class="segment-solutions">
                    <span>Business Verification</span>
                    <span>Workers Comp Fraud</span>
                    <span>Commercial Auto</span>
                    <span>Liability Assessment</span>
                </div>
            </div>

            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h3>Specialty Insurance</h3>
                <p>
                    Tailored solutions for specialty lines including travel, pet, event, marine, aviation, and cyber insurance with custom fraud detection and risk assessment.
                </p>
                <div class="segment-solutions">
                    <span>Travel Insurance</span>
                    <span>Cyber Insurance</span>
                    <span>Marine & Aviation</span>
                    <span>Event Coverage</span>
                </div>
            </div>

            <div class="segment-card">
                <div class="segment-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3>Health Insurance</h3>
                <p>
                    Healthcare fraud detection, provider verification, eligibility validation, and medical claims analysis for health insurance carriers and managed care organizations.
                </p>
                <div class="segment-solutions">
                    <span>Claims Fraud</span>
                    <span>Provider Screening</span>
                    <span>Eligibility Checks</span>
                    <span>Medical Necessity</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Integration -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Insurance Technology Integration</h2>
            <p>Seamless integration with insurance systems</p>
        </div>

        <div class="integration-grid">
            <div class="integration-card">
                <div class="integration-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Policy Administration Systems</h3>
                <p>
                    Native integrations with leading policy administration platforms including Guidewire, Duck Creek, Majesco, and legacy systems for real-time verification during quoting and binding.
                </p>
            </div>

            <div class="integration-card">
                <div class="integration-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Claims Management Systems</h3>
                <p>
                    Embed fraud detection directly into claims workflows with integrations to Guidewire ClaimCenter, Snapsheet, CCC, and other claims platforms for instant fraud scoring.
                </p>
            </div>

            <div class="integration-card">
                <div class="integration-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3>Rating & Underwriting Engines</h3>
                <p>
                    Enhance rating accuracy with real-time risk data integrated into rating engines, underwriting workbenches, and automated decision systems.
                </p>
            </div>

            <div class="integration-card">
                <div class="integration-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Agency Management Systems</h3>
                <p>
                    Support independent agents and brokers with integrations to AMS360, Applied Epic, QQ Solutions, and other agency management platforms.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Partner Results -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Insurance Partner Results</h2>
            <p>Measurable impact on insurance operations</p>
        </div>

        <div class="results-grid">
            <div class="result-card">
                <div class="result-icon"><i class="fas fa-car"></i></div>
                <h3>National Auto Insurer</h3>
                <p>Reduced fraudulent auto injury claims by 65% and lowered average claim processing time by 40% through automated fraud detection.</p>
                <div class="result-metrics">
                    <div class="metric"><strong>65%</strong><span>Fraud Reduction</span></div>
                    <div class="metric"><strong>40%</strong><span>Faster Processing</span></div>
                    <div class="metric"><strong>$85M</strong><span>Annual Savings</span></div>
                </div>
            </div>

            <div class="result-card">
                <div class="result-icon"><i class="fas fa-home"></i></div>
                <h3>Regional P&C Carrier</h3>
                <p>Improved underwriting accuracy with comprehensive property intelligence, reducing loss ratio by 8 points and increasing profitability.</p>
                <div class="result-metrics">
                    <div class="metric"><strong>8 pts</strong><span>Loss Ratio Drop</span></div>
                    <div class="metric"><strong>25%</strong><span>Profit Increase</span></div>
                    <div class="metric"><strong>95%</strong><span>Accuracy Rate</span></div>
                </div>
            </div>

            <div class="result-card">
                <div class="result-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Life Insurance Company</h3>
                <p>Accelerated underwriting from 45 days to 7 days for 80% of applications while maintaining superior risk selection.</p>
                <div class="result-metrics">
                    <div class="metric"><strong>38 Days</strong><span>Time Saved</span></div>
                    <div class="metric"><strong>80%</strong><span>Instant Decisions</span></div>
                    <div class="metric"><strong>99.5%</strong><span>Accuracy Rate</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Partner With VettlyGlobal Insurance</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Discover how VettlyGlobal's insurance solutions can reduce fraud, improve underwriting accuracy, and enhance profitability for your organization.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Contact Insurance Team
                </a>
                <a href="<?php echo url('industries/insurance'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-shield-alt"></i>
                    View Insurance Solutions
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

.segments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 35px;
    max-width: 1200px;
    margin: 0 auto;
}

.segment-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.segment-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.segment-icon {
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

.segment-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    text-align: center;
}

.segment-card p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: center;
}

.segment-solutions {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    justify-content: center;
    padding-top: 20px;
    border-top: 2px solid var(--bg-light);
}

.segment-solutions span {
    background: var(--bg-light);
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.85rem;
    font-weight: 600;
}

.integration-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
    max-width: 1100px;
    margin: 0 auto;
}

.integration-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.integration-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.integration-icon {
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

.integration-card h3 {
    font-size: 1.25rem;
    margin-bottom: 12px;
}

.integration-card p {
    color: var(--text-secondary);
    line-height: 1.7;
}

.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

.result-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.result-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.result-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
    margin: 0 auto 18px;
}

.result-card h3 {
    font-size: 1.25rem;
    margin-bottom: 12px;
}

.result-card > p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 20px;
}

.result-metrics {
    display: flex;
    gap: 12px;
    margin-top: 5px;
}

.result-metrics .metric {
    flex: 1;
    background: var(--bg-light);
    border-radius: 8px;
    padding: 15px 10px;
    text-align: center;
}

.result-metrics .metric strong {
    display: block;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 4px;
    line-height: 1;
}

.result-metrics .metric span {
    display: block;
    color: var(--text-secondary);
    font-size: 0.75rem;
    line-height: 1.3;
}
</style>

<?php include '../../includes/footer.php'; ?>
