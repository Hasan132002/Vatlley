<?php
/**
 * Financial Services - Sanctions Screening Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Sanctions Screening Solutions';
$meta_description = 'Comprehensive sanctions screening against global watchlists. PEP screening, OFAC screening, and real-time sanctions list updates for financial institutions.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: white;">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/financial-services'); ?>" style="color: white;">Financial Services</a>
                <span style="margin: 0 10px;">/</span>
                <span>Sanctions Screening</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Sanctions Screening Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Comprehensive screening against global sanctions lists and watchlists. Real-time PEP screening and OFAC compliance for financial institutions worldwide.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Sanctions Screening Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Sanctions Screening platform provides comprehensive screening against global sanctions lists, export control lists, and watchlists. Our platform includes screening against OFAC, UN, EU, UK, and other international sanctions authorities with real-time updates and enhanced PEP screening capabilities.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                With intelligent matching algorithms that reduce false positives and comprehensive coverage of global sanctions lists, our platform ensures your institution meets OFAC and international sanctions compliance requirements while minimizing operational burden.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Comprehensive global sanctions and watchlist screening platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-globe" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Global Sanctions List Coverage</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Comprehensive screening against OFAC, UN, EU, UK, Australian, and Canadian sanctions lists. Coverage of all major international sanctions authorities and emerging lists.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-people-arrows" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Politically Exposed Person (PEP) Screening</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Comprehensive PEP screening including government officials, their family members, and close associates. Coverage of current and former PEPs with relationship mapping.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-sync-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Real-Time List Updates</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Real-time updates to sanctions lists as they are released by authorities. Continuous monitoring ensures your institution has current information for compliance decisions.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-robot" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Intelligent Matching Algorithms</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Advanced fuzzy matching that handles name variations, aliases, and phonetic similarities. Reduce false positives while improving detection accuracy with machine learning.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-certificate" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Ongoing Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Continuous monitoring of existing customers against updated sanctions lists. Automatic alerts for customers appearing on new sanctions designations.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-sitemap" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Beneficial Ownership Screening</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Screen beneficial owners and corporate shareholders against sanctions lists. Identify ownership connections that may trigger sanctions screening requirements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Benefits -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Compliance & Regulatory Benefits</h2>
            <p>Comprehensive sanctions compliance for global financial institutions</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">OFAC Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Full compliance with OFAC screening requirements. Screening of customers, transactions, and beneficial owners against OFAC-designated lists.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">UN Sanctions Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Screening against UN Security Council sanctions lists and designations. Compliance with international sanctions imposed through United Nations resolutions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">EU Sanctions Lists</h3>
                <p style="color: var(--text-secondary);">
                    Comprehensive EU sanctions list screening including consolidated list of persons, groups, and entities subject to EU sanctions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Multi-Jurisdictional Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Support for sanctions requirements across multiple jurisdictions. UK, Australia, Canada, and emerging sanctions regime compliance.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">PEP Regulatory Requirements</h3>
                <p style="color: var(--text-secondary);">
                    Compliance with PEP screening requirements under FATF recommendations and international AML standards. Beneficial ownership transparency for PEP customers.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Audit Trail Documentation</h3>
                <p style="color: var(--text-secondary);">
                    Complete audit trails of screening activities and decisions. Document compliance efforts for regulatory examinations and OFAC investigations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Common Use Cases</h2>
            <p>How institutions ensure sanctions compliance</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Customer Onboarding Screening</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Screen all new customers during onboarding against sanctions lists and PEP databases. Prevent account opening for sanctioned individuals and entities before they enter your system.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Transaction Screening</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Screen transaction parties and beneficiaries against sanctions lists. Block transactions involving sanctioned parties or high-risk jurisdictions in real-time.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Beneficial Owner Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Verify beneficial owners of corporate customers against sanctions and PEP lists. Identify ownership connections that trigger enhanced due diligence requirements.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Ongoing Customer Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Continuously monitor existing customers against updated sanctions lists. Receive automatic alerts when customers appear on new sanctions designations.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">High-Risk Jurisdiction Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor customers and transactions involving high-risk jurisdictions subject to sanctions. Enhanced scrutiny for customers in or connected to sanctioned countries.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">International Correspondent Banking</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Screen correspondent banks and intermediaries against sanctions lists. Verify compliance of international payments and correspondent banking relationships.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 style="color: white; margin-bottom: 20px;">Ensure Sanctions Compliance</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Comprehensive sanctions screening with real-time list updates and intelligent matching. Protect your institution with global sanctions and PEP screening.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn" style="background: white; color: var(--primary-color); font-weight: 600; padding: 12px 32px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-calendar"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn" style="background: transparent; border: 2px solid white; color: white; font-weight: 600; padding: 10px 30px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fas fa-book"></i>
                    View Resources
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.use-cases-grid > div:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    transition: var(--transition);
}

.compliance-grid > div {
    transition: var(--transition);
}

.compliance-grid > div:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-lg);
}
</style>

<?php include '../../includes/footer.php'; ?>
