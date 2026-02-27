<?php
/**
 * Thank You Page - Contact Form Submission Success
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

// Page variables
$page_title = 'Thank You';
$meta_description = 'Thank you for contacting VettlyGlobal. We have received your message and will get back to you shortly.';

include '../includes/header.php';
?>

<!-- Thank You Section -->
<section class="section thank-you-section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div class="thank-you-content">
            <!-- Success Icon -->
            <div class="success-icon-wrapper">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>

            <!-- Thank You Message -->
            <div class="thank-you-text">
                <h1>Thank You for Contacting Us!</h1>
                <p class="lead">
                    We have successfully received your message and appreciate you reaching out to VettlyGlobal.
                </p>
                <p>
                    Our team will review your inquiry and get back to you within 24 hours during business days.
                </p>
            </div>

            <!-- What's Next -->
            <div class="next-steps-box">
                <h3>
                    <i class="fas fa-tasks"></i>
                    What Happens Next?
                </h3>
                <div class="steps-grid">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <h4>Review</h4>
                        <p>Our team reviews your inquiry and assigns it to the right specialist.</p>
                    </div>
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <h4>Analysis</h4>
                        <p>We analyze your needs to provide the most relevant solutions.</p>
                    </div>
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <h4>Response</h4>
                        <p>You'll receive a personalized response within 24 hours.</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="<?php echo url(); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-home"></i>
                    Return to Homepage
                </a>
                <a href="<?php echo url('about-us'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-info-circle"></i>
                    Learn More About Us
                </a>
            </div>

            <!-- Additional Resources -->
            <div class="additional-resources">
                <h4>While You Wait, Explore Our Resources</h4>
                <div class="resource-links">
                    <a href="<?php echo url('industries'); ?>" class="resource-link">
                        <i class="fas fa-industry"></i>
                        <span>Industry Solutions</span>
                    </a>
                    <a href="<?php echo url('resources'); ?>" class="resource-link">
                        <i class="fas fa-book"></i>
                        <span>Resources & Insights</span>
                    </a>
                    <a href="<?php echo url('about-us'); ?>" class="resource-link">
                        <i class="fas fa-users"></i>
                        <span>About VettlyGlobal</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Info Reminder -->
        <!-- <div class="contact-reminder">
            <div class="reminder-grid">
                <div class="reminder-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email</h5>
                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                    </div>
                </div>
                <div class="reminder-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h5>Phone</h5>
                        <a href="tel:<?php echo COMPANY_PHONE; ?>"><?php echo COMPANY_PHONE; ?></a>
                    </div>
                </div>
                <div class="reminder-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h5>Response Time</h5>
                        <p>Within 24 hours</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- Additional CSS -->
<style>
/* Thank You Section */
.thank-you-section {
    background: linear-gradient(135deg, var(--bg-lighter) 0%, var(--bg-white) 100%);
}

.thank-you-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

/* Success Icon */
.success-icon-wrapper {
    margin-bottom: 40px;
}

.success-icon {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--secondary-color), var(--secondary-light));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    animation: scaleIn 0.5s ease-out;
    box-shadow: 0 10px 40px rgba(80, 200, 120, 0.3);
}

.success-icon i {
    font-size: 2rem;
    color: white;
}

@keyframes scaleIn {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* Thank You Text */
.thank-you-text {
    margin-bottom: 50px;
}

.thank-you-text h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: var(--text-primary);
}

.thank-you-text .lead {
    font-size: 1.3rem;
    color: var(--text-secondary);
    margin-bottom: 20px;
    font-weight: 500;
}

.thank-you-text p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    line-height: 1.8;
}

.thank-you-text a {
    color: var(--primary-color);
    font-weight: 600;
}

.thank-you-text a:hover {
    color: var(--primary-dark);
    text-decoration: underline;
}

/* Next Steps Box */
.next-steps-box {
    background: var(--bg-white);
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-bottom: 40px;
}

.next-steps-box h3 {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 35px;
    color: var(--primary-color);
    font-size: 1.5rem;
}

.steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.step-item {
    text-align: center;
}

.step-number {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 5px 15px rgba(5, 130, 189, 0.3);
}

.step-item h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: var(--text-primary);
}

.step-item p {
    font-size: 0.95rem;
    color: var(--text-secondary);
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.btn-lg {
    padding: 16px 40px;
    font-size: 1.1rem;
}

/* Additional Resources */
.additional-resources {
    margin-bottom: 50px;
}

.additional-resources h4 {
    margin-bottom: 25px;
    color: var(--text-primary);
    font-size: 1.3rem;
}

.resource-links {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.resource-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    padding: 25px 30px;
    background: var(--bg-white);
    border-radius: 12px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    color: var(--text-primary);
    min-width: 160px;
}

.resource-link:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    color: var(--primary-color);
}

.resource-link i {
    font-size: 2rem;
    color: var(--primary-color);
}

.resource-link span {
    font-weight: 600;
    font-size: 0.95rem;
}

/* Contact Reminder */
.contact-reminder {
    background: var(--bg-white);
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    margin-top: 20px;
}

.reminder-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
}

.reminder-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px;
    background: var(--bg-light);
    border-radius: 10px;
}

.reminder-item i {
    font-size: 2rem;
    color: var(--primary-color);
    flex-shrink: 0;
}

.reminder-item h5 {
    margin-bottom: 5px;
    color: var(--text-primary);
    font-size: 0.95rem;
}

.reminder-item a,
.reminder-item p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin: 0;
}

.reminder-item a:hover {
    color: var(--primary-color);
}

/* Responsive */
@media (max-width: 768px) {
    .thank-you-text h1 {
        font-size: 2rem;
    }

    .thank-you-text .lead {
        font-size: 1.1rem;
    }

    .next-steps-box {
        padding: 30px 20px;
    }

    .steps-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .action-buttons {
        flex-direction: column;
    }

    .action-buttons .btn {
        width: 100%;
    }

    .resource-links {
        flex-direction: column;
    }

    .resource-link {
        width: 100%;
    }

    .reminder-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .contact-reminder {
        padding: 25px 20px;
    }
}

@media (max-width: 480px) {
    .success-icon {
        width: 100px;
        height: 100px;
    }

    .success-icon i {
        font-size: 1.5rem;
    }

    .thank-you-text h1 {
        font-size: 1.75rem;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
