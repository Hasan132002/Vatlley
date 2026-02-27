<?php
/**
 * Law Enforcement - Crash & Incident Reporting Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Digital Crash & Incident Reporting Solutions';
$meta_description = 'Streamline police incident and crash report documentation with automated digital reporting systems, reducing paperwork and improving data accuracy.';

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
                <span>Crash Reporting</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Digital Crash & Incident Reporting</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Replace paper reports with intelligent digital incident documentation that improves accuracy, speeds up processing, and integrates seamlessly with records management systems.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Modern Incident Documentation Platform</h2>
            <p>Eliminate paperwork, improve accuracy, accelerate processing</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Automated Digital Reporting</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.8;">
                    Move your agency from paper-based reporting to a fully digital workflow that reduces administrative burden, improves data quality, and accelerates report processing times.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Mobile and desktop forms
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Real-time data validation
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Intelligent field population
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Automated workflows
                    </li>
                </ul>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    Schedule Demo
                </a>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px; height: 400px; display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: var(--text-secondary);">
                    <i class="fas fa-file-alt" style="font-size: 2rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                    <p>Digital Reporting Interface</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Public Safety Benefits -->
<section class="section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Law Enforcement Benefits</h2>
            <p>Efficiency gains and improved outcomes</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-clock" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Reduced Paperwork</h4>
                <p style="color: var(--text-secondary);">Officers spend less time on administrative tasks and more time on community engagement and crime prevention activities.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-check-circle" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Improved Accuracy</h4>
                <p style="color: var(--text-secondary);">Validation rules and standardized fields eliminate incomplete or inconsistent data entry errors in incident reports.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-tachometer-alt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Faster Processing</h4>
                <p style="color: var(--text-secondary);">Automated submission and review workflows reduce report processing time from days to hours, accelerating case progression.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-database" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Better Data Integration</h4>
                <p style="color: var(--text-secondary);">Seamless integration with RMS, CAD, and other systems ensures data flows smoothly across your agency infrastructure.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-mobile-alt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Mobile Accessibility</h4>
                <p style="color: var(--text-secondary);">Officers can file reports from the field on tablets and smartphones, reducing time spent at the station completing paperwork.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-dollar-sign" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Cost Savings</h4>
                <p style="color: var(--text-secondary);">Eliminate paper, printing, storage costs, and reduce administrative staff workload with fully digital operations.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Technology Features</h2>
            <p>Comprehensive digital reporting capabilities</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            <div>
                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-mobile-alt" style="color: var(--primary-color);"></i>
                        Mobile Field Forms
                    </h4>
                    <p style="color: var(--text-secondary);">Fully responsive forms optimized for patrol cars, smartphones, and tablets with offline capability.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-robot" style="color: var(--primary-color);"></i>
                        Smart Auto-Population
                    </h4>
                    <p style="color: var(--text-secondary);">Intelligent field completion using lookup tables, recent data, and predictive text to speed up report creation.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-double" style="color: var(--primary-color);"></i>
                        Real-Time Validation
                    </h4>
                    <p style="color: var(--text-secondary);">Instant feedback on incomplete or invalid entries prevents bad data from entering your system.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-link" style="color: var(--primary-color);"></i>
                        System Integration
                    </h4>
                    <p style="color: var(--text-secondary);">Native integrations with CAD, RMS, NCIC, local records, and evidence systems for unified data flow.</p>
                </div>
            </div>

            <div style="background: linear-gradient(135deg, var(--primary-dark), var(--primary-color)); padding: 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 30px;">Complete Reporting Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Crash/traffic incident reports
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Criminal incident reports
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Arrest reports
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Photo/evidence attachments
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Supervisor review workflows
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Automated routing and approvals
                    </li>
                    <li style="padding: 15px 0; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Audit trails and compliance logging
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
            <p>Agencies achieving operational efficiency</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 35px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-car"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">State Highway Patrol</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Traffic Incident Division</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Implemented digital crash reporting and eliminated paper forms, reducing report processing time by 66% and improving data accuracy for insurance claims.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Processing Time</span>
                        <strong>66% reduction</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Officer Hours Saved</span>
                        <strong>2,400/year</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Data Accuracy</span>
                        <strong>99.2%</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Officers are back on the road faster. We've eliminated our backlog completely."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">County Police Department</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Criminal Investigations</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Deployed mobile reporting solution enabling detectives to file incident reports from the field, improving response coordination and case documentation quality.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Admin Time Saved</span>
                        <strong>40%</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Field Report Submission</span>
                        <strong>87% mobile</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Case Quality Score</span>
                        <strong>94.3%</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Detectives now spend time investigating, not typing. Mobile reporting changed our workflow."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Municipal Police Department</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Records Management</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Automated digital reporting workflows connected to RMS eliminated manual data entry errors and reduced records staff by 35% through natural attrition.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Data Entry Errors</span>
                        <strong>94% reduction</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Annual Cost Savings</span>
                        <strong>$185K</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Paper Consumption</span>
                        <strong>Eliminated</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Going digital saved us money, improved accuracy, and made our staff happier. Win-win-win."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Modernize Your Incident Reporting</h2>
            <p>Replace paper-based processes with intelligent digital workflows that save time, improve accuracy, and enhance officer productivity.</p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-white btn-lg">
                    <i class="fas fa-comments" style="margin-right: 8px;"></i>
                    Request Demo
                </a>
                <a href="<?php echo url('industries/law-enforcement'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-arrow-left" style="margin-right: 8px;"></i>
                    Back to Law Enforcement
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
