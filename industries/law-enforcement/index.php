<?php
/**
 * Law Enforcement Industry - Landing Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Law Enforcement Solutions';
$meta_description = 'Predict, analyze and effectively respond to crime using actionable intelligence derived from law enforcement data analytics and technology.';

include '../../includes/header.php';

$services = [
    ['name' => 'Crime Analytics & Mapping', 'slug' => 'crime-analytics', 'icon' => 'fa-chart-line', 'description' => 'Predict crime patterns and allocate resources effectively with advanced analytics.'],
    ['name' => 'Crash & Incident Reporting', 'slug' => 'crash-reporting', 'icon' => 'fa-file-alt', 'description' => 'Streamline incident documentation with automated reporting systems.'],
    ['name' => 'Investigative Services', 'slug' => 'investigative-services', 'icon' => 'fa-search', 'description' => 'Comprehensive investigative tools and intelligence databases.'],
    ['name' => 'Criminal Investigation Tools', 'slug' => 'criminal-investigation', 'icon' => 'fa-user-secret', 'description' => 'Advanced tools for criminal investigations and case management.'],
    ['name' => 'Device Geolocation', 'slug' => 'geolocation', 'icon' => 'fa-map-marker-alt', 'description' => 'Advanced geolocation technology for emergency response and investigations.'],
    ['name' => 'Public Safety Marketplace', 'slug' => 'marketplace', 'icon' => 'fa-store', 'description' => 'Integrated platform for public safety technology and services.'],
    ['name' => 'Public Safety Tools', 'slug' => 'public-safety-tools', 'icon' => 'fa-tools', 'description' => 'Comprehensive suite of tools for modern law enforcement operations.']
];

$primary_color = 'var(--primary-color)';
$secondary_color = 'var(--primary-dark)';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat; padding: 100px 0; color: white;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: rgba(255,255,255,0.9);">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <span>Law Enforcement</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Law Enforcement Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Predict, analyze, and effectively respond to crime using actionable intelligence derived from law enforcement data analytics and advanced technology solutions.
            </p>
        </div>
    </div>
</section>

<!-- Main Content with Sidebar -->
<section class="section last-section">
    <div class="container">
        <div class="industry-layout">
            <aside class="industry-sidebar">
                <div class="sidebar-content">
                    <h3>Law Enforcement Solutions</h3>
                    <nav class="sidebar-nav">
                        <ul>
                            <li class="active"><a href="<?php echo url('industries/law-enforcement'); ?>">Overview</a></li>
                            <?php foreach ($services as $service): ?>
                            <li><a href="<?php echo url('industries/law-enforcement/' . $service['slug']); ?>"><i class="fas <?php echo $service['icon']; ?>"></i><?php echo $service['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="sidebar-cta">
                        <h4>Need Help?</h4>
                        <p>Our public safety experts are ready to assist you.</p>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-sm">Contact Us</a>
                    </div>
                </div>
            </aside>

            <main class="industry-main">
                <div class="content-section">
                    <h2>Enhance Public Safety Operations</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 30px;">
                        VettlyGlobal provides law enforcement agencies with advanced technology solutions to predict crime, solve cases faster, manage investigations, and keep communities safe through data-driven insights.
                    </p>
                </div>

                <div class="content-section">
                    <h2>Our Law Enforcement Services (All 7 Solutions)</h2>
                    <p style="margin-bottom: 30px; color: var(--text-secondary);">Advanced tools for modern policing and public safety.</p>

                    <div class="services-grid">
                        <?php foreach ($services as $service): ?>
                        <div class="service-card">
                            <div class="service-icon" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $service['name']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <a href="<?php echo url('industries/law-enforcement/' . $service['slug']); ?>" class="service-link" style="color: <?php echo $primary_color; ?>;">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="content-section" style="background: var(--bg-light); padding: 40px; border-radius: 12px; margin-top: 40px;">
                    <h2>Why Choose VettlyGlobal?</h2>
                    <div class="benefits-list">
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Predictive Policing</h4><p>Use data analytics to predict and prevent crime before it happens.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Faster Case Resolution</h4><p>Advanced investigative tools to solve cases more efficiently.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Real-Time Intelligence</h4><p>Access critical information when and where you need it most.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Trusted by Agencies Nationwide</h4><p>Proven solutions used by law enforcement agencies across the country.</p></div></div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<style>
.industry-layout{display:grid;grid-template-columns:280px 1fr;gap:40px;margin-top:40px}
.industry-sidebar{position:relative}
.sidebar-content{position:sticky;top:100px;background:white;border-radius:12px;box-shadow:var(--shadow-md);padding:25px}
.sidebar-content h3{font-size:1.25rem;margin-bottom:20px;color:var(--text-primary);padding-bottom:15px;border-bottom:2px solid var(--bg-light)}
.sidebar-nav ul{list-style:none;padding:0;margin:0}
.sidebar-nav li{margin-bottom:5px}
.sidebar-nav a{display:flex;align-items:center;padding:10px 15px;color:var(--text-secondary);text-decoration:none;border-radius:8px;transition:var(--transition);font-size:0.95rem}
.sidebar-nav a i{margin-right:10px;width:18px;color:<?php echo $primary_color; ?>}
.sidebar-nav a:hover{background:var(--bg-light);color:var(--text-primary)}
.sidebar-nav li.active a{background:<?php echo $primary_color; ?>;color:white;font-weight:600}
.sidebar-nav li.active a i{color:white}
.sidebar-cta{margin-top:30px;padding:20px;background:var(--bg-light);border-radius:8px;text-align:center}
.sidebar-cta h4{font-size:1.1rem;margin-bottom:10px}
.sidebar-cta p{font-size:0.9rem;color:var(--text-secondary);margin-bottom:15px}
.industry-main{min-width:0}
.content-section{margin-bottom:50px}
.content-section h2{margin-bottom:20px;color:var(--text-primary)}
.services-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:25px}
.service-card{background:white;padding:30px;border-radius:12px;box-shadow:var(--shadow-md);transition:var(--transition);border:2px solid transparent}
.service-card:hover{transform:translateY(-5px);box-shadow:var(--shadow-xl);border-color:<?php echo $primary_color; ?>}
.service-icon{width:60px;height:60px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.service-icon i{font-size:1.8rem;color:white}
.service-card h3{font-size:1.2rem;margin-bottom:12px;color:var(--text-primary)}
.service-card p{color:var(--text-secondary);font-size:0.95rem;line-height:1.6;margin-bottom:20px}
.service-link{display:inline-flex;align-items:center;gap:8px;font-weight:600;text-decoration:none;transition:var(--transition)}
.service-link:hover{gap:12px}
.service-link i{font-size:0.9rem}
.benefits-list{display:grid;gap:20px;margin-top:25px}
.benefit-item{display:flex;gap:15px;align-items:start}
.benefit-item i{font-size:1.5rem;margin-top:5px}
.benefit-item h4{font-size:1.1rem;margin-bottom:5px;color:var(--text-primary)}
.benefit-item p{color:var(--text-secondary);font-size:0.95rem;margin:0}
@media(max-width:992px){.industry-layout{grid-template-columns:1fr;gap:30px}.sidebar-content{position:static}.services-grid{grid-template-columns:repeat(auto-fill,minmax(280px,1fr))}}
@media(max-width:768px){.services-grid{grid-template-columns:1fr}.sidebar-nav a{font-size:0.9rem;padding:8px 12px}}
</style>

<?php include '../../includes/footer.php'; ?>
