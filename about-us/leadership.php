<?php
/**
 * About Us - Leadership Team Page
 */

require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

$page_title = 'Leadership Team - VettlyGlobal';
$meta_description = 'Meet the executive leadership team at VettlyGlobal, driving innovation in risk solutions and data intelligence.';

include '../includes/header.php';
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
                <span>Leadership</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Our Leadership Team</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Meet the visionary leaders driving innovation and excellence at VettlyGlobal.
            </p>
        </div>
    </div>
</section>

<!-- Leadership Introduction -->
<section class="section">
    <div class="container">
        <div class="text-center" style="max-width: 900px; margin: 0 auto;">
            <h2 style="margin-bottom: 25px;">Experienced Leadership</h2>
            <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-secondary);">
                Our executive team brings decades of combined experience in technology, data analytics, risk management, and compliance. Together, they guide VettlyGlobal's mission to empower organizations with data-driven solutions.
            </p>
        </div>
    </div>
</section>

<!-- Executive Team -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Executive Leadership</h2>
        </div>

        <div class="leadership-grid">
            <!-- CEO -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Michael Harrison</h3>
                    <div class="leader-title">Chief Executive Officer</div>
                    <p class="leader-bio">
                        Michael brings over 25 years of experience in data intelligence and risk management. Under his leadership, VettlyGlobal has expanded to serve over 500 enterprise clients globally. Previously, he held executive positions at leading financial technology firms and has been recognized as a pioneer in fraud detection innovation.
                    </p>
                    <!--  <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> --> 
                </div>
            </div>

            <!-- CTO -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Dr. Sarah Chen</h3>
                    <div class="leader-title">Chief Technology Officer</div>
                    <p class="leader-bio">
                        Dr. Chen leads VettlyGlobal's technology vision and product development. With a Ph.D. in Computer Science and expertise in artificial intelligence and machine learning, she has built award-winning platforms that process millions of transactions daily. Her research in pattern recognition has been published in leading academic journals.
                    </p>
                    <!-- <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>

            <!-- CFO -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>David Martinez</h3>
                    <div class="leader-title">Chief Financial Officer</div>
                    <p class="leader-bio">
                        David oversees VettlyGlobal's financial strategy and operations. With 20+ years in financial leadership roles, including positions at Fortune 500 companies, he brings strategic insight and fiscal discipline. David holds an MBA from Harvard Business School and is a Certified Public Accountant.
                    </p>
                    <!-- <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>

            <!-- COO -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Jennifer Thompson</h3>
                    <div class="leader-title">Chief Operating Officer</div>
                    <p class="leader-bio">
                        Jennifer leads day-to-day operations and ensures exceptional service delivery across all client engagements. Her background in operational excellence and process optimization has been instrumental in scaling VettlyGlobal's infrastructure. She previously led operations at multiple high-growth technology companies.
                    </p>
                    <!-- <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>

            <!-- General Counsel -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Robert Anderson</h3>
                    <div class="leader-title">General Counsel & Chief Compliance Officer</div>
                    <p class="leader-bio">
                        Robert oversees all legal matters and regulatory compliance at VettlyGlobal. With expertise in privacy law, data protection, and regulatory frameworks including GDPR and CCPA, he ensures the company maintains the highest standards of legal and ethical conduct. He previously served as senior counsel at leading law firms specializing in technology law.
                    </p>
                    <!-- <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>

            <!-- VP of Sales -->
            <div class="leader-card">
                <div class="leader-image">
                    <div class="placeholder-avatar" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                        <i class="fas fa-user" style="font-size: 3rem; color: white;"></i>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Maria Rodriguez</h3>
                    <div class="leader-title">Vice President of Sales</div>
                    <p class="leader-bio">
                        Maria leads VettlyGlobal's global sales organization, driving revenue growth and client acquisition strategies. With over 15 years in enterprise sales and business development, she has built lasting relationships with clients across healthcare, financial services, and government sectors. Her client-centric approach has resulted in consistent year-over-year growth.
                    </p>
                    <!-- <div class="leader-social">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advisory Board</h2>
            <p>Industry experts guiding our strategic direction</p>
        </div>

        <div class="advisors-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="advisor-card">
                <h4>Dr. James Foster</h4>
                <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Healthcare & Compliance Expert</div>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">
                    Former Chief Medical Officer at a leading healthcare organization with expertise in healthcare compliance and patient data security.
                </p>
            </div>

            <div class="advisor-card">
                <h4>Patricia Wilson</h4>
                <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Cybersecurity Specialist</div>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">
                    Renowned cybersecurity expert with 30+ years of experience in government and private sector security operations.
                </p>
            </div>

            <div class="advisor-card">
                <h4>Thomas Lee</h4>
                <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Financial Services Veteran</div>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">
                    Former executive at major financial institutions, specializing in fraud prevention and regulatory compliance.
                </p>
            </div>

            <div class="advisor-card">
                <h4>Dr. Amelia Johnson</h4>
                <div style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">Data Science & AI Researcher</div>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">
                    Leading researcher in artificial intelligence and data analytics, with numerous publications in machine learning applications.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Join Our Team</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                We're always looking for talented individuals to join our growing team and make an impact.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('about-us/careers'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-briefcase"></i>
                    View Open Positions
                </a>
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact Leadership
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.leadership-grid {
    display: grid;
    gap: 50px;
    max-width: 900px;
    margin: 0 auto;
}

.leader-card {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 40px;
    align-items: start;
}

.leader-image {
    position: sticky;
    top: 100px;
}

.placeholder-avatar {
    width: 200px;
    height: 200px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-lg);
}

.leader-info h3 {
    font-size: 1.75rem;
    margin-bottom: 8px;
    color: var(--text-primary);
}

.leader-title {
    font-size: 1.1rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 20px;
}

.leader-bio {
    font-size: 1rem;
    line-height: 1.8;
    color: var(--text-secondary);
    margin-bottom: 20px;
}

.leader-social {
    display: flex;
    gap: 15px;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--bg-light);
    color: var(--primary-color);
    transition: var(--transition);
    font-size: 1.1rem;
}

.social-link:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-3px);
}

.advisor-card {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.advisor-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-5px);
}

.advisor-card h4 {
    font-size: 1.25rem;
    margin-bottom: 8px;
}

@media (max-width: 768px) {
    .leader-card {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .placeholder-avatar {
        width: 150px;
        height: 150px;
        margin: 0 auto;
    }

    .leader-image {
        position: static;
    }

    .leader-info {
        text-align: center;
    }

    .leader-social {
        justify-content: center;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
