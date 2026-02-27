<?php
/**
 * Law Enforcement - Investigative Services Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Investigative Services for Law Enforcement';
$meta_description = 'Comprehensive investigative tools including person searches, asset discovery, and link analysis to accelerate investigations and case resolution.';

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
                <span>Investigative Services</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Investigative Services & Intelligence</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Access comprehensive person search, asset discovery, and link analysis tools to identify subjects, locate missing persons, and uncover connections in complex investigations.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Intelligence & Investigation Platform</h2>
            <p>Powerful tools for locating subjects and uncovering evidence</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Comprehensive Intelligence Access</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.8;">
                    Connect to extensive databases of public records, private data sources, and law enforcement intelligence to identify subjects, locate assets, and discover connections that advance investigations.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Advanced person search algorithms
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Asset and property discovery
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Relationship and connection mapping
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Multi-state record access
                    </li>
                </ul>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    Schedule Demo
                </a>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px; height: 400px; display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: var(--text-secondary);">
                    <i class="fas fa-search" style="font-size: 2rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                    <p>Investigative Tools Dashboard</p>
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
            <p>Accelerate investigations and case resolution</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-users" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Locate Subjects Faster</h4>
                <p style="color: var(--text-secondary);">Find suspects, missing persons, and witnesses more quickly with comprehensive person search tools and multiple data sources.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-map-marked-alt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Discover Assets</h4>
                <p style="color: var(--text-secondary);">Identify real estate, vehicles, financial accounts, and other assets connected to subjects for asset seizure and recovery.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-network-wired" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Uncover Connections</h4>
                <p style="color: var(--text-secondary);">Visualize relationships and networks to identify associates, co-conspirators, and other subjects involved in criminal activity.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-bolt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Faster Case Development</h4>
                <p style="color: var(--text-secondary);">Reduce investigation time by quickly gathering intelligence and evidence needed to move cases forward and make arrests.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-gavel" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Stronger Prosecutions</h4>
                <p style="color: var(--text-secondary);">Provide prosecutors with comprehensive background information and evidence to support charging decisions and court proceedings.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-check-square" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Legal Compliance</h4>
                <p style="color: var(--text-secondary);">Use legally admissible data from compliant sources that can withstand judicial scrutiny and defense challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Technology Features</h2>
            <p>Comprehensive investigative capabilities</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            <div>
                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-user-search" style="color: var(--primary-color);"></i>
                        Advanced Person Search
                    </h4>
                    <p style="color: var(--text-secondary);">Multi-field search algorithm with fuzzy matching to find subjects despite name variations, misspellings, or aliases.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-home" style="color: var(--primary-color);"></i>
                        Property & Asset Discovery
                    </h4>
                    <p style="color: var(--text-secondary);">Identify real property, vehicles, boats, aircraft and other assets connected to subjects through comprehensive records.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-project-diagram" style="color: var(--primary-color);"></i>
                        Link Analysis & Visualization
                    </h4>
                    <p style="color: var(--text-secondary);">Create visual maps showing relationships, connections, and networks between subjects, associates, and locations.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-history" style="color: var(--primary-color);"></i>
                        Historical Records
                    </h4>
                    <p style="color: var(--text-secondary);">Access historical data and address history to track subject movements and identify frequent locations.</p>
                </div>
            </div>

            <div style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 30px;">Complete Investigation Toolkit</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Multi-state record access
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Criminal history & driver's license records
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Property and ownership records
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Contact information & phone records
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Employment and professional data
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Bulk person search capability
                    </li>
                    <li style="padding: 15px 0; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Audit trail and compliance documentation
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
            <p>Accelerated investigations through intelligence</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 35px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-search"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Missing Persons Unit</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Regional Police Department</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Used investigative services to locate missing elderly person by combining historical addresses and last known contact information, reducing search time by 78%.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Time to Locate</span>
                        <strong>4 hours</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Resources Deployed</span>
                        <strong>Minimal</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Outcome</span>
                        <strong>Safe return</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The address history and person search tools got us there in hours instead of days."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Criminal Investigation Bureau</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Major Crimes Task Force</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Link analysis uncovered criminal network spanning three states, identifying 23 associates and enabling coordinated multi-agency arrests and $2.1M asset seizure.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Associates Identified</span>
                        <strong>23</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Arrests Made</span>
                        <strong>19</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Assets Seized</span>
                        <strong>$2.1M</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The link analysis revealed connections we couldn't see manually. It cracked the entire network."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-home"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Financial Crimes Unit</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">District Attorney's Office</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Asset discovery located hidden properties and vehicles connected to fraud suspect, supporting aggressive prosecution and restitution agreements.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Assets Located</span>
                        <strong>14 properties</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Investigation Speed</span>
                        <strong>60% faster</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Restitution Ordered</span>
                        <strong>$890K</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "We found assets the suspect thought were hidden. The prosecutor loved having this information."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Accelerate Your Investigations</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Gain access to comprehensive investigative tools that locate subjects, discover assets, and uncover connections faster than manual research methods.
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
