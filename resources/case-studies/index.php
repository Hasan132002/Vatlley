<?php
/**
 * Case Studies Listing Page
 * Displays case studies with industry filters and success metrics
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Page variables
$page_title = 'Case Studies';
$meta_description = 'Explore real-world success stories and case studies showcasing how VettlyGlobal solutions have helped organizations across industries manage risk, prevent fraud, and drive growth.';
$meta_keywords = 'case studies, success stories, client testimonials, real-world results, industry case studies';

// Sample case studies data (replace with database queries)
$case_studies = [
    [
        'id' => 1,
        'title' => 'Major Bank Reduces Fraud by 65% with AI-Powered Detection',
        'slug' => 'bank-fraud-reduction-ai',
        'industry' => 'Financial Services',
        'company_type' => 'Banking',
        'challenge' => 'Rising digital fraud losses',
        'solution' => 'AI-powered fraud detection platform',
        'results' => [
            '65% reduction in fraud losses',
            '40% faster detection time',
            '95% accuracy rate',
            '$12M annual savings'
        ],
        'excerpt' => 'A leading national bank implemented VettlyGlobal\'s AI-powered fraud detection system to combat rising digital fraud. The results exceeded expectations with significant cost savings and improved customer trust.',
        'image' => 'case-study-1.jpg',
        'published_date' => '2026-02-01',
        'read_time' => '8 min read'
    ],
    [
        'id' => 2,
        'title' => 'Healthcare Provider Achieves 100% HIPAA Compliance',
        'slug' => 'healthcare-hipaa-compliance',
        'industry' => 'Healthcare',
        'company_type' => 'Hospital Network',
        'challenge' => 'Complex compliance requirements',
        'solution' => 'Comprehensive data security and compliance platform',
        'results' => [
            '100% HIPAA compliance achieved',
            '80% reduction in audit time',
            'Zero compliance violations',
            '3M patient records secured'
        ],
        'excerpt' => 'A multi-state healthcare network partnered with VettlyGlobal to streamline HIPAA compliance and protect sensitive patient data across 50+ facilities.',
        'image' => 'case-study-2.jpg',
        'published_date' => '2026-01-20',
        'read_time' => '10 min read'
    ],
    [
        'id' => 3,
        'title' => 'Insurance Company Accelerates Claims Processing by 50%',
        'slug' => 'insurance-claims-acceleration',
        'industry' => 'Insurance',
        'company_type' => 'Auto Insurance',
        'challenge' => 'Slow claims processing and verification',
        'solution' => 'Automated identity verification and data analytics',
        'results' => [
            '50% faster claim processing',
            '30% reduction in fraud claims',
            '92% customer satisfaction',
            '24-hour average settlement'
        ],
        'excerpt' => 'Leading auto insurance provider transformed their claims process using VettlyGlobal\'s automated verification and analytics platform, dramatically improving speed and accuracy.',
        'image' => 'case-study-3.jpg',
        'published_date' => '2026-01-10',
        'read_time' => '7 min read'
    ],
    [
        'id' => 4,
        'title' => 'Government Agency Modernizes Identity Verification',
        'slug' => 'government-identity-modernization',
        'industry' => 'Government',
        'company_type' => 'State Government',
        'challenge' => 'Outdated identity verification systems',
        'solution' => 'Modern digital identity platform',
        'results' => [
            '70% faster citizen onboarding',
            '99.8% accuracy rate',
            '500K citizens verified monthly',
            '$5M cost savings annually'
        ],
        'excerpt' => 'State government agency modernized their citizen identity verification process, reducing processing time and improving accuracy while maintaining security standards.',
        'image' => 'case-study-4.jpg',
        'published_date' => '2025-12-15',
        'read_time' => '9 min read'
    ],
    [
        'id' => 5,
        'title' => 'E-commerce Platform Prevents $8M in Payment Fraud',
        'slug' => 'ecommerce-fraud-prevention',
        'industry' => 'Corporations',
        'company_type' => 'E-commerce',
        'challenge' => 'High-volume payment fraud',
        'solution' => 'Real-time transaction monitoring and risk scoring',
        'results' => [
            '$8M fraud prevented annually',
            '98% legitimate transaction approval',
            '2% false positive rate',
            '200ms average decision time'
        ],
        'excerpt' => 'Major e-commerce platform integrated VettlyGlobal\'s real-time fraud prevention to protect customers and revenue without impacting the checkout experience.',
        'image' => 'case-study-5.jpg',
        'published_date' => '2025-12-01',
        'read_time' => '6 min read'
    ],
    [
        'id' => 6,
        'title' => 'Law Enforcement Agency Solves Cases 40% Faster',
        'slug' => 'law-enforcement-case-resolution',
        'industry' => 'Law Enforcement',
        'company_type' => 'Police Department',
        'challenge' => 'Time-consuming investigations',
        'solution' => 'Integrated investigative data platform',
        'results' => [
            '40% faster case resolution',
            '85% data accuracy improvement',
            '1000+ cases solved',
            'Cross-jurisdiction collaboration'
        ],
        'excerpt' => 'Metropolitan police department enhanced investigative capabilities with VettlyGlobal\'s comprehensive data and analytics platform, accelerating case resolution.',
        'image' => 'case-study-6.jpg',
        'published_date' => '2025-11-20',
        'read_time' => '8 min read'
    ],
    [
        'id' => 7,
        'title' => 'Collections Agency Improves Recovery Rate by 35%',
        'slug' => 'collections-recovery-improvement',
        'industry' => 'Collections & Recovery',
        'company_type' => 'Debt Collection',
        'challenge' => 'Low contact and recovery rates',
        'solution' => 'Skip tracing and contact optimization',
        'results' => [
            '35% increase in recovery rate',
            '45% better contact success',
            '$25M additional recoveries',
            '20% reduction in costs'
        ],
        'excerpt' => 'National collections agency dramatically improved recovery rates and reduced costs using VettlyGlobal\'s skip tracing and contact strategy optimization.',
        'image' => 'case-study-7.jpg',
        'published_date' => '2025-11-05',
        'read_time' => '7 min read'
    ],
    [
        'id' => 8,
        'title' => 'Fintech Startup Scales KYC to 100K Users/Month',
        'slug' => 'fintech-kyc-scaling',
        'industry' => 'Financial Services',
        'company_type' => 'Fintech',
        'challenge' => 'Scaling compliant user onboarding',
        'solution' => 'Automated KYC and AML compliance platform',
        'results' => [
            '100K users verified monthly',
            '99% automation rate',
            '5-minute average onboarding',
            '100% regulatory compliance'
        ],
        'excerpt' => 'Fast-growing fintech startup scaled their KYC process from thousands to hundreds of thousands of monthly users while maintaining compliance and user experience.',
        'image' => 'case-study-8.jpg',
        'published_date' => '2025-10-25',
        'read_time' => '6 min read'
    ],
    [
        'id' => 9,
        'title' => 'Pharmaceutical Company Strengthens Supply Chain Security',
        'slug' => 'pharma-supply-chain-security',
        'industry' => 'Healthcare',
        'company_type' => 'Life Sciences',
        'challenge' => 'Supply chain fraud and counterfeiting',
        'solution' => 'Vendor verification and supply chain monitoring',
        'results' => [
            'Zero counterfeit incidents',
            '90% vendor verification coverage',
            '$15M risk mitigation',
            'Complete supply chain visibility'
        ],
        'excerpt' => 'Global pharmaceutical company protected their supply chain from fraud and counterfeiting with comprehensive vendor verification and monitoring solutions.',
        'image' => 'case-study-9.jpg',
        'published_date' => '2025-10-10',
        'read_time' => '9 min read'
    ]
];

// Get unique industries
$industries = array_unique(array_column($case_studies, 'industry'));
sort($industries);

include '../../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <span>Case Studies</span>
        </nav>
        <h1>Success Stories</h1>
        <p>Real-world results from organizations that trust VettlyGlobal to manage risk and drive growth</p>
    </div>
</section>

<!-- Filter Bar -->
<section class="case-studies-filters">
    <div class="container">
        <div class="filter-bar">
            <div class="filter-group search-group">
                <i class="fas fa-search"></i>
                <input type="text" class="filter-search" placeholder="Search case studies..." id="case-study-search">
            </div>
            <div class="filter-group">
                <select class="filter-select" id="industry-filter">
                    <option value="">All Industries</option>
                    <?php foreach ($industries as $ind): ?>
                        <option value="<?php echo strtolower(str_replace(' ', '-', $ind)); ?>">
                            <?php echo $ind; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group">
                <select class="filter-select" id="sort-filter">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                    <option value="title">Title A-Z</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Stats Overview -->
<section class="stats-section section" style="background: var(--bg-lighter);">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-building"></i>
                </div>
                <div class="stat-number">500+</div>
                <div class="stat-label">Success Stories</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-number">$2.5B+</div>
                <div class="stat-label">In Cost Savings</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="stat-number">10M+</div>
                <div class="stat-label">Fraud Cases Prevented</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="stat-number">98%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Grid -->
<section class="case-studies-section section">
    <div class="container">
        <div class="case-studies-grid" id="case-studies-grid">
            <?php foreach ($case_studies as $study): ?>
                <article class="case-study-card"
                         data-industry="<?php echo strtolower(str_replace(' ', '-', $study['industry'])); ?>"
                         data-date="<?php echo $study['published_date']; ?>"
                         data-title="<?php echo strtolower($study['title']); ?>">
                    <div class="case-study-header">
                        <div class="case-study-image">
                            <div class="placeholder-image">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="case-study-tags">
                            <span class="tag tag-industry"><?php echo $study['industry']; ?></span>
                            <span class="tag tag-type"><?php echo $study['company_type']; ?></span>
                        </div>
                    </div>

                    <div class="case-study-body">
                        <h3 class="case-study-title"><?php echo $study['title']; ?></h3>

                        <div class="case-study-meta">
                            <span><i class="far fa-calendar"></i> <?php echo date('M Y', strtotime($study['published_date'])); ?></span>
                            <span><i class="far fa-clock"></i> <?php echo $study['read_time']; ?></span>
                        </div>

                        <p class="case-study-excerpt"><?php echo $study['excerpt']; ?></p>

                        <div class="case-study-challenge">
                            <h4><i class="fas fa-exclamation-triangle"></i> Challenge</h4>
                            <p><?php echo $study['challenge']; ?></p>
                        </div>

                        <div class="case-study-solution">
                            <h4><i class="fas fa-lightbulb"></i> Solution</h4>
                            <p><?php echo $study['solution']; ?></p>
                        </div>

                        <div class="case-study-results">
                            <h4><i class="fas fa-trophy"></i> Results</h4>
                            <ul class="results-list">
                                <?php foreach ($study['results'] as $result): ?>
                                    <li><i class="fas fa-check-circle"></i> <?php echo $result; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="case-study-footer">
                        <a href="<?php echo url('resources/case-studies/' . $study['slug']); ?>" class="btn btn-primary btn-block">
                            <i class="fas fa-book-open"></i>
                            Read Full Story
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="no-results" id="no-results" style="display: none;">
            <i class="fas fa-search"></i>
            <h3>No case studies found</h3>
            <p>Try adjusting your filters or search terms</p>
        </div>
    </div>
</section>

<!-- Industry Focus -->
<section class="industry-section section" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center">
            <h2>Industries We Serve</h2>
            <p>Trusted by leading organizations across multiple sectors</p>
        </div>

        <div class="industry-grid">
            <?php foreach ($industries as $industry): ?>
                <div class="industry-item">
                    <div class="industry-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3><?php echo $industry; ?></h3>
                    <p><?php echo count(array_filter($case_studies, function($cs) use ($industry) {
                        return $cs['industry'] === $industry;
                    })); ?> case studies</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
    <div class="container">
        <div class="cta-content text-center">
            <i class="fas fa-rocket" style="font-size: 1.5rem; color: white; margin-bottom: 12px;"></i>
            <h2 style="color: white; font-size: 1.6rem;">Ready to Write Your Success Story?</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: 1rem; max-width: 700px; margin: 0 auto 25px;">
                Join hundreds of organizations that have transformed their risk management and achieved measurable results with VettlyGlobal.
            </p>
            <div class="cta-buttons">
                <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
                    <i class="fas fa-comments"></i>
                    Schedule a Demo
                </a>
                <a href="<?php echo url('about-us'); ?>" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-info-circle"></i>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Page Header */
.page-header {
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    color: white;
    padding: 80px 0 50px;
}

.page-header h1 {
    color: white;
    font-size: 2rem;
    margin-bottom: 10px;
}

.page-header p {
    color: rgba(255,255,255,0.9);
    font-size: 1rem;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    font-size: 0.95rem;
    color: rgba(255,255,255,0.9);
}

.breadcrumb a {
    color: white;
    transition: var(--transition);
}

.breadcrumb a:hover {
    color: rgba(255,255,255,0.8);
}

/* Filters */
.case-studies-filters {
    background: white;
    padding: 30px 0;
    box-shadow: var(--shadow-sm);
    position: sticky;
    top: 80px;
    z-index: 100;
}

.filter-bar {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 20px;
}

.search-group {
    position: relative;
}

.search-group i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
}

.search-group input {
    padding-left: 45px;
}

.filter-search,
.filter-select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 0.95rem;
    transition: var(--transition);
}

.filter-search:focus,
.filter-select:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
}

/* Stats Section */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.stat-card {
    background: white;
    padding: 25px 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 1px 6px rgba(0,0,0,0.06);
    transition: var(--transition);
    border-top: 3px solid var(--primary-color);
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.stat-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.stat-number {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 3px;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 0.85rem;
}

/* Case Studies Grid */
.case-studies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 30px;
}

.case-study-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    display: flex;
    flex-direction: column;
}

.case-study-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.case-study-header {
    position: relative;
}

.case-study-image {
    height: 200px;
    background: url('<?php echo ASSETS_URL; ?>/images/product-img.jpg') center center / cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.placeholder-image {
    font-size: 1.5rem;
    color: rgba(255,255,255,0.3);
}

.case-study-tags {
    position: absolute;
    bottom: 15px;
    left: 15px;
    display: flex;
    gap: 8px;
}

.tag {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.tag-industry {
    background: white;
    color: var(--primary-color);
}

.tag-type {
    background: rgba(255,255,255,0.2);
    color: white;
    backdrop-filter: blur(10px);
}

.case-study-body {
    padding: 20px 25px;
    flex: 1;
}

.case-study-title {
    font-size: 1.1rem;
    margin-bottom: 10px;
    color: var(--text-primary);
    line-height: 1.4;
}

.case-study-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.case-study-meta i {
    margin-right: 5px;
}

.case-study-excerpt {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--border-light);
}

.case-study-challenge,
.case-study-solution {
    margin-bottom: 20px;
}

.case-study-challenge h4,
.case-study-solution h4,
.case-study-results h4 {
    font-size: 1rem;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.case-study-challenge h4 i {
    color: var(--accent-color);
}

.case-study-solution h4 i {
    color: var(--accent-orange);
}

.case-study-results h4 i {
    color: var(--secondary-color);
}

.case-study-challenge p,
.case-study-solution p {
    font-size: 0.95rem;
    color: var(--text-secondary);
    margin-bottom: 0;
}

.case-study-results {
    background: var(--bg-light);
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.results-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.results-list li {
    padding: 8px 0;
    color: var(--text-primary);
    font-size: 0.95rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 10px;
}

.results-list i {
    color: var(--secondary-color);
    font-size: 0.9rem;
}

.case-study-footer {
    padding: 0 25px 20px;
}

/* Industry Grid */
.section-header {
    margin-bottom: 35px;
}

.section-header h2 {
    font-size: 1.6rem;
    margin-bottom: 8px;
}

.section-header p {
    font-size: 1rem;
    color: var(--text-secondary);
}

.industry-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
}

.industry-item {
    background: white;
    padding: 25px 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    transition: var(--transition);
    border: 1px solid var(--border-color);
}

.industry-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    border-color: var(--primary-color);
}

.industry-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.industry-item h3 {
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.industry-item p {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
}

/* CTA Section */
.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-lg {
    padding: 16px 40px;
    font-size: 1.1rem;
}

.btn-outline-white {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.btn-outline-white:hover {
    background: white;
    color: var(--primary-color);
}

/* No Results */
.no-results {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 12px;
}

.no-results i {
    font-size: 1.5rem;
    color: var(--text-light);
    margin-bottom: 12px;
}

/* Responsive */
@media (max-width: 992px) {
    .filter-bar {
        grid-template-columns: 1fr 1fr;
    }

    .case-studies-grid {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .page-header h1 {
        font-size: 1.6rem;
    }

    .filter-bar {
        grid-template-columns: 1fr;
    }

    .case-studies-grid {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stat-number {
        font-size: 1.5rem;
    }

    .cta-buttons {
        flex-direction: column;
        width: 100%;
    }

    .cta-buttons .btn {
        width: 100%;
    }
}
</style>

<script>
// Simple filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('case-study-search');
    const industryFilter = document.getElementById('industry-filter');
    const cards = document.querySelectorAll('.case-study-card');
    const noResults = document.getElementById('no-results');

    function filterCards() {
        const searchTerm = searchInput.value.toLowerCase();
        const industry = industryFilter.value;
        let visibleCount = 0;

        cards.forEach(card => {
            const cardIndustry = card.getAttribute('data-industry');
            const cardText = card.textContent.toLowerCase();

            const matchesSearch = cardText.includes(searchTerm);
            const matchesIndustry = !industry || cardIndustry === industry;

            if (matchesSearch && matchesIndustry) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    const sortFilter = document.getElementById('sort-filter');
    const grid = document.getElementById('case-studies-grid');

    function sortCards() {
        const sortValue = sortFilter.value;
        const cardsArray = Array.from(cards);

        cardsArray.sort((a, b) => {
            if (sortValue === 'newest') {
                return (b.dataset.date || '').localeCompare(a.dataset.date || '');
            } else if (sortValue === 'oldest') {
                return (a.dataset.date || '').localeCompare(b.dataset.date || '');
            } else if (sortValue === 'title') {
                return (a.dataset.title || '').localeCompare(b.dataset.title || '');
            }
            return 0;
        });

        cardsArray.forEach(card => grid.appendChild(card));
    }

    searchInput.addEventListener('input', filterCards);
    industryFilter.addEventListener('change', filterCards);
    sortFilter.addEventListener('change', function() { sortCards(); filterCards(); });
});
</script>

<?php include '../../includes/footer.php'; ?>
