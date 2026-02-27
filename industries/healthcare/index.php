<?php
/**
 * Healthcare Industry - Landing Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Healthcare Solutions';
$meta_description = 'Transform healthcare with VettlyGlobal data intelligence, provider data management, identity verification, and population health analytics.';

include '../../includes/header.php';

// Define all healthcare services
$services = [
    [
        'name' => 'Life Sciences',
        'slug' => 'life-sciences',
        'icon' => 'fa-flask',
        'description' => 'Accelerate research and development with comprehensive real-world data and patient insights.'
    ],
    [
        'name' => 'Pharmacy',
        'slug' => 'pharmacy',
        'icon' => 'fa-pills',
        'description' => 'Optimize pharmacy operations with provider data management and prescription analytics.'
    ],
    [
        'name' => 'Payer',
        'slug' => 'payer',
        'icon' => 'fa-hospital',
        'description' => 'Improve member outcomes and reduce costs with advanced data analytics and insights.'
    ],
    [
        'name' => 'Provider',
        'slug' => 'provider',
        'icon' => 'fa-user-md',
        'description' => 'Enhance patient care with accurate provider data and comprehensive health intelligence.'
    ],
    [
        'name' => 'Healthcare Market Data',
        'slug' => 'healthcare-market-data',
        'icon' => 'fa-chart-bar',
        'description' => 'Access comprehensive market intelligence to make informed decisions and identify growth opportunities.'
    ],
    [
        'name' => 'Provider Data Management',
        'slug' => 'provider-data-management',
        'icon' => 'fa-database',
        'description' => 'Maintain accurate, up-to-date provider information across your entire healthcare network.'
    ],
    [
        'name' => 'Identity Verification',
        'slug' => 'identity-verification',
        'icon' => 'fa-id-card',
        'description' => 'Secure patient and provider verification to prevent fraud and ensure HIPAA compliance.'
    ],
    [
        'name' => 'Real-World Data',
        'slug' => 'real-world-data',
        'icon' => 'fa-globe',
        'description' => 'Leverage real-world evidence to improve patient outcomes and drive clinical research.'
    ],
    [
        'name' => 'Population Health Data',
        'slug' => 'population-health',
        'icon' => 'fa-users',
        'description' => 'Analyze population-level health trends to improve care delivery and reduce costs.'
    ],
    [
        'name' => 'Whole Person Data',
        'slug' => 'whole-person-data',
        'icon' => 'fa-heart',
        'description' => 'Comprehensive view of patients including social determinants of health for personalized care.'
    ]
];
?>

<!-- Page Header / Hero -->
<section class="page-hero">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="hero-content" style="max-width: 800px;">
            <div class="breadcrumbs" style="margin-bottom: 20px; opacity: 0.9;">
                <a href="<?php echo url(); ?>" style="color: white;">Home</a>
                <span style="margin: 0 10px;">/</span>
                <a href="<?php echo url(''); ?>" style="color: rgba(255,255,255,0.9);">Industries</a>
                <span style="margin: 0 10px;">/</span>
                <span>Healthcare</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Healthcare Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                When the right data meets the right technologies, healthcare organizations can transform complexity into opportunity and deliver better health for all.
            </p>
        </div>
    </div>
</section>

<!-- Main Content with Sidebar -->
<section class="section last-section">
    <div class="container">
        <div class="industry-layout">
            <!-- Sidebar Navigation -->
            <aside class="industry-sidebar">
                <div class="sidebar-content">
                    <h3>Healthcare Solutions</h3>
                    <nav class="sidebar-nav">
                        <ul>
                            <li class="active"><a href="<?php echo url('industries/healthcare'); ?>">Overview</a></li>
                            <?php foreach ($services as $service): ?>
                            <li>
                                <a href="<?php echo url('industries/healthcare/' . $service['slug']); ?>">
                                    <i class="fas <?php echo $service['icon']; ?>"></i>
                                    <?php echo $service['name']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="sidebar-cta">
                        <h4>Need Help?</h4>
                        <p>Our healthcare experts are ready to assist you.</p>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-sm">Contact Us</a>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="industry-main">
                <!-- Overview Section -->
                <div class="content-section">
                    <h2>Transform Healthcare Delivery</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 30px;">
                        VettlyGlobal provides comprehensive healthcare data intelligence solutions that enable healthcare organizations to improve patient outcomes, reduce costs, and deliver better care across all sectors including life sciences, pharmacy, payers, and providers.
                    </p>
                </div>

                <!-- All Services Grid -->
                <div class="content-section">
                    <h2>Our Healthcare Services</h2>
                    <p style="margin-bottom: 30px; color: var(--text-secondary);">
                        Explore our complete range of healthcare solutions designed to meet your specific needs.
                    </p>

                    <div class="services-grid">
                        <?php foreach ($services as $service): ?>
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $service['name']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <a href="<?php echo url('industries/healthcare/' . $service['slug']); ?>" class="service-link">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Key Benefits -->
                <div class="content-section" style="background: var(--bg-light); padding: 40px; border-radius: 12px; margin-top: 40px;">
                    <h2>Why Choose VettlyGlobal for Healthcare?</h2>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Comprehensive Data Coverage</h4>
                                <p>Access to the most complete healthcare data including provider, patient, and market intelligence.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>HIPAA Compliant</h4>
                                <p>All solutions are fully compliant with HIPAA and healthcare privacy regulations.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Real-Time Insights</h4>
                                <p>Get actionable insights with real-time data analytics and reporting capabilities.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Proven Results</h4>
                                <p>Trusted by leading healthcare organizations to improve outcomes and reduce costs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<style>
/* Hero */
.page-hero {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    padding: 100px 0;
    color: white;
    position: relative;
}
.page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(13,43,78,0.92) 0%, rgba(5,130,189,0.85) 100%);
}

.industry-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
    margin-top: 40px;
}

/* Sidebar Styles */
.industry-sidebar {
    position: relative;
}

.sidebar-content {
    position: sticky;
    top: 100px;
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    padding: 25px;
}

.sidebar-content h3 {
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: var(--text-primary);
    padding-bottom: 15px;
    border-bottom: 2px solid var(--bg-light);
}

.sidebar-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-nav li {
    margin-bottom: 5px;
}

.sidebar-nav a {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    color: var(--text-secondary);
    text-decoration: none;
    border-radius: 8px;
    transition: var(--transition);
    font-size: 0.95rem;
}

.sidebar-nav a i {
    margin-right: 10px;
    width: 18px;
    color: var(--primary-color);
}

.sidebar-nav a:hover {
    background: var(--bg-light);
    color: var(--text-primary);
}

.sidebar-nav li.active a {
    background: var(--primary-color);
    color: white;
    font-weight: 600;
}

.sidebar-nav li.active a i {
    color: white;
}

.sidebar-cta {
    margin-top: 30px;
    padding: 20px;
    background: var(--bg-light);
    border-radius: 8px;
    text-align: center;
}

.sidebar-cta h4 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.sidebar-cta p {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin-bottom: 15px;
}

/* Main Content */
.industry-main {
    min-width: 0;
}

.content-section {
    margin-bottom: 50px;
}

.content-section h2 {
    margin-bottom: 20px;
    color: var(--text-primary);
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.service-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    border: 2px solid transparent;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
    border-color: var(--primary-color);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.service-icon i {
    font-size: 1.8rem;
    color: white;
}

.service-card h3 {
    font-size: 1.2rem;
    margin-bottom: 12px;
    color: var(--text-primary);
}

.service-card p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
}

.service-link:hover {
    gap: 12px;
}

.service-link i {
    font-size: 0.9rem;
}

/* Benefits List */
.benefits-list {
    display: grid;
    gap: 20px;
    margin-top: 25px;
}

.benefit-item {
    display: flex;
    gap: 15px;
    align-items: start;
}

.benefit-item i {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-top: 5px;
}

.benefit-item h4 {
    font-size: 1.1rem;
    margin-bottom: 5px;
    color: var(--text-primary);
}

.benefit-item p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 992px) {
    .industry-layout {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .sidebar-content {
        position: static;
    }

    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
    }

    .sidebar-nav a {
        font-size: 0.9rem;
        padding: 8px 12px;
    }

    .page-hero h1 {
        font-size: 2rem !important;
    }
}
</style>

<?php include '../../includes/footer.php'; ?>
