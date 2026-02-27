<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'CEO Michael Harrison Named Technology Leader of the Year - Press Room';
$meta_description = 'VettlyGlobal CEO Michael Harrison recognized as Technology Leader of the Year for transforming the risk management industry.';

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
                <span>Technology Leader Award</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style=" margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Awards</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> December 20, 2025</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">CEO Michael Harrison Named "Technology Leader of the Year"</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">New York, NY - December 20, 2025</strong> - VettlyGlobal is proud to announce that CEO Michael Harrison has been named "Technology Leader of the Year" by a leading industry publication. The award recognizes Harrison's vision and leadership in transforming the risk management industry through data-driven innovation.</p>

                <p>Under Harrison's leadership, VettlyGlobal has grown from a startup to a global enterprise serving over 500 clients across multiple industries. His strategic vision has driven the company's investment in AI and machine learning technologies, establishing VettlyGlobal as a market leader in risk intelligence.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Leadership Achievements</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">Led VettlyGlobal from startup to $1B+ valuation in under 8 years</li>
                    <li style="margin-bottom: 10px;">Spearheaded the development of the industry's first AI-powered risk intelligence platform</li>
                    <li style="margin-bottom: 10px;">Expanded company operations to 8 countries across 4 continents</li>
                    <li style="margin-bottom: 10px;">Built a team of over 1,000 professionals globally</li>
                    <li style="margin-bottom: 10px;">Championed data privacy and responsible AI practices across the industry</li>
                </ul>

                <p>"I'm deeply honored to receive this recognition, but it truly belongs to the entire VettlyGlobal team," said Harrison. "Our success is built on the talent and dedication of our people who work tirelessly to help organizations make safer, smarter decisions."</p>

                <p>The award was presented at the annual Technology Leadership Awards ceremony, attended by executives from leading technology companies worldwide.</p>

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
