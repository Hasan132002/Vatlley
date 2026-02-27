<?php
/**
 * VettlyGlobal - HIPAA Compliance
 */

// Include configuration
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'HIPAA Compliance';
$meta_description = 'VettlyGlobal HIPAA Compliance - Learn about our commitment to the Health Insurance Portability and Accountability Act and protection of protected health information.';

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
                <a href="<?php echo url('legal/hipaa-compliance'); ?>" style="color: white;">Legal</a>
                <span style="margin: 0 10px;">/</span>
                <span>HIPAA Compliance</span>
            </div>
            <h1 style="color: white; font-size: 2.5rem; margin-bottom: 15px;">HIPAA Compliance</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Health Insurance Portability and Accountability Act - Our commitment to protecting healthcare data and ensuring regulatory compliance.
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 12px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>
</section>

<!-- HIPAA Content -->
<section class="section legal-content">
    <div class="container">
        <div class="legal-document">

            <!-- Introduction -->
            <div class="legal-section">
                <h2>1. Our Commitment to HIPAA Compliance</h2>
                <p>VettlyGlobal is committed to protecting the privacy and security of Protected Health Information (PHI) in accordance with the Health Insurance Portability and Accountability Act of 1996 (HIPAA), as amended by the Health Information Technology for Economic and Clinical Health Act (HITECH Act).</p>
                <div class="alert alert-success">
                    <i class="fas fa-shield-alt"></i>
                    <strong>HIPAA Compliant:</strong> VettlyGlobal maintains comprehensive policies, procedures, and technical safeguards to ensure full compliance with HIPAA Privacy Rule, Security Rule, and Breach Notification Rule.
                </div>
                <p>This document outlines our HIPAA compliance framework and demonstrates our commitment to protecting the confidentiality, integrity, and availability of electronic Protected Health Information (ePHI).</p>
            </div>

            <!-- HIPAA Overview -->
            <div class="legal-section">
                <h2>2. HIPAA Regulations Overview</h2>

                <h3>2.1 HIPAA Privacy Rule</h3>
                <p>The Privacy Rule (45 CFR Part 160 and Part 164, Subparts A and E) establishes national standards for the protection of individually identifiable health information, including:</p>
                <ul>
                    <li>Permissible uses and disclosures of PHI</li>
                    <li>Individual rights regarding their health information</li>
                    <li>Requirements for privacy notices and authorizations</li>
                    <li>Administrative, physical, and technical safeguards</li>
                </ul>

                <h3>2.2 HIPAA Security Rule</h3>
                <p>The Security Rule (45 CFR Part 164, Subparts A and C) establishes standards for protecting electronic Protected Health Information (ePHI):</p>
                <ul>
                    <li>Administrative safeguards</li>
                    <li>Physical safeguards</li>
                    <li>Technical safeguards</li>
                    <li>Organizational requirements</li>
                    <li>Policies, procedures, and documentation</li>
                </ul>

                <h3>2.3 HIPAA Breach Notification Rule</h3>
                <p>The Breach Notification Rule (45 CFR Part 164, Subpart D) requires notification of breaches of unsecured PHI to:</p>
                <ul>
                    <li>Affected individuals</li>
                    <li>The Secretary of Health and Human Services (HHS)</li>
                    <li>Media outlets (for breaches affecting 500+ individuals)</li>
                </ul>

                <h3>2.4 HITECH Act</h3>
                <p>The HITECH Act strengthened HIPAA by:</p>
                <ul>
                    <li>Extending obligations to Business Associates</li>
                    <li>Increasing penalties for violations</li>
                    <li>Requiring breach notifications</li>
                    <li>Enhancing enforcement mechanisms</li>
                </ul>
            </div>

            <!-- Business Associate Role -->
            <div class="legal-section">
                <h2>3. VettlyGlobal as a Business Associate</h2>

                <h3>3.1 Business Associate Definition</h3>
                <p>VettlyGlobal acts as a Business Associate when we create, receive, maintain, or transmit PHI on behalf of Covered Entities (healthcare providers, health plans, healthcare clearinghouses) to perform functions or activities including:</p>
                <ul>
                    <li>Identity verification for healthcare providers</li>
                    <li>Background screening for healthcare employees</li>
                    <li>Risk assessment and fraud detection services</li>
                    <li>Data analytics and reporting for healthcare organizations</li>
                    <li>Compliance and credentialing services</li>
                </ul>

                <h3>3.2 Business Associate Obligations</h3>
                <p>As a Business Associate, we are required to:</p>
                <ul>
                    <li>Comply with applicable HIPAA Privacy and Security Rule requirements</li>
                    <li>Use and disclose PHI only as permitted by the Business Associate Agreement (BAA)</li>
                    <li>Implement appropriate safeguards to prevent unauthorized use or disclosure</li>
                    <li>Report security incidents and breaches to the Covered Entity</li>
                    <li>Make PHI available to individuals upon request</li>
                    <li>Account for disclosures of PHI as required</li>
                    <li>Make internal practices and records available for HHS compliance reviews</li>
                    <li>Ensure subcontractors comply with HIPAA requirements</li>
                </ul>

                <h3>3.3 Business Associate Agreements (BAAs)</h3>
                <p>We enter into HIPAA-compliant Business Associate Agreements with all Covered Entities and healthcare clients. Our BAAs include:</p>
                <ul>
                    <li>Permitted and required uses and disclosures of PHI</li>
                    <li>Responsibilities for safeguarding PHI</li>
                    <li>Breach notification procedures and timelines</li>
                    <li>Individual access and amendment rights</li>
                    <li>Minimum necessary requirements</li>
                    <li>Subcontractor obligations</li>
                    <li>Termination provisions</li>
                    <li>Return or destruction of PHI upon termination</li>
                </ul>
                <p>To request a Business Associate Agreement, please <a href="<?php echo url('contact'); ?>">contact us</a>.</p>
            </div>

            <!-- Administrative Safeguards -->
            <div class="legal-section">
                <h2>4. Administrative Safeguards</h2>
                <p>We implement comprehensive administrative safeguards as required by 45 CFR § 164.308:</p>

                <h3>4.1 Security Management Process</h3>
                <ul>
                    <li><strong>Risk Analysis:</strong> Annual comprehensive risk assessments of ePHI threats and vulnerabilities</li>
                    <li><strong>Risk Management:</strong> Implementation of security measures to reduce risks to reasonable and appropriate levels</li>
                    <li><strong>Sanction Policy:</strong> Disciplinary actions for workforce members who violate security policies</li>
                    <li><strong>Information System Activity Review:</strong> Regular review of system logs, access reports, and security incidents</li>
                </ul>

                <h3>4.2 Assigned Security Responsibility</h3>
                <p>We have designated a Security Officer responsible for developing, implementing, and maintaining our HIPAA security program:</p>
                <div class="contact-box">
                    <p><strong>HIPAA Security Officer</strong><br>
                    <a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                </div>

                <h3>4.3 Workforce Security</h3>
                <ul>
                    <li><strong>Authorization/Supervision:</strong> Procedures for workforce authorization and supervision</li>
                    <li><strong>Workforce Clearance:</strong> Background checks and clearance procedures</li>
                    <li><strong>Termination Procedures:</strong> Procedures for terminating access upon employment termination</li>
                </ul>

                <h3>4.4 Information Access Management</h3>
                <ul>
                    <li><strong>Isolating Healthcare Clearinghouse Functions:</strong> Separation of clearinghouse functions where applicable</li>
                    <li><strong>Access Authorization:</strong> Formal authorization processes for ePHI access</li>
                    <li><strong>Access Establishment and Modification:</strong> Procedures for granting, reviewing, and modifying access rights</li>
                </ul>

                <h3>4.5 Security Awareness and Training</h3>
                <p>All workforce members receive comprehensive HIPAA training covering:</p>
                <ul>
                    <li>Security reminders (periodic security updates)</li>
                    <li>Protection from malicious software</li>
                    <li>Log-in monitoring and password management</li>
                    <li>Annual refresher training</li>
                    <li>Role-specific training for employees handling PHI</li>
                </ul>

                <h3>4.6 Security Incident Procedures</h3>
                <ul>
                    <li>Documented incident response and reporting procedures</li>
                    <li>Security incident identification and escalation protocols</li>
                    <li>Incident investigation and root cause analysis</li>
                    <li>Corrective action and mitigation procedures</li>
                </ul>

                <h3>4.7 Contingency Plan</h3>
                <ul>
                    <li><strong>Data Backup Plan:</strong> Regular encrypted backups of ePHI with tested recovery procedures</li>
                    <li><strong>Disaster Recovery Plan:</strong> Procedures for restoring access to ePHI after emergencies</li>
                    <li><strong>Emergency Mode Operation Plan:</strong> Procedures for continuing critical operations during emergencies</li>
                    <li><strong>Testing and Revision:</strong> Annual testing and updates of contingency plans</li>
                    <li><strong>Applications and Data Criticality Analysis:</strong> Assessment of critical systems and data</li>
                </ul>

                <h3>4.8 Evaluation</h3>
                <p>We conduct periodic technical and non-technical evaluations of our security controls:</p>
                <ul>
                    <li>Annual security risk assessments</li>
                    <li>Quarterly internal audits</li>
                    <li>Annual external security assessments</li>
                    <li>Penetration testing and vulnerability scanning</li>
                </ul>

                <h3>4.9 Business Associate Contracts</h3>
                <p>We ensure all subcontractors and vendors that handle PHI:</p>
                <ul>
                    <li>Sign HIPAA-compliant Business Associate Agreements</li>
                    <li>Implement appropriate safeguards</li>
                    <li>Comply with applicable HIPAA requirements</li>
                    <li>Report security incidents and breaches</li>
                </ul>
            </div>

            <!-- Physical Safeguards -->
            <div class="legal-section">
                <h2>5. Physical Safeguards</h2>
                <p>We implement physical safeguards as required by 45 CFR § 164.310:</p>

                <h3>5.1 Facility Access Controls</h3>
                <ul>
                    <li><strong>Contingency Operations:</strong> Procedures for facility access during emergencies</li>
                    <li><strong>Facility Security Plan:</strong> Policies for safeguarding facilities containing ePHI</li>
                    <li><strong>Access Control and Validation:</strong> Procedures for controlling and validating physical access</li>
                    <li><strong>Maintenance Records:</strong> Documentation of facility repairs and modifications</li>
                </ul>

                <h3>5.2 Workstation Use</h3>
                <ul>
                    <li>Policies specifying proper use of workstations accessing ePHI</li>
                    <li>Screen privacy filters and automatic screen locks</li>
                    <li>Clear desk policies and secure storage requirements</li>
                    <li>Prohibition of unauthorized devices</li>
                </ul>

                <h3>5.3 Workstation Security</h3>
                <ul>
                    <li>Physical safeguards to limit workstation access to authorized users</li>
                    <li>Cable locks and secure mounting</li>
                    <li>Restricted areas for sensitive workstations</li>
                    <li>Video surveillance and access logging</li>
                </ul>

                <h3>5.4 Device and Media Controls</h3>
                <ul>
                    <li><strong>Disposal:</strong> Secure disposal and destruction procedures for hardware and media</li>
                    <li><strong>Media Re-use:</strong> Procedures for sanitizing devices before re-use</li>
                    <li><strong>Accountability:</strong> Asset inventory and tracking systems</li>
                    <li><strong>Data Backup and Storage:</strong> Secure backup procedures and offsite storage</li>
                </ul>

                <h3>5.5 Data Center Security</h3>
                <p>Our data centers maintain industry-leading physical security:</p>
                <ul>
                    <li>24/7 security personnel and video surveillance</li>
                    <li>Multi-factor access control systems (badge + biometric)</li>
                    <li>Mantrap entryways and visitor escort requirements</li>
                    <li>Environmental controls (fire suppression, HVAC, power redundancy)</li>
                    <li>SOC 2 Type II certified data centers</li>
                    <li>Regular security audits and compliance assessments</li>
                </ul>
            </div>

            <!-- Technical Safeguards -->
            <div class="legal-section">
                <h2>6. Technical Safeguards</h2>
                <p>We implement technical safeguards as required by 45 CFR § 164.312:</p>

                <h3>6.1 Access Control</h3>
                <ul>
                    <li><strong>Unique User Identification:</strong> Unique usernames for all individuals accessing ePHI</li>
                    <li><strong>Emergency Access Procedure:</strong> Break-glass procedures for emergency access</li>
                    <li><strong>Automatic Logoff:</strong> Automatic session termination after inactivity</li>
                    <li><strong>Encryption and Decryption:</strong> Encryption of ePHI at rest and in transit</li>
                </ul>

                <h3>6.2 Audit Controls</h3>
                <ul>
                    <li>Comprehensive logging of system activity and ePHI access</li>
                    <li>Centralized log management and analysis</li>
                    <li>Regular review of audit logs for suspicious activity</li>
                    <li>Log retention for minimum of 6 years</li>
                    <li>Tamper-proof audit trail mechanisms</li>
                </ul>

                <h3>6.3 Integrity Controls</h3>
                <ul>
                    <li><strong>Mechanism to Authenticate ePHI:</strong> Digital signatures and checksums to verify data integrity</li>
                    <li>Version control and change tracking</li>
                    <li>Data validation and error checking</li>
                    <li>Protection against unauthorized alteration or destruction</li>
                </ul>

                <h3>6.4 Person or Entity Authentication</h3>
                <ul>
                    <li>Multi-factor authentication (MFA) for all ePHI access</li>
                    <li>Strong password policies (minimum 12 characters, complexity requirements)</li>
                    <li>Regular password rotation (90 days)</li>
                    <li>Account lockout after failed login attempts</li>
                    <li>Biometric authentication options</li>
                </ul>

                <h3>6.5 Transmission Security</h3>
                <ul>
                    <li><strong>Integrity Controls:</strong> Measures to ensure ePHI is not improperly modified during transmission</li>
                    <li><strong>Encryption:</strong> TLS 1.3 encryption for all ePHI transmissions</li>
                    <li>Secure file transfer protocols (SFTP, HTTPS)</li>
                    <li>Virtual Private Networks (VPNs) for remote access</li>
                    <li>End-to-end encryption for email communications containing PHI</li>
                </ul>

                <h3>6.6 Encryption Standards</h3>
                <p>We employ industry-standard encryption to protect ePHI:</p>
                <ul>
                    <li><strong>Data at Rest:</strong> AES-256 encryption</li>
                    <li><strong>Data in Transit:</strong> TLS 1.3 with strong cipher suites</li>
                    <li><strong>Database Encryption:</strong> Transparent Data Encryption (TDE)</li>
                    <li><strong>Backup Encryption:</strong> Encrypted backups with secure key management</li>
                    <li><strong>Key Management:</strong> Hardware Security Modules (HSMs) for encryption key storage</li>
                </ul>
            </div>

            <!-- Breach Notification -->
            <div class="legal-section">
                <h2>7. Breach Notification Procedures</h2>

                <h3>7.1 Breach Definition</h3>
                <p>A breach is the unauthorized acquisition, access, use, or disclosure of PHI that compromises the security or privacy of the information, unless:</p>
                <ul>
                    <li>The PHI was encrypted pursuant to HHS guidance</li>
                    <li>There is a low probability that the PHI has been compromised (based on risk assessment)</li>
                </ul>

                <h3>7.2 Breach Discovery and Assessment</h3>
                <p>Upon discovering a potential breach, we:</p>
                <ul>
                    <li>Immediately initiate incident response procedures</li>
                    <li>Contain the breach and mitigate harm</li>
                    <li>Conduct a thorough risk assessment within 24 hours</li>
                    <li>Document the breach and assessment findings</li>
                    <li>Determine notification requirements</li>
                </ul>

                <h3>7.3 Risk Assessment Factors</h3>
                <p>We assess the following factors to determine breach probability:</p>
                <ul>
                    <li>Nature and extent of PHI involved</li>
                    <li>Identity of unauthorized person(s) who accessed PHI</li>
                    <li>Whether PHI was actually acquired or viewed</li>
                    <li>Extent to which risk has been mitigated</li>
                </ul>

                <h3>7.4 Notification to Covered Entities</h3>
                <p>As a Business Associate, we notify Covered Entities of discovered breaches:</p>
                <ul>
                    <li><strong>Timing:</strong> Without unreasonable delay and no later than 60 days from discovery</li>
                    <li><strong>Content:</strong> Identification of each individual affected, brief description of the breach, recommended steps, contact information</li>
                    <li><strong>Method:</strong> Email, secure portal notification, or as specified in BAA</li>
                </ul>

                <h3>7.5 Covered Entity Responsibilities</h3>
                <p>The Covered Entity is responsible for:</p>
                <ul>
                    <li>Notifying affected individuals within 60 days</li>
                    <li>Notifying HHS (immediately if 500+ individuals affected, annually if fewer)</li>
                    <li>Notifying media outlets (if 500+ individuals in a jurisdiction affected)</li>
                </ul>

                <h3>7.6 Documentation</h3>
                <p>We maintain documentation of all breaches, including:</p>
                <ul>
                    <li>Date of breach discovery</li>
                    <li>Brief description of the breach</li>
                    <li>Individuals and records affected</li>
                    <li>Risk assessment findings</li>
                    <li>Notification dates and methods</li>
                    <li>Corrective actions taken</li>
                </ul>
            </div>

            <!-- Individual Rights -->
            <div class="legal-section">
                <h2>8. Individual Rights Under HIPAA</h2>

                <h3>8.1 Right of Access</h3>
                <p>Individuals have the right to access their PHI. We assist Covered Entities in fulfilling access requests by:</p>
                <ul>
                    <li>Providing PHI in the requested format (electronic or paper)</li>
                    <li>Responding within 30 days (extendable by 30 days with notice)</li>
                    <li>Providing copies at reasonable cost-based fees</li>
                </ul>

                <h3>8.2 Right to Amend</h3>
                <p>Individuals may request amendments to PHI. We assist Covered Entities by:</p>
                <ul>
                    <li>Accepting and processing amendment requests</li>
                    <li>Incorporating approved amendments into records</li>
                    <li>Notifying relevant parties of amendments</li>
                </ul>

                <h3>8.3 Right to an Accounting of Disclosures</h3>
                <p>We maintain records of PHI disclosures to support accounting of disclosures requests:</p>
                <ul>
                    <li>Date of disclosure</li>
                    <li>Name and address of recipient</li>
                    <li>Brief description of PHI disclosed</li>
                    <li>Purpose of disclosure</li>
                </ul>

                <h3>8.4 Right to Request Restrictions</h3>
                <p>Individuals may request restrictions on uses and disclosures of PHI. We honor restrictions agreed upon by the Covered Entity.</p>

                <h3>8.5 Right to Request Confidential Communications</h3>
                <p>We accommodate reasonable requests for confidential communications as directed by the Covered Entity.</p>
            </div>

            <!-- Minimum Necessary -->
            <div class="legal-section">
                <h2>9. Minimum Necessary Standard</h2>
                <p>We adhere to the minimum necessary principle by:</p>
                <ul>
                    <li>Accessing, using, and disclosing only the minimum PHI necessary to accomplish the intended purpose</li>
                    <li>Implementing role-based access controls to limit PHI exposure</li>
                    <li>Reviewing and limiting routine and recurring disclosures</li>
                    <li>Training workforce members on minimum necessary principles</li>
                    <li>Conducting periodic reviews of access levels</li>
                </ul>
                <p><strong>Exceptions:</strong> The minimum necessary standard does not apply to disclosures to or requests by healthcare providers for treatment purposes.</p>
            </div>

            <!-- Training and Awareness -->
            <div class="legal-section">
                <h2>10. HIPAA Training Program</h2>

                <h3>10.1 Training Requirements</h3>
                <p>All workforce members receive comprehensive HIPAA training:</p>
                <ul>
                    <li><strong>New Hire Training:</strong> Within 30 days of hire or before PHI access</li>
                    <li><strong>Annual Refresher Training:</strong> Required annually for all workforce members</li>
                    <li><strong>Targeted Training:</strong> Role-specific training based on job functions</li>
                    <li><strong>Policy Update Training:</strong> Within 60 days of significant policy changes</li>
                </ul>

                <h3>10.2 Training Topics</h3>
                <ul>
                    <li>HIPAA Privacy and Security Rules overview</li>
                    <li>Permitted uses and disclosures of PHI</li>
                    <li>Individual rights under HIPAA</li>
                    <li>Security safeguards and best practices</li>
                    <li>Breach notification procedures</li>
                    <li>Incident reporting requirements</li>
                    <li>Sanctions for violations</li>
                    <li>Social engineering and phishing awareness</li>
                </ul>

                <h3>10.3 Training Documentation</h3>
                <p>We maintain records of all training activities, including:</p>
                <ul>
                    <li>Training content and materials</li>
                    <li>Dates of training sessions</li>
                    <li>Attendee lists and acknowledgments</li>
                    <li>Test scores and completion certificates</li>
                </ul>
            </div>

            <!-- Compliance Monitoring -->
            <div class="legal-section">
                <h2>11. Compliance Monitoring and Auditing</h2>

                <h3>11.1 Internal Audits</h3>
                <p>We conduct regular internal audits to assess HIPAA compliance:</p>
                <ul>
                    <li>Quarterly compliance assessments</li>
                    <li>Annual comprehensive risk analyses</li>
                    <li>Access control reviews</li>
                    <li>Audit log reviews</li>
                    <li>Physical security inspections</li>
                </ul>

                <h3>11.2 External Assessments</h3>
                <p>We engage independent third parties to conduct:</p>
                <ul>
                    <li>Annual HIPAA security assessments</li>
                    <li>Penetration testing and vulnerability assessments</li>
                    <li>SOC 2 Type II audits</li>
                    <li>HITRUST CSF certification</li>
                </ul>

                <h3>11.3 Corrective Action</h3>
                <p>When deficiencies are identified, we:</p>
                <ul>
                    <li>Document the finding and root cause</li>
                    <li>Develop corrective action plans with timelines</li>
                    <li>Implement remediation measures</li>
                    <li>Verify effectiveness of corrective actions</li>
                    <li>Update policies and procedures as needed</li>
                </ul>
            </div>

            <!-- Sanctions -->
            <div class="legal-section">
                <h2>12. Sanctions and Disciplinary Actions</h2>
                <p>We enforce HIPAA compliance through a progressive discipline policy:</p>

                <h3>12.1 Violations and Sanctions</h3>
                <ul>
                    <li><strong>Minor Violations:</strong> Verbal/written warning, additional training</li>
                    <li><strong>Moderate Violations:</strong> Suspension of access, formal reprimand, probation</li>
                    <li><strong>Serious Violations:</strong> Termination of employment or contract</li>
                    <li><strong>Criminal Violations:</strong> Reporting to law enforcement, termination</li>
                </ul>

                <h3>12.2 Examples of Sanctionable Conduct</h3>
                <ul>
                    <li>Unauthorized access, use, or disclosure of PHI</li>
                    <li>Failure to report security incidents</li>
                    <li>Sharing passwords or access credentials</li>
                    <li>Circumventing security controls</li>
                    <li>Failure to complete required training</li>
                    <li>Violating minimum necessary principles</li>
                </ul>
            </div>

            <!-- Subcontractors -->
            <div class="legal-section">
                <h2>13. Subcontractor Management</h2>
                <p>We ensure all subcontractors that create, receive, maintain, or transmit PHI on our behalf:</p>
                <ul>
                    <li>Sign HIPAA-compliant Business Associate Agreements before accessing PHI</li>
                    <li>Undergo security and compliance assessments</li>
                    <li>Implement required HIPAA safeguards</li>
                    <li>Report security incidents and breaches</li>
                    <li>Participate in audits and compliance reviews</li>
                    <li>Maintain appropriate insurance coverage</li>
                </ul>

                <h3>Approved Subcontractors</h3>
                <p>We maintain a list of approved subcontractors and sub-processors. This list is available to Covered Entities upon request.</p>
            </div>

            <!-- Contact -->
            <div class="legal-section">
                <h2>14. Contact Us</h2>
                <p>For questions about HIPAA compliance or to report security incidents:</p>

                <div class="contact-grid">
                    <div class="contact-item">
                        <h4><i class="fas fa-shield-alt"></i> HIPAA Security Officer</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-user-shield"></i> Privacy Officer</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-exclamation-triangle"></i> Report Incident</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-file-contract"></i> Request BAA</h4>
                        <p><a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                    </div>
                </div>

                <div class="contact-box" style="margin-top: 30px;">
                    <p><strong>VettlyGlobal HIPAA Compliance Office</strong><br>
                    <a href="<?php echo url('contact'); ?>">Contact Us</a></p>
                </div>
            </div>

            <!-- Acknowledgment -->
            <div class="legal-section acknowledgment-section">
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <strong>HIPAA Commitment:</strong> VettlyGlobal is committed to maintaining the highest standards of HIPAA compliance. We continuously monitor, assess, and improve our privacy and security practices to protect the confidentiality, integrity, and availability of Protected Health Information.
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
    border-left: 3px solid #00796B;
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
    color: #00796B;
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
