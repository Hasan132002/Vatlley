<?php
/**
 * Whitepapers Listing Page
 * Displays downloadable whitepapers with filtering and search
 */

require_once '../../config.php';
require_once '../../includes/db.php';
require_once '../../includes/functions.php';

// Page variables
$page_title = 'Whitepapers';
$meta_description = 'Download in-depth whitepapers on risk solutions, fraud detection, data intelligence, compliance, and industry best practices from VettlyGlobal experts.';
$meta_keywords = 'whitepapers, research papers, industry reports, risk management guides, fraud prevention whitepapers';

// Sample whitepapers data (replace with database queries)
$whitepapers = [
    [
        'id' => 1,
        'title' => 'The Future of Identity Verification in Digital Banking',
        'slug' => 'identity-verification-digital-banking',
        'category' => 'Financial Services',
        'topic' => 'Identity Verification',
        'description' => 'Explore emerging trends and technologies in digital identity verification for financial institutions, including biometrics, AI, and blockchain solutions.',
        'pages' => 24,
        'published_date' => '2026-02-01',
        'downloads' => 1547,
        'thumbnail' => 'The-Future-of-Identity-Verification-in-Digital-Banking.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => true
    ],
    [
        'id' => 2,
        'title' => 'Healthcare Data Security: A Comprehensive Guide',
        'slug' => 'healthcare-data-security',
        'category' => 'Healthcare',
        'topic' => 'Data Security',
        'description' => 'Learn best practices for protecting patient data, ensuring HIPAA compliance, and preventing healthcare data breaches.',
        'pages' => 32,
        'published_date' => '2026-01-15',
        'downloads' => 2103,
        'thumbnail' => 'Healthcare-Data-Security-A-Comprehensive-Guide.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => true
    ],
    [
        'id' => 3,
        'title' => 'AI-Powered Fraud Detection Strategies',
        'slug' => 'ai-fraud-detection',
        'category' => 'Technology',
        'topic' => 'Fraud Detection',
        'description' => 'Discover how artificial intelligence and machine learning are revolutionizing fraud detection and prevention across industries.',
        'pages' => 28,
        'published_date' => '2025-12-20',
        'downloads' => 1823,
        'thumbnail' => 'AI-Powered-Fraud-Detection-Strategies.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 4,
        'title' => 'AML Compliance in the Digital Age',
        'slug' => 'aml-compliance-digital-age',
        'category' => 'Financial Services',
        'topic' => 'Compliance',
        'description' => 'Navigate the complex landscape of anti-money laundering regulations with modern compliance strategies and technologies.',
        'pages' => 36,
        'published_date' => '2025-11-30',
        'downloads' => 1654,
        'thumbnail' => 'AML-Compliance-in-the-Digital-Age.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 5,
        'title' => 'Insurance Analytics: Driving Better Outcomes',
        'slug' => 'insurance-analytics',
        'category' => 'Insurance',
        'topic' => 'Analytics',
        'description' => 'Learn how data analytics is transforming insurance underwriting, claims processing, and risk assessment.',
        'pages' => 20,
        'published_date' => '2025-11-10',
        'downloads' => 1432,
        'thumbnail' => 'Insurance-Analytics-Driving-Better-Outcomes.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 6,
        'title' => 'KYC Best Practices for Financial Institutions',
        'slug' => 'kyc-best-practices',
        'category' => 'Financial Services',
        'topic' => 'Compliance',
        'description' => 'Comprehensive guide to Know Your Customer processes, regulatory requirements, and implementation strategies.',
        'pages' => 30,
        'published_date' => '2025-10-25',
        'downloads' => 1876,
        'thumbnail' => 'KYC-Best-Practices-for-Financial-Institutions.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 7,
        'title' => 'Government Data Quality and Integrity',
        'slug' => 'government-data-quality',
        'category' => 'Government',
        'topic' => 'Data Quality',
        'description' => 'Strategies for maintaining high-quality data in government systems and ensuring data integrity for public services.',
        'pages' => 26,
        'published_date' => '2025-10-05',
        'downloads' => 987,
        'thumbnail' => 'Government-Data-Quality-and-Integrity.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 8,
        'title' => 'Credit Risk Management in 2026',
        'slug' => 'credit-risk-management',
        'category' => 'Financial Services',
        'topic' => 'Risk Management',
        'description' => 'Modern approaches to credit risk assessment, modeling, and mitigation in an evolving financial landscape.',
        'pages' => 34,
        'published_date' => '2025-09-20',
        'downloads' => 2210,
        'thumbnail' => 'Credit-Risk-Management-in-2026.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ],
    [
        'id' => 9,
        'title' => 'Telematics and Insurance: The Connected Future',
        'slug' => 'telematics-insurance',
        'category' => 'Insurance',
        'topic' => 'Technology',
        'description' => 'How telematics data is reshaping auto insurance pricing, risk assessment, and customer engagement.',
        'pages' => 22,
        'published_date' => '2025-09-01',
        'downloads' => 1345,
        'thumbnail' => 'Telematics-and-Insurance-The-Connected-Future.jpg',
        'file_url' => '/VattleyGlobal/contact/?inquiry=whitepaper',
        'featured' => false
    ]
];

// Get unique categories and topics
$categories = array_unique(array_column($whitepapers, 'category'));
$topics = array_unique(array_column($whitepapers, 'topic'));
sort($categories);
sort($topics);

include '../../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo url(''); ?>">Home</a>
            <span>/</span>
            <span>Whitepapers</span>
        </nav>
        <h1>Whitepapers & Research</h1>
        <p>In-depth insights and expert analysis on risk management, data intelligence, and industry trends</p>
    </div>
</section>

<!-- Search and Filter Bar -->
<section class="whitepapers-filters">
    <div class="container">
        <div class="filter-bar">
            <div class="filter-group search-group">
                <i class="fas fa-search"></i>
                <input type="text" class="filter-search" placeholder="Search whitepapers..." id="whitepaper-search">
            </div>
            <div class="filter-group">
                <select class="filter-select" id="category-filter">
                    <option value="">All Categories</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo strtolower(str_replace(' ', '-', $cat)); ?>">
                            <?php echo $cat; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group">
                <select class="filter-select" id="topic-filter">
                    <option value="">All Topics</option>
                    <?php foreach ($topics as $topic): ?>
                        <option value="<?php echo strtolower(str_replace(' ', '-', $topic)); ?>">
                            <?php echo $topic; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group">
                <select class="filter-select" id="sort-filter">
                    <option value="newest">Newest First</option>
                    <option value="popular">Most Popular</option>
                    <option value="title">Title A-Z</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Featured Whitepapers -->
<section class="featured-section section" style="background: var(--bg-lighter);">
    <div class="container">
        <div class="section-header">
            <h2><i class="fas fa-star"></i> Featured Whitepapers</h2>
            <p>Most popular and recently published research</p>
        </div>

        <div class="featured-grid">
            <?php foreach (array_filter($whitepapers, function($wp) { return $wp['featured']; }) as $whitepaper): ?>
                <div class="featured-card">
                    <div class="featured-card-image">
                        <img src="<?php echo ASSETS_URL; ?>/images/<?php echo rawurlencode($whitepaper['thumbnail']); ?>" alt="<?php echo htmlspecialchars($whitepaper['title']); ?>">
                        <span class="featured-badge">
                            <i class="fas fa-star"></i> Featured
                        </span>
                    </div>
                    <div class="featured-card-content">
                        <div class="whitepaper-tags">
                            <span class="tag tag-category"><?php echo $whitepaper['category']; ?></span>
                            <span class="tag tag-topic"><?php echo $whitepaper['topic']; ?></span>
                        </div>
                        <h3><?php echo $whitepaper['title']; ?></h3>
                        <p><?php echo $whitepaper['description']; ?></p>
                        <div class="whitepaper-meta">
                            <span><i class="far fa-file"></i> <?php echo $whitepaper['pages']; ?> pages</span>
                            <span><i class="far fa-calendar"></i> <?php echo date('M Y', strtotime($whitepaper['published_date'])); ?></span>
                            <span><i class="fas fa-download"></i> <?php echo number_format($whitepaper['downloads']); ?> downloads</span>
                        </div>
                        <div style="display: flex; gap: 10px;">
                            <a class="read-more-link btn btn-outline" href="<?php echo url('resources/whitepapers/' . $whitepaper['slug']); ?>" style="flex: 1;">
                                <i class="fas fa-book-open"></i>
                                Read More
                            </a>
                            <a class="contact-link btn btn-primary" href="<?php echo url('contact'); ?>" style="flex: 1;">
                                <i class="fas fa-envelope"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- All Whitepapers Grid -->
<section class="whitepapers-section section">
    <div class="container">
        <div class="section-header">
            <h2>All Whitepapers</h2>
            <p>Browse our complete collection of research and insights</p>
        </div>

        <div class="whitepapers-grid" id="whitepapers-grid">
            <?php foreach ($whitepapers as $whitepaper): ?>
                <article class="whitepaper-card"
                         data-category="<?php echo strtolower(str_replace(' ', '-', $whitepaper['category'])); ?>"
                         data-topic="<?php echo strtolower(str_replace(' ', '-', $whitepaper['topic'])); ?>"
                         data-date="<?php echo $whitepaper['published_date']; ?>"
                         data-downloads="<?php echo $whitepaper['downloads']; ?>"
                         data-title="<?php echo strtolower($whitepaper['title']); ?>">
                    <div class="whitepaper-thumbnail">
                        <img src="<?php echo ASSETS_URL; ?>/images/<?php echo rawurlencode($whitepaper['thumbnail']); ?>" alt="<?php echo htmlspecialchars($whitepaper['title']); ?>">
                        <div class="whitepaper-overlay">
<a href="<?php echo !empty($whitepaper['slug']) ? url('resources/whitepapers/' . urlencode($whitepaper['slug'])) : '#'; ?>" class="overlay-btn">
                                <i class="fas fa-eye"></i>
                                View Details
                            </a>
                        </div>
                    </div>

                    <div class="whitepaper-content">
                        <div class="whitepaper-tags">
                            <span class="tag tag-category"><?php echo $whitepaper['category']; ?></span>
                            <span class="tag tag-topic"><?php echo $whitepaper['topic']; ?></span>
                        </div>

                        <h3 class="whitepaper-title"><?php echo $whitepaper['title']; ?></h3>

                        <p class="whitepaper-description"><?php echo $whitepaper['description']; ?></p>

                        <div class="whitepaper-footer">
                            <div class="whitepaper-stats">
                                <span><i class="far fa-file"></i> <?php echo $whitepaper['pages']; ?>p</span>
                                <span><i class="fas fa-download"></i> <?php echo number_format($whitepaper['downloads']); ?></span>
                            </div>
                            <a href="<?php echo url('contact'); ?>" class="btn btn-outline btn-sm">
                                <i class="fas fa-envelope"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="no-results" id="no-results" style="display: none;">
            <i class="fas fa-search"></i>
            <h3>No whitepapers found</h3>
            <p>Try adjusting your filters or search terms</p>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="newsletter-section section">
    <div class="container">
        <div class="newsletter-content">
            <div class="newsletter-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2>Get New Whitepapers Delivered</h2>
            <p>Subscribe to receive notifications when we publish new research and insights</p>
            <form class="newsletter-form-inline" method="POST" action="<?php echo url('resources/blog/newsletter-subscribe'); ?>">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-paper-plane"></i>
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-box-content">
                <h2>Need Custom Research?</h2>
                <p>Our team of experts can provide custom research and analysis tailored to your specific needs and industry challenges.</p>
            </div>
            <div class="cta-box-action">
                <a href="<?php echo url('contact'); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i>
                    Contact Our Experts
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
    padding: 80px 0 60px;
}

.newsletter-section {
    padding: 80px 0;
    background: url(http://localhost/VattleyGlobal/assets/images/get-started.jpg) center center / cover no-repeat;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
    background-attachment: fixed;
}

.newsletter-content{
    position: relative;
    z-index: 1;
}

.newsletter-section:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--primary-dark);
    opacity: 0.6;
}



.cta-box-content {
    flex:0 0 60%;
}

.page-header h1 {
    color: white;
    font-size: 3rem;
    margin-bottom: 15px;
}

.page-header p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
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
.featured-card-content a {
    background: var(--primary-color);
    color: #fff;
    display: block;
    text-align: center;
    padding: 12px;
    border-radius: 15px;
    border: 2px solid;
}
.featured-card-content a:hover {
    background: transparent;
    border: 2px solid;
    color: var(--primary-color);
}
/* Filters */
.whitepapers-filters {
    background: white;
    padding: 30px 0;
    box-shadow: var(--shadow-sm);
    position: sticky;
    top: 80px;
    z-index: 100;
}

.filter-bar {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
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

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.section-header h2 i {
    color: var(--primary-color);
    margin-right: 10px;
}

.section-header p {
    font-size: 1.15rem;
    color: var(--text-secondary);
}

/* Featured Grid */
.featured-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
    gap: 30px;
}

.featured-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    transition: var(--transition);
}

.featured-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.featured-card-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.featured-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.featured-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--accent-orange);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 5px;
}

.featured-card-content {
    padding: 30px;
}

.featured-card-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.featured-card-content p {
    margin-bottom: 20px;
    line-height: 1.7;
}

/* Whitepapers Grid */
.whitepapers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
}

.whitepaper-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.whitepaper-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

.whitepaper-thumbnail {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.whitepaper-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.whitepaper-card:hover .whitepaper-thumbnail img {
    transform: scale(1.05);
    font-size: 4rem;
    color: rgba(255,255,255,0.3);
}

.whitepaper-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: var(--transition);
}

.whitepaper-card:hover .whitepaper-overlay {
    opacity: 1;
}

.overlay-btn {
    padding: 12px 30px;
    background: white;
    color: var(--primary-color);
    border-radius: 8px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
}

.overlay-btn:hover {
    transform: scale(1.05);
}

.whitepaper-content {
    padding: 25px;
}

.whitepaper-tags {
    display: flex;
    gap: 8px;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.tag {
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.tag-category {
    background: #E3F2FD;
    color: #1976D2;
}

.tag-topic {
    background: #F3E5F5;
    color: #7B1FA2;
}

.whitepaper-title {
    font-size: 1.2rem;
    margin-bottom: 12px;
    color: var(--text-primary);
    line-height: 1.4;
}

.whitepaper-description {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

.whitepaper-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid var(--border-light);
    font-size: 0.85rem;
    color: var(--text-secondary);
    flex-wrap: wrap;
}

.whitepaper-meta i {
    margin-right: 5px;
    color: var(--primary-color);
}

.whitepaper-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.whitepaper-stats {
    display: flex;
    gap: 15px;
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.whitepaper-stats i {
    margin-right: 5px;
}

.btn-sm {
    padding: 8px 20px;
    font-size: 0.9rem;
}

/* No Results */
.no-results {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 12px;
}

.no-results i {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 20px;
}

.no-results h3 {
    margin-bottom: 10px;
}

/* Newsletter Section */
/* .newsletter-section {
    text-align: center;
    padding: 80px 0;
} */

.newsletter-icon {
    font-size: 4rem;
    color: white;
    margin-bottom: 20px;
}

.newsletter-content h2 {
    color: white;
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.newsletter-content p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.newsletter-form-inline {
    display: flex;
    gap: 15px;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-form-inline input {
    flex: 1;
    padding: 15px 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 1rem;
}

.newsletter-form-inline input::placeholder {
    color: rgba(255,255,255,0.7);
}

.newsletter-form-inline button {
    padding: 15px 30px;
}

/* CTA Box */
.cta-box {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: var(--shadow-md);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
}

.cta-box-content h2 {
    margin-bottom: 10px;
}

.cta-box-content p {
    margin: 0;
    font-size: 1.1rem;
}

/* Responsive */
@media (max-width: 992px) {
    .filter-bar {
        grid-template-columns: 1fr 1fr;
    }

    .featured-grid {
        grid-template-columns: 1fr;
    }

    .whitepapers-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    }
}

@media (max-width: 768px) {
    .page-header h1 {
        font-size: 2.2rem;
    }

    .filter-bar {
        grid-template-columns: 1fr;
    }

    .whitepapers-grid {
        grid-template-columns: 1fr;
    }

    .newsletter-form-inline {
        flex-direction: column;
    }

    .cta-box {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }
}
</style>

<script>
// Simple filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('whitepaper-search');
    const categoryFilter = document.getElementById('category-filter');
    const topicFilter = document.getElementById('topic-filter');
    const cards = document.querySelectorAll('.whitepaper-card');
    const noResults = document.getElementById('no-results');

    function filterCards() {
        const searchTerm = searchInput.value.toLowerCase();
        const category = categoryFilter.value;
        const topic = topicFilter.value;
        let visibleCount = 0;

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            const cardTopic = card.getAttribute('data-topic');
            const cardText = card.textContent.toLowerCase();

            const matchesSearch = cardText.includes(searchTerm);
            const matchesCategory = !category || cardCategory === category;
            const matchesTopic = !topic || cardTopic === topic;

            if (matchesSearch && matchesCategory && matchesTopic) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    const sortFilter = document.getElementById('sort-filter');
    const grid = document.getElementById('whitepapers-grid');

    function sortCards() {
        const sortValue = sortFilter.value;
        const cardsArray = Array.from(cards);

        cardsArray.sort((a, b) => {
            if (sortValue === 'newest') {
                return (b.dataset.date || '').localeCompare(a.dataset.date || '');
            } else if (sortValue === 'popular') {
                return parseInt(b.dataset.downloads || 0) - parseInt(a.dataset.downloads || 0);
            } else if (sortValue === 'title') {
                return (a.dataset.title || '').localeCompare(b.dataset.title || '');
            }
            return 0;
        });

        cardsArray.forEach(card => grid.appendChild(card));
    }

    searchInput.addEventListener('input', filterCards);
    categoryFilter.addEventListener('change', filterCards);
    topicFilter.addEventListener('change', filterCards);
    sortFilter.addEventListener('change', function() { sortCards(); filterCards(); });
});
</script>

<?php include '../../includes/footer.php'; ?>
