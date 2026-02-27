<?php
/**
 * Corporations Industry - Landing Page
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

$page_title = 'Corporate Solutions';
$meta_description = 'Comprehensive risk solutions for corporations including identity verification, fraud prevention, credit risk assessment, and compliance management.';

include '../../includes/header.php';

// Define all corporate services
$services = [
    [
        'name' => 'Financial Crime Compliance',
        'slug' => 'financial-crime-compliance',
        'icon' => 'fa-shield-alt',
        'description' => 'Comprehensive AML, KYC, and sanctions screening solutions to ensure regulatory compliance.'
    ],
    [
        'name' => 'Fraud & Identity Solutions',
        'slug' => 'fraud-identity-solutions',
        'icon' => 'fa-user-shield',
        'description' => 'Advanced fraud detection and identity verification to protect your business and customers.'
    ],
    [
        'name' => 'Credit Risk Assessment',
        'slug' => 'credit-risk',
        'icon' => 'fa-chart-line',
        'description' => 'Comprehensive credit risk evaluation and scoring for informed lending decisions.'
    ],
    [
        'name' => 'Customer Acquisition',
        'slug' => 'customer-acquisition',
        'icon' => 'fa-users',
        'description' => 'Data-driven customer acquisition strategies to grow your business effectively.'
    ],
    [
        'name' => 'Collections & Recovery',
        'slug' => 'collections-recovery',
        'icon' => 'fa-hand-holding-usd',
        'description' => 'Optimize debt collection and recovery processes with advanced analytics and skip tracing.'
    ],
    [
        'name' => 'Payments Efficiency',
        'slug' => 'payments-efficiency',
        'icon' => 'fa-credit-card',
        'description' => 'Streamline payment processes and reduce fraud with intelligent payment solutions.'
    ],
    [
        'name' => 'Investigations & Due Diligence',
        'slug' => 'investigations-due-diligence',
        'icon' => 'fa-search',
        'description' => 'Comprehensive investigative tools and due diligence solutions for informed business decisions.'
    ],
    [
        'name' => 'Small Business Risk',
        'slug' => 'small-business-risk',
        'icon' => 'fa-store',
        'description' => 'Assess and mitigate risks associated with small business lending and partnerships.'
    ],
    [
        'name' => 'Data Quality Management',
        'slug' => 'data-quality',
        'icon' => 'fa-database',
        'description' => 'Ensure data accuracy and consistency across your enterprise systems.'
    ],
    [
        'name' => 'Risk Orchestration',
        'slug' => 'risk-orchestration',
        'icon' => 'fa-cogs',
        'description' => 'Integrated risk management platform for streamlined decision-making.'
    ]
];
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
                <span>Corporations</span>
            </div>
            <h1 style="color: white; font-size: 3rem; margin-bottom: 25px;">Corporate Solutions</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; line-height: 1.7;">
                Identity verification and authentication, credit risk assessment, fraud prevention, investigations, and due diligence solutions to increase revenue and operational efficiencies.
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
                    <h3>Corporate Solutions</h3>
                    <nav class="sidebar-nav">
                        <ul>
                            <li class="active"><a href="<?php echo url('industries/corporations'); ?>">Overview</a></li>
                            <?php foreach ($services as $service): ?>
                            <li>
                                <a href="<?php echo url('industries/corporations/' . $service['slug']); ?>">
                                    <i class="fas <?php echo $service['icon']; ?>"></i>
                                    <?php echo $service['name']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="sidebar-cta">
                        <h4>Need Help?</h4>
                        <p>Our corporate risk experts are ready to assist you.</p>
                        <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-sm">Contact Us</a>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="industry-main">
                <!-- Overview Section -->
                <div class="content-section">
                    <h2>Enterprise Risk Management Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 30px;">
                        VettlyGlobal provides comprehensive risk management solutions that help corporations mitigate fraud, ensure compliance, assess credit risk, and drive business growth through data-driven insights and advanced technology.
                    </p>
                </div>

                <!-- All Services Grid -->
                <div class="content-section">
                    <h2>Our Corporate Services</h2>
                    <p style="margin-bottom: 30px; color: var(--text-secondary);">
                        Explore our complete suite of corporate risk and compliance solutions.
                    </p>

                    <div class="services-grid">
                        <?php foreach ($services as $service): ?>
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas <?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $service['name']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <a href="<?php echo url('industries/corporations/' . $service['slug']); ?>" class="service-link">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Key Benefits -->
                <div class="content-section" style="background: var(--bg-light); padding: 40px; border-radius: 12px; margin-top: 40px;">
                    <h2>Why Choose VettlyGlobal?</h2>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Comprehensive Risk Coverage</h4>
                                <p>End-to-end risk management from identity verification to fraud prevention.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Regulatory Compliance</h4>
                                <p>Stay compliant with all regulatory requirements including AML, KYC, and FCRA.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Real-Time Decisioning</h4>
                                <p>Make informed decisions instantly with real-time data and analytics.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Enterprise Scalability</h4>
                                <p>Solutions designed to scale with your organization's growth and needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<style>
.industry-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
    margin-top: 40px;
}

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

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
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

@media (max-width: 992px) {
    .industry-layout {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .sidebar-content {
        position: static;
    }

    .services-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
}
</style>

<?php include '../../includes/footer.php'; ?>
