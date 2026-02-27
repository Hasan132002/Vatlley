<?php
/**
 * Insurance Industry - Landing Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Insurance Solutions';
$meta_description = 'Insurance risk solutions that strengthen customer relationships, gain operational efficiencies, and future-proof your organization using data and advanced analytics.';

include '../../includes/header.php';

$services = [
    ['name' => 'Fraud Detection', 'slug' => 'fraud-detection', 'icon' => 'fa-exclamation-triangle', 'description' => 'Advanced fraud detection across all insurance lines and touchpoints.'],
    ['name' => 'Claims Processing', 'slug' => 'claims', 'icon' => 'fa-file-invoice-dollar', 'description' => 'Streamline claims processing with automation and intelligent analytics.'],
    ['name' => 'Quoting & Underwriting', 'slug' => 'underwriting', 'icon' => 'fa-calculator', 'description' => 'Data-driven underwriting and pricing for competitive advantage.'],
    ['name' => 'Acquisition & Retention', 'slug' => 'acquisition', 'icon' => 'fa-users', 'description' => 'Grow and retain your customer base with targeted insights.'],
    ['name' => 'Telematics', 'slug' => 'telematics', 'icon' => 'fa-tachometer-alt', 'description' => 'Usage-based insurance programs with real-time driving data.'],
    ['name' => 'Data Analytics & Modeling', 'slug' => 'analytics', 'icon' => 'fa-chart-bar', 'description' => 'Advanced analytics and predictive modeling for better decisions.'],
    ['name' => 'Auto Insurance', 'slug' => 'auto-insurance', 'icon' => 'fa-car-crash', 'description' => 'Comprehensive auto insurance solutions with telematics and risk assessment.'],
    ['name' => 'Home Insurance', 'slug' => 'home-insurance', 'icon' => 'fa-home', 'description' => 'Property risk assessment and claims analytics for homeowners insurance.'],
    ['name' => 'Life Insurance', 'slug' => 'life-insurance', 'icon' => 'fa-heartbeat', 'description' => 'Underwriting support and fraud prevention for life insurance.'],
    ['name' => 'Commercial Insurance', 'slug' => 'commercial-insurance', 'icon' => 'fa-building', 'description' => 'Risk assessment and underwriting for commercial lines.'],
    ['name' => 'Compliance', 'slug' => 'compliance', 'icon' => 'fa-balance-scale', 'description' => 'Ensure regulatory compliance across all insurance operations.'],
    ['name' => 'Identity & Access Management', 'slug' => 'identity-access-management', 'icon' => 'fa-id-badge', 'description' => 'Secure identity verification and access control.'],
    ['name' => 'Data Prefill', 'slug' => 'data-prefill', 'icon' => 'fa-pen', 'description' => 'Streamline applications with intelligent data prefill capabilities.'],
    ['name' => 'Quoting', 'slug' => 'quoting', 'icon' => 'fa-file-invoice', 'description' => 'Accelerate quoting with real-time data and automated workflows.'],
    ['name' => 'Retention', 'slug' => 'retention', 'icon' => 'fa-user-check', 'description' => 'Improve customer retention with predictive analytics and insights.']
];

$primary_color = 'var(--primary-color)';
$secondary_color = 'var(--primary-color)';
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
                <span>Insurance</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Insurance Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Insurance risk solutions that strengthen customer relationships, gain operational efficiencies, and future-proof your organization using data and advanced analytics.
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
                    <h3>Insurance Solutions</h3>
                    <nav class="sidebar-nav">
                        <ul>
                            <li class="active"><a href="<?php echo url('industries/insurance'); ?>">Overview</a></li>
                            <?php foreach ($services as $service): ?>
                            <li><a href="<?php echo url('industries/insurance/' . $service['slug']); ?>"><i class="fas <?php echo $service['icon']; ?>"></i><?php echo $service['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="sidebar-cta">
                        <h4>Need Help?</h4>
                        <p>Our insurance experts are ready to assist you.</p>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-sm">Contact Us</a>
                    </div>
                </div>
            </aside>

            <main class="industry-main">
                <div class="content-section">
                    <h2>Transform Your Insurance Operations</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 30px;">
                        VettlyGlobal provides comprehensive insurance solutions spanning fraud detection, underwriting, claims processing, telematics, and customer acquisition to help insurers improve profitability and customer experience.
                    </p>
                </div>

                <div class="content-section">
                    <h2>Our Insurance Services (All 15 Solutions)</h2>
                    <p style="margin-bottom: 30px; color: var(--text-secondary);">Complete end-to-end insurance lifecycle solutions.</p>

                    <div class="services-grid">
                        <?php foreach ($services as $service): ?>
                        <div class="service-card">
                            <div class="service-icon" style="background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $service['name']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <a href="<?php echo url('industries/insurance/' . $service['slug']); ?>" class="service-link" style="color: <?php echo $primary_color; ?>;">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="content-section" style="background: var(--bg-light); padding: 40px; border-radius: 12px; margin-top: 40px;">
                    <h2>Why Choose VettlyGlobal?</h2>
                    <div class="benefits-list">
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Reduce Fraud Losses</h4><p>Advanced fraud detection reduces claim losses by up to 40%.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Improve Underwriting Accuracy</h4><p>Data-driven insights for more accurate risk assessment.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Enhance Customer Experience</h4><p>Streamlined processes from quote to claim.</p></div></div>
                        <div class="benefit-item"><i class="fas fa-check-circle" style="color: <?php echo $primary_color; ?>;"></i><div><h4>Increase Profitability</h4><p>Optimize pricing and reduce operational costs.</p></div></div>
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
