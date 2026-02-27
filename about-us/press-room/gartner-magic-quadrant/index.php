<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'VettlyGlobal Named Leader in Gartner Magic Quadrant - Press Room';
$meta_description = 'VettlyGlobal recognized as a Leader in the Gartner Magic Quadrant for Identity Verification for completeness of vision and ability to execute.';

include '../../../includes/header.php';
?>

<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('about-us'); ?>" style="color: white;">About Us</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('about-us/press-room'); ?>" style="color: white;">Press Room</a>
                <span style="margin: 0 10px;">/</span>
                <span>Gartner Recognition</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style="margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Recognition</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> January 15, 2026</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">VettlyGlobal Named Leader in Gartner Magic Quadrant for Identity Verification</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">New York, NY - January 15, 2026</strong> - VettlyGlobal today announced that it has been positioned as a Leader in the Gartner Magic Quadrant for Identity Verification. The company was recognized for its completeness of vision and ability to execute in the rapidly growing identity verification market.</p>

                <p>The Gartner Magic Quadrant evaluates vendors based on their ability to execute on their stated vision and the completeness of that vision relative to the market's direction. Being named a Leader reflects VettlyGlobal's strong market position, innovative technology, and commitment to customer success.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Recognition Highlights</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">Positioned as a Leader for the second consecutive year</li>
                    <li style="margin-bottom: 10px;">Highest scores in completeness of vision among all evaluated vendors</li>
                    <li style="margin-bottom: 10px;">Recognized for innovation in AI-driven identity verification</li>
                    <li style="margin-bottom: 10px;">Strong customer satisfaction scores and retention rates</li>
                    <li style="margin-bottom: 10px;">Comprehensive multi-industry platform capabilities</li>
                </ul>

                <p>"Being recognized as a Leader by Gartner is a tremendous honor and a testament to our team's dedication to innovation," said Michael Harrison, CEO of VettlyGlobal. "This recognition reinforces our commitment to providing the most comprehensive and accurate identity verification solutions in the market."</p>

                <p>VettlyGlobal's identity verification platform leverages advanced AI, machine learning, and a global data network to provide real-time verification across multiple identity dimensions including document verification, biometric matching, and behavioral analytics.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">About VettlyGlobal</h3>
                <p>VettlyGlobal is a global leader in risk management, identity verification, and data intelligence solutions. The company empowers organizations to make informed decisions, prevent fraud, and maintain compliance through innovative technology and comprehensive data analytics.</p>
            </div>

            <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid var(--border-light);">
                <a href="<?php echo url('about-us/press-room'); ?>" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Back to Press Room
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../../includes/footer.php'; ?>
