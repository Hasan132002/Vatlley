<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'VettlyGlobal Secures $150M Series C Funding - Press Room';
$meta_description = 'VettlyGlobal announces $150M Series C funding to accelerate global expansion, product innovation, and strategic acquisitions.';

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
                <span>Series C Funding</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style="margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Funding</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> February 10, 2026</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">VettlyGlobal Secures $150M Series C Funding to Accelerate Global Expansion</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">New York, NY - February 10, 2026</strong> - VettlyGlobal, a leading provider of risk management and identity verification solutions, today announced the successful completion of a $150 million Series C funding round. The investment was led by prominent venture capital firms and marks a significant milestone in the company's growth trajectory.</p>

                <p>The funding will be strategically deployed across three key areas: product innovation, geographic expansion, and targeted acquisitions. VettlyGlobal plans to enhance its AI-powered fraud detection capabilities, expand its presence in European and Asia-Pacific markets, and acquire complementary technology companies to strengthen its product portfolio.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Key Highlights</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">$150M in Series C funding led by top-tier venture capital firms</li>
                    <li style="margin-bottom: 10px;">Investment to fuel product innovation in AI and machine learning</li>
                    <li style="margin-bottom: 10px;">Plans for expansion into European and Asia-Pacific markets</li>
                    <li style="margin-bottom: 10px;">Strategic acquisitions pipeline to enhance technology capabilities</li>
                    <li style="margin-bottom: 10px;">Company valuation exceeds $1.2 billion post-funding</li>
                </ul>

                <p>"This investment validates our vision of creating the most comprehensive risk intelligence platform in the market," said Michael Harrison, CEO of VettlyGlobal. "We are committed to helping organizations worldwide make smarter, safer decisions through data-driven insights."</p>

                <p>Since its founding, VettlyGlobal has experienced consistent growth, serving over 500 enterprise clients across financial services, healthcare, insurance, and government sectors. The company's platform processes millions of identity verifications and risk assessments daily.</p>

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
