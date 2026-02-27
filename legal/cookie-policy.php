<?php
/**
 * VettlyGlobal - Cookie Policy
 */

// Include configuration
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'Cookie Policy';
$meta_description = 'VettlyGlobal Cookie Policy - Learn how we use cookies and similar technologies on our website and how you can manage your preferences.';

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
                <a href="<?php echo url('legal/cookie-policy'); ?>" style="color: white;">Legal</a>
                <span style="margin: 0 10px;">/</span>
                <span>Cookie Policy</span>
            </div>
            <h1 style="color: white; font-size: 2.5rem; margin-bottom: 15px;">Cookie Policy</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Understand how VettlyGlobal uses cookies and similar technologies across our platforms and how you can manage your preferences.
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 12px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>
</section>

<!-- Cookie Policy Content -->
<section class="section legal-content">
    <div class="container">
        <div class="legal-document">

            <!-- Introduction -->
            <div class="legal-section">
                <h2>1. Introduction</h2>
                <p>This Cookie Policy supplements our <a href="<?php echo url('legal/privacy-policy'); ?>">Privacy Policy</a> and explains how VettlyGlobal ("we," "us," or "our") uses cookies and similar tracking technologies when you visit our websites, use our platforms, or interact with our services.</p>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i>
                    <strong>By continuing to use our website, you consent to the use of cookies as described in this policy. You can manage your cookie preferences at any time using the methods described below.</strong>
                </div>
            </div>

            <!-- What Are Cookies -->
            <div class="legal-section">
                <h2>2. What Are Cookies?</h2>
                <p>Cookies are small text files placed on your computer, smartphone, or other device by websites you visit. They are widely used to make websites function properly, improve user experience, and provide information to website owners.</p>
                <p>Cookies may be classified by their lifespan:</p>
                <ul>
                    <li><strong>Session Cookies:</strong> Temporary cookies that expire when you close your browser. They help maintain your session as you navigate between pages.</li>
                    <li><strong>Persistent Cookies:</strong> Cookies that remain on your device for a set period or until you delete them. They remember your preferences across repeat visits.</li>
                </ul>
                <p>Cookies may also be classified by origin:</p>
                <ul>
                    <li><strong>First-Party Cookies:</strong> Set by VettlyGlobal directly when you visit our website.</li>
                    <li><strong>Third-Party Cookies:</strong> Set by external services we use, such as analytics providers, advertising partners, or social media platforms.</li>
                </ul>
            </div>

            <!-- How We Use Cookies -->
            <div class="legal-section">
                <h2>3. How We Use Cookies</h2>
                <p>We use cookies and similar technologies to:</p>
                <ul>
                    <li>Enable you to navigate our services securely and efficiently</li>
                    <li>Allow you to register, log in, and interact with our platforms</li>
                    <li>Store and honor your preferences and settings</li>
                    <li>Measure and analyze usage patterns and performance data</li>
                    <li>Support our promotional and marketing efforts</li>
                    <li>Maintain online security and protect against fraud</li>
                </ul>
                <p>If you access our services under a subscription agreement or enterprise contract, cookies will be used as necessary for the performance of that agreement and for our legitimate business operations.</p>
            </div>

            <!-- Types of Cookies -->
            <div class="legal-section">
                <h2>4. Types of Cookies We Use</h2>

                <h3>4.1 Strictly Necessary Cookies</h3>
                <p>These cookies are essential for our website to function. They enable core features such as security, session management, and accessibility. They are set in response to actions you take, such as logging in, setting privacy preferences, or completing forms. You can configure your browser to block these cookies, but some parts of the website may not function correctly.</p>

                <h3>4.2 Performance & Analytics Cookies</h3>
                <p>These cookies help us understand how visitors interact with our website by collecting anonymous usage data. They allow us to measure traffic, identify popular pages, and observe navigation patterns so we can improve site performance and user experience.</p>
                <p>We use these cookies for:</p>
                <ul>
                    <li>Tracking the number of visitors and page views</li>
                    <li>Measuring time spent on pages and bounce rates</li>
                    <li>Understanding navigation paths across our website</li>
                    <li>Identifying areas of the site that need improvement</li>
                    <li>Measuring the effectiveness of our marketing campaigns</li>
                </ul>

                <h3>4.3 Functionality Cookies</h3>
                <p>These cookies enable enhanced features and personalization, such as remembering your language preference, region, or display settings. They may be set by us or by third-party services integrated into our pages. If you disable these cookies, some features may not work as intended.</p>

                <h3>4.4 Targeting & Advertising Cookies</h3>
                <p>These cookies may be placed by our advertising partners to build a profile of your interests and deliver relevant advertisements on other websites. They do not directly store personal information but rely on uniquely identifying your browser and device. If you disable these cookies, you will see less personalized advertising.</p>

                <h3>4.5 Social Media Cookies</h3>
                <p>These cookies are set by social media platforms (such as LinkedIn, Twitter, and Facebook) that we integrate into our website to enable content sharing. These cookies can track your browsing activity across other websites and build a profile of your interests, which may affect the content you see elsewhere. If you disable these cookies, sharing features may not be available.</p>
            </div>

            <!-- Similar Technologies -->
            <div class="legal-section">
                <h2>5. Web Beacons & Similar Technologies</h2>
                <p>In addition to cookies, we may use other tracking technologies including:</p>
                <ul>
                    <li><strong>Web Beacons (Pixel Tags):</strong> Small transparent images embedded in web pages or emails that help us track page views, email opens, and the effectiveness of our communications.</li>
                    <li><strong>Unique Identifiers:</strong> Tokens or identifiers used to recognize your device across sessions for authentication and security purposes.</li>
                    <li><strong>Local Storage:</strong> Browser-based storage that allows us to save preferences and temporary data locally on your device.</li>
                </ul>
                <p>We may also use technologies from third-party security providers to maintain online security, prevent fraud, and protect our services from abuse.</p>
            </div>

            <!-- Managing Cookies -->
            <div class="legal-section">
                <h2>6. How to Manage Cookies</h2>

                <h3>6.1 Browser Settings</h3>
                <p>Most web browsers allow you to manage cookies through their settings. You can typically:</p>
                <ul>
                    <li>View and delete existing cookies</li>
                    <li>Block all cookies or only third-party cookies</li>
                    <li>Set preferences for specific websites</li>
                    <li>Configure notifications when cookies are being set</li>
                </ul>
                <p>Please note that blocking or deleting cookies may impact website functionality. Authentication cookies are required for logged-in access, and preference cookies are needed to remember your settings.</p>

                <h3>6.2 Opt-Out of Analytics</h3>
                <p>You can opt out of Google Analytics tracking across all websites by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</p>

                <h3>6.3 Opt-Out of Interest-Based Advertising</h3>
                <p>You can manage interest-based advertising preferences through industry self-regulation tools:</p>
                <ul>
                    <li><strong>United States:</strong> <a href="https://optout.aboutads.info" target="_blank" rel="noopener">YourAdChoices (DAA)</a></li>
                    <li><strong>Canada:</strong> <a href="https://youradchoices.ca" target="_blank" rel="noopener">AdChoices Canada</a></li>
                    <li><strong>European Union:</strong> <a href="https://www.youronlinechoices.eu" target="_blank" rel="noopener">Your Online Choices (EDAA)</a></li>
                </ul>
                <p>VettlyGlobal adheres to the Digital Advertising Alliance Self-Regulatory Principles for Interest-Based Advertising.</p>
            </div>

            <!-- Third-Party Cookies -->
            <div class="legal-section">
                <h2>7. Third-Party Services</h2>
                <p>Our website integrates with third-party services that may set their own cookies. These include but are not limited to:</p>
                <ul>
                    <li><strong>Google Analytics:</strong> Website traffic analysis and performance measurement</li>
                    <li><strong>LinkedIn:</strong> Social sharing and professional networking features</li>
                    <li><strong>Intercom / HubSpot:</strong> Customer support and communication tools</li>
                    <li><strong>Stripe:</strong> Payment processing and transaction security</li>
                </ul>
                <p>We do not control cookies set by third parties. Please refer to their respective privacy and cookie policies for more information about how they handle your data.</p>
            </div>

            <!-- Updates -->
            <div class="legal-section">
                <h2>8. Changes to This Policy</h2>
                <p>We may update this Cookie Policy from time to time to reflect changes in our practices, technologies, or legal requirements. When we make significant changes, we will update the "Last Updated" date at the top of this page. We encourage you to review this policy periodically.</p>
            </div>

            <!-- Contact -->
            <!-- <div class="legal-section">
                <h2>9. Contact Us</h2>
                <p>If you have questions about our use of cookies or this Cookie Policy, please contact us:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a></li>
                    <li><strong>Phone:</strong> <?php echo COMPANY_PHONE; ?></li>
                    <li><strong>Website:</strong> <a href="<?php echo url('contact'); ?>">Contact Form</a></li>
                </ul>
            </div> -->

            <!-- Acknowledgment -->
            <div class="legal-section acknowledgment-section">
                <div class="alert alert-info">
                    <i class="fas fa-cookie-bite"></i>
                    <strong>By continuing to browse and use VettlyGlobal's website and services, you acknowledge that you have read and understood this Cookie Policy and consent to the use of cookies as described herein.</strong>
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

.legal-section a {
    color: var(--primary-color);
    text-decoration: none;
}

.legal-section a:hover {
    text-decoration: underline;
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
}
</style>

<?php include '../includes/footer.php'; ?>
