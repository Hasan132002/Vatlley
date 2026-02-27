<?php
/**
 * Law Enforcement - Crime Analytics Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Crime Analytics & Predictive Policing Solutions';
$meta_description = 'Advanced crime analytics and predictive policing tools to help law enforcement agencies predict crime patterns, allocate resources effectively, and reduce crime rates.';

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
                <span>Crime Analytics</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Crime Analytics & Predictive Policing</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Leverage advanced data analytics and AI-powered insights to predict crime patterns, optimize patrol deployment, and reduce incident rates across your jurisdiction.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Predictive Crime Intelligence Platform</h2>
            <p>Data-driven insights for smarter policing decisions</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Real-Time Crime Analysis</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.8;">
                    Our crime analytics platform combines historical crime data, environmental factors, and real-time incident reporting to identify patterns and predict where crimes are likely to occur.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Predictive heat mapping
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Pattern identification algorithms
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Temporal analysis
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Geographic clustering
                    </li>
                </ul>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    Schedule Demo
                </a>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px; height: 400px; display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: var(--text-secondary);">
                    <i class="fas fa-chart-line" style="font-size: 2rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                    <p>Analytics Dashboard Interface</p>
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
            <p>Measurable outcomes for community safety</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-percentage" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Reduced Response Times</h4>
                <p style="color: var(--text-secondary);">Predictive analysis helps deploy officers proactively, reducing emergency response times and preventing crimes before they occur.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-chart-bar" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Crime Rate Reduction</h4>
                <p style="color: var(--text-secondary);">Data-driven strategies demonstrate significant reductions in crime rates by targeting prevention efforts in high-risk areas and times.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-cog" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Resource Optimization</h4>
                <p style="color: var(--text-secondary);">Allocate personnel, vehicles, and equipment more efficiently based on predictive insights and real-time incident data.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Community Trust</h4>
                <p style="color: var(--text-secondary);">Lower crime rates and faster response times build community confidence and strengthen police-community relationships.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-briefcase" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Case Clearance</h4>
                <p style="color: var(--text-secondary);">Improved case closure rates through pattern analysis and suspect identification tools integrated with analytics.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-shield-alt" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Officer Safety</h4>
                <p style="color: var(--text-secondary);">Advance warning of high-risk areas and patterns helps protect officers and enables safer operational planning.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Technology Features</h2>
            <p>Cutting-edge analytics for modern law enforcement</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            <div>
                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-brain" style="color: var(--primary-color);"></i>
                        Machine Learning Algorithms
                    </h4>
                    <p style="color: var(--text-secondary);">AI-powered models trained on historical crime data to identify emerging patterns and predict future incident locations.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-map" style="color: var(--primary-color);"></i>
                        Interactive Mapping
                    </h4>
                    <p style="color: var(--text-secondary);">Real-time heat maps showing crime hotspots, trend analysis, and geographic risk zones for targeted patrol strategies.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-clock" style="color: var(--primary-color);"></i>
                        Temporal Analysis
                    </h4>
                    <p style="color: var(--text-secondary);">Identify time-based patterns - day of week, time of day, seasonal trends - for precise patrol scheduling.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-link" style="color: var(--primary-color);"></i>
                        Pattern Connection
                    </h4>
                    <p style="color: var(--text-secondary);">Link related incidents across jurisdictions to identify serial offenders and organized crime activities.</p>
                </div>
            </div>

            <div style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 30px;">Complete Analytics Suite</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Real-time data integration from CAD systems
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Customizable alert thresholds
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Automated report generation
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Mobile officer access
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Multi-agency data sharing
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Predictive accuracy metrics
                    </li>
                    <li style="padding: 15px 0; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Privacy-compliant operations
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
            <p>Real results from law enforcement agencies</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 35px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-city"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Major Metropolitan Department</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">City Police Department</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Implemented crime analytics platform and achieved 23% reduction in violent crime within 6 months through predictive patrol deployment.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Crime Reduction</span>
                        <strong>23%</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Response Time</span>
                        <strong>31% faster</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Case Clearance</span>
                        <strong>18% increase</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The analytics platform transformed how we deploy resources. We're preventing crimes, not just responding to them."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Regional Police Agencies</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Multi-County Initiative</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Cross-jurisdictional crime analytics identified organized retail crime ring, leading to 47 arrests across 8 counties.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Arrests Made</span>
                        <strong>47</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Jurisdictions</span>
                        <strong>8 counties</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Recovered Losses</span>
                        <strong>$1.2M+</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Pattern analysis revealed connections we never would have found manually. The platform pays for itself."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Transit Authority Police</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Regional Transit System</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Used crime analytics to identify transit crime hotspots, increasing officer visibility in high-risk areas and reducing incidents by 34%.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Crime Reduction</span>
                        <strong>34%</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Stops per Day</span>
                        <strong>156 arrests</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Passenger Safety</span>
                        <strong>Improved 41%</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Passengers feel safer. Officers are where they're needed most, when they're needed."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; color: white;">
    <div class="container">
        <div class="cta-box" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2>Transform Your Agency with Crime Analytics</h2>
            <p style="font-size: 1.15rem; margin-bottom: 35px; color: rgba(255,255,255,0.95);">
                Join hundreds of law enforcement agencies that are using predictive analytics to reduce crime, optimize resources, and keep communities safer.
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
