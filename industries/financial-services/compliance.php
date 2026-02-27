<?php
/**
 * Financial Services - Regulatory Compliance Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Regulatory Compliance Solutions';
$meta_description = 'Comprehensive regulatory compliance solutions for financial institutions. Compliance monitoring, reporting, audit trails, and regulatory exam readiness.';

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
                <span>Compliance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Regulatory Compliance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Ensure compliance with global financial regulations. Comprehensive regulatory monitoring, automated reporting, and audit trail documentation for regulatory exams.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Compliance Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Regulatory Compliance platform provides comprehensive compliance management across all financial regulations. From AML/CFT to consumer protection and data privacy, our integrated platform ensures your institution meets all regulatory requirements.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                Streamline compliance operations with automated monitoring, reporting, and documentation. Prepare for regulatory examinations with confidence, knowing your compliance program is thoroughly documented and evidence-based.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Complete regulatory compliance management platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-tasks" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Continuous Compliance Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Real-time monitoring of compliance with multiple regulations. Automatic alerts for policy violations, rule breaches, and regulatory threshold exceedances.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-file-pdf" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Automated Regulatory Reporting</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Streamlined generation of regulatory reports including CRAR, call reports, and AML/CFT filings. Eliminate manual errors and ensure timely filing with regulatory authorities.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-book" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Policy & Procedure Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Centralized policy repository with version control and audit trails. Ensure employees follow current procedures and track policy acknowledgment and training completion.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-archive" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Complete Audit Trail Documentation</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Immutable audit trails of all transactions, decisions, and system activities. Support regulatory examinations with comprehensive documentation and evidence of compliance efforts.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-video" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Training & Testing Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Manage mandatory compliance training for all staff. Track training completion and testing scores with automatic re-training for failed assessments.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-microscope" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Compliance Testing & Audit</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Automated compliance testing and internal audit procedures. Measure control effectiveness and document compliance with regulatory standards and internal requirements.
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
            <p>Meet all financial regulatory requirements with integrated compliance platform</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Bank Secrecy Act (BSA)</h3>
                <p style="color: var(--text-secondary);">
                    Complete BSA compliance monitoring and reporting. FinCEN filing support including CTR and SAR submissions with documentation of compliance efforts.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Fair Lending Compliance</h3>
                <p style="color: var(--text-secondary);">
                    ECOA and FHA compliance monitoring. Adverse impact analysis and fair lending testing to ensure non-discriminatory lending practices.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Consumer Protection</h3>
                <p style="color: var(--text-secondary);">
                    TILA, RESPA, Dodd-Frank compliance. Truth in Lending disclosures and consumer protection rule adherence monitoring.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Data Privacy & Security</h3>
                <p style="color: var(--text-secondary);">
                    GLBA, GDPR, and CCPA compliance. Safeguards Rule implementation and data security program documentation for regulatory review.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Operational Risk Management</h3>
                <p style="color: var(--text-secondary);">
                    Operational risk assessment and management framework. Business continuity and disaster recovery plan documentation and testing.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Regulatory Examination Ready</h3>
                <p style="color: var(--text-secondary);">
                    Comprehensive documentation for regulatory examinations. Evidence of compliance program design, implementation, and effectiveness monitoring.
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
            <p>How institutions streamline compliance operations</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Regulatory Filing Automation</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Automate regulatory reporting including call reports, CRAR, and AML/CFT filings. Reduce manual errors and ensure timely submission to regulatory authorities.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Examination Readiness</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Prepare for regulatory examinations with complete documentation and audit trails. Demonstrate compliance program effectiveness with evidence of monitoring and remediation.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Policy Compliance Verification</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor adherence to internal policies and procedures. Verify employee training completion and competency with automatic alerts for compliance gaps.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Fair Lending Compliance</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor lending decisions for disparate impact and fair lending violations. Conduct adverse impact analysis across protected classes and borrower segments.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Third-Party Risk Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Monitor third-party compliance with vendor management requirements. Track due diligence, service level agreements, and regulatory compliance for outsourced functions.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Incident & Breach Reporting</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Document compliance violations and remediation efforts. Maintain audit trail of incidents, investigations, and corrective actions for regulatory review.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Streamline Your Compliance Operations</h2>
            <p>Ensure regulatory compliance across all financial regulations. Reduce compliance burden while maintaining comprehensive documentation for regulatory examinations.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Schedule Demo
                </a>
                <a href="<?php echo url('resources'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-book" style="margin-right: 8px;"></i>
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
