<?php
/**
 * VettlyGlobal - Terms & Conditions
 */

// Include configuration
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'Terms & Conditions';
$meta_description = 'VettlyGlobal Terms & Conditions - Review the legal terms and conditions governing the use of our risk solutions and data intelligence services.';

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
                <a href="<?php echo url('legal/terms-conditions'); ?>" style="color: white;">Legal</a>
                <span style="margin: 0 10px;">/</span>
                <span>Terms & Conditions</span>
            </div>
            <h1 style="color: white; font-size: 2.5rem; margin-bottom: 15px;">Terms & Conditions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Review the legal terms and conditions governing your use of VettlyGlobal's risk solutions and data intelligence services.
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 12px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>
</section>

<!-- Terms Content -->
<section class="section legal-content">
    <div class="container">
        <div class="legal-document">

            <!-- Introduction -->
            <div class="legal-section">
                <h2>1. Acceptance of Terms</h2>
                <p>Welcome to VettlyGlobal. These Terms and Conditions ("Terms," "Agreement") govern your access to and use of VettlyGlobal's websites, services, products, and applications (collectively, the "Services"). By accessing or using our Services, you agree to be bound by these Terms.</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Important:</strong> If you do not agree to these Terms, you must not access or use our Services. Your continued use of the Services constitutes acceptance of any modifications to these Terms.
                </div>
                <p>These Terms apply to all users of the Services, including but not limited to:</p>
                <ul>
                    <li>Corporate entities and organizations</li>
                    <li>Financial institutions and service providers</li>
                    <li>Healthcare providers and facilities</li>
                    <li>Government agencies and departments</li>
                    <li>Individual users and consumers</li>
                    <li>Third-party partners and resellers</li>
                </ul>
            </div>

            <!-- Definitions -->
            <div class="legal-section">
                <h2>2. Definitions</h2>
                <p>For the purposes of these Terms:</p>
                <ul>
                    <li><strong>"Company," "we," "us," or "our"</strong> refers to VettlyGlobal and its affiliates.</li>
                    <li><strong>"User," "you," or "your"</strong> refers to any individual or entity accessing or using our Services.</li>
                    <li><strong>"Services"</strong> includes all products, platforms, applications, APIs, and services provided by VettlyGlobal.</li>
                    <li><strong>"Content"</strong> means all data, information, reports, documents, and materials provided through our Services.</li>
                    <li><strong>"Account"</strong> means the registered account created to access our Services.</li>
                    <li><strong>"Authorized Users"</strong> means individuals authorized by you to access the Services under your Account.</li>
                </ul>
            </div>

            <!-- Eligibility -->
            <div class="legal-section">
                <h2>3. Eligibility and Registration</h2>

                <h3>3.1 Age and Capacity</h3>
                <p>You must be at least 18 years of age and have the legal capacity to enter into binding contracts to use our Services. By using the Services, you represent and warrant that you meet these requirements.</p>

                <h3>3.2 Account Registration</h3>
                <p>To access certain Services, you must register for an Account. You agree to:</p>
                <ul>
                    <li>Provide accurate, current, and complete information during registration</li>
                    <li>Maintain and promptly update your account information</li>
                    <li>Maintain the security and confidentiality of your login credentials</li>
                    <li>Immediately notify us of any unauthorized access or security breach</li>
                    <li>Accept responsibility for all activities conducted through your Account</li>
                </ul>

                <h3>3.3 Business Verification</h3>
                <p>For corporate or enterprise accounts, we may require additional verification including:</p>
                <ul>
                    <li>Business registration documents and licenses</li>
                    <li>Tax identification numbers and financial information</li>
                    <li>Background checks on authorized representatives</li>
                    <li>Compliance certifications and regulatory approvals</li>
                </ul>
            </div>

            <!-- Services Description -->
            <div class="legal-section">
                <h2>4. Description of Services</h2>

                <h3>4.1 Service Offerings</h3>
                <p>VettlyGlobal provides risk solutions and data intelligence services including:</p>
                <ul>
                    <li><strong>Identity Verification:</strong> Multi-factor authentication, document verification, biometric validation</li>
                    <li><strong>Fraud Detection:</strong> Transaction monitoring, pattern recognition, anomaly detection</li>
                    <li><strong>Risk Assessment:</strong> Credit scoring, background checks, compliance screening</li>
                    <li><strong>Data Intelligence:</strong> Analytics, reporting, predictive modeling</li>
                    <li><strong>Compliance Solutions:</strong> AML/KYC, regulatory reporting, audit support</li>
                </ul>

                <h3>4.2 Service Levels</h3>
                <p>Service levels and features vary by subscription tier and contract agreement. Specific service level agreements (SLAs) are documented separately for enterprise customers.</p>

                <h3>4.3 Service Modifications</h3>
                <p>We reserve the right to modify, suspend, or discontinue any aspect of the Services at any time, with or without notice. We are not liable for any modification, suspension, or discontinuation of the Services.</p>
            </div>

            <!-- User Obligations -->
            <div class="legal-section">
                <h2>5. User Obligations and Acceptable Use</h2>

                <h3>5.1 Permitted Use</h3>
                <p>You agree to use the Services only for lawful purposes and in accordance with these Terms. You must:</p>
                <ul>
                    <li>Comply with all applicable laws, regulations, and industry standards</li>
                    <li>Obtain necessary consents and authorizations before submitting data</li>
                    <li>Use the Services in a manner consistent with your stated business purpose</li>
                    <li>Maintain appropriate data security and privacy measures</li>
                    <li>Cooperate with our security and compliance audits</li>
                </ul>

                <h3>5.2 Prohibited Activities</h3>
                <p>You agree NOT to:</p>
                <ul>
                    <li>Violate any laws, regulations, or third-party rights</li>
                    <li>Use the Services for illegal, fraudulent, or unauthorized purposes</li>
                    <li>Attempt to gain unauthorized access to our systems or networks</li>
                    <li>Interfere with or disrupt the Services or servers</li>
                    <li>Use automated systems to access the Services without authorization</li>
                    <li>Reverse engineer, decompile, or disassemble any part of the Services</li>
                    <li>Remove or obscure any proprietary notices or labels</li>
                    <li>Resell, sublicense, or distribute the Services without authorization</li>
                    <li>Use the Services to develop competing products or services</li>
                    <li>Submit false, misleading, or inaccurate information</li>
                    <li>Harass, threaten, or harm others</li>
                    <li>Transmit viruses, malware, or harmful code</li>
                </ul>

                <h3>5.3 Compliance with FCRA</h3>
                <p>If you are using our Services for purposes covered by the Fair Credit Reporting Act (FCRA) or similar laws, you certify that you will:</p>
                <ul>
                    <li>Use the information only for permissible purposes under the FCRA</li>
                    <li>Obtain required authorizations and provide required disclosures</li>
                    <li>Comply with adverse action notice requirements</li>
                    <li>Maintain appropriate certifications and documentation</li>
                </ul>
            </div>

            <!-- Payment Terms -->
            <div class="legal-section">
                <h2>6. Payment and Fees</h2>

                <h3>6.1 Pricing</h3>
                <p>Fees for the Services are based on your subscription plan or contract agreement. Current pricing is available on our website or in your contract documents.</p>

                <h3>6.2 Payment Terms</h3>
                <ul>
                    <li>Fees are billed in advance on a subscription basis (monthly, annually, or as specified)</li>
                    <li>Payment is due upon invoice or as specified in your agreement</li>
                    <li>All fees are non-refundable unless otherwise stated</li>
                    <li>Late payments may incur interest charges and service suspension</li>
                    <li>You are responsible for all taxes associated with your use of the Services</li>
                </ul>

                <h3>6.3 Fee Changes</h3>
                <p>We reserve the right to modify our fees with 30 days' notice. Continued use of the Services after fee changes constitutes acceptance of the new fees.</p>

                <h3>6.4 Usage-Based Charges</h3>
                <p>Certain Services may incur additional charges based on usage volume, API calls, or data queries. You will be notified of usage-based fees before they apply.</p>
            </div>

            <!-- Intellectual Property -->
            <div class="legal-section">
                <h2>7. Intellectual Property Rights</h2>

                <h3>7.1 Our Intellectual Property</h3>
                <p>The Services, including all software, technology, data, content, trademarks, and intellectual property, are owned by VettlyGlobal and protected by copyright, trademark, patent, and other intellectual property laws.</p>

                <h3>7.2 Limited License</h3>
                <p>We grant you a limited, non-exclusive, non-transferable, revocable license to access and use the Services for your internal business purposes, subject to these Terms.</p>

                <h3>7.3 User Data</h3>
                <p>You retain ownership of all data you submit to the Services. By submitting data, you grant us a worldwide, royalty-free license to use, process, and store the data to provide the Services.</p>

                <h3>7.4 Feedback</h3>
                <p>If you provide feedback, suggestions, or ideas about the Services, we may use them without obligation or compensation to you.</p>
            </div>

            <!-- Data and Privacy -->
            <div class="legal-section">
                <h2>8. Data Protection and Privacy</h2>

                <h3>8.1 Privacy Policy</h3>
                <p>Our collection and use of personal information is governed by our <a href="<?php echo url('legal/privacy-policy'); ?>">Privacy Policy</a>, which is incorporated into these Terms by reference.</p>

                <h3>8.2 Data Security</h3>
                <p>We implement reasonable security measures to protect your data. However, we cannot guarantee absolute security, and you acknowledge the inherent security risks of internet transmission.</p>

                <h3>8.3 Data Processing</h3>
                <p>By using the Services, you authorize us to process data on your behalf in accordance with applicable data protection laws, including GDPR and CCPA.</p>

                <h3>8.4 Data Accuracy</h3>
                <p>While we strive to maintain accurate data, we do not guarantee the accuracy, completeness, or timeliness of information provided through the Services. You are responsible for verifying information before making decisions based on it.</p>
            </div>

            <!-- Warranties and Disclaimers -->
            <div class="legal-section">
                <h2>9. Warranties and Disclaimers</h2>

                <h3>9.1 Service Warranty</h3>
                <p>We warrant that the Services will perform substantially in accordance with our documentation when used as intended.</p>

                <h3>9.2 DISCLAIMER OF WARRANTIES</h3>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p><strong>THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED. TO THE MAXIMUM EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, INCLUDING:</strong></p>
                </div>
                <ul>
                    <li>Implied warranties of merchantability, fitness for a particular purpose, and non-infringement</li>
                    <li>Warranties regarding accuracy, reliability, or completeness of data</li>
                    <li>Warranties regarding uninterrupted or error-free operation</li>
                    <li>Warranties regarding security or absence of viruses</li>
                </ul>

                <h3>9.3 Third-Party Services</h3>
                <p>The Services may integrate with third-party services. We are not responsible for third-party services and make no warranties regarding them.</p>
            </div>

            <!-- Limitation of Liability -->
            <div class="legal-section">
                <h2>10. Limitation of Liability</h2>

                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p><strong>TO THE MAXIMUM EXTENT PERMITTED BY LAW:</strong></p>
                </div>

                <h3>10.1 Exclusion of Damages</h3>
                <p>IN NO EVENT SHALL VETTLYGLOBAL BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING:</p>
                <ul>
                    <li>Loss of profits, revenue, or business opportunities</li>
                    <li>Loss of data or information</li>
                    <li>Business interruption</li>
                    <li>Cost of substitute services</li>
                    <li>Reputational harm</li>
                </ul>

                <h3>10.2 Cap on Liability</h3>
                <p>OUR TOTAL LIABILITY FOR ALL CLAIMS ARISING FROM OR RELATED TO THE SERVICES SHALL NOT EXCEED THE AMOUNT YOU PAID TO US IN THE 12 MONTHS PRECEDING THE EVENT GIVING RISE TO LIABILITY, OR $1,000, WHICHEVER IS GREATER.</p>

                <h3>10.3 Exceptions</h3>
                <p>These limitations do not apply to:</p>
                <ul>
                    <li>Liability for death or personal injury caused by negligence</li>
                    <li>Liability for fraud or fraudulent misrepresentation</li>
                    <li>Liability that cannot be excluded or limited by law</li>
                </ul>
            </div>

            <!-- Indemnification -->
            <div class="legal-section">
                <h2>11. Indemnification</h2>
                <p>You agree to indemnify, defend, and hold harmless VettlyGlobal, its affiliates, officers, directors, employees, agents, and partners from any claims, damages, losses, liabilities, and expenses (including reasonable attorneys' fees) arising from:</p>
                <ul>
                    <li>Your use or misuse of the Services</li>
                    <li>Your violation of these Terms</li>
                    <li>Your violation of any laws or regulations</li>
                    <li>Your violation of third-party rights</li>
                    <li>Your data or content submitted to the Services</li>
                    <li>Your negligence or willful misconduct</li>
                </ul>
            </div>

            <!-- Term and Termination -->
            <div class="legal-section">
                <h2>12. Term and Termination</h2>

                <h3>12.1 Term</h3>
                <p>These Terms commence when you first access the Services and continue until terminated as described below.</p>

                <h3>12.2 Termination by You</h3>
                <p>You may terminate your Account at any time by contacting us. Termination does not relieve you of payment obligations for the current billing period.</p>

                <h3>12.3 Termination by Us</h3>
                <p>We may suspend or terminate your access to the Services immediately, without notice, if:</p>
                <ul>
                    <li>You breach these Terms</li>
                    <li>You fail to pay fees when due</li>
                    <li>Your use poses security or legal risks</li>
                    <li>Required by law or regulatory authority</li>
                    <li>We discontinue the Services</li>
                </ul>

                <h3>12.4 Effect of Termination</h3>
                <p>Upon termination:</p>
                <ul>
                    <li>Your right to access the Services immediately ceases</li>
                    <li>We may delete your data after a reasonable transition period</li>
                    <li>You remain liable for all fees incurred before termination</li>
                    <li>Provisions that by their nature should survive will survive termination</li>
                </ul>
            </div>

            <!-- Dispute Resolution -->
            <div class="legal-section">
                <h2>13. Dispute Resolution</h2>

                <h3>13.1 Informal Resolution</h3>
                <p>Before initiating formal proceedings, you agree to contact us to resolve disputes informally. We will attempt to resolve disputes through good faith negotiation.</p>

                <h3>13.2 Arbitration</h3>
                <p>Any disputes that cannot be resolved informally shall be resolved through binding arbitration in accordance with the rules of the American Arbitration Association. The arbitration shall be conducted in [City, State].</p>

                <h3>13.3 Class Action Waiver</h3>
                <p>You agree to resolve disputes on an individual basis only. You waive any right to participate in class actions, class arbitrations, or representative proceedings.</p>

                <h3>13.4 Exceptions</h3>
                <p>Either party may seek injunctive relief in court to prevent irreparable harm pending arbitration.</p>
            </div>

            <!-- Governing Law -->
            <div class="legal-section">
                <h2>14. Governing Law and Jurisdiction</h2>
                <p>These Terms are governed by the laws of [State], United States, without regard to conflict of law principles. Any legal action must be brought in the state or federal courts located in [City, State].</p>
            </div>

            <!-- General Provisions -->
            <div class="legal-section">
                <h2>15. General Provisions</h2>

                <h3>15.1 Entire Agreement</h3>
                <p>These Terms, together with our Privacy Policy and any additional agreements, constitute the entire agreement between you and VettlyGlobal regarding the Services.</p>

                <h3>15.2 Amendments</h3>
                <p>We may modify these Terms at any time by posting updated Terms on our website. Material changes will be notified via email or prominent notice. Continued use after changes constitutes acceptance.</p>

                <h3>15.3 Assignment</h3>
                <p>You may not assign or transfer these Terms without our written consent. We may assign these Terms without restriction.</p>

                <h3>15.4 Severability</h3>
                <p>If any provision of these Terms is found invalid or unenforceable, the remaining provisions will remain in full force and effect.</p>

                <h3>15.5 Waiver</h3>
                <p>Our failure to enforce any provision of these Terms does not constitute a waiver of that provision or any other provision.</p>

                <h3>15.6 Force Majeure</h3>
                <p>We are not liable for failure to perform due to circumstances beyond our reasonable control, including natural disasters, war, terrorism, labor disputes, or government actions.</p>

                <h3>15.7 Export Compliance</h3>
                <p>You agree to comply with all applicable export control laws and regulations. You may not export or re-export the Services to prohibited countries or persons.</p>

                <h3>15.8 Government Users</h3>
                <p>If you are a U.S. government entity, the Services are "commercial items" as defined in FAR 2.101, and government use is subject to these Terms.</p>

                <h3>15.9 Notices</h3>
                <p>Notices to you may be sent via email or posted on our website. Notices to us must be sent to:</p>
                <?php /* <div class="contact-box">
                    <p><strong>VettlyGlobal Legal Department</strong><br>
                    COMPANY_ADDRESS<br>
                    Email: <a href="mailto:info@vettlyglobal.com">info@vettlyglobal.com</a></p>
                </div> */ ?>
            </div>

            <!-- Contact -->
            <?php /* Contact Information section removed */ ?>

            <!-- Acknowledgment -->
            <div class="legal-section acknowledgment-section">
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i>
                    <strong>By using VettlyGlobal Services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</strong>
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
    border-left: 3px solid var(--primary-color);
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
    color: var(--primary-color);
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
