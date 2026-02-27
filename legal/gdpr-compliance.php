<?php
/**
 * VettlyGlobal - GDPR Compliance
 */

// Include configuration
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'GDPR Compliance';
$meta_description = 'VettlyGlobal GDPR Compliance - Learn about our commitment to the General Data Protection Regulation and how we protect European data subjects rights.';

// Include header
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 80px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('legal/gdpr-compliance'); ?>" style="color: white;">Legal</a>
                <span style="margin: 0 10px;">/</span>
                <span>GDPR Compliance</span>
            </div>
            <h1 style="color: white; font-size: 2.5rem; margin-bottom: 15px;">GDPR Compliance</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                General Data Protection Regulation (EU) 2016/679 - How VettlyGlobal ensures compliance with European data protection standards.
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 12px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>
</section>

<!-- GDPR Content -->
<section class="section legal-content">
    <div class="container">
        <div class="legal-document">

            <!-- Introduction -->
            <div class="legal-section">
                <h2>1. Our Commitment to GDPR Compliance</h2>
                <p>VettlyGlobal is committed to protecting the personal data and privacy rights of all individuals in the European Union (EU), European Economic Area (EEA), and the United Kingdom (UK). We comply with the General Data Protection Regulation (GDPR) and related data protection laws.</p>
                <div class="alert alert-success">
                    <i class="fas fa-shield-alt"></i>
                    <strong>GDPR Compliant:</strong> VettlyGlobal maintains comprehensive data protection policies, procedures, and technical measures to ensure full compliance with GDPR requirements.
                </div>
                <p>This document outlines our GDPR compliance framework and explains your rights as a data subject under the GDPR.</p>
            </div>

            <!-- Roles and Responsibilities -->
            <div class="legal-section">
                <h2>2. Data Controller and Processor Roles</h2>

                <h3>2.1 VettlyGlobal as Data Controller</h3>
                <p>When we determine the purposes and means of processing personal data, we act as a Data Controller. This includes:</p>
                <ul>
                    <li>Processing customer account and contact information</li>
                    <li>Managing employee and contractor data</li>
                    <li>Processing website visitor data and analytics</li>
                    <li>Marketing and communication activities</li>
                    <li>Business operations and administration</li>
                </ul>

                <h3>2.2 VettlyGlobal as Data Processor</h3>
                <p>When we process personal data on behalf of our clients, we act as a Data Processor. This includes:</p>
                <ul>
                    <li>Identity verification services for client organizations</li>
                    <li>Background screening and due diligence services</li>
                    <li>Risk assessment and fraud detection services</li>
                    <li>Data analytics and reporting services</li>
                </ul>
                <p>When acting as a Data Processor, we process data only according to documented instructions from our clients (Data Controllers) and maintain appropriate Data Processing Agreements.</p>

                <h3>2.3 Data Protection Officer</h3>
                <p>We have appointed a Data Protection Officer (DPO) to oversee GDPR compliance:</p>
                <div class="contact-box">
                    <p><strong>Data Protection Officer</strong><br>
                    <a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                </div>
            </div>

            <!-- Legal Basis for Processing -->
            <div class="legal-section">
                <h2>3. Legal Basis for Processing Personal Data</h2>
                <p>We process personal data only when we have a valid legal basis under GDPR Article 6:</p>

                <h3>3.1 Consent (Article 6(1)(a))</h3>
                <p>We obtain your explicit, informed consent for:</p>
                <ul>
                    <li>Marketing communications and newsletters</li>
                    <li>Processing special categories of personal data (where applicable)</li>
                    <li>Using cookies and tracking technologies (non-essential)</li>
                    <li>Sharing data with third parties for specific purposes</li>
                </ul>
                <p>You have the right to withdraw consent at any time without affecting the lawfulness of processing based on consent before withdrawal.</p>

                <h3>3.2 Contract Performance (Article 6(1)(b))</h3>
                <p>We process data necessary for:</p>
                <ul>
                    <li>Providing services under our contract with you</li>
                    <li>Processing transactions and payments</li>
                    <li>Account management and customer support</li>
                    <li>Delivering reports and service outputs</li>
                </ul>

                <h3>3.3 Legal Obligations (Article 6(1)(c))</h3>
                <p>We process data to comply with legal obligations, including:</p>
                <ul>
                    <li>Anti-money laundering (AML) and counter-terrorism financing requirements</li>
                    <li>Know Your Customer (KYC) regulations</li>
                    <li>Tax and accounting requirements</li>
                    <li>Court orders and legal process</li>
                    <li>Regulatory reporting obligations</li>
                </ul>

                <h3>3.4 Legitimate Interests (Article 6(1)(f))</h3>
                <p>We process data based on legitimate interests when:</p>
                <ul>
                    <li>Preventing fraud and ensuring security</li>
                    <li>Improving and optimizing our services</li>
                    <li>Conducting business analytics and research</li>
                    <li>Network and information security</li>
                    <li>Direct marketing to existing customers</li>
                </ul>
                <p>We conduct Legitimate Interest Assessments (LIAs) to ensure our interests do not override your fundamental rights and freedoms.</p>

                <h3>3.5 Vital Interests (Article 6(1)(d))</h3>
                <p>In rare cases, we may process data to protect vital interests, such as preventing serious harm or threats to life.</p>
            </div>

            <!-- Data Subject Rights -->
            <div class="legal-section">
                <h2>4. Your Rights Under GDPR</h2>
                <p>As a data subject under GDPR, you have the following rights:</p>

                <h3>4.1 Right of Access (Article 15)</h3>
                <p>You have the right to obtain:</p>
                <ul>
                    <li>Confirmation of whether we process your personal data</li>
                    <li>Access to your personal data</li>
                    <li>Information about the purposes, categories, and recipients of processing</li>
                    <li>Information about the retention period</li>
                    <li>A copy of your personal data (first copy provided free of charge)</li>
                </ul>

                <h3>4.2 Right to Rectification (Article 16)</h3>
                <p>You have the right to:</p>
                <ul>
                    <li>Correct inaccurate personal data</li>
                    <li>Complete incomplete personal data</li>
                    <li>Update outdated information</li>
                </ul>
                <p>We will respond to rectification requests within one month and notify third parties where feasible.</p>

                <h3>4.3 Right to Erasure / "Right to be Forgotten" (Article 17)</h3>
                <p>You have the right to request deletion of your personal data when:</p>
                <ul>
                    <li>The data is no longer necessary for the purposes collected</li>
                    <li>You withdraw consent and no other legal basis exists</li>
                    <li>You object to processing and no overriding legitimate grounds exist</li>
                    <li>The data has been unlawfully processed</li>
                    <li>Erasure is required to comply with legal obligations</li>
                </ul>
                <p><strong>Limitations:</strong> We may retain data when required by law, for legal claims, or for archiving purposes in the public interest.</p>

                <h3>4.4 Right to Restriction of Processing (Article 18)</h3>
                <p>You can request restriction of processing when:</p>
                <ul>
                    <li>You contest the accuracy of personal data (during verification)</li>
                    <li>Processing is unlawful but you oppose erasure</li>
                    <li>We no longer need the data but you need it for legal claims</li>
                    <li>You object to processing (pending verification of legitimate grounds)</li>
                </ul>

                <h3>4.5 Right to Data Portability (Article 20)</h3>
                <p>You have the right to:</p>
                <ul>
                    <li>Receive personal data in a structured, commonly used, machine-readable format</li>
                    <li>Transmit data to another controller where technically feasible</li>
                </ul>
                <p>This right applies to data processed by automated means based on consent or contract.</p>

                <h3>4.6 Right to Object (Article 21)</h3>
                <p>You can object to processing based on:</p>
                <ul>
                    <li><strong>Legitimate Interests:</strong> We will cease processing unless we demonstrate compelling legitimate grounds</li>
                    <li><strong>Direct Marketing:</strong> We will immediately cease marketing activities</li>
                    <li><strong>Profiling:</strong> You can object to automated decision-making and profiling</li>
                </ul>

                <h3>4.7 Rights Related to Automated Decision-Making (Article 22)</h3>
                <p>You have the right not to be subject to decisions based solely on automated processing, including profiling, which produces legal effects or significantly affects you.</p>
                <p>When we use automated decision-making, we will:</p>
                <ul>
                    <li>Inform you about the logic involved</li>
                    <li>Provide meaningful information about the consequences</li>
                    <li>Implement safeguards including human intervention</li>
                    <li>Allow you to contest the decision</li>
                </ul>

                <h3>4.8 How to Exercise Your Rights</h3>
                <p>To exercise any of these rights, contact us at:</p>
                <div class="contact-box">
                    <p><strong>GDPR Rights Requests</strong><br>
                    <a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                </div>
                <p>We will respond to your request within one month (extendable by two months for complex requests). We will verify your identity before processing requests to protect your data security.</p>
            </div>

            <!-- Data Protection Principles -->
            <div class="legal-section">
                <h2>5. Data Protection Principles</h2>
                <p>We adhere to the six GDPR data protection principles (Article 5):</p>

                <h3>5.1 Lawfulness, Fairness, and Transparency</h3>
                <ul>
                    <li>We process data lawfully with valid legal basis</li>
                    <li>We provide clear, accessible privacy information</li>
                    <li>We are transparent about data processing activities</li>
                </ul>

                <h3>5.2 Purpose Limitation</h3>
                <ul>
                    <li>We collect data for specified, explicit, and legitimate purposes</li>
                    <li>We do not process data in ways incompatible with original purposes</li>
                    <li>We document and communicate processing purposes clearly</li>
                </ul>

                <h3>5.3 Data Minimization</h3>
                <ul>
                    <li>We collect only data adequate, relevant, and necessary</li>
                    <li>We avoid excessive or unnecessary data collection</li>
                    <li>We regularly review data needs and delete unnecessary data</li>
                </ul>

                <h3>5.4 Accuracy</h3>
                <ul>
                    <li>We maintain accurate and up-to-date personal data</li>
                    <li>We correct inaccuracies without undue delay</li>
                    <li>We implement processes for data quality assurance</li>
                </ul>

                <h3>5.5 Storage Limitation</h3>
                <ul>
                    <li>We retain data only as long as necessary for the purposes</li>
                    <li>We maintain documented retention schedules</li>
                    <li>We implement secure deletion procedures</li>
                </ul>

                <h3>5.6 Integrity and Confidentiality (Security)</h3>
                <ul>
                    <li>We implement appropriate technical and organizational measures</li>
                    <li>We protect against unauthorized or unlawful processing</li>
                    <li>We prevent accidental loss, destruction, or damage</li>
                </ul>
            </div>

            <!-- Security Measures -->
            <div class="legal-section">
                <h2>6. Technical and Organizational Security Measures</h2>
                <p>We implement state-of-the-art security measures to protect personal data:</p>

                <h3>6.1 Technical Measures</h3>
                <ul>
                    <li><strong>Encryption:</strong> AES-256 encryption at rest, TLS 1.3 in transit</li>
                    <li><strong>Access Controls:</strong> Role-based access control (RBAC), multi-factor authentication (MFA)</li>
                    <li><strong>Network Security:</strong> Firewalls, intrusion detection/prevention systems (IDS/IPS)</li>
                    <li><strong>Pseudonymization:</strong> Data pseudonymization where appropriate</li>
                    <li><strong>Backup and Recovery:</strong> Regular encrypted backups with tested recovery procedures</li>
                    <li><strong>Logging and Monitoring:</strong> Comprehensive audit logs and security monitoring</li>
                    <li><strong>Vulnerability Management:</strong> Regular security assessments and patching</li>
                </ul>

                <h3>6.2 Organizational Measures</h3>
                <ul>
                    <li><strong>Data Protection Policies:</strong> Comprehensive privacy and security policies</li>
                    <li><strong>Staff Training:</strong> Regular GDPR and security awareness training</li>
                    <li><strong>Access Management:</strong> Strict access control procedures and regular reviews</li>
                    <li><strong>Vendor Management:</strong> Due diligence and contractual safeguards for processors</li>
                    <li><strong>Incident Response:</strong> Documented breach response procedures</li>
                    <li><strong>Privacy by Design:</strong> Data protection integrated into system development</li>
                    <li><strong>Regular Audits:</strong> Internal and external security and compliance audits</li>
                </ul>

                <h3>6.3 Certifications and Standards</h3>
                <p>Our security program is aligned with industry standards:</p>
                <ul>
                    <li>ISO 27001 - Information Security Management</li>
                    <li>ISO 27701 - Privacy Information Management</li>
                    <li>SOC 2 Type II - Security, Availability, and Confidentiality</li>
                    <li>NIST Cybersecurity Framework</li>
                </ul>
            </div>

            <!-- Data Transfers -->
            <div class="legal-section">
                <h2>7. International Data Transfers</h2>
                <p>We may transfer personal data outside the EEA/UK to provide our services. We ensure adequate protection through:</p>

                <h3>7.1 Transfer Mechanisms</h3>
                <ul>
                    <li><strong>Adequacy Decisions:</strong> Transfers to countries with adequacy decisions from the European Commission</li>
                    <li><strong>Standard Contractual Clauses (SCCs):</strong> EU Commission-approved SCCs for transfers to third countries</li>
                    <li><strong>Binding Corporate Rules (BCRs):</strong> Internal BCRs for intra-group transfers</li>
                    <li><strong>Certifications:</strong> EU-U.S. Data Privacy Framework (where applicable)</li>
                    <li><strong>Derogations:</strong> Explicit consent or necessary for contract performance (limited use)</li>
                </ul>

                <h3>7.2 Transfer Impact Assessments</h3>
                <p>We conduct Transfer Impact Assessments (TIAs) to ensure that transfers to third countries provide essentially equivalent protection to GDPR, considering:</p>
                <ul>
                    <li>Laws and practices in the destination country</li>
                    <li>Supplementary measures to ensure adequate protection</li>
                    <li>Practical experience with data transfers</li>
                </ul>

                <h3>7.3 Countries We Transfer Data To</h3>
                <p>We may transfer data to the following regions (subject to appropriate safeguards):</p>
                <ul>
                    <li>United States (with SCCs and supplementary measures)</li>
                    <li>United Kingdom (adequacy decision)</li>
                    <li>Canada (adequacy decision for commercial organizations)</li>
                    <li>Other countries with appropriate safeguards in place</li>
                </ul>
            </div>

            <!-- Data Breach Notification -->
            <div class="legal-section">
                <h2>8. Data Breach Notification</h2>

                <h3>8.1 Breach Response Procedures</h3>
                <p>We maintain comprehensive data breach response procedures aligned with GDPR requirements:</p>
                <ul>
                    <li>Incident detection and containment</li>
                    <li>Risk assessment and impact analysis</li>
                    <li>Notification decision-making process</li>
                    <li>Communication with authorities and data subjects</li>
                    <li>Post-incident review and remediation</li>
                </ul>

                <h3>8.2 Notification to Supervisory Authority (Article 33)</h3>
                <p>If a breach is likely to result in a risk to rights and freedoms, we will:</p>
                <ul>
                    <li>Notify the relevant supervisory authority within 72 hours of becoming aware</li>
                    <li>Provide details of the breach, affected data, consequences, and remedial measures</li>
                    <li>Document all breaches, including those not reported</li>
                </ul>

                <h3>8.3 Notification to Data Subjects (Article 34)</h3>
                <p>If a breach is likely to result in a high risk to rights and freedoms, we will:</p>
                <ul>
                    <li>Notify affected individuals without undue delay</li>
                    <li>Describe the breach in clear and plain language</li>
                    <li>Provide information about consequences and mitigation measures</li>
                    <li>Offer contact information for further inquiries</li>
                </ul>
            </div>

            <!-- Data Protection Impact Assessments -->
            <div class="legal-section">
                <h2>9. Data Protection Impact Assessments (DPIAs)</h2>
                <p>We conduct DPIAs for processing operations that are likely to result in high risk to data subjects, including:</p>
                <ul>
                    <li>Large-scale systematic monitoring</li>
                    <li>Large-scale processing of special category data</li>
                    <li>Automated decision-making with legal or significant effects</li>
                    <li>Processing of biometric or genetic data</li>
                    <li>New technologies or processing methods</li>
                </ul>

                <h3>DPIA Process</h3>
                <p>Our DPIA process includes:</p>
                <ul>
                    <li>Description of processing operations and purposes</li>
                    <li>Assessment of necessity and proportionality</li>
                    <li>Identification of risks to data subjects</li>
                    <li>Evaluation of measures to address risks</li>
                    <li>Consultation with DPO and, where required, supervisory authority</li>
                </ul>
            </div>

            <!-- Third-Party Processors -->
            <div class="legal-section">
                <h2>10. Third-Party Processors and Sub-Processors</h2>

                <h3>10.1 Processor Due Diligence</h3>
                <p>We carefully select and monitor third-party processors, ensuring they:</p>
                <ul>
                    <li>Provide sufficient guarantees of GDPR compliance</li>
                    <li>Implement appropriate technical and organizational measures</li>
                    <li>Process data only on documented instructions</li>
                    <li>Maintain confidentiality obligations</li>
                    <li>Assist with data subject rights requests</li>
                </ul>

                <h3>10.2 Data Processing Agreements</h3>
                <p>We maintain GDPR-compliant Data Processing Agreements (DPAs) with all processors, including:</p>
                <ul>
                    <li>Subject matter, duration, nature, and purpose of processing</li>
                    <li>Types of personal data and categories of data subjects</li>
                    <li>Obligations and rights of the controller</li>
                    <li>Security measures and breach notification procedures</li>
                    <li>Audit rights and compliance verification</li>
                </ul>

                <h3>10.3 Sub-Processor List</h3>
                <p>We maintain a list of authorized sub-processors available upon request. We will notify clients of any changes to sub-processors and obtain consent where required.</p>
            </div>

            <!-- Children's Data -->
            <div class="legal-section">
                <h2>11. Processing Children's Data</h2>
                <p>We recognize that children's data requires special protection under GDPR:</p>
                <ul>
                    <li>Our services are not directed at children under 16</li>
                    <li>We obtain parental consent where required for processing children's data</li>
                    <li>We implement age verification mechanisms where appropriate</li>
                    <li>We delete children's data if collected without proper authorization</li>
                </ul>
            </div>

            <!-- Supervisory Authority -->
            <div class="legal-section">
                <h2>12. Right to Lodge a Complaint</h2>
                <p>You have the right to lodge a complaint with a supervisory authority, particularly in the EU member state of your habitual residence, place of work, or place of alleged infringement.</p>

                <h3>Lead Supervisory Authority</h3>
                <p>Our lead supervisory authority is:</p>
                <div class="contact-box">
                    <p><strong>Information Commissioner's Office (ICO)</strong><br>
                    Website: <a href="https://ico.org.uk" target="_blank">ico.org.uk</a></p>
                </div>

                <p>You can find your local data protection authority at: <a href="https://edpb.europa.eu/about-edpb/board/members_en" target="_blank">https://edpb.europa.eu/about-edpb/board/members_en</a></p>
            </div>

            <!-- Updates and Changes -->
            <div class="legal-section">
                <h2>13. Updates to This Policy</h2>
                <p>We may update this GDPR Compliance policy to reflect changes in:</p>
                <ul>
                    <li>Our data processing activities</li>
                    <li>Legal or regulatory requirements</li>
                    <li>Industry best practices</li>
                    <li>Technical capabilities</li>
                </ul>
                <p>We will notify you of material changes through our website and, where appropriate, via email.</p>
            </div>

            <!-- Contact -->
            <div class="legal-section">
                <h2>14. Contact Us</h2>
                <p>For questions about GDPR compliance or to exercise your rights:</p>

                <div class="contact-grid">
                    <div class="contact-item">
                        <h4><i class="fas fa-shield-alt"></i> Data Protection Officer</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-user-shield"></i> Privacy Team</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-file-alt"></i> Data Subject Request</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                </div>
            </div>

            <!-- Acknowledgment -->
            <div class="legal-section acknowledgment-section">
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <strong>GDPR Commitment:</strong> VettlyGlobal is committed to upholding the highest standards of data protection and respecting your privacy rights under GDPR. We continuously monitor and improve our compliance practices.
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.legal-content {
    background: var(--bg-light);
    padding: 40px 0;
}

.legal-document {
    /* max-width: 820px; */
    margin: 0 auto;
    background: white;
    padding: 48px 50px;
    border-radius: 10px;
    box-shadow: 0 1px 8px rgba(0,0,0,0.06);
}

.legal-section {
    margin-bottom: 32px;
    padding-bottom: 28px;
    border-bottom: 1px solid #eee;
}

.legal-section:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.legal-section h2 {
    font-size: 1.2rem;
    color: var(--text-primary);
    margin-bottom: 16px;
    font-weight: 700;
    letter-spacing: -0.2px;
}

.legal-section h3 {
    font-size: 0.95rem;
    color: var(--text-primary);
    margin-top: 20px;
    margin-bottom: 8px;
    font-weight: 600;
}

.legal-section h4 {
    font-size: 0.9rem;
    color: var(--text-primary);
    margin-top: 16px;
    margin-bottom: 6px;
    font-weight: 600;
}

.legal-section p {
    font-size: 0.875rem;
    line-height: 1.7;
    color: var(--text-secondary);
    margin-bottom: 12px;
}

.legal-section ul, .legal-section ol {
    margin-left: 18px;
    margin-bottom: 14px;
}

.legal-section li {
    font-size: 0.875rem;
    line-height: 1.65;
    color: var(--text-secondary);
    margin-bottom: 5px;
}

.legal-section li strong {
    color: var(--text-primary);
}

.alert {
    padding: 14px 18px;
    border-radius: 6px;
    margin: 16px 0;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 0.85rem;
    line-height: 1.6;
}

.alert i {
    font-size: 0.95rem;
    margin-top: 2px;
    flex-shrink: 0;
}

.alert p {
    font-size: 0.85rem;
    margin-bottom: 0;
    line-height: 1.6;
}

.alert-info {
    background: #f0f7ff;
    border-left: 3px solid #2196F3;
    color: #1565C0;
}

.alert-warning {
    background: #fff8f0;
    border-left: 3px solid #FF9800;
    color: #bf5600;
}

.alert-success {
    background: #f0f9f1;
    border-left: 3px solid #4CAF50;
    color: #2E7D32;
}

.contact-box {
    background: var(--bg-light);
    padding: 20px;
    border-radius: 6px;
    border-left: 3px solid #1976D2;
    margin-top: 16px;
}

.contact-box p {
    margin-bottom: 8px;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 24px;
}

.contact-item {
    background: var(--bg-light);
    padding: 20px;
    border-radius: 6px;
    text-align: center;
}

.contact-item h4 {
    color: #1976D2;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 0.9rem;
}

.contact-item p {
    font-size: 0.85rem;
    margin-bottom: 0;
}

.acknowledgment-section {
    margin-top: 24px;
    padding-top: 24px;
    border-top: none;
    border-bottom: none;
}

/* Responsive */
@media (max-width: 768px) {
    .legal-document {
        padding: 28px 22px;
    }

    .legal-section {
        margin-bottom: 24px;
        padding-bottom: 20px;
    }

    .legal-section h2 {
        font-size: 1.1rem;
    }

    .legal-section h3 {
        font-size: 0.9rem;
    }

    .legal-section p,
    .legal-section li {
        font-size: 0.84rem;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
