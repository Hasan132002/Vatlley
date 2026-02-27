<?php
/**
 * Contact Us Page
 * Professional contact form with validation and email functionality
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'Contact Us';
$meta_description = 'Get in touch with VettlyGlobal. Contact our team for inquiries about risk solutions, identity verification, fraud detection, and data intelligence services.';

// Form submission handling
$form_errors = [];
$form_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    if (!verify_csrf()) {
        $form_errors[] = 'Security token validation failed. Please try again.';
    } else {
        // Sanitize and validate inputs
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
        $company = isset($_POST['company']) ? trim($_POST['company']) : '';
        $message = isset($_POST['message']) ? trim($_POST['message']) : '';

        // Validation
        if (empty($name)) {
            $form_errors[] = 'Please enter your name.';
        } elseif (strlen($name) < 2) {
            $form_errors[] = 'Name must be at least 2 characters long.';
        }

        if (empty($email)) {
            $form_errors[] = 'Please enter your email address.';
        } elseif (!is_valid_email($email)) {
            $form_errors[] = 'Please enter a valid email address.';
        }

        if (!empty($phone) && !is_valid_phone($phone)) {
            $form_errors[] = 'Please enter a valid phone number.';
        }

        if (empty($message)) {
            $form_errors[] = 'Please enter your message.';
        } elseif (strlen($message) < 10) {
            $form_errors[] = 'Message must be at least 10 characters long.';
        }

        // If no errors, process the form
        if (empty($form_errors)) {
            // Save to database
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $source_page = current_url();

            $query = "INSERT INTO leads (form_type, full_name, email, phone, company_name, message, source_page, ip_address, user_agent, status, created_at)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'new', NOW())";

            $db_saved = db_query($query, [
                'contact', $name, $email, $phone, $company, $message, $source_page, $ip_address, $user_agent
            ], 'sssssssss');

            if ($db_saved) {
                // Try to send notification email (non-blocking)
                @send_email(COMPANY_EMAIL, 'New Contact Form Submission from ' . $name, '
                    <h2>New Contact Form Submission</h2>
                    <p><strong>Name:</strong> ' . clean($name) . '</p>
                    <p><strong>Email:</strong> ' . clean($email) . '</p>
                    <p><strong>Phone:</strong> ' . clean($phone ?: 'Not provided') . '</p>
                    <p><strong>Company:</strong> ' . clean($company ?: 'Not provided') . '</p>
                    <p><strong>Message:</strong> ' . nl2br(clean($message)) . '</p>
                    <p><em>Submitted on: ' . date('F j, Y \a\t g:i A') . '</em></p>
                ', $email);

                set_flash('Thank you for contacting us! We will get back to you shortly.', 'success');
                redirect(url('contact/thank-you'));
            } else {
                $form_errors[] = 'There was an error saving your message. Please try again later or contact us directly at ' . COMPANY_EMAIL;
            }
        }
    }
}

include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <span>Contact Us</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Get in Touch</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Have questions about our solutions? Our team is here to help you transform your risk management strategy.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="contact-wrapper">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 style="margin-bottom: 20px;">Send Us a Message</h2>
                <p style="margin-bottom: 30px; color: var(--text-secondary);">
                    Fill out the form below and our team will get back to you within 24 hours.
                </p>

                <?php if (!empty($form_errors)): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <?php foreach ($form_errors as $error): ?>
                            <div><?php echo clean($error); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <form method="POST" action="" class="contact-form" id="contactForm" data-validate>
                    <?php echo csrf_field(); ?>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span class="required">*</span></label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                placeholder="John Doe"
                                value="<?php echo isset($_POST['name']) ? clean($_POST['name']) : ''; ?>"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="john.doe@company.com"
                                value="<?php echo isset($_POST['email']) ? clean($_POST['email']) : ''; ?>"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                class="form-control"
                                placeholder="+1 (555) 123-4567"
                                value="<?php echo isset($_POST['phone']) ? clean($_POST['phone']) : ''; ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input
                                type="text"
                                id="company"
                                name="company"
                                class="form-control"
                                placeholder="Your Company"
                                value="<?php echo isset($_POST['company']) ? clean($_POST['company']) : ''; ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea
                            id="message"
                            name="message"
                            class="form-control"
                            rows="6"
                            placeholder="Tell us about your needs and how we can help..."
                            required
                        ><?php echo isset($_POST['message']) ? clean($_POST['message']) : ''; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-section">
    
                <!-- Office Hours -->
                <div class="office-hours-box">
                    <h4 style="margin-bottom: 20px;">
                        <i class="fas fa-clock"></i>
                        Office Hours
                    </h4>
                    <div class="hours-list">
                        <div class="hours-item">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM EST</span>
                        </div>
                        <div class="hours-item">
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM EST</span>
                        </div>
                        <div class="hours-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Happens Next Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>What Happens Next?</h2>
            <p>Our streamlined process ensures you get the answers you need quickly</p>
        </div>

        <div class="process-grid">
            <div class="process-card">
                <div class="process-step">1</div>
                <div class="process-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h3>We Receive Your Message</h3>
                <p>Your inquiry is logged and routed to the appropriate team member based on your needs and requirements.</p>
            </div>

            <div class="process-card">
                <div class="process-step">2</div>
                <div class="process-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>Expert Review</h3>
                <p>A dedicated specialist reviews your requirements and prepares a tailored response within 24 business hours.</p>
            </div>

            <div class="process-card">
                <div class="process-step">3</div>
                <div class="process-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Personalized Consultation</h3>
                <p>We schedule a consultation to discuss your specific challenges and demonstrate how our solutions can help.</p>
            </div>

            <div class="process-card">
                <div class="process-step">4</div>
                <div class="process-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Solution Deployment</h3>
                <p>Once aligned, our team works with you to implement and deploy the right solution for your organization.</p>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS -->
<style>
/* Contact Wrapper */
.contact-wrapper {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 60px;
    align-items: start;
}

/* Contact Form */
.contact-form {
    background: var(--bg-white);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--text-primary);
    font-size: 0.95rem;
}

.required {
    color: var(--accent-color);
}

.form-control {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-size: 1rem;
    font-family: inherit;
    transition: var(--transition);
    background: var(--bg-white);
}

.form-control:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(5, 130, 189, 0.1);
}

.form-control::placeholder {
    color: var(--text-light);
}

textarea.form-control {
    resize: vertical;
    min-height: 150px;
}

.btn-block {
    width: 100%;
}

/* Alert */
.alert {
    padding: 16px 20px;
    border-radius: 8px;
    margin-bottom: 25px;
    display: flex;
    gap: 12px;
    align-items: start;
}

.alert-error {
    background: #FEE;
    border: 1px solid #FCC;
    color: #C33;
}

.alert i {
    font-size: 1.2rem;
    margin-top: 2px;
}

/* Contact Info */
.contact-info-section {
    position: sticky;
    top: 100px;
}

.contact-info-box {
    background: var(--bg-white);
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-bottom: 25px;
}

.contact-item {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.contact-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    flex-shrink: 0;
}

.contact-details h4 {
    margin-bottom: 5px;
    font-size: 1rem;
    color: var(--text-primary);
}

.contact-details p,
.contact-details a {
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.contact-details a:hover {
    color: var(--primary-color);
}

/* Social Links */
.contact-social {
    margin-top: 35px;
    padding-top: 30px;
    border-top: 1px solid var(--border-color);
}

.social-links {
    display: flex;
    gap: 12px;
}

.social-links a {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-secondary);
    transition: var(--transition);
}

.social-links a:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-3px);
}

/* Office Hours */
.office-hours-box {
    background: var(--bg-light);
    padding: 30px;
    border-radius: 12px;
}

.office-hours-box h4 {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--primary-color);
}

.hours-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.hours-item {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid var(--border-light);
    font-size: 0.95rem;
}

.hours-item:last-child {
    border-bottom: none;
}

.hours-item span:first-child {
    color: var(--text-primary);
    font-weight: 600;
}

.hours-item span:last-child {
    color: var(--text-secondary);
}

/* Process Grid */
.process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.process-card {
    background: var(--bg-white);
    padding: 35px 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
    position: relative;
}

.process-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.process-step {
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: var(--primary-color);
    color: white;
    font-size: 0.8rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
}

.process-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.4rem;
    margin: 10px auto 20px;
}

.process-card h3 {
    margin-bottom: 12px;
    color: var(--text-primary);
    font-size: 1.05rem;
}

.process-card p {
    color: var(--text-secondary);
    font-size: 0.9rem;
    line-height: 1.65;
    margin: 0;
}

/* Responsive */
@media (max-width: 992px) {
    .contact-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .contact-info-section {
        position: static;
    }
}

@media (max-width: 992px) {
    .process-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }

    .contact-info-box {
        padding: 30px 20px;
    }

    .process-grid {
        grid-template-columns: 1fr;
        max-width: 400px;
        margin: 0 auto;
    }
}
</style>

<!-- Form Validation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');

    if (form) {
        form.addEventListener('submit', function(e) {
            // Basic client-side validation
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (name.length < 2) {
                alert('Please enter a valid name (at least 2 characters).');
                e.preventDefault();
                return false;
            }

            if (!isValidEmail(email)) {
                alert('Please enter a valid email address.');
                e.preventDefault();
                return false;
            }

            if (message.length < 10) {
                alert('Please enter a message (at least 10 characters).');
                e.preventDefault();
                return false;
            }
        });
    }

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>

<?php include '../includes/footer.php'; ?>
