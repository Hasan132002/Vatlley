<?php
require_once '../../../config.php';
require_once '../../../includes/db.php';
require_once '../../../includes/functions.php';

$page_title = 'VettlyGlobal Launches AI-Powered Fraud Detection Suite - Press Room';
$meta_description = 'VettlyGlobal launches new AI-powered fraud detection suite with machine learning capabilities that reduce false positives by 45%.';

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
                <span>AI Fraud Detection Suite</span>
            </div>
            <h1 style="color: white; margin-bottom: 15px;">Press Release</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="press-detail" style=" margin: 0 auto;">
            <div class="press-detail-meta" style="display: flex; gap: 15px; align-items: center; margin-bottom: 25px; flex-wrap: wrap;">
                <span class="press-category-badge" style="background: var(--primary-color); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Product Launch</span>
                <span style="color: var(--text-secondary); font-size: 0.95rem;"><i class="far fa-calendar"></i> February 5, 2026</span>
            </div>

            <h2 style="font-size: 2rem; margin-bottom: 25px; line-height: 1.4;">VettlyGlobal Launches AI-Powered Fraud Detection Suite</h2>

            <div class="press-detail-body" style="color: var(--text-secondary); line-height: 1.9; font-size: 1.05rem;">
                <p><strong style="color: var(--text-primary);">New York, NY - February 5, 2026</strong> - VettlyGlobal today announced the launch of its next-generation AI-Powered Fraud Detection Suite, featuring advanced machine learning capabilities that reduce false positives by 45% while identifying emerging fraud patterns in real-time.</p>

                <p>The new suite integrates seamlessly with existing risk management workflows and leverages proprietary algorithms trained on billions of data points to deliver unparalleled accuracy in fraud detection across multiple channels and transaction types.</p>

                <h3 style="color: var(--text-primary); margin-top: 30px;">Key Features</h3>
                <ul style="margin: 15px 0 25px 20px;">
                    <li style="margin-bottom: 10px;">Real-time fraud scoring with sub-100ms response times</li>
                    <li style="margin-bottom: 10px;">Adaptive machine learning models that evolve with emerging threat patterns</li>
                    <li style="margin-bottom: 10px;">45% reduction in false positives compared to traditional rule-based systems</li>
                    <li style="margin-bottom: 10px;">Multi-channel coverage including online, mobile, and in-person transactions</li>
                    <li style="margin-bottom: 10px;">Comprehensive dashboard with real-time analytics and reporting</li>
                </ul>

                <p>"Fraud tactics are evolving at an unprecedented pace, and organizations need intelligent systems that can keep up," said Dr. Sarah Johnson, Chief Security Officer at VettlyGlobal. "Our new suite represents a quantum leap in fraud detection technology, combining the power of AI with deep domain expertise."</p>

                <p>The AI-Powered Fraud Detection Suite is immediately available to existing VettlyGlobal clients and new customers. Organizations interested in learning more can contact the VettlyGlobal sales team for a personalized demonstration.</p>

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
