<?php
/**
 * Law Enforcement - Device Geolocation Service Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Device Geolocation Technology for Law Enforcement';
$meta_description = 'Advanced device geolocation technology for emergency response, suspect tracking, and investigative operations with real-time location capabilities.';

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
                <span>Geolocation</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Device Geolocation Technology</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Locate mobile devices with precision for emergency response, suspect apprehension, and investigations using advanced geolocation technology and real-time tracking capabilities.
            </p>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Geolocation Platform</h2>
            <p>Real-time location intelligence for law enforcement</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 60px;">
            <div>
                <h3 style="margin-bottom: 20px; font-size: 1.8rem;">Precision Location Technology</h3>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.8;">
                    Pinpoint mobile device locations in real-time for emergency response, missing persons cases, and criminal investigations using multi-source positioning technology and historical tracking data.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Real-time device location
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Emergency caller location (E911)
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Historical location tracking
                    </li>
                    <li style="padding: 12px 0; padding-left: 30px; position: relative; color: var(--text-secondary);">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: var(--primary-color); font-weight: 600;"></i>
                        Geofencing and alerts
                    </li>
                </ul>
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    Schedule Demo
                </a>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 12px; height: 400px; display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: var(--text-secondary);">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                    <p>Geolocation & Tracking Dashboard</p>
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
            <p>Faster response and critical location intelligence</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-phone" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Enhanced 911 Response</h4>
                <p style="color: var(--text-secondary);">Know the precise location of emergency callers for faster dispatch and more efficient resource deployment in critical situations.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-person-hiking" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Missing Persons Location</h4>
                <p style="color: var(--text-secondary);">Quickly locate missing children, elderly persons, and endangered individuals using device geolocation and historical movement patterns.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-user-shield" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Suspect Apprehension</h4>
                <p style="color: var(--text-secondary);">Track suspect locations during active investigations and arrests with real-time positioning data for officer safety and tactical planning.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-magnifying-glass" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Investigation Support</h4>
                <p style="color: var(--text-secondary);">Access historical location data to establish suspect movements, connections to crime scenes, and alibis for criminal investigations.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-bell" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Geofencing Alerts</h4>
                <p style="color: var(--text-secondary);">Set virtual boundaries around locations and receive alerts when tracked devices enter or leave designated areas for proactive monitoring.</p>
            </div>

            <div style="background: white; padding: 35px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <i class="fas fa-history" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                <h4 style="margin-bottom: 15px;">Historical Analysis</h4>
                <p style="color: var(--text-secondary);">Review past location data to identify movement patterns, frequent locations, and connections across multiple incidents and time periods.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Features -->
<section class="section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Advanced Technology Features</h2>
            <p>Comprehensive geolocation and tracking capabilities</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            <div>
                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-satellite" style="color: var(--primary-color);"></i>
                        Multi-Source Positioning
                    </h4>
                    <p style="color: var(--text-secondary);">Combine GPS, cell tower triangulation, Wi-Fi positioning, and Bluetooth data for accurate location fixes in urban and remote areas.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-map" style="color: var(--primary-color);"></i>
                        Real-Time Tracking Map
                    </h4>
                    <p style="color: var(--text-secondary);">Live map display showing device locations updated continuously with accuracy confidence indicators and location history trails.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px; margin-bottom: 30px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                        Emergency Call Location
                    </h4>
                    <p style="color: var(--text-secondary);">Automatic integration with 911 systems to provide dispatcher with caller location within seconds of emergency call placement.</p>
                </div>

                <div style="background: var(--bg-light); padding: 30px; border-radius: 12px;">
                    <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-clock" style="color: var(--primary-color);"></i>
                        Historical Playback
                    </h4>
                    <p style="color: var(--text-secondary);">Review location movement over time with animation playback showing exactly where a device was at any point in the past.</p>
                </div>
            </div>

            <div style="background: linear-gradient(135deg, var(--primary-dark), var(--primary-color)); padding: 40px; border-radius: 12px; color: white;">
                <h3 style="margin-bottom: 30px;">Geolocation Capabilities</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Real-time device location
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Historical location data
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Geofencing and zone alerts
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        E911 integration
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Multi-device tracking
                    </li>
                    <li style="padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        CAD system integration
                    </li>
                    <li style="padding: 15px 0; display: flex; align-items: center; gap: 12px;">
                        <i class="fas fa-check-circle"></i>
                        Legally compliant documentation
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
            <p>Real-world geolocation success cases</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 35px;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Emergency Dispatch Center</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Metropolitan 911</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Integrated geolocation into E911 system improved average emergency response time by 32%, especially for callers unable to provide their location.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Response Time</span>
                        <strong>32% faster</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Location Accuracy</span>
                        <strong>95.3%</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Lives Saved</span>
                        <strong>23+ annually</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Knowing exactly where people are calling from has transformed our emergency response capabilities."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-person-hiking"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Missing Persons Task Force</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">State Police Department</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Used geolocation to locate missing 8-year-old child within 47 minutes by tracking victim's mobile device, enabling safe recovery.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Time to Recovery</span>
                        <strong>47 minutes</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Search Area Reduced</span>
                        <strong>99%</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Outcome</span>
                        <strong>Safe return</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "Without geolocation, we would have searched for days. The child was found safe in under an hour."
                </blockquote>
            </div>

            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: var(--shadow-md); border-left: 5px solid var(--primary-color);">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                        <i class="fas fa-search"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; margin-bottom: 5px;">Major Crimes Investigation</h4>
                        <p style="margin: 0; color: var(--text-secondary); font-size: 0.9rem;">Detective Division</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 20px; line-height: 1.7;">
                    Historical geolocation data placed suspect at crime scene at time of robbery, providing critical evidence that led to conviction and 8-year sentence.
                </p>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Location Matches</span>
                        <strong>5 scenes</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                        <span style="color: var(--text-secondary);">Case Status</span>
                        <strong>Convicted</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: var(--text-secondary);">Sentence</span>
                        <strong>8 years</strong>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: var(--text-secondary); border-left: 3px solid var(--primary-color); padding-left: 20px;">
                    "The location history was irrefutable evidence. The prosecution had an airtight case."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Deploy Advanced Geolocation Technology</h2>
            <p>Locate devices with precision for emergency response, missing persons recovery, and criminal investigations with real-time tracking and historical analysis.</p>
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
