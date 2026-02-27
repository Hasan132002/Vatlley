</main>
<!-- End Main Content -->

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <!-- Footer Top: Newsletter -->
        <div class="footer-newsletter">
            <div class="footer-newsletter-text">
                <h3>Stay Informed</h3>
                <p>Get the latest insights on risk intelligence, fraud prevention, and compliance delivered to your inbox.</p>
            </div>
            <form action="<?php echo url('resources/blog/newsletter-subscribe'); ?>" method="POST" class="footer-newsletter-form" data-validate>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="redirect_url" value="<?php echo current_url(); ?>">
                <div class="newsletter-input-group">
                    <input type="email" name="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary">
                        Subscribe
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
                <p class="newsletter-note">No spam. Unsubscribe anytime.</p>
            </form>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-widgets">
            <!-- About Widget -->
            <div class="footer-widget footer-about">
                <a href="<?php echo url(); ?>" class="footer-logo">
                    <img src="<?php echo asset('images/logo/logo.png'); ?>" alt="<?php echo SITE_NAME; ?>">
                </a>
                <p>Empowering organizations with data-driven risk solutions and intelligence across industries worldwide.</p>
            </div>

            <!-- Industries -->
            <div class="footer-widget">
                <h4>Industries</h4>
                <ul>
                    <li><a href="<?php echo url('industries/corporations'); ?>">Corporations</a></li>
                    <li><a href="<?php echo url('industries/financial-services'); ?>">Financial Services</a></li>
                    <li><a href="<?php echo url('industries/government'); ?>">Government</a></li>
                    <li><a href="<?php echo url('industries/healthcare'); ?>">Healthcare</a></li>
                    <li><a href="<?php echo url('industries/insurance'); ?>">Insurance</a></li>
                    <li><a href="<?php echo url('industries/law-enforcement'); ?>">Law Enforcement</a></li>
                    <li><a href="<?php echo url('industries/collections-recovery'); ?>">Collections & Recovery</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="footer-widget">
                <h4>Company</h4>
                <ul>
                    <li><a href="<?php echo url('about-us'); ?>">About Us</a></li>
                    <li><a href="<?php echo url('about-us/leadership'); ?>">Leadership</a></li>
                    <li><a href="<?php echo url('about-us/careers'); ?>">Careers</a></li>
                    <li><a href="<?php echo url('about-us/press-room'); ?>">Press Room</a></li>
                    <li><a href="<?php echo url('about-us/technology'); ?>">Our Technology</a></li>
                    <li><a href="<?php echo url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="footer-widget">
                <h4>Legal & Resources</h4>
                <ul>
                    <li><a href="<?php echo url('legal/privacy-policy'); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo url('legal/terms-conditions'); ?>">Terms & Conditions</a></li>
                    <li><a href="<?php echo url('legal/cookie-policy'); ?>">Cookie Policy</a></li>
                    <li><a href="<?php echo url('legal/gdpr-compliance'); ?>">GDPR Compliance</a></li>
                    <li><a href="<?php echo url('legal/hipaa-compliance'); ?>">HIPAA Compliance</a></li>
                    <li><a href="<?php echo url('resources/blog'); ?>">Blog</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Footer Styles -->
<style>
/* Footer Newsletter */
.footer-newsletter {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    padding-bottom: 40px;
}

.footer-newsletter-text h3 {
    color: white;
    font-size: 1.3rem;
    margin-bottom: 6px;
}

.footer-newsletter-text p {
    color: rgba(255,255,255,0.6);
    font-size: 0.9rem;
    margin: 0;
    max-width: 380px;
}

.footer-newsletter-form {
    flex-shrink: 0;
    width: 420px;
    max-width: 100%;
}

.newsletter-input-group {
    display: flex;
    gap: 0;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 8px;
    overflow: hidden;
    transition: var(--transition);
}

.newsletter-input-group:focus-within {
    border-color: var(--primary-color);
    background: rgba(255,255,255,0.12);
}

.newsletter-input-group input {
    flex: 1;
    padding: 14px 16px;
    border: none;
    background: transparent;
    color: white;
    font-size: 0.92rem;
    outline: none;
    min-width: 0;
}

.newsletter-input-group input::placeholder {
    color: rgba(255,255,255,0.4);
}

.newsletter-input-group .btn {
    border-radius: 0 6px 6px 0;
    padding: 14px 22px;
    font-size: 0.9rem;
    white-space: nowrap;
}

.newsletter-note {
    font-size: 0.78rem;
    color: rgba(255,255,255,0.35);
    margin: 8px 0 0;
    text-align: right;
}

.footer-divider {
    height: 1px;
    background: rgba(255,255,255,0.1);
    margin-bottom: 40px;
}

/* Footer Logo */
.footer-logo {
    display: inline-block;
    margin-bottom: 16px;
}

.footer-logo img {
    height: 40px;
    width: auto;
    filter: brightness(0) invert(1);
}

.footer-about p {
    color: rgba(255,255,255,0.6);
    font-size: 0.9rem;
    line-height: 1.7;
    max-width: 280px;
}

/* Responsive Footer */
@media (max-width: 768px) {
    .footer-newsletter {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }

    .footer-newsletter-text p {
        max-width: 100%;
    }

    .footer-newsletter-form {
        width: 100%;
    }

    .newsletter-input-group {
        flex-direction: column;
        border-radius: 8px;
    }

    .newsletter-input-group input {
        text-align: center;
    }

    .newsletter-input-group .btn {
        border-radius: 0 0 6px 6px;
        justify-content: center;
    }

    .newsletter-note {
        text-align: center;
    }
}
</style>

<!-- JavaScript -->
<script src="<?php echo asset('js/main.js'); ?>"></script>

<?php if(isset($extra_js)): ?>
    <?php echo $extra_js; ?>
<?php endif; ?>

<!-- Google Analytics -->
<?php if(GOOGLE_ANALYTICS_ID): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_ID; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
</script>
<?php endif; ?>

</body>
</html>
