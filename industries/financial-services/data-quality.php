<?php
/**
 * Financial Services - Data Quality Solution Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Data Quality Solutions';
$meta_description = 'Data quality management and enhancement for financial institutions. Data cleansing, validation, enrichment, and master data management solutions.';

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
                <span>Data Quality</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Data Quality Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Ensure data accuracy and completeness across your organization. Comprehensive data quality management, cleansing, and enrichment for better decision making.
            </p>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="section">
    <div class="container">
        <div class="service-overview" style="max-width: 900px; margin: 0 auto; margin-bottom: 60px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 30px;">About Our Data Quality Solutions</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 20px;">
                VattleyGlobal's Data Quality platform helps financial institutions maintain clean, accurate, and complete data across all systems and processes. Poor data quality impacts regulatory compliance, decision accuracy, and operational efficiency. Our comprehensive platform addresses data quality issues at the source while providing continuous monitoring and improvement.
            </p>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                From data validation and cleansing to enrichment and master data management, our solutions ensure your organization has trustworthy data for analytics, compliance, and operational decisions.
            </p>
        </div>
    </div>
</section>

<!-- Features & Capabilities -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Key Features & Capabilities</h2>
            <p>Comprehensive data quality management platform</p>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Feature 1 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-circle" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Validation & Cleansing</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Identify and correct data errors, duplicates, and inconsistencies. Automatic data cleansing with configurable business rules and validation logic.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-database" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Enrichment Services</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Enhance customer and transaction data with external sources. Address verification, phone validation, employment data, and demographic enrichment.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-users-cog" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Master Data Management</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Centralized management of customer, product, and reference data. Create single source of truth while managing duplicate records and data conflicts.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-bar" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Quality Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Continuous monitoring of data quality metrics and KPIs. Automated alerts for data quality violations and deterioration trends.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-code-branch" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Record Linkage & Deduplication</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Identify and consolidate duplicate records across systems. Advanced matching algorithms to find duplicates despite data variations and errors.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-exchange-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Integration & ETL</h3>
                <p style="color: var(--text-secondary); line-height: 1.7;">
                    Extract, transform, and load data with quality controls built-in. Manage data flows across systems with automatic error handling and reconciliation.
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
            <p>Data quality essentials for regulatory compliance and operational excellence</p>
        </div>

        <div class="compliance-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Regulatory Reporting Accuracy</h3>
                <p style="color: var(--text-secondary);">
                    Ensure accurate regulatory reporting with clean, validated data. Reduce errors in Call Reports, AML/CFT filings, and capital requirement submissions.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Fair Lending Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Accurate demographic data for fair lending monitoring and testing. Proper data collection and maintenance for ECOA and FHA compliance.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">GDPR & Data Privacy</h3>
                <p style="color: var(--text-secondary);">
                    GDPR compliance with accurate data management and proper data handling. Support for right-to-know and data portability requirements.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">KYC/AML Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Clean, accurate customer data for KYC processes and AML screening. Ensure completeness of required customer information fields.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Audit Trail & Documentation</h3>
                <p style="color: var(--text-secondary);">
                    Complete documentation of data quality issues and remediation efforts. Support regulatory examinations with data quality evidence.
                </p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 12px; color: var(--primary-color);">Business Continuity</h3>
                <p style="color: var(--text-secondary);">
                    Reliable data backup and recovery with quality verification. Ensure data availability and accuracy for business continuity operations.
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
            <p>How institutions improve data quality and insights</p>
        </div>

        <div class="use-cases-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <!-- Use Case 1 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Customer Data Migration</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Cleanse and standardize customer data during system migrations. Ensure data quality throughout consolidation and integration projects.
                </p>
            </div>

            <!-- Use Case 2 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Duplicate Customer Consolidation</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Identify and consolidate duplicate customer records. Improve customer view and prevent fraud while maintaining data integrity.
                </p>
            </div>

            <!-- Use Case 3 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Regulatory Reporting Quality</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Ensure accuracy of Call Reports and AML/CFT filings. Validate data completeness and accuracy before submission to regulators.
                </p>
            </div>

            <!-- Use Case 4 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Address Standardization</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Standardize and validate customer addresses. Improve mail deliverability and compliance with address-related regulations.
                </p>
            </div>

            <!-- Use Case 5 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Analytics & BI Initiative</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Prepare data for analytics and business intelligence initiatives. Ensure consistent, high-quality data for insights and decision making.
                </p>
            </div>

            <!-- Use Case 6 -->
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="margin-bottom: 15px;">Fair Lending Monitoring</h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    Maintain accurate demographic data for fair lending testing and monitoring. Support compliance with ECOA and fair lending regulations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Improve Your Data Quality</h2>
            <p>Ensure clean, accurate, and complete data across your organization. Better data for better decisions, compliance, and operational results.</p>
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
