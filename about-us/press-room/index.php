<?php
/**
 * About Us - Press Room
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Press Room - VettlyGlobal';
$meta_description = 'Latest news, press releases, and media resources from VettlyGlobal. Access company announcements, industry insights, and media kits.';

include '../../includes/header.php';
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
                <span>Press Room</span>
            </div>
            <h1 style="color: white; font-size: 2.2rem; margin-bottom: 25px;">Press Room</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Latest news, announcements, and media resources from VettlyGlobal.
            </p>
        </div>
    </div>
</section>

<!-- Featured News -->
<section class="section">
    <div class="container">
        <div class="featured-news" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 16px; padding: 60px; color: white; margin-bottom: 60px;">
            <div class="featured-badge" style="display: inline-block; background: rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">
                FEATURED NEWS
            </div>
            <h2 style="color: white; font-size: 2.5rem; margin-bottom: 20px;">
                VettlyGlobal Secures $150M Series C Funding to Accelerate Global Expansion
            </h2>
            <p style="font-size: 1.15rem; margin-bottom: 25px; color: rgba(255,255,255,0.95);">
                Investment led by leading venture capital firms will fuel product innovation, market expansion, and strategic acquisitions in the risk management and identity verification space.
            </p>
            <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                <span style="opacity: 0.9;"><i class="far fa-calendar"></i> February 10, 2026</span>
                <a href="<?php echo url('about-us/press-room/series-c-funding'); ?>" class="btn btn-white">Read Full Release</a>
            </div>
        </div>

        <!-- Press Releases -->
        <div class="section-header mb-5">
            <h2>Recent Press Releases</h2>
        </div>

        <div class="press-releases">
            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">05</div>
                    <div class="date-month">FEB</div>
                    <div class="date-year">2026</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Product Launch</div>
                    <h3>VettlyGlobal Launches AI-Powered Fraud Detection Suite</h3>
                    <p>
                        New machine learning capabilities reduce false positives by 45% while identifying emerging fraud patterns in real-time. The suite integrates seamlessly with existing risk management workflows.
                    </p>
                    <a href="<?php echo url('about-us/press-room/ai-fraud-detection-suite'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">28</div>
                    <div class="date-month">JAN</div>
                    <div class="date-year">2026</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Partnership</div>
                    <h3>VettlyGlobal Partners with Major Healthcare Networks for Identity Verification</h3>
                    <p>
                        Strategic partnership brings advanced identity verification and fraud prevention to healthcare providers serving over 15 million patients nationwide.
                    </p>
                    <a href="<?php echo url('about-us/press-room/healthcare-identity-verification'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">15</div>
                    <div class="date-month">JAN</div>
                    <div class="date-year">2026</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Recognition</div>
                    <h3>VettlyGlobal Named Leader in Gartner Magic Quadrant for Identity Verification</h3>
                    <p>
                        Company recognized for completeness of vision and ability to execute in the rapidly growing identity verification market.
                    </p>
                    <a href="<?php echo url('about-us/press-room/gartner-magic-quadrant'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">08</div>
                    <div class="date-month">JAN</div>
                    <div class="date-year">2026</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Expansion</div>
                    <h3>VettlyGlobal Opens New Operations Center in Singapore</h3>
                    <p>
                        New facility supports growing demand across Asia-Pacific region and brings headcount to over 1,000 employees globally.
                    </p>
                    <a href="<?php echo url('about-us/press-room/singapore-operations-center'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">20</div>
                    <div class="date-month">DEC</div>
                    <div class="date-year">2025</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Awards</div>
                    <h3>CEO Michael Harrison Named "Technology Leader of the Year"</h3>
                    <p>
                        Industry publication recognizes Harrison's vision and leadership in transforming the risk management industry through data-driven innovation.
                    </p>
                    <a href="<?php echo url('about-us/press-room/technology-leader-award'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="press-item">
                <div class="press-date">
                    <div class="date-day">10</div>
                    <div class="date-month">DEC</div>
                    <div class="date-year">2025</div>
                </div>
                <div class="press-content">
                    <div class="press-category">Research</div>
                    <h3>New Report: Digital Identity Fraud Increased 35% in 2025</h3>
                    <p>
                        VettlyGlobal's annual fraud trends report reveals evolving tactics and provides recommendations for organizations to strengthen their defenses.
                    </p>
                    <a href="<?php echo url('about-us/press-room/digital-identity-fraud-report'); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Media Resources -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Media Resources</h2>
            <p>Assets and information for media professionals</p>
        </div>

        <div class="resources-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Media Kit</h3>
                <p>Company logos, brand guidelines, and official fact sheets for press and media use.</p>
                <a href="<?php echo url('contact'); ?>" class="btn btn-outline-primary"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Company Fact Sheet</h3>
                <p>Key statistics, milestones, and company information for media reference.</p>
                <a href="<?php echo url('contact'); ?>" class="btn btn-outline-primary"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Executive Bios</h3>
                <p>Leadership profiles and background information on VettlyGlobal's executive team.</p>
                <a href="<?php echo url('about-us/leadership'); ?>" class="btn btn-outline-primary"><i class="fas fa-arrow-right"></i> View Leadership</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Media Inquiries</h3>
                <p>For press inquiries, interview requests, or media partnerships, get in touch with our team.</p>
                <a href="<?php echo url('contact'); ?>" class="btn btn-outline-primary"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Subscribe to Press Updates</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Stay informed about the latest VettlyGlobal news and announcements.
            </p>
            <form method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>" data-validate style="display: flex; gap: 15px; max-width: 500px; margin: 0 auto; flex-wrap: wrap;">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="redirect_url" value="<?php echo current_url(); ?>">
                <input type="email" name="email" placeholder="Enter your email" required style="flex: 1; min-width: 250px; padding: 15px 20px; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                <button type="submit" class="btn btn-primary btn-lg">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<style>
.featured-news {
    position: relative;
    overflow: hidden;
}

.featured-news::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.press-releases {
    display: grid;
    gap: 30px;
}

.press-item {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 30px;
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.press-item:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-5px);
}

.press-date {
    text-align: center;
    padding: 15px;
    background: var(--bg-light);
    border-radius: 8px;
    align-self: start;
}

.date-day {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1;
}

.date-month {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-primary);
    text-transform: uppercase;
}

.date-year {
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.press-content {
    display: flex;
    flex-direction: column;
}

.press-category {
    display: inline-block;
    background: var(--primary-color);
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 15px;
    width: fit-content;
}

.press-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--text-primary);
}

.press-content p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 20px;
}

.read-more {
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.read-more:hover {
    gap: 12px;
}

.resources-grid {
    max-width: 1200px;
    margin: 0 auto;
}

.resource-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: var(--transition);
}

.resource-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.resource-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: white;
}

.resource-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.resource-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 25px;
}

.contact-info {
    display: grid;
    gap: 15px;
}

.contact-item {
    display: flex;
    justify-content: space-between;
    padding: 15px 0;
    border-bottom: 1px solid #ddd;
}

.contact-item:last-child {
    border-bottom: none;
}

.contact-item strong {
    color: var(--text-primary);
}

.contact-item a {
    color: var(--primary-color);
    text-decoration: none;
}

.contact-item a:hover {
    text-decoration: underline;
}

.social-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--primary-color);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    transition: var(--transition);
    text-decoration: none;
}

.social-btn:hover {
    background: var(--primary-dark);
    transform: translateY(-3px);
}

@media (max-width: 768px) {
    .featured-news {
        padding: 40px 30px;
    }

    .press-item {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .press-date {
        width: fit-content;
    }

    .contact-item {
        flex-direction: column;
        gap: 8px;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
