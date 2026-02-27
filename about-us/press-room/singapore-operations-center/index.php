<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'VettlyGlobal Opens New Operations Center in Singapore - Press Room';
$meta_description = 'VettlyGlobal expands Asia-Pacific presence with new operations center in Singapore, growing global headcount to over 1,000 employees.';

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
                <span>Singapore Operations</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style=" margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Expansion</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> January 8, 2026</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">VettlyGlobal Opens New Operations Center in Singapore</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">Singapore - January 8, 2026</strong> - VettlyGlobal today announced the opening of its new operations center in Singapore, marking a significant expansion of the company's presence in the Asia-Pacific region. The new facility brings VettlyGlobal's global headcount to over 1,000 employees.</p>

                <p>The Singapore center will serve as VettlyGlobal's regional headquarters for Asia-Pacific, supporting growing demand for risk management and identity verification services across the region. The facility will house teams focused on client services, product development, and data operations.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Expansion Details</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">State-of-the-art facility in Singapore's central business district</li>
                    <li style="margin-bottom: 10px;">Initial team of 150 professionals with plans to grow to 300 by year-end</li>
                    <li style="margin-bottom: 10px;">Dedicated data processing center for Asia-Pacific compliance requirements</li>
                    <li style="margin-bottom: 10px;">Regional client support with local language capabilities</li>
                    <li style="margin-bottom: 10px;">Global headcount surpasses 1,000 employees across 8 countries</li>
                </ul>

                <p>"Singapore is a natural hub for our Asia-Pacific operations, given its strong regulatory framework, world-class infrastructure, and strategic location," said Michael Harrison, CEO of VettlyGlobal. "This expansion underscores our commitment to providing localized support to our growing client base in the region."</p>

                <p>VettlyGlobal has seen a 60% increase in demand from Asia-Pacific clients over the past year, driven by heightened regulatory requirements and increasing digital transformation initiatives across financial services, healthcare, and government sectors.</p>

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
