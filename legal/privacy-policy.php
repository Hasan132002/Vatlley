<?php
/**
 * VettlyGlobal - Privacy Policy
 */

// Include configuration
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'Privacy Policy';
$meta_description = 'VettlyGlobal Privacy Policy - Learn how we collect, use, protect, and manage your personal information in accordance with global privacy regulations.';

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
                <a href="<?php echo url('legal/privacy-policy'); ?>" style="color: white;">Legal</a>
                <span style="margin: 0 10px;">/</span>
                <span>Privacy Policy</span>
            </div>
            <h1 style="color: white; font-size: 2.5rem; margin-bottom: 15px;">Privacy Policy</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Learn how VettlyGlobal collects, uses, and protects your personal information across our risk solutions and data intelligence services.
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 12px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="section legal-content">
    <div class="container">
        <div class="legal-document">

            <!-- Introduction -->
            <div class="legal-section">
                <h2>1. Introduction</h2>
                <p>VettlyGlobal ("we," "us," or "our") is committed to protecting the privacy and security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with us.</p>
                <p>By accessing or using our services, you acknowledge that you have read, understood, and agree to be bound by this Privacy Policy. If you do not agree with our practices, please do not use our services.</p>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i>
                    <strong>Important:</strong> This policy applies to all users of VettlyGlobal services, including corporations, financial institutions, healthcare providers, government agencies, and individual end-users.
                </div>
            </div>

            <!-- Information We Collect -->
            <div class="legal-section">
                <h2>2. Information We Collect</h2>

                <h3>2.1 Information You Provide Directly</h3>
                <p>We collect information that you voluntarily provide to us, including but not limited to:</p>
                <ul>
                    <li><strong>Account Information:</strong> Name, email address, phone number, company name, job title, business address</li>
                    <li><strong>Identity Verification Data:</strong> Government-issued ID numbers, date of birth, social security numbers, passport information, biometric data</li>
                    <li><strong>Financial Information:</strong> Credit card details, bank account information, transaction history, credit reports, financial statements</li>
                    <li><strong>Business Information:</strong> Tax identification numbers, business registration documents, corporate structure information</li>
                    <li><strong>Communication Data:</strong> Messages, inquiries, feedback, support requests, and correspondence with us</li>
                    <li><strong>Employment Information:</strong> Resume, work history, references, background check authorizations</li>
                </ul>

                <h3>2.2 Information Collected Automatically</h3>
                <p>When you access our services, we automatically collect certain information:</p>
                <ul>
                    <li><strong>Device Information:</strong> IP address, browser type, operating system, device identifiers, mobile network information</li>
                    <li><strong>Usage Data:</strong> Pages visited, time spent on pages, click-stream data, search queries, access times</li>
                    <li><strong>Location Data:</strong> Geographic location based on IP address or GPS data (with your consent)</li>
                    <li><strong>Cookies and Tracking Technologies:</strong> Cookie identifiers, web beacons, pixel tags, and similar technologies</li>
                    <li><strong>Log Data:</strong> Server logs, error reports, system activity logs</li>
                </ul>

                <h3>2.3 Information from Third-Party Sources</h3>
                <p>We may collect information from various third-party sources, including:</p>
                <ul>
                    <li>Public databases and records (government, court records, property records)</li>
                    <li>Credit bureaus and financial institutions</li>
                    <li>Data aggregators and information brokers</li>
                    <li>Social media platforms (with your authorization)</li>
                    <li>Background screening providers</li>
                    <li>Business partners and service providers</li>
                </ul>
            </div>

            <!-- How We Use Information -->
            <div class="legal-section">
                <h2>3. How We Use Your Information</h2>
                <p>We use the collected information for the following purposes:</p>

                <h3>3.1 Service Delivery</h3>
                <ul>
                    <li>Provide identity verification and authentication services</li>
                    <li>Conduct fraud detection and prevention analysis</li>
                    <li>Perform risk assessments and credit evaluations</li>
                    <li>Deliver compliance and regulatory reporting services</li>
                    <li>Process background checks and employment screening</li>
                    <li>Execute data analytics and intelligence services</li>
                </ul>

                <h3>3.2 Business Operations</h3>
                <ul>
                    <li>Create and manage user accounts</li>
                    <li>Process transactions and payments</li>
                    <li>Provide customer support and respond to inquiries</li>
                    <li>Send service notifications and updates</li>
                    <li>Improve and optimize our services</li>
                    <li>Conduct research and development</li>
                </ul>

                <h3>3.3 Legal and Security Purposes</h3>
                <ul>
                    <li>Comply with legal obligations and regulatory requirements</li>
                    <li>Enforce our terms of service and policies</li>
                    <li>Protect against fraud, security breaches, and illegal activities</li>
                    <li>Defend our rights and property</li>
                    <li>Respond to legal process and government requests</li>
                </ul>

                <h3>3.4 Marketing and Communications</h3>
                <ul>
                    <li>Send promotional materials and marketing communications (with consent)</li>
                    <li>Conduct surveys and market research</li>
                    <li>Personalize user experience and content</li>
                    <li>Analyze user behavior and preferences</li>
                </ul>
            </div>

            <!-- Information Sharing -->
            <div class="legal-section">
                <h2>4. How We Share Your Information</h2>
                <p>We may share your information in the following circumstances:</p>

                <h3>4.1 Service Providers and Business Partners</h3>
                <p>We share information with trusted third-party service providers who assist us in operating our business, including:</p>
                <ul>
                    <li>Cloud hosting and data storage providers</li>
                    <li>Payment processors and financial institutions</li>
                    <li>Data analytics and business intelligence providers</li>
                    <li>Customer support and communication platforms</li>
                    <li>Marketing and advertising partners</li>
                    <li>Identity verification and fraud prevention services</li>
                </ul>

                <h3>4.2 Legal Requirements</h3>
                <p>We may disclose information when required by law or in response to:</p>
                <ul>
                    <li>Court orders, subpoenas, or legal process</li>
                    <li>Government or regulatory agency requests</li>
                    <li>Law enforcement investigations</li>
                    <li>National security requirements</li>
                    <li>Protection of our rights, property, or safety</li>
                </ul>

                <h3>4.3 Business Transfers</h3>
                <p>In the event of a merger, acquisition, reorganization, bankruptcy, or sale of assets, your information may be transferred to the successor entity.</p>

                <h3>4.4 With Your Consent</h3>
                <p>We may share information with third parties when you provide explicit consent or direct us to do so.</p>
            </div>

            <!-- Data Security -->
            <div class="legal-section">
                <h2>5. Data Security</h2>
                <p>We implement industry-standard security measures to protect your information:</p>
                <ul>
                    <li><strong>Encryption:</strong> Data encryption in transit (TLS/SSL) and at rest (AES-256)</li>
                    <li><strong>Access Controls:</strong> Role-based access controls and multi-factor authentication</li>
                    <li><strong>Network Security:</strong> Firewalls, intrusion detection systems, and regular security audits</li>
                    <li><strong>Physical Security:</strong> Secure data centers with restricted access</li>
                    <li><strong>Employee Training:</strong> Regular security awareness training for all personnel</li>
                    <li><strong>Incident Response:</strong> Documented procedures for security breach notification</li>
                    <li><strong>Third-Party Audits:</strong> Regular independent security assessments and certifications</li>
                </ul>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Important:</strong> While we implement robust security measures, no system is completely secure. We cannot guarantee absolute security of your information.
                </div>
            </div>

            <!-- Data Retention -->
            <div class="legal-section">
                <h2>6. Data Retention</h2>
                <p>We retain your information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p>
                <ul>
                    <li><strong>Active Accounts:</strong> Information is retained while your account is active</li>
                    <li><strong>Legal Obligations:</strong> We retain data to comply with legal, regulatory, tax, and accounting requirements</li>
                    <li><strong>Dispute Resolution:</strong> Information may be retained to resolve disputes and enforce agreements</li>
                    <li><strong>Business Records:</strong> Transaction records are maintained according to industry standards (typically 7 years)</li>
                    <li><strong>Deletion Requests:</strong> Upon request, we will delete your information subject to legal and regulatory requirements</li>
                </ul>
            </div>

            <!-- Your Rights -->
            <div class="legal-section">
                <h2>7. Your Privacy Rights</h2>
                <p>Depending on your location, you may have the following rights regarding your personal information:</p>

                <h3>7.1 Access and Portability</h3>
                <ul>
                    <li>Request access to your personal information</li>
                    <li>Obtain a copy of your data in a portable format</li>
                    <li>Request information about how we process your data</li>
                </ul>

                <h3>7.2 Correction and Update</h3>
                <ul>
                    <li>Correct inaccurate or incomplete information</li>
                    <li>Update your account details and preferences</li>
                </ul>

                <h3>7.3 Deletion and Erasure</h3>
                <ul>
                    <li>Request deletion of your personal information (subject to legal requirements)</li>
                    <li>Exercise the "right to be forgotten" under applicable laws</li>
                </ul>

                <h3>7.4 Restriction and Objection</h3>
                <ul>
                    <li>Restrict or object to certain processing activities</li>
                    <li>Opt-out of marketing communications</li>
                    <li>Withdraw consent for data processing</li>
                </ul>

                <!-- <h3>7.5 Exercising Your Rights</h3>
                <p>To exercise any of these rights, please contact us at:</p>
                <div class="contact-box">
                    <p><strong>Email:</strong> <a href="mailto:info@vettlyglobal.com">info@vettlyglobal.com</a></p>
                    <p><strong>Phone:</strong> <?php echo COMPANY_PHONE; ?></p>
                    <p><strong>Mail:</strong> VettlyGlobal Privacy Office<br>
                    <?php echo COMPANY_ADDRESS; ?></p>
                </div> -->
            </div>

            <!-- International Transfers -->
            <div class="legal-section">
                <h2>8. International Data Transfers</h2>
                <p>VettlyGlobal operates globally and may transfer your information to countries other than your country of residence. We ensure appropriate safeguards are in place:</p>
                <ul>
                    <li>EU-U.S. and Swiss-U.S. Privacy Shield frameworks (where applicable)</li>
                    <li>Standard Contractual Clauses approved by the European Commission</li>
                    <li>Binding Corporate Rules for intra-group transfers</li>
                    <li>Adequacy decisions by relevant data protection authorities</li>
                    <li>Explicit consent for transfers where required</li>
                </ul>
            </div>

            <!-- Children's Privacy -->
            <div class="legal-section">
                <h2>9. Children's Privacy</h2>
                <p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have inadvertently collected information from a child, please contact us immediately, and we will take steps to delete such information.</p>
            </div>

            <!-- Cookies and Tracking -->
            <div class="legal-section">
                <h2>10. Cookies and Tracking Technologies</h2>
                <p>We use cookies and similar technologies to enhance your experience:</p>

                <h3>Types of Cookies We Use:</h3>
                <ul>
                    <li><strong>Essential Cookies:</strong> Required for website functionality and security</li>
                    <li><strong>Performance Cookies:</strong> Collect anonymous usage data to improve our services</li>
                    <li><strong>Functional Cookies:</strong> Remember your preferences and settings</li>
                    <li><strong>Marketing Cookies:</strong> Track advertising effectiveness and personalize content</li>
                </ul>

                <p>You can control cookies through your browser settings. However, disabling cookies may limit functionality of our services.</p>
            </div>

            <!-- Third-Party Links -->
            <div class="legal-section">
                <h2>11. Third-Party Websites and Services</h2>
                <p>Our website may contain links to third-party websites and services. We are not responsible for the privacy practices of these third parties. We encourage you to review their privacy policies before providing any personal information.</p>
            </div>

            <!-- California Privacy Rights -->
            <div class="legal-section">
                <h2>12. California Privacy Rights (CCPA)</h2>
                <p>California residents have additional rights under the California Consumer Privacy Act (CCPA):</p>
                <ul>
                    <li>Right to know what personal information is collected</li>
                    <li>Right to know whether personal information is sold or disclosed</li>
                    <li>Right to opt-out of the sale of personal information</li>
                    <li>Right to deletion of personal information</li>
                    <li>Right to non-discrimination for exercising CCPA rights</li>
                </ul>
                <p><strong>Do Not Sell My Personal Information:</strong> We do not sell personal information to third parties. However, California residents can opt-out of certain data sharing practices by contacting us.</p>
            </div>

            <!-- Changes to Privacy Policy -->
            <div class="legal-section">
                <h2>13. Changes to This Privacy Policy</h2>
                <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. We will notify you of material changes by:</p>
                <ul>
                    <li>Posting the updated policy on our website</li>
                    <li>Sending email notifications to registered users</li>
                    <li>Displaying prominent notices on our services</li>
                </ul>
                <p>Your continued use of our services after the effective date of the updated Privacy Policy constitutes acceptance of the changes.</p>
            </div>

            <!-- Contact Information -->
            <!-- <div class="legal-section">
                <h2>14. Contact Us</h2>
                <p>If you have questions, concerns, or complaints about this Privacy Policy or our data practices, please contact us:</p>

                <div class="contact-grid">
                    <div class="contact-item">
                        <h4><i class="fas fa-envelope"></i> Email</h4>
                        <p><a href="mailto:info@vettlyglobal.com">info@vettlyglobal.com</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-phone"></i> Phone</h4>
                        <p><?php echo COMPANY_PHONE; ?></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-map-marker-alt"></i> Mail</h4>
                        <p>VettlyGlobal Privacy Office<br>
                        <?php echo COMPANY_ADDRESS; ?></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fas fa-shield-alt"></i> Data Protection Officer</h4>
                        <p><a href="mailto:info@vettlyglobal.com">info@vettlyglobal.com</a></p>
                    </div>
                </div>
            </div> -->

            <!-- Acknowledgment -->
            <div class="legal-section acknowledgment-section">
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <strong>Your Privacy Matters:</strong> We are committed to transparency and protecting your privacy. If you have any questions or concerns about how we handle your information, please don't hesitate to contact us.
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
