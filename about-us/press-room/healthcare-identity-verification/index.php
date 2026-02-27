<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'VettlyGlobal Partners with Major Healthcare Networks - Press Room';
$meta_description = 'VettlyGlobal announces strategic partnership with major healthcare networks for advanced identity verification and fraud prevention.';

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
                <span>Healthcare Partnership</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style=" margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Partnership</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> January 28, 2026</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">VettlyGlobal Partners with Major Healthcare Networks for Identity Verification</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">New York, NY - January 28, 2026</strong> - VettlyGlobal today announced a strategic partnership with several major healthcare networks to bring advanced identity verification and fraud prevention services to healthcare providers serving over 15 million patients nationwide.</p>

                <p>The partnership addresses the growing challenge of healthcare identity fraud, which costs the industry billions of dollars annually. VettlyGlobal's identity verification platform will be integrated into patient registration workflows, insurance verification processes, and telehealth platforms to ensure accurate patient identification.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Partnership Benefits</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">Real-time patient identity verification at point of care</li>
                    <li style="margin-bottom: 10px;">Reduced medical identity fraud and insurance claim errors</li>
                    <li style="margin-bottom: 10px;">HIPAA-compliant data handling and privacy protection</li>
                    <li style="margin-bottom: 10px;">Seamless integration with existing Electronic Health Record (EHR) systems</li>
                    <li style="margin-bottom: 10px;">Coverage across 15+ million patients in the partner networks</li>
                </ul>

                <p>"Healthcare identity fraud is a serious issue that affects patient safety and increases costs across the system," said Michael Chen, Healthcare Compliance Director at VettlyGlobal. "This partnership allows us to apply our advanced verification technology where it's needed most - at the point of patient care."</p>

                <p>The rollout will begin in Q2 2026, with full deployment expected by year-end. VettlyGlobal will provide dedicated onboarding support and training to ensure a smooth transition for healthcare staff.</p>

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
