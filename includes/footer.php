</main>
<!-- End Main Content -->

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <!-- About Widget -->
            <!-- <div class="footer-widget">
                <h4><?php echo SITE_NAME; ?></h4>
                <p><?php echo SITE_TAGLINE; ?></p>
                <p>Empowering organizations with data-driven risk solutions and intelligence across industries worldwide.</p>
                <div class="footer-social mt-3">
                    <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div> -->

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
            <!-- <p>Designed &amp; Developed with <i class="fas fa-heart" style="color: #FF6B6B;"></i></p> -->
        </div>
    </div>
</footer>

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
