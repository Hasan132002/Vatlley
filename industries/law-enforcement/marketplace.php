<?php
/**
 * Law Enforcement - Public Safety Marketplace Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Public Safety Marketplace & Technology Solutions';
$meta_description = 'Integrated marketplace connecting law enforcement agencies with public safety technology solutions, vendors, and procurement services.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/law-enforcement'); ?>" style="color: white;">Law Enforcement</a>
                <span style="margin: 0 10px;">/</span>
                <span>Marketplace</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Public Safety Marketplace</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Access an integrated marketplace of vetted public safety technology solutions, connect with qualified vendors, and streamline procurement for law enforcement agencies.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Integrated Public Safety Platform</h2>
            <p>Discover, evaluate, and procure law enforcement solutions</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Connected Marketplace for Law Enforcement</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.8;">
                    Connect with a vetted network of public safety technology vendors, explore innovative solutions, and simplify procurement through a centralized marketplace platform.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Curated solution directory
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Vendor comparison tools
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Integration support
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Simplified procurement
                    </li>
                </ul>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    Schedule Demo
                </a>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px; height: 400px; display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: var(--text-secondary);">
                    <i class="fas fa-store" style="font-size: 2rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                    <p>Marketplace Platform</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Public Safety Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5;">
            <h2>Law Enforcement Benefits</h2>
            <p>Streamlined technology adoption and procurement</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-search" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Discover Solutions</h4>
                <p style="color: var(--text-secondary);">Browse comprehensive directory of vetted public safety solutions organized by category, use case, and agency size.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-balance-scale" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Compare Vendors</h4>
                <p style="color: var(--text-secondary);">Evaluate solutions side-by-side with pricing, features, integration capabilities, and agency reviews for informed decisions.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-puzzle-piece" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Integration Support</h4>
                <p style="color: var(--text-secondary);">Access integration APIs, technical documentation, and support resources for seamless deployment with existing systems.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-file-contract" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Simplified Procurement</h4>
                <p style="color: var(--text-secondary);">Streamlined purchasing process with pre-negotiated volume pricing, standardized contracts, and compliance documentation.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-star" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Agency Reviews</h4>
                <p style="color: var(--text-secondary);">Learn from peer agencies through detailed case studies, reviews, and ratings of solutions in real-world deployments.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-sync" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Vendor Network</h4>
                <p style="color: var(--text-secondary);">Connect directly with solution providers for demonstrations, technical support, and ongoing partnership opportunities.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Platform Features</h2>
            <p>Complete marketplace capabilities</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            <div>
                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-book" style="color: var(--primary-color);"></i>
                        Solution Directory
                    </h4>
                    <p style="color: var(--text-secondary);">Curated catalog of public safety technology solutions with detailed descriptions, pricing, and integration information.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-filter" style="color: var(--primary-color);"></i>
                        Smart Filtering & Search
                    </h4>
                    <p style="color: var(--text-secondary);">Find solutions by department type, function, budget, integration needs, and other advanced filtering criteria.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-comments" style="color: var(--primary-color);"></i>
                        Agency Reviews
                    </h4>
                    <p style="color: var(--text-secondary);">Peer feedback and ratings from law enforcement agencies who have deployed solutions in production environments.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-chart-bar" style="color: var(--primary-color);"></i>
                        Comparison Tools
                    </h4>
                    <p style="color: var(--text-secondary);">Side-by-side comparison of features, pricing, support, and integration capabilities across competing solutions.</p>
                </div>
            </div>

            <div style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 30px;">Marketplace Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        500+ vetted solutions
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Crime analytics tools
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Records management systems
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Mobile patrol solutions
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Evidence management
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Community engagement tools
                    </li>
                    <li style="padding: 15px 0; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Integrated procurement support
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Success Stories</h2>
            <p>Agencies finding solutions through the marketplace</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 35px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Medium-Sized Department</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Police Department</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Used marketplace to identify crime analytics solution matching budget and integration needs, reducing selection and procurement time from 6 months to 6 weeks.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Selection Time</span>
                        <strong>85% faster</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Solutions Compared</span>
                        <strong>12</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Cost Savings</span>
                        <strong>$45K</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The marketplace made it easy to find the right solution without months of research."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Multi-Jurisdictional Agency</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Regional Law Enforcement</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Found mobile reporting solution through marketplace and accessed integration support for seamless deployment across 5 agencies with different legacy systems.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Agencies Connected</span>
                        <strong>5</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Integration Support</span>
                        <strong>Seamless</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Deployment Time</span>
                        <strong>12 weeks</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The marketplace vendor had APIs ready. Integration was smooth across all jurisdictions."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-award"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Large Metro Department</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Police Department</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Leveraged marketplace agency reviews and peer feedback to select evidence management system with highest satisfaction ratings and proven deployment success.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Agencies Reviewed</span>
                        <strong>23</strong>
                    </div>
                    <li style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">User Satisfaction</span>
                        <strong>4.8/5 stars</strong>
                    </li>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Deployment Success</span>
                        <strong>100%</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Reading reviews from agencies like ours gave us confidence. Deployment was smooth."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Access the Public Safety Marketplace</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Discover vetted public safety solutions, connect with qualified vendors, and streamline technology procurement for your law enforcement agency.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); font-weight: 600; padding: 15px 40px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-comments"></i>
                    Request Demo
                </a>
                <a href="<?php echo url('industries/law-enforcement'); ?>" class="btn" style="background: transparent; color: white; border: 2px solid white; font-weight: 600; padding: 13px 38px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-arrow-left"></i>
                    Back to Law Enforcement
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
