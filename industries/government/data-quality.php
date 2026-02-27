<?php
/**
 * Government - Data Quality Management Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Data Quality Management for Government | VattleyGlobal';
$meta_description = 'Ensure data accuracy and integrity across government systems with data cleansing, standardization, and master data management solutions.';

include '../../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url('industries/government'); ?>" style="color: white;">Government</a>
                <span style="margin: 0 10px;">/</span>
                <span>Data Quality Management</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Data Quality Management</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Achieve accurate, consistent, and reliable data across all government systems with comprehensive data quality solutions.
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="section">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="margin-bottom: 25px;">Improve Data Accuracy & Consistency</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    Government agencies manage massive amounts of citizen data across multiple systems and databases. Poor data quality leads to incorrect decisions, compliance violations, and wasted resources. VettlyGlobal's data quality solutions ensure your agency has accurate, consistent, and reliable information.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    From cleansing legacy data to standardizing formats and managing master data, we help agencies optimize data quality for better decision-making and program delivery.
                </p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="<?php echo url('contact'); ?>" class="btn btn-primary">Get Started</a>
                    <a href="<?php echo url('resources'); ?>" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 60px 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 25px;">Key Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Data cleansing and remediation
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Data standardization
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Master data management
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Data validation rules
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0;"></i>
                        Continuous quality monitoring
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Data Quality Solutions</h2>
            <p>Comprehensive tools for managing government data</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Data Cleansing -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-broom" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Cleansing</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Identify and correct errors, duplicates, and inconsistencies in government databases and records.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Error detection
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Duplicate identification
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Record consolidation
                    </li>
                </ul>
            </div>

            <!-- Data Standardization -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-align-center" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Standardization</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Standardize formats, naming conventions, and data structures across all government systems and databases.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Format standardization
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Address normalization
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Field mapping
                    </li>
                </ul>
            </div>

            <!-- Master Data Management -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-cubes" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Master Data Management</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Maintain a single source of truth for citizen, employee, and organizational reference data.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Golden record creation
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Data governance
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Synchronization services
                    </li>
                </ul>
            </div>

            <!-- Data Validation -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-check-square" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Validation Rules</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Enforce data quality rules at point of entry and continuously validate data across systems.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Business rules engine
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Real-time validation
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Error reporting
                    </li>
                </ul>
            </div>

            <!-- Quality Monitoring -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Continuous Quality Monitoring</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Monitor data quality metrics and identify issues before they impact government operations.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Quality dashboards
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Trend analysis
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Alert notifications
                    </li>
                </ul>
            </div>

            <!-- Data Governance -->
            <div class="feature-card" style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <div style="width: 60px; height: 60px; background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: white;"></i>
                </div>
                <h3 style="margin-bottom: 15px;">Data Governance</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    Establish policies, roles, and accountability for data quality and stewardship across agencies.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--text-secondary);">
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Policy framework
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Steward assignment
                    </li>
                    <li style="padding: 8px 0; padding-left: 25px; position: relative;">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Audit trails
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Agency Benefits -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Benefits for Government Agencies</h2>
            <p>Improved data quality and operational decisions</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Better Decisions</h3>
                <p style="color: var(--text-secondary);">
                    Accurate data enables better policy decisions, program delivery, and resource allocation across agencies.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Reduced Errors</h3>
                <p style="color: var(--text-secondary);">
                    Eliminate data errors that lead to incorrect benefit payments, eligibility determination, and service delivery.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Compliance</h3>
                <p style="color: var(--text-secondary);">
                    Meet government data quality standards, audit requirements, and reporting obligations.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Cost Reduction</h3>
                <p style="color: var(--text-secondary);">
                    Reduce rework, improve processing efficiency, and lower operational costs through better data quality.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">System Integration</h3>
                <p style="color: var(--text-secondary);">
                    Enable seamless data sharing and integration between government systems and agencies.
                </p>
            </div>

            <div style="padding: 25px; border-left: 4px solid var(--primary-color);">
                <h3 style="margin-bottom: 15px;">Accountability</h3>
                <p style="color: var(--text-secondary);">
                    Establish clear responsibility and accountability for data quality through governance frameworks.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Details -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Implementation & Integration</h2>
            <p>Pragmatic approach to data quality improvement</p>
        </div>

        <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 25px;">Phased Approach</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    We implement data quality projects in phases, starting with assessment and high-impact cleansing, then moving to standardization and ongoing governance.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Implementation Phases</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Phase 1:</strong> Assessment and planning
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Phase 2:</strong> Data cleansing
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Phase 3:</strong> Standardization
                    </li>
                    <li style="padding: 10px 0; color: var(--text-secondary);">
                        <strong>Phase 4:</strong> MDM and governance
                    </li>
                </ul>
            </div>

            <div>
                <h3 style="margin-bottom: 25px;">Ongoing Support</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px;">
                    VettlyGlobal provides ongoing data quality management, monitoring, and optimization services to maintain data excellence.
                </p>
                <h4 style="margin-top: 30px; margin-bottom: 15px;">Ongoing Services</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Quality monitoring
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Rule optimization
                    </li>
                    <li style="padding: 10px 0; padding-left: 25px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color);"></i>
                        Staff training
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Improve Your Data Quality</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px;">
                Achieve accurate, consistent, and reliable data across all government systems with our comprehensive data quality solutions.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('industries/government'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-arrow-left"></i>
                    Back to Government
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
